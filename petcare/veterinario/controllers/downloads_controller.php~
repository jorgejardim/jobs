<?php

class DownloadsController extends AppController {

    var $name = 'Downloads';

    function admin_index() {
        $this->Download->recursive = 0;
        $this->set('downloads', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid download', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('download', $this->Download->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            
            $this->data['Download']['file'] = $this->Commons->name_files($this->data['Download']['arquivo']['name']);
            
            $this->Download->create();
            if ($this->Download->save($this->data)) {
                
                $upload = $this->_download($this->data['Download']['file']);
                if ($upload!='ok') {
                    $this->Session->setFlash(__($upload, true));
                    return false;
                } else {                
                    $this->Session->setFlash('Arquivo enviado com sucesso');
                    $this->redirect(array('action' => 'index'));
                }
                
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Download', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid', true) . ' ' . __('download', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Download->save($this->data)) {
                $this->Session->setFlash(__('The', true) . ' ' . __('Download', true) . ' ' . __('has been saved.', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Download', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Download->read(null, $id);
        }
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for', true) . ' ' . __('download', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Download->delete($id)) {
            $this->Session->setFlash(__('Download', true) . ' ' . __('deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Download', true) . ' ' . __('was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    private function _download($name) {

        App::import('Vendor', 'Upload', array('file' => 'class.upload'.DS.'class.upload.php'));

        if(isset($this->data['Download']['arquivo'])) {

            $handle = new upload($this->data['Download']['arquivo']);
            if ($handle->uploaded) {

                $handle->file_new_name_body   = $name;                                  // nome arquivo
                $handle->file_safe_name       = true;                                   // formata nome 
                $handle->file_overwrite       = true;                                   // sobreescreve
                
                $handle->process(ROOT . DS . APP_DIR . DS . WEBROOT_DIR . DS . 'downloads' . DS);   

                if ($handle->processed) {
                    $handle->clean();                        
                } else {
                    return $handle->error;
                }
            }
            $this->data['Download']['arquivo'] = false;
        }
        return 'ok';
    } 
}
