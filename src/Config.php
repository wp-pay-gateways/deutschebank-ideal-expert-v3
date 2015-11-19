<?php

/**
 * Title: Deutsche Bank - iDEAL Expert - v3 config
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_Config extends Pronamic_WP_Pay_Gateways_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://myideal.db.com/ideal/iDealv3';
	}

	public function get_certificates() {
		return array();
	}
}