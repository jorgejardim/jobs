<?php
class ConteudosController extends AppController {

	var $name = 'Conteudos';
        
        function admin_buscar_noticias() {
            
        }

	function admin_index($refer = null) {
            
            if($refer) {
                $this->Session->write('conteudo_refer', $refer);                     
            }            

            $this->Conteudo->recursive = 0;                
            $this->paginate = array(
                'conditions'=>array('Conteudo.refer' => $this->Session->read('conteudo_refer'))
            );                                 
            $this->set('conteudos', $this->paginate());                
	}

	function admin_view($id = null) {
            if (!$id) {
                $this->Session->setFlash(__('Invalid conteudo', true));
                $this->redirect(array('action' => 'index', '/'));
            }
            $this->set('conteudo', $this->Conteudo->read(null, $id));
	}

	function admin_add() {
            if (!empty($this->data)) {

                $this->data['Conteudo']['refer'] = $this->Session->read('conteudo_refer');
                $this->data['Conteudo']['url']   = $this->Commons->limpa_url($this->data['Conteudo']['title']);

                $this->Conteudo->create();
                if ($this->Conteudo->save($this->data)) {
                    $this->Session->setFlash(__('The conteudo has been saved', true));
                    $this->redirect(array('action' => 'index', '/'));
                } else {
                    $this->Session->setFlash(__('The conteudo could not be saved. Please, try again.', true));
                }
            }
            $this->data['Conteudo']['fonte'] =  strrchr($this->params['url']['titulo'], '-');
            
            $this->data['Conteudo']['title'] = str_replace(' '.$this->data['Conteudo']['fonte'], '', $this->params['url']['titulo']);
            $this->data['Conteudo']['link']  = $this->params['url']['link'];
            $this->data['Conteudo']['fonte'] =  str_replace('- ','',strrchr($this->params['url']['titulo'], '-'));
	}

	function admin_edit($id = null) {
            if (!$id && empty($this->data)) {
                $this->Session->setFlash(__('Invalid conteudo', true));
                $this->redirect(array('action' => 'index'));
            }
            if (!empty($this->data)) {

                $this->data['Conteudo']['url']   = $this->Commons->limpa_url($this->data['Conteudo']['title']);

                if ($this->Conteudo->save($this->data)) {
                    $this->Session->setFlash(__('The conteudo has been saved', true));
                    $this->redirect(array('action' => 'index', '/'));
                } else {
                    $this->Session->setFlash(__('The conteudo could not be saved. Please, try again.', true));
                }
            }
            if (empty($this->data)) {
                $this->data = $this->Conteudo->read(null, $id);
            }
	}

	function admin_delete($id = null) {
            if (!$id) {
                $this->Session->setFlash(__('Invalid id for conteudo', true));
                $this->redirect(array('action'=>'index', '/'));
            }
            if ($this->Conteudo->delete($id)) {
                $this->Session->setFlash(__('Conteudo deleted', true));
                $this->redirect(array('action'=>'index', '/'));
            }
            $this->Session->setFlash(__('Conteudo was not deleted', true));
            $this->redirect(array('action' => 'index', '/'));
	}
}
