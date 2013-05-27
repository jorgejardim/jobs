<?php
class InscricoesController extends AppController {

	var $name = 'Inscricoes';

	function admin_index() {
            
                if(isset($this->data['filtrar'])) {
                    $this->Session->write('inscricao.trecho', @$this->data['trecho']);
                    $this->Session->write('inscricao.status', @$this->data['status']);
                    $this->Session->write('inscricao.curso', @$this->data['curso']);
                }
                $conditions = false;
                if($this->Session->read('inscricao.trecho')) {
                    $conditions['OR'] = array(
                        'Inscricao.id LIKE' => '%'.$this->Session->read('inscricao.trecho').'%',
                        'Inscricao.id_proprio LIKE' => '%'.$this->Session->read('inscricao.trecho').'%',
                        'Inscricao.tipo_pagamento LIKE' => '%'.$this->Session->read('inscricao.trecho').'%',
                        'Inscricao.nome LIKE' => '%'.$this->Session->read('inscricao.trecho').'%',
                        'Inscricao.email LIKE' => '%'.$this->Session->read('inscricao.trecho').'%',
                        'Inscricao.telefone LIKE' => '%'.$this->Session->read('inscricao.trecho').'%');
                    $this->data['trecho'] = $this->Session->read('inscricao.trecho');
                } if($this->Session->read('inscricao.status')) {
                    $conditions['Inscricao.status'] = $this->Session->read('inscricao.status');
                    $this->data['status'] = $this->Session->read('inscricao.status');
                } if($this->Session->read('inscricao.curso')) {
                    $conditions['Inscricao.curso_id'] = $this->Session->read('inscricao.curso');
                    $this->data['curso'] = $this->Session->read('inscricao.curso');
                }                
            
		$this->Inscricao->recursive = 0;
                $this->paginate['order'] = array('Inscricao.created DESC');
		$this->set('inscricoes', $this->paginate('Inscricao', $conditions));
                $this->status();
                
                $this->loadModel('Curso');
                $cursos = $this->Curso->find('list', array('fields'=>array(
                                                'Curso.id', 'Curso.titulo')));   
                $this->set('cursos', $cursos);
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid inscricao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscricao', $this->Inscricao->read(null, $id));
                $this->status();
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Inscricao->create();
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash(__('The inscricao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.', true));
			}
		}
		$cursos = $this->Inscricao->Curso->find('list');
		$this->set(compact('cursos'));
                $this->status();
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid inscricao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash(__('The inscricao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscricao->read(null, $id);
		}
		$cursos = $this->Inscricao->Curso->find('list');
		$this->set(compact('cursos'));
                $this->status();
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for inscricao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inscricao->delete($id)) {
			$this->Session->setFlash(__('Inscricao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inscricao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
        function status() {
            $status[0] = 'Aguardando';
            $status[1] = 'Aprovado';
            $status[3] = 'Cancelado';
            $status[4] = 'Estornado';
            $this->set('status', $status);
            return $status;            
        }
}
