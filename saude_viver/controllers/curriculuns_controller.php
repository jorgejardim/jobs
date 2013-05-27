<?php
class CurriculunsController extends AppController {

	var $name = 'Curriculuns';
        
        function admin_download ($file) {
            $this->view = 'Media';
            $params = array(
                'id' => $file,
                'name' => substr($file, 0, -4),
                'download' => true,
                'extension' => substr($file, -3, 3), // must be lower case
                'path' => ROOT . DS . APP_DIR . DS . WEBROOT_DIR . DS . 'uploads' . DS . 'curriculuns' . DS
            );
            $this->set($params);
        }        

	function admin_index() {
                
                if(isset($this->data['filtrar'])) {
                    $this->Session->write('curriculum.trecho', @$this->data['trecho']);
                    $this->Session->write('curriculum.status', @$this->data['status']);
                }
                $conditions = false;
                if($this->Session->read('curriculum.trecho')) {
                    $conditions['OR'] = array(
                        'Curriculum.nome LIKE' => '%'.$this->Session->read('curriculum.trecho').'%',
                        'Curriculum.email LIKE' => '%'.$this->Session->read('curriculum.trecho').'%',
                        'Curriculum.objetivo LIKE' => '%'.$this->Session->read('curriculum.trecho').'%',
                        'Curriculum.telefone LIKE' => '%'.$this->Session->read('curriculum.trecho').'%',
                        'Curriculum.celular LIKE' => '%'.$this->Session->read('curriculum.trecho').'%',
                        'Curriculum.cidade LIKE' => '%'.$this->Session->read('curriculum.trecho').'%',
                        'Curriculum.estado LIKE' => '%'.$this->Session->read('curriculum.trecho').'%');
                    $this->data['trecho'] = $this->Session->read('curriculum.trecho');
                } if($this->Session->read('curriculum.status')) {
                    $conditions['Curriculum.status'] = $this->Session->read('curriculum.status');
                    $this->data['status'] = $this->Session->read('curriculum.status');
                }
                
		$this->Curriculum->recursive = 0;
                $this->paginate['order'] = array('Curriculum.created DESC');
		$this->set('curriculuns', $this->paginate('Curriculum', $conditions));
                $this->status();
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid curriculum', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		$this->set('curriculum', $this->Curriculum->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Curriculum->create();
			if ($this->Curriculum->save($this->data)) {
				$this->Session->setFlash(__('The curriculum has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The curriculum could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid curriculum', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		if (!empty($this->data)) {
			if ($this->Curriculum->save($this->data)) {
				$this->Session->setFlash(__('The curriculum has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The curriculum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Curriculum->read(null, $id);
		}
                $this->status();
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for curriculum', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		if ($this->Curriculum->delete($id)) {
			$this->Session->setFlash(__('Curriculum deleted', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		$this->Session->setFlash(__('Curriculum was not deleted', true));
		$this->redirect(array('action' => 'index', '/'));
	}
        
        function status() {
            
            $status[0] = 'Novo'; //Novo corriculum
            $status[1] = 'Agendado'; //Entrevista agendada
            $status[2] = 'Contratar';
            $status[3] = 'Ótima';
            $status[4] = 'Boa';
            $status[5] = 'Regular';
            $status[6] = 'Péssima';
            $status[7] = 'Faltou'; //Faltou a entrevista
            $status[8] = 'Contratada';
            $this->set('status', $status);       
            return $status;
        }
}
