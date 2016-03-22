<?php

/**
 * Title: Deutsche Bank - iDEAL Expert - v3 integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.2
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id            = 'deutschebank-ideal-expert-v3';
		$this->name          = 'Deutsche Bank - iDEAL Expert (v3)';
		$this->product_url   = 'https://www.deutschebank.nl/nl/content/producten_en_services_commercial_banking_cash_management_betalen_ideal.html';
		$this->dashboard_url = 'https://myideal.db.com/ideal/logon_db.do';
		$this->provider      = 'deutschebank';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_ConfigFactory';
	}
}
