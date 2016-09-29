<?php
App::uses('Sugestoe', 'Model');

/**
 * Sugestoe Test Case
 *
 */
class SugestoeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sugestoe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sugestoe = ClassRegistry::init('Sugestoe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sugestoe);

		parent::tearDown();
	}

}
