<?php
App::uses('AppController', 'Controller');
/**
 * Movimentos Controller
 *
 * @property Movimento $Movimento
 * @property PaginatorComponent $Paginator
 */
class MovimentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'index';
		$this->Movimento->recursive = 0;
		$this->set('movimentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'index';
		if (!$this->Movimento->exists($id)) {
			throw new NotFoundException(__('Movimento inválido'));
		}
		$options = array('conditions' => array('Movimento.' . $this->Movimento->primaryKey => $id));
		$this->set('movimento', $this->Movimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
	public function add() {
		$this->layout='dash';
		if ($this->request->is('post')) {
			$this->Movimento->create();
			if ($this->Movimento->save($this->request->data)) {
				$this->Session->setFlash(__('Movimento salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O movimento não pôde ser salvo.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout='dash';
		if (!$this->Movimento->exists($id)) {
			throw new NotFoundException(__('Movimento inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Movimento->save($this->request->data)) {
				$this->Session->setFlash(__('O movimento foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O movimento não pôde ser salvo.'));
			}
		} else {
			$options = array('conditions' => array('Movimento.' . $this->Movimento->primaryKey => $id));
			$this->request->data = $this->Movimento->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Movimento->id = $id;
		if (!$this->Movimento->exists()) {
			throw new NotFoundException(__('Movimento inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Movimento->delete()) {
			$this->Session->setFlash(__('Movimento deletado com sucesso.'));
		} else {
			$this->Session->setFlash(__('O movimento não pôde ser deletado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
