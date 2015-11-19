<?php

/**
 * Title: Deutsche Bank - iDEAL Expert - v3 config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_ConfigTest extends Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_Config {
	public function get_payment_server_url() {
		return null;
	}

	public function get_certificates() {
		return array();
	}
}
