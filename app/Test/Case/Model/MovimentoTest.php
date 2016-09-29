<?php
App::uses('Movimento', 'Model');

/**
 * Movimento Test Case
 *
 */
class MovimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movimento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Movimento = ClassRegistry::init('Movimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Movimento);

		parent::tearDown();
	}

}
