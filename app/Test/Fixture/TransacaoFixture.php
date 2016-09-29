<?php
/**
 * TransacaoFixture
 *
 */
class TransacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome_comprador' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'email_comprador' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ddd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
		'telefone' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 9),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK__cursos' => array('column' => 'curso_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nome_comprador' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 1,
			'email_comprador' => 'Lorem ipsum dolor sit amet',
			'ddd' => 1,
			'telefone' => 1
		),
	);

}
