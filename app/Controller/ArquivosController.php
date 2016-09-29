<?php
App::uses('AppController', 'Controller');
/**
 * Arquivos Controller
 *
 * @property Arquivo $Arquivo
 * @property PaginatorComponent $Paginator
 */
class ArquivosController extends AppController {

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
		$this->layout = 'dash';
		$this->Arquivo->recursive = 0;
		$this->set('arquivos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'dash';
		if (!$this->Arquivo->exists($id)) {
			throw new NotFoundException(__('Arquivo Inválido'));
		}
		$options = array('conditions' => array('Arquivo.' . $this->Arquivo->primaryKey => $id));
		$this->set('arquivo', $this->Arquivo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
			$this->layout='dash';
		if ($this->request->is('post')) {
			$this->Arquivo->create();
			if ($this->Arquivo->save($this->request->data)) {
				$this->Session->setFlash(__('O arquivo foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O arquivo não pôde ser salvo.'));
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
		if (!$this->Arquivo->exists($id)) {
			throw new NotFoundException(__('Arquivo Inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Arquivo->save($this->request->data)) {
				$this->Session->setFlash(__('O arquivo foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O arquivo não pôde ser salvo.'));
			}
		} else {
			$options = array('conditions' => array('Arquivo.' . $this->Arquivo->primaryKey => $id));
			$this->request->data = $this->Arquivo->find('first', $options);
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
		$this->Arquivo->id = $id;
		if (!$this->Arquivo->exists()) {
			throw new NotFoundException(__('Arquivo inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Arquivo->delete()) {
			$this->Session->setFlash(__('O arquivo foi deletado.'));
		} else {
			$this->Session->setFlash(__('O arquivo não foi deletado'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
