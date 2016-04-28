<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC/Hook+Reference
return array (
  0 =>
  array (
    'name' => 'monetico',
    'entity' => 'PaymentProcessorType',
    'params' =>
    array (
      'version' => 3,
      'name' => 'monetico',
      'title' => 'Monetico',
      'description' => 'Monetico (Desjardins)',
      'user_name_label' => 'POS terminal number (TPE)',
      'password_label' => 'Merchant security key',
      'signature_label' => 'Site code (société)',
      'subject_label' => 'algorithm - defaults to sha1',
      'class_name' => 'Payment_Monetico',
      'billing_mode' => 4,
      'url_site_default' => 'https://p.monetico-services.com/test/paiement.cgi',
    ),
  ),
);
