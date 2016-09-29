<?php
App::uses('AppController', 'Controller');
/**
 * Cleros Controller
 *
 * @property Clero $Clero
 * @property PaginatorComponent $Paginator
 */
class ClerosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'index';
		$this->Clero->recursive = 0;
		$this->set('cleros', $this->Paginator->paginate());
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
		if (!$this->Clero->exists($id)) {
			throw new NotFoundException(__('Clero inválido'));
		}
		$options = array('conditions' => array('Clero.' . $this->Clero->primaryKey => $id));
		$this->set('clero', $this->Clero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'dash';
		if ($this->request->is('post')) {
			$this->Clero->create();
			if ($this->Clero->save($this->request->data)) {
				$this->Session->setFlash(__('Salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo.'));
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
		if (!$this->Clero->exists($id)) {
			throw new NotFoundException(__('Clero inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Clero->save($this->request->data)) {
				$this->Session->setFlash(__('Salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo.'));
			}
		} else {
			$options = array('conditions' => array('Clero.' . $this->Clero->primaryKey => $id));
			$this->request->data = $this->Clero->find('first', $options);
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
		$this->Clero->id = $id;
		if (!$this->Clero->exists()) {
			throw new NotFoundException(__('Clero inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Clero->delete()) {
			$this->Session->setFlash(__('Salvo com sucesso.'));
		} else {
			$this->Session->setFlash(__('Não pôde ser salvo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
