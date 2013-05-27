<?php
class ReceitasController extends AppController {

	var $name = 'Receitas';

	function admin_index() {
		$this->Receita->recursive = 0;
		$this->set('receitas', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid receita', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		$this->set('receita', $this->Receita->read(null, $id));
                $this->categorias();
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Receita->create();
                        $this->data['Receita']['url']   = $this->Commons->limpa_url($this->data['Receita']['titulo']);
			if ($this->Receita->save($this->data)) {
				$this->Session->setFlash(__('The receita has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The receita could not be saved. Please, try again.', true));
			}
		}
                $this->categorias();
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid receita', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		if (!empty($this->data)) {
                        $this->data['Receita']['url']   = $this->Commons->limpa_url($this->data['Receita']['titulo']);
			if ($this->Receita->save($this->data)) {
				$this->Session->setFlash(__('The receita has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The receita could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Receita->read(null, $id);
		}
                $this->categorias();
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for receita', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		if ($this->Receita->delete($id)) {
			$this->Session->setFlash(__('Receita deleted', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		$this->Session->setFlash(__('Receita was not deleted', true));
		$this->redirect(array('action' => 'index', '/'));
	}
        
        private function categorias() {
                $options = array('Bebidas',
                                 'Biscoitos',
                                 'Bolos',
                                 'Carnes Brancas',
                                 'Carnes Vermelhas',
                                 'Doces',
                                 'Frutos do Mar',
                                 'Guarnições',
                                 'Massas',
                                 'Molhos',
                                 'Musses e cremes',
                                 'Pães',
                                 'Pavês',
                                 'Petiscos',
                                 'Pudins',
                                 'Saladas',
                                 'Salgados',
                                 'Sanduiches',
                                 'Sopas',
                                 'Tortas doces',
                                 'Tortas salgadas',
                                 'Entradas'); 
                asort($options);
                $this->set('categorias', $options);                                                
        }        
}



