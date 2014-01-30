<?php
//namespace Vernum\Test;

use Vernum\Parser;

/**
 * ParserTest
 *
 * @author Thomas Schramm <schramm42@me.com>
 */
class ParserTest extends PHPUnit_Framework_TestCase
{

	/**
	 * Test the parse method
	 */
	public function testParse()
	{
		$this->assertEquals(
			array(
				"major" => 1,
				"minor" => 0,
				"patch" => 0
			),
			Parser::parse("1.0.0-dev")
		);

		$this->assertEquals(
			array(
				"major" => 0,
				"minor" => 22,
				"patch" => 9876
			),
			Parser::parse("0.022.9876-dev")
		);

		//TODO: Test for exception

	}
}
