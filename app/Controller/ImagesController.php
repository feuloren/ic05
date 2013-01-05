<?php
App::uses('AppController', 'Controller');
/**
 * Images Controller
 *
 * @property Image $Image
 */
class ImagesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		$this->set('image', $this->Image->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
            $this->Image->create();
            $tmp = $this->request->data['Image']['path']['tmp_name'];
            $name = rand(0, 999) . '-' . $this->request->data['Image']['path']['name'];
            move_uploaded_file($tmp, APP.'webroot/imagesHome/'.$name);
            $this->request->data['Image']['path'] = $name;
			$this->Image->save($this->request->data);
            $this->redirect(array('admin'=>true, 'controller'=>'images', 'action'=>'index'));
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
            $this->Image->save($this->request->data);
		} else {
			$this->request->data = $this->Image->read(null, $id);
		}
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
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
        $path = $this->Image->findAllById($id)[0]['Image']['path'];
		if($this->Image->delete()) {
            unlink(APP.'webroot/imagesHome/'.$path);
        }
		$this->redirect(array('action' => 'index'));
	}
}
