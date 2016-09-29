<?php
App::uses('Comunidade', 'Model');

/**
 * Comunidade Test Case
 *
 */
class ComunidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comunidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comunidade = ClassRegistry::init('Comunidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comunidade);

		parent::tearDown();
	}

}
