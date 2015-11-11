<?php

class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_Integration {
	public function __construct() {
		$this->id       = 'deutschebank-ideal-expert-v3';
		$this->name     = 'Deutsche Bank - iDEAL Expert - v3';
		$this->provider = 'deutschebank';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Gateway';
	}
}
