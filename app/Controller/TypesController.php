<?php
App::uses('AppController', 'Controller');
/**
 * Keywords Controller
 *
 * @property Keyword $Keyword
 */
class TypesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Type->recursive = 0;
		$this->set('types', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Type->id = $id;
		if (!$this->Type->exists()) {
			throw new NotFoundException(__('Invalid type'));
		}
		$this->set('type', $this->Type->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Type->create();
			$this->Type->save($this->request->data);
			$this->redirect(array('action' => 'index'));
		}
		$actors = $this->Type->Actor->find('list');
		$this->set(compact('actors'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Type->id = $id;
		if (!$this->Type->exists()) {
			throw new NotFoundException(__('Invalid type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
          $this->Type->save($this->request->data);
          $this->redirect(array('action' => 'index'));
		} else {
			$this->request->data = $this->Type->read(null, $id);
		}
		$actors = $this->Type->Actor->find('list');
		$this->set(compact('actors'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Type->id = $id;
		if (!$this->Type->exists()) {
			throw new NotFoundException(__('Invalid type'));
		}
		$this->Type->delete();
		$this->redirect(array('action' => 'index'));
	}
}
