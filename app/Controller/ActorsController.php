<?php
App::uses('AppController', 'Controller');
/**
 * Actors Controller
 *
 * @property Actor $Actor
 */
class ActorsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Actor->recursive = 0;
		$this->set('actors', $this->paginate());
	}


/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Actor->create();
			if ($this->Actor->save($this->request->data)) {
				$this->Session->setFlash(__('The actor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actor could not be saved. Please, try again.'));
			}
		}
		$keywords = $this->Actor->Keyword->find('list');
		$projects = $this->Actor->Project->find('list');
		$this->set(compact('keywords', 'projects'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Actor->id = $id;
		if (!$this->Actor->exists()) {
			throw new NotFoundException(__('Invalid actor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Actor->save($this->request->data)) {
				$this->Session->setFlash(__('The actor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Actor->read(null, $id);
		}
		$keywords = $this->Actor->Keyword->find('list');
		$projects = $this->Actor->Project->find('list');
		$this->set(compact('keywords', 'projects'));
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
		$this->Actor->id = $id;
		if (!$this->Actor->exists()) {
			throw new NotFoundException(__('Invalid actor'));
		}
		if ($this->Actor->delete()) {
			$this->Session->setFlash(__('Actor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
