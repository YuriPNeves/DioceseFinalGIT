<?php
App::uses('AppController', 'Controller');
/**
 * Transacaos Controller
 *
 * @property Transacao $Transacao
 * @property PaginatorComponent $Paginator
 */
class TransacaosController extends AppController {



/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session','PagSeguro.PagSeguro', 'PagSeguro.Checkout', 'PagSeguro.Notificacao', 'PagSeguro.Consulta', 'PagSeguro.RetornoPagSeguro');
	
/**
 * index method
 *
 * @return void
 */
	
	public function index() {
		$this->layout='dash';
		$this->Transacao->recursive = 0;
		$this->set('transacaos', $this->Paginator->paginate());
	}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
		public function checkout($data) {
			$this->loadModel('Curso');
			$conditions = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $data['Transacao']['curso_id']));
			$this->Curso->unbindModel(
                array('hasMany' => array('transacao'))
            );
			$curso = $this->Curso->find('first', $conditions);
			$this->Checkout->adicionarItem($curso['Curso']['id'], $curso['Curso']['nome'], $curso['Curso']['valor'], 0);

            $this->Checkout->defineContatosComprador($data['Transacao']['nome_comprador'], $data['Transacao']['email_comprador'], $data['Transacao']['ddd'], $data['Transacao']['telefone']);
               
			$this->Checkout->defineTipoPagamento(
                PagSeguroTiposPagamento::tipodePagamentoEmString(
                     PagSeguroTiposPagamento::TIPO_PAGAMENTO_BOLETO
                )
            );
                
                
            if ($result = $this->Checkout->finalizaCompra() ) {
                $this->redirect($result);
            }
        }
		
	public function view($id = null) {
		$this->layout='dash';
		if (!$this->Transacao->exists($id)) {
			throw new NotFoundException(__('Transação inválida'));
		}
		$options = array('conditions' => array('Transacao.' . $this->Transacao->primaryKey => $id));
		$this->set('transacao', $this->Transacao->find('first', $options));
	}
	
	
	
	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'index';
		if ($this->request->is('post')) {
			
			$this->Transacao->create();
			
			if ($this->Transacao->save($this->request->data)) {	
				$this->Session->setFlash(__("A Transacao foi salva com sucesso"));
				$this->checkout($this->request->data);
				return $this->redirect(array('action' => 'index'));
				
			} else {
				$this->Session->setFlash(__('A transação não pôde ser completada'));
			}
			}
			$this->loadModel('Curso');
			$cursos = $this->Curso->find('list', array('fields' => array('id', 'Nome')));
			$this->set(compact('cursos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Transacao->exists($id)) {
			throw new NotFoundException(__('Transação inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transacao->save($this->request->data)) {
				$this->Session->setFlash(__('Transação salva com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A transação não pôde ser salva'));
			}
		} else {
			$options = array('conditions' => array('Transacao.' . $this->Transacao->primaryKey => $id));
			$this->request->data = $this->Transacao->find('first', $options);
		}
		$this->loadModel('Curso');
			$cursos = $this->Curso->find('list', array('fields' => array('id', 'Nome')));
			$this->set(compact('cursos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Transacao->id = $id;
		if (!$this->Transacao->exists()) {
			throw new NotFoundException(__('Transação inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Transacao->delete()) {
			$this->Session->setFlash(__('A transação foi deletada com sucesso.'));
		} else {
			$this->Session->setFlash(__('A transação não pôde ser deletada.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
