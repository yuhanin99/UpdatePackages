<?php

/* +********************************************************************************
 * Terms & Conditions are placed on the: http://opensaas.pl
 * *******************************************************************************
 *  Module				: OSSMailScanner
 *  Author				: OpenSaaS Sp. z o.o. 
 *  Help/Email			: bok@opensaas.pl
 *  Website				: www.opensaas.pl
 * *******************************************************************************+ */
$languageStrings = [
    'OSSMailScanner' => 'Mail Scanner',
    'OSSMailScanner_manual' => 'Mail Scanner',
    'E-mail Accounts' => 'E-Mail Konten',
    'Action' => 'Aktion',
    'Desc' => 'Beschreibung',
    'username' => 'Benutzername',
    'mail_host' => 'Server',
    'language' => 'Sprache',
    'nazwa' => 'Funktionsname',
    'katalog' => 'Dateipfad',
    'opis' => 'Beschreibung',
    '0_created_Email' => 'Neue E-Mail erstellen',
    '3_bind_Contacts' => 'In Beziehung setzen zu Kontakten',
    '2_bind_Accounts' => 'In Beziehung setzen zu Konten',
    '4_bind_Leads' => 'In Beziehung setzen zu Leads',
    '6_bind_Potentials' => 'In Beziehung setzen zu Verkaufschancen',
    '5_bind_HelpDesk' => 'In Beziehung setzen zu HelpDesk',
    '7_bind_Project' => 'In Beziehung setzen zu Projekt',
	'8_bind_ServiceContracts' => 'In Beziehung setzen zu Servicevertrag',
    '9_bind_Campaigns' => 'In Beziehung setzen zu Kampagne',
    'created_Accounts' => 'Neues Konto erstellen',
    'created_Contacts' => 'Neuen Kontakt erstellen',
    '1_created_HelpDesk' => 'Neuen HelpDesk erstellen',
    'update_HelpDesk' => 'HelpDesk aktualisieren',
    'update_Accounts' => 'Konto aktualisieren',
    'update_Contacts' => 'Kontakt aktualisieren',
    'desc_0_created_Email' => 'E-Mail-Nachricht zum CRM hinzufügen',
    'desc_3_bind_Contacts' => 'E-Mail-Nachricht in Beziehung setzen mit dem Kontaktdatensatz, der diese E-Mail-Adresse enthält.',
    'desc_2_bind_Accounts' => 'E-Mail-Nachricht in Beziehung setzen mit dem Kontodatensatz, der diese E-Mail-Adresse enthält.',
    'desc_4_bind_Leads' => 'E-Mail-Nachricht in Beziehung setzen mit dem Leaddatensatz, der diese E-Mail-Adresse enthält.',
    'desc_6_bind_Potentials' => 'E-Mail-Nachricht in Beziehung setzen mit der Verkaufschance, der diese E-Mail-Adresse enthält.',
    'desc_5_bind_HelpDesk' => 'E-Mail-Nachricht in Beziehung setzen mit dem HelpDesk-Datensatz, der diese E-Mail-Adresse enthält.',
    'desc_7_bind_Project' => 'E-Mail-Nachricht in Beziehung setzen mit dem Projektdatensatz, der diese E-Mail-Adresse enthält.',
    'desc_8_bind_ServiceContracts' => 'E-Mail-Nachricht in Beziehung setzen mit dem Servicevertragsdatensatz, der diese E-Mail-Adresse enthält.',
    'desc_9_bind_Campaigns' => 'E-Mail-Nachricht in Beziehung setzen mit dem Kampagnendatensatz, basierend auf der Präfix Nummer im Betreff.',
    'desc_created_Accounts' => 'Kontenbeschreibung erstellen',
    'desc_created_Contacts' => 'Konatktbeschreibung erstellen',
    'desc_1_created_HelpDesk' => 'HelpDesk-Beschreibung erstellen',
    'desc_update_HelpDesk' => 'HelpDesk-Beschreibung aktualisieren',
    'desc_update_Accounts' => 'Kontenbeschreibung aktualisieren',
    'desc_update_Contacts' => 'Kontaktbeschreibung aktualisieren',
    'Folder configuration' => 'Ordnerkonfiguration',
	'Actions' => 'Aktionen',
    'MailView config' => 'Konfiguration',
    'General Configuration' => 'Allgemeine Konfiguration',
    'Search email configuration' => 'E-Mail-Suche Konfiguration',
    'Alert_no_module_title' => 'Dieses Modul wurde nicht gefunden oder ist ausgeschaltet.',
    'Alert_no_module_desc' => 'Scanner-Modul erfordert, dass das OSSMail-Modul installiert und aktiviert ist. Prüfen Sie, ob dieses Modul installiert ist, wenn nicht müssen Sie es installieren.',
    'Alert_no_accounts_title' => 'E-Mail-Konten nicht gefunden',
    'Alert_no_accounts_desc' => 'Um den E-Mail-Scanner zu aktivieren, müssen sich zuerst mit Ihrer E-Mail-Adresse im OSSMail Modul anmelden',
    'Alert_info_tab_actions' => 'Datei mit E-Mail-Aktionen befindet sich in: modules/OSSMailScanner/email_actions/',
    'Alert_no_email_acconts' => 'E-Mail-Konten nicht gefunden',
    'Alert_no_email_acconts_desc' => 'Um die Ordner zu konfigurieren, müssen Sie sich zuerst an dem gewählten E-Mail-Postfach anmelden.',
    'Alert_info_tab_email_search' => 'Wählen Sie die Felder, die verwendet werden, um nach dem E-Mail-Empfänger zu suchen.',
    'Alert_info_tab_folder' => 'Wählen Sie Ordner, die beim Herunterladen von E-Mails gescannt werden sollen.',
    'Alert_info_tab_accounts' => 'Wählen Sie, welche Aktionen für einzelne E-Mail-Konten abgerufen werden.',
    'Alert_info_tab_record_numbering' => ' Präfixe werden verwendet, um E-Mail-Nachrichten in Beziehung mit anderen Daten im CRM zu setzen. Dies funktioniert nur für Module bei denen ein Präfix gesetzt wurde. (Es ist nicht leer).',
    'Alert_active_cron' => 'Inaktive Aufgaben im CRON Terminplan.',
    'Alert_active_cron_desc' => 'Scanner-Modul-Aufgaben konnten im CRON-Zeitplan nicht gefunden werden oder eine der Aufgaben ist inaktiv. Damit der E-Mail-Scanner richtig funktioniert, müssen alle Aufgaben für das Scannermodul aktiv sein (MailScannerAction, MailScannerVerification)',
    'Alert_active_crontime' => 'Falsche Frequenz der CRON-Jobs.',
    'Alert_active_crontime_desc' => 'Aufrufhäufigkeit der "MailScannerAction"-Aufgabe sollte mindestens das Doppelte der Frequenz der "MailScannerVerification"-Aufgabe sein',
    'All_folder' => 'Alle',
    'Received' => 'Empfangen',
    'Sent' => 'Gesendet',
    'Spam' => 'Spam',
    'Trash' => 'Papierkorb',
    'Function_list' => 'Liste der Funktionen',
    'Folder_list' => 'Liste der Ordner',
    'Record Numbering' => 'Präfixe',
    'ConfigCustomRecordNumbering' => 'Nummerierungskonfiguration',
    'Module' => 'Modul',
    'Alert_scanner_not_work' => 'Kein Präfix, E-Mail-Scanner funktioniert nicht',
    'Roundcube config' => 'Roundcube Konfiguration',
    'LBL_SAVE' => 'Konfiguration speichern',
    'Spam' => 'Spam',
    'Spam' => 'Spam',
    'JS_save_info' => 'Gespeicherte Liste von Aktionen',
	'JS_saveuser_info' => 'Benutzer ist gespeichert',
    'JS_save_folder_info' => 'Gespeicherte Liste von Ordnern',
    'JS_save_fields_info' => 'Gespeicherte Feldliste',
    'JS_save_config_info' => 'Konfiguration wurde gespeichert',
    'Brak uprawnień do uruchomienia crona' => 'Keine Berechtigung, um CRON zu starten',
    'Cron' => 'CRON',
    'RunCron' => 'Starten Sie das manuelle Scannen',
    'startTime' => 'Startzeit',
    'endTime' => 'Endzeit',
    'status' => 'Status',
    'account' => 'Konto',
    'action' => 'Aktion',
    'folder' => 'Ordner',
    'count' => 'E-Mails geprüft',
    'who' => 'Benutzer',
    'OK' => 'Ok',
    'In progress' => 'In Arbeit...',
    'Error' => 'Fehler',
    'email_to_notify' => 'Benachrichtigung per E-Mail',
    'time_to_notify' => 'Benachrichtigunszeit',
    'StopCron' => 'Scannen manuell stoppen',
    'Manually stopped' => 'Manuell gestoppt',
    'stop_user' => 'Scanning gestoppt von',
	'Email_Subject' => 'Benachrichtigung: CRON läuft zu lange',
	'Email_Body' => 'Hallo<br /><br />CRON läuft zu lange. Bitte prüfen, ob das E-Mail-System korrekt funktioniert.<br /> <br /> Viele Grüße Admin',
	'Email_FromName' => 'YetiForce CRON',
    'JS_info_restart_ok' => 'CRON freigeschaltet',
    'permissions_all' => 'Sichtbar für alle',
    'permissions_vtiger' => 'Basierend auf CRM Berechtigungen',
    'permissions_user_email' => 'Basierend auf Benutzer E-Mail-Adresse',
    'Permissions' => 'Berechtigungen',
	'User' => 'Benutzer',
	'None' => 'Benutzer auswählen',
	'User list' => 'Liste der Benutzer',
    'identities_name' => 'Name der Identität', 
    'identities_adress' => 'Adresse der Identität', 
    'identities_del' => 'Identität löschen', 
    'show_identities' => 'Identitäten zeigen',
	'IMAP_ERROR' => 'Keine Verbindung zum E-Mail-Server',
	'ERROR_ACTIVE_CRON' => 'Kann nicht zum Scannen wechseln, weil CRON derzeit aktiv ist.',
	'Change ticket status' => 'Ticket Status Änderung',
   'Change_ticket_status' => 'Ticket Status aktualisieren',
   'Alert_info_conftab_change_ticket_status' => 'Diese Option erlaubt die Änderung des Ticketstatus auf "Beantwortet", wenn der Mail-Scanner eine E-Mail von einem Kunden findet, der dieses Ticket geöffnet hat.',
	'Action_DisabledModule' => 'Modul deaktivieren',
	'Action_EnabledModule' => 'Modul aktivieren',
	'Action_UpdateModule' => 'Modul aktualsieren',
	'Action_InstallModule' => 'Modul installieren',
	'Action_Bind' => 'Markierte in Beziehung setzen',
	'Action_CronMailScanner' => 'CRON - E-Mail scanning',
	'Action_CronBind' => 'CRON - in Beziehung setzen',
	'Action_ChangeType' => 'E-Mail-Typ ändern',
	'AccontDeleteOK' => 'Konto löschen',
	'No' => 'Nein',
	'LBL_MAIL_LOGS' => 'E-Mail Logbücher',
	'Group list' => 'Gruppenliste',
	'LBL_ACTIVE_MAIL' => 'Active',
	'LBL_INACTIVE_MAIL' => 'Inactive',
];
