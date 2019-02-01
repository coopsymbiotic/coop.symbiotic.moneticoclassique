<?php

require_once 'moneticoclassique.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function moneticoclassique_civicrm_config(&$config) {
  _moneticoclassique_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function moneticoclassique_civicrm_xmlMenu(&$files) {
  _moneticoclassique_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function moneticoclassique_civicrm_install() {
  return _moneticoclassique_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function moneticoclassique_civicrm_uninstall() {
  return _moneticoclassique_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function moneticoclassique_civicrm_enable() {
  return _moneticoclassique_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function moneticoclassique_civicrm_disable() {
  return _moneticoclassique_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function moneticoclassique_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _moneticoclassique_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function moneticoclassique_civicrm_managed(&$entities) {
  return _moneticoclassique_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 */
function moneticoclassique_civicrm_caseTypes(&$caseTypes) {
  _moneticoclassique_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_buildForm().
 *
 * Set a default value for an event price set field.
 *
 * @param string $formName
 * @param CRM_Core_Form $form
 */
function moneticoclassique_civicrm_buildForm($formName, &$form) {
  if (($formName == 'CRM_Contribute_Form_Contribution_Main')) {
    $is_cancel = CRM_Utils_Request::retrieveValue('cancel', 'Positive');
    if ($is_cancel) {
      // display an error
      CRM_Core_Session::setStatus(ts('Sorry, your transaction has failed.', ['domain' => 'coop.symbiotic.moneticoclassique']));
    }
  }

}

