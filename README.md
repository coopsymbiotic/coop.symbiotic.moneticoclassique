CiviCRM Payment processor for Monetico Classique
================================================

This extension adds support to process payments using the Monetico "Classic"
or "Turnkey" payment processor.

For more information about this payment gateway, see:

* http://www.monetico.ca/en/payment-solutions/online-payment/
* http://assistance.monetico.ca/en/online-payment/classic-package

To get the latest version of this extension:  
https://github.com/coopsymbiotic/coop.symbiotic.moneticoclassique

This extension is 99% based on the CM-CIC extension by Eileen / Fuzion:  
https://github.com/eileenmcnaughton/nz.co.fuzion.cmcic  
http://www.fuzion.co.nz

The extension has been forked to adapt it to the Monetico implementation of
Desjardins.

Distributed under the terms of the GNU Affero General public license (AGPL 3).
See LICENSE.txt for details.

Installation
------------

* Enable this extension in Administer > System Settings > Manage Extensions.
* Configure the payment processor in Administer > System Settings > Payment Processors.

You must also write to Monetico support in order to set the "return interface"
(for payment notifications). The URL is in the form of:
https://example.org/civicrm/monetico

Requirements
------------

- CiviCRM >= 4.6 (4.7 recommended).

Support
-------

Please post bug reports in the issue tracker of this project on github:  
https://github.com/coopsymbiotic/coop.symbiotic.moneticoclassique

For general support questions, please post on CiviCRM's Stack Exchange:  
http://civicrm.stackexchange.com/ (tag your question with "Monetico")

Commercial support is available from Coop SymbioTIC:  
https://www.symbiotic.coop

Coop SymbioTIC is a certified Monetico/Desjardins partner and "turnkey"
provider. We provide turn-key CiviCRM hosting for non-profits in Quebec/Canada:  
http://assistance.monetico.ca/fr/partenaires

Copyright
---------

License: AGPL 3

Copyright (C) 2014-2016 Fuzion (http://www.fuzion.co.nz/)

Copyright (C) 2016 Coop SymbioTIC (https://www.symbiotic.coop/en)
