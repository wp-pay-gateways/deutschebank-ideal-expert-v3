<?php

/**
 * Title: Deutsche Bank - iDEAL Expert - v3 - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2014
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_Config();

		$expected = 'https://myideal.db.com/ideal/iDealv3';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
