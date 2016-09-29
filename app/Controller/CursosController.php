<?php
App::uses('AppController', 'Controller');
/**
 * Cursos Controller
 *
 * @property Curso $Curso
 * @property PaginatorComponent $Paginator
 */
class CursosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session', 'PagSeguro.PagSeguro', 'PagSeguro.Checkout', 'PagSeguro.RetornoPagSeguro');
     
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'dash';
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->Paginator->paginate());
		$this->Checkout->defineCredenciais('diocesecorumba@gmail.com', 'FC6CACB7425D48E69AA37D14E9D554E7');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='dash';
		if (!$this->Curso->exists($id)) {
			throw new NotFoundException(__('Curso inválido'));
		}
		$options = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $id));
		$this->set('curso', $this->Curso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='dash';
		if ($this->request->is('post')) {
			$this->Curso->create();
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('Curso salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O curso não pôde ser salvo.'));
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
		if (!$this->Curso->exists($id)) {
			throw new NotFoundException(__('Curso inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('Curso salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O curso não pôde ser editado.'));
			}
		} else {
			$options = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $id));
			$this->request->data = $this->Curso->find('first', $options);
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
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Curso inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Curso->delete()) {
			$this->Session->setFlash(__('O curso foi deletado.'));
		} else {
			$this->Session->setFlash(__('O curso não pôde ser deletado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
