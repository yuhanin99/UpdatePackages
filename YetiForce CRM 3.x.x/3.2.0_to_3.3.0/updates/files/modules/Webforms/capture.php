<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ********************************************************************************** */
// Switch the working directory to base
chdir(dirname(__FILE__) . '/../..');

include_once 'include/utils/VtlibUtils.php';
include_once 'include/Webservices/Create.php';
include_once 'modules/Webforms/model/WebformsModel.php';
include_once 'modules/Webforms/model/WebformsFieldModel.php';
include_once 'include/main/WebUI.php';

class Webform_Capture
{

	public function captureNow(Vtiger_Request $request)
	{
		$currentLanguage = Vtiger_Language_Handler::getLanguage();
		$moduleLanguageStrings = Vtiger_Language_Handler::getModuleStringsFromFile($currentLanguage);
		vglobal('app_strings', $moduleLanguageStrings['languageStrings']);

		$returnURL = false;
		try {
			if (!\includes\Modules::isModuleActive('Webforms'))
				throw new Exception('webforms is not active');

			$webform = Webforms_Model::retrieveWithPublicId($request->get('publicid'));
			if (empty($webform))
				throw new Exception('Webform not found.');

			$returnURL = $webform->getReturnUrl();
			$roundrobin = $webform->getRoundrobin();

			// Retrieve user information
			$user = CRMEntity::getInstance('Users');
			$user->id = $user->getActiveAdminId();
			$user->retrieve_entity_info($user->id, 'Users');

			// Prepare the parametets
			$parameters = array();
			$webformFields = $webform->getFields();
			foreach ($webformFields as $webformField) {
				if ($webformField->getDefaultValue() != null) {
					$parameters[$webformField->getFieldName()] = decode_html($webformField->getDefaultValue());
				} else {
					$webformNeutralizedField = html_entity_decode($webformField->getNeutralizedField(), ENT_COMPAT, 'UTF-8');
					$webformNeutralizedField = $request->get($webformNeutralizedField);
					if (is_array($webformNeutralizedField)) {
						$fieldData = implode(' |##| ', $webformNeutralizedField);
					} else {
						$fieldData = $webformNeutralizedField;
						$fieldData = decode_html($fieldData);
					}

					$parameters[$webformField->getFieldName()] = stripslashes($fieldData);
				}
				if ($webformField->getRequired()) {
					if (!isset($parameters[$webformField->getFieldName()]))
						throw new Exception("Required fields not filled");
				}
			}

			if ($roundrobin) {
				$ownerId = $webform->getRoundrobinOwnerId();
				$ownerType = vtws_getOwnerType($ownerId);
				$parameters['assigned_user_id'] = vtws_getWebserviceEntityId($ownerType, $ownerId);
			} else {
				$ownerId = $webform->getOwnerId();
				$ownerType = vtws_getOwnerType($ownerId);
				$parameters['assigned_user_id'] = vtws_getWebserviceEntityId($ownerType, $ownerId);
			}

			// Create the record
			$record = vtws_create($webform->getTargetModule(), $parameters, $user);

			$this->sendResponse($returnURL, 'ok');
			return;
		} catch (Exception $e) {
			$this->sendResponse($returnURL, false, $e->getMessage());
			return;
		}
	}

	protected function sendResponse($url, $success = false, $failure = false)
	{
		if (empty($url)) {
			if ($success)
				$response = \includes\utils\Json::encode(array('success' => true, 'result' => $success));
			else
				$response = \includes\utils\Json::encode(array('success' => false, 'error' => array('message' => $failure)));

			// Support JSONP
			if (!AppRequest::isEmpty('callback')) {
				echo sprintf("%s(%s)", AppRequest::get('callback'), $response);
			} else {
				echo $response;
			}
		} else {
			$pos = strpos($url, 'http');
			if ($pos !== false) {
				header(sprintf("Location: %s?%s=%s", $url, ($success ? 'success' : 'error'), ($success ? $success : $failure)));
			} else {
				header(sprintf("Location: http://%s?%s=%s", $url, ($success ? 'success' : 'error'), ($success ? $success : $failure)));
			}
		}
	}
}

// NOTE: Take care of stripping slashes...
$webformCapture = new Webform_Capture();
$webformCapture->captureNow(AppRequest::init());