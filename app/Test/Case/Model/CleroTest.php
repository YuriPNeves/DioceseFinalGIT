<?php
App::uses('Clero', 'Model');

/**
 * Clero Test Case
 *
 */
class CleroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.clero'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clero = ClassRegistry::init('Clero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clero);

		parent::tearDown();
	}

}
