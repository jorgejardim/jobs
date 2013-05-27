<?php
class CursosController extends AppController {

	var $name = 'Cursos';
        
	function index() {
            
            //compra
            if(isset($this->params['form']['razao'])) {
                $this->data = $this->params['form'];
                $this->data['valor'] = str_replace(',','.',$this->data['valor']);
                $custom = $this->data['curso_id'].'_{id}';
                
                App::import('Helper', 'Html'); $html = new HtmlHelper();                         
                $this->data['url_notificacao'] = $html->url('/payments/notificacao/moip', true);                
                App::import('Vendor', 'moip/pagamento');
                $pag = new EnviaPagamentoMoIP;
                $res = $pag->envia($this->data, $custom);  
                
                if($res['sucesso']==1) {
                    
                    $inscricao['Inscricao']['id']           = $res['id'];
                    $inscricao['Inscricao']['id_proprio']   = $res['id_proprio'];
                    $inscricao['Inscricao']['url']          = $res['url'];
                    $inscricao['Inscricao']['razao']        = $this->data['razao'];
                    $inscricao['Inscricao']['curso_id']     = $this->data['curso_id'];
                    $inscricao['Inscricao']['valor']        = $this->data['valor'];
                    $inscricao['Inscricao']['nome']         = $this->data['pagador']['nome'];
                    $inscricao['Inscricao']['email']        = $this->data['pagador']['email'];
                    $inscricao['Inscricao']['telefone']     = $this->data['pagador']['endereco']['telefone'];
                    $inscricao['Inscricao']['profissao']    = $this->data['profissao'];
                    $inscricao['Inscricao']['como_soube']   = $this->data['como_soube'];
                    $inscricao['Inscricao']['cep']          = $this->data['pagador']['endereco']['cep'];
                    $inscricao['Inscricao']['endereco']     = $this->data['pagador']['endereco']['logradouro'];
                    $inscricao['Inscricao']['numero']       = $this->data['pagador']['endereco']['numero'];
                    $inscricao['Inscricao']['complemento']  = $this->data['pagador']['endereco']['complemento'];
                    $inscricao['Inscricao']['bairro']       = $this->data['pagador']['endereco']['bairro'];
                    $inscricao['Inscricao']['cidade']       = $this->data['pagador']['endereco']['cidade'];
                    $inscricao['Inscricao']['estado']       = $this->data['pagador']['endereco']['estado'];
                    
                    $this->loadModel('Inscricao');
                    $this->Inscricao->create();
                    if ($this->Inscricao->save($inscricao)) {                
                        $this->set('data', $inscricao['Inscricao']);

                        $this->Email->to       = $this->data['pagador']['email'];
                        $this->Email->subject  = 'Obrigado pela Compra - Saúde Viver';
                        $this->Email->template = 'obrigado_inscricao';
                        $this->Email->send();               

                        //redirect pagamento
                        $this->Session->write('redirect_pagamento', $res['url']);
                        $this->redirect('/cursos/aguarde');
                    }                    
                } else {
                    $this->Session->setFlash($res['erro']); 
                }
            }
            
            //formulario de compra
            if(isset($this->params['aguarde'])) {
                $this->set('curso', 'Aguarde...');   
                $this->set('title_for_layout', 'Aguarde...');
            //formulario de compra
            } elseif(isset($this->params['inscricao'])) {
                $curso = $this->Curso->findById($this->params['reference']);
                $this->set('curso', $curso['Curso']);   
                $this->set('title_for_layout', $curso['Curso']['titulo']);
            //informacoes do curso
            } elseif(isset($this->params['reference'])) {
                $curso = $this->Curso->findByUrl($this->params['reference']);
                $this->set('curso', $curso['Curso']);
                $this->set('title_for_layout', $curso['Curso']['titulo']);
                
                if($curso['Curso']['material_de_apoio']) {
                    $this->set('botao', 'material_de_apoio');
                } elseif($curso['Curso']['curso_online']) {
                    $this->set('botao', 'curso_online');
                } else {
                    $this->set('botao', 'cursos');
                }
            //listagem de cursos   
            } else {
                //cursos
                $cursos = $this->Curso->find('all', array('conditions'=>array(
                                'Curso.data >=' => date('Y-m-d'),
                                'Curso.curso_online <' => 1,
                                'Curso.material_de_apoio <' => 1),
                                'order'=>array('Curso.data')));                
                $this->set('cursos', $cursos);
                //cursos online
                $cursos_online = $this->Curso->find('all', array('conditions'=>array(
                                'Curso.curso_online' => 1),
                                'order'=>array('Curso.data')));                
                $this->set('cursos_online', $cursos_online);  
                //material de apoio                
                $material_de_apoio = $this->Curso->find('all', array('conditions'=>array(
                                'Curso.material_de_apoio' => 1),
                                'order'=>array('Curso.data')));                
                $this->set('material_de_apoio', $material_de_apoio);                 
            }
	}        

	function admin_index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid curso', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		$this->set('curso', $this->Curso->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
                        $this->data['Curso']['url'] = $this->Commons->limpa_url($this->data['Curso']['titulo']);
			$this->Curso->create();
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash(__('The curso has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid curso', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		if (!empty($this->data)) {
                        $this->data['Curso']['url'] = $this->Commons->limpa_url($this->data['Curso']['titulo']);
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash(__('The curso has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Curso->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for curso', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		if ($this->Curso->delete($id)) {
			$this->Session->setFlash(__('Curso deleted', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		$this->Session->setFlash(__('Curso was not deleted', true));
		$this->redirect(array('action' => 'index', '/'));
	}
}
