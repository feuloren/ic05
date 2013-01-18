<?php
App::uses('AppController', 'Controller');
/**
 * Keywords Controller
 *
 * @property Keyword $Keyword
 */
class KeywordsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Keyword->recursive = 0;
		$this->set('keywords', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Keyword->id = $id;
		if (!$this->Keyword->exists()) {
			throw new NotFoundException(__('Invalid keyword'));
		}
		$this->set('keyword', $this->Keyword->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Keyword->create();
			$this->Keyword->save($this->request->data);
			$this->redirect(array('action' => 'index'));
		}
		$actors = $this->Keyword->Actor->find('list');
		$projects = $this->Keyword->Project->find('list');
		$this->set(compact('actors', 'projects'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Keyword->id = $id;
		if (!$this->Keyword->exists()) {
			throw new NotFoundException(__('Invalid keyword'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
          $this->Keyword->save($this->request->data);
          $this->redirect(array('action' => 'index'));
		} else {
			$this->request->data = $this->Keyword->read(null, $id);
		}
		$actors = $this->Keyword->Actor->find('list');
		$projects = $this->Keyword->Project->find('list');
		$this->set(compact('actors', 'projects'));
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
		$this->Keyword->id = $id;
		if (!$this->Keyword->exists()) {
			throw new NotFoundException(__('Invalid keyword'));
		}
		$this->Keyword->delete();
		$this->redirect(array('action' => 'index'));
	}
}
