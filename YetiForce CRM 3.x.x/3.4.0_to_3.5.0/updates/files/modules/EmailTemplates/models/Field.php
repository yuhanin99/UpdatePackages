<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class EmailTemplates_Field_Model extends Vtiger_Field_Model
{

	/**
	 * Function to check if the field is named field of the module
	 * @return boolean - True/False
	 */
	public function isNameField()
	{
		return false;
	}
}
