<?php
App::uses('AppController', 'Controller');
/**
 * Comunidades Controller
 *
 * @property Comunidade $Comunidade
 * @property PaginatorComponent $Paginator
 */
class ComunidadesController extends AppController {

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
		$this->Comunidade->recursive = 0;
		$this->set('comunidades', $this->Paginator->paginate());
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
		if (!$this->Comunidade->exists($id)) {
			throw new NotFoundException(__('Comunidade inválida'));
		}
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $id));
		$this->set('comunidade', $this->Comunidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='dash';
		if ($this->request->is('post')) {
			$this->Comunidade->create();
			if ($this->Comunidade->save($this->request->data)) {
				$this->Session->setFlash(__('Comunidade salva com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A comunidade não pôde ser salva.'));
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
		if (!$this->Comunidade->exists($id)) {
			throw new NotFoundException(__('Comunidade inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comunidade->save($this->request->data)) {
				$this->Session->setFlash(__('Comunidade salva com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A comunidade não pôde ser salva.'));
			}
		} else {
			$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $id));
			$this->request->data = $this->Comunidade->find('first', $options);
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
		$this->Comunidade->id = $id;
		if (!$this->Comunidade->exists()) {
			throw new NotFoundException(__('Comunidade inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comunidade->delete()) {
			$this->Session->setFlash(__('A comunidade foi deletada.'));
		} else {
			$this->Session->setFlash(__('A comunidade não pôde ser deletada.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
