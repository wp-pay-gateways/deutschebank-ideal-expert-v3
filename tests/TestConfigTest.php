<?php

/**
 * Title: Deutsche Bank - iDEAL Expert - v3 - Test config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2014
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_DeutscheBank_IDealExpertV3_TestConfig();

		$expected = null;

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
