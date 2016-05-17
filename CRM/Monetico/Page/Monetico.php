<?php

class CRM_Monetico_Page_Monetico extends CRM_Core_Page {
  function run() {
    /**
     * NEEDS REVIEW
     *
     * The CMC_IC extension used this class to generate a mini-form,
     * which Monetico does not seem to support. Using this instead to
     * declare a webhook and process the IPN.
     *
     * CiviCRM normally has another entry-point to validate IPNs,
     * but could not understand the documentation on the issue.
     */

    $ipn = new CRM_Core_Payment_MoneticoIPN(array_merge($_REQUEST, array('exit_mode' => TRUE)));
    $ipn->main();

    die();
  }

}
