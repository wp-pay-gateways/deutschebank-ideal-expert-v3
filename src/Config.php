<?php

/**
 * Title: Deutsche Bank - iDEAL Expert - v3 config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_Config extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config {
	public function get_payment_server_url() {
		return 'https://myideal.db.com/ideal/iDealv3';
	}

	public function get_certificates() {
		return array();
	}
}
