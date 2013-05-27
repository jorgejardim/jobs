<?php
class PagesController extends AppController {

    public $uses = array('Conteudo');   
    
    public function display() {   
        
        if(is_file(APP.'views/pages/'.$this->params['pagina'].'.ctp')) { 
            $this->{'_'.$this->params['pagina']}();
            $this->render($this->params['pagina']);            
        } else {
            $this->_conteudo($this->params['pagina']);
            $this->render('conteudo');
        }
    }
    
    /*
     * HOME
     */
    public function home() {
        
        //leed
        if(isset($this->data)) {
            $this->loadModel('Lead');
            $this->Lead->create();
            if ($this->Lead->save($this->data)) {                
                $this->set('data', $this->data['Lead']);
                
                $this->Email->to       = $this->data['Lead']['email'];
                $this->Email->subject  = 'Leed Site - Saúde Viver';
                $this->Email->template = 'obrigado_lead';
                $this->Email->send();               
                
                $this->Email->to       = 'faleconosco@saudeviver.com.br';
                $this->Email->subject  = 'Leed Site - Saúde Viver';
                $this->Email->template = 'copia_lead';
                if ( $this->Email->send() ) {
                    $this->Session->setFlash('Seus dados foram enviados com sucesso. Em breve entraremos em contato. Obrigado!');                    
                    $this->Session->write('conversao_contato', 1);
                }
            }
        }
        
        //midias
        $this->loadModel('Midia'); 
        $midias = $this->Midia->find('all', array('conditions'=>array(
                        'Midia.home' => '1'),
                        'order'=>array('Midia.created DESC'),
                        'limit'=>8));
        $this->set('midias', $midias);         
        //artigos
        $artigos = $this->Conteudo->find('all', array('conditions'=>array(
                        'Conteudo.refer' => 'artigos',
                        'Conteudo.home' => '1'),
                        'order'=>array('Conteudo.created DESC'),
                        'limit'=>8));
        $this->set('artigos', $artigos);
        //receitas
        $this->loadModel('Receita'); 
        $receitas = $this->Receita->find('all', array('conditions'=>array(
                        'Receita.home' => '1'),
                        'order'=>array('Receita.created DESC'),
                        'limit'=>8));
        $this->set('receitas', $receitas);  
        $this->set('title_for_layout', '');
    }      
    
    /*
     * ARTIGOS
     */
    private function _artigos() {
        if(isset($this->params['reference'])) {
            $this->_conteudo($this->params['reference']);                     
        } else {
            $artigos = $this->Conteudo->findAllByRefer('artigos');
            $this->set('artigos', $artigos);
            $this->set('title_for_layout', 'Artigos');
        }
    }  
    
    /*
     * SERVICOS
     */
    public function _servicos() {
        if(isset($this->params['reference'])) {
            $conteudo = $this->Conteudo->findByUrl($this->params['reference']);
            
            $rows = 4;
            $relacionados = $this->Conteudo->find('all', array('conditions'=>array(
                            'Conteudo.refer' => 'servicos',
                            'Conteudo.id !=' => '41',
                            'Conteudo.id >' => ($conteudo['Conteudo']['id']-($rows/2)),
                            'Conteudo.url !=' => $this->params['reference']),
                            'limit'=>$rows));
            $this->set('relacionados', $relacionados);  
            
        } else {
            $conteudo = $this->Conteudo->findByUrl($this->params['pagina']);            
        }
        $this->set('conteudo', $conteudo['Conteudo']);
        $this->set('title_for_layout', $conteudo['Conteudo']['title']);
    }   
    
    
    /*
     * SERVICOS
     */
    public function _noticias() {
        if(isset($this->params['reference'])) {
            $this->_conteudo($this->params['reference']);                     
        } else {
            $artigos = $this->Conteudo->findAllByRefer('noticias');
            $this->set('artigos', $artigos);
            $this->set('title_for_layout', 'Notícias');
        }
    }     
    
    /*
     * MIDIAS
     */
    public function midias() {
        $this->loadModel('Midia');
        if(isset($this->params['reference'])) {
            $midia = $this->Midia->findByUrl($this->params['reference']);
            $this->set('midia', $midia['Midia']);
            $this->set('title_for_layout', $midia['Midia']['titulo']);            
            
            $rows = 5;
            $relacionados = $this->Midia->find('all', array('conditions'=>array(
                            'Midia.id >' => ($midia['Midia']['id']-($rows/2)),
                            'Midia.url !=' => $this->params['reference']),
                            'limit'=>$rows));
            $this->set('relacionados', $relacionados);
            
        } else {
            $midias = $this->Midia->find('all');
            $this->set('midias', $midias);
            $this->set('title_for_layout', 'Na Mídia');
        }
    }     
    
    /*
     * RECEITAS
     */
    public function _receitas() {
        $this->loadModel('Receita');
        if(isset($this->params['reference'])) {
            $receita = $this->Receita->findByUrl($this->params['reference']);
            $this->set('receita', $receita['Receita']);
            $this->set('title_for_layout', $receita['Receita']['titulo']);
            
            $rows = 5;
            $relacionados = $this->Receita->find('all', array('conditions'=>array(
                            'Receita.id >' => ($receita['Receita']['id']-($rows/2)),
                            'Receita.url !=' => $this->params['reference']),
                            'limit'=>$rows));
            $this->set('relacionados', $relacionados);
            
        } else {
            $receitas = $this->Receita->find('all');
            $this->set('receitas', $receitas);
            $this->set('title_for_layout', 'Receitas');
        }
    }      
    
    /*
     * BLOG
     */
    private function _blog() {
        
    }      
    
    /*
     * CONTEUDOS
     */
    private function _conteudo($url) {
        
        $conteudo = $this->Conteudo->findByUrl($url);
        $this->set('conteudo', $conteudo['Conteudo']);
        $this->set('title_for_layout', $conteudo['Conteudo']['title']);        
                        
        $rows = 5;
        $relacionados = $this->Conteudo->find('all', array('conditions'=>array(
                        'Conteudo.refer' => $conteudo['Conteudo']['refer'],
                        'Conteudo.id >' => ($conteudo['Conteudo']['id']-($rows/2)),
                        'Conteudo.url !=' => $this->params['reference']),
                        'limit'=>$rows));
        $this->set('relacionados', $relacionados);         
    }      
}
?>