<?php
App::uses('Transacao', 'Model');

/**
 * Transacao Test Case
 *
 */
class TransacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transacao',
		'app.curso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transacao = ClassRegistry::init('Transacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transacao);

		parent::tearDown();
	}

}
