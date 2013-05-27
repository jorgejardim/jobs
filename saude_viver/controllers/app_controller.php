<?php
class AppController extends Controller {
  
    var $helpers    = array('Session', 'Javascript', 'Form', 'Html', 'Formatacao');
    var $components = array('Auth', 
                            'Session',
                            'Cookie',
                            'Commons',                            
                            'Email' => array('from' => 'Saúde Viver <faleconosco@saudeviver.com.br>',
                                             'sendAs' => 'html',
                                             'delivery' => 'smtp',
                                             'smtpOptions' => array('timeout'  => '30',
                                                                    'port'     => '465',
                                                                    'host'     => 'ssl://smtp.gmail.com',
                                                                    'username' => 'faleconosco@saudeviver.com.br',
                                                                    'password' => 'nutricao06',                                                
                                                 ))
    );  
    
    /**
    * Before Filter
    *
    * Função de callback executada antes que qualquer outra
    *
    * @access public
    * @link http://book.cakephp.org/pt/view/984/Callbacks
    */
    function beforeFilter() {  
        
        Security::setHash('md5'); // Método de Hash da senha
        $this->Auth->userModel = "User"; // Nome do modelo para os usuários
        $this->Auth->fields = array(
            'username'=>'email',    // Troque o segundo parametro se desejar
            'password'=>'password', // Troque o segundo parametro se desejar
        );
        $this->Auth->userScope = array(
            'User.active' => '1' // Permite apenas usuários ativos
        );
        $this->Auth->authorize = 'controller'; // Utiliza a função isAuthorize para autorizar os usuários
        $this->Auth->autoRedirect = true; // Redireciona o usuário para a requisição anterior que foi negada após o login
        $this->Auth->loginAction = array(
            'controller' => 'users',
            'action'     => 'login',
            'admin'      => true
        );
        $this->Auth->loginRedirect = array(
            'controller' => 'home',
            'action'     => 'home',
            'admin'      => true,
            '/'
        );
        $this->Auth->logoutRedirect = array(
            'controller' => 'pages',
            'action'     => 'home',
            'admin'      => false
        );
        $this->Auth->loginError = __('Usuário ou senha inválidos.', true);
        $this->Auth->authError  = __('Você não tem permissão para acessar.', true);
        // Libera acesso para actions sem prefixo admin
        if ( !(isset($this->params['admin'])) ) {
            $this->Auth->allow('*');
        } else {
            $this->layout = 'admin';
        }
    }
    
    /**
    * Is Authorized
    *
    * Faz a autorização do usuário
    *
    * @return boolean
    * @access public
    */
    function isAuthorized() {
        // Pode ser mais complexo antes de liberar o acesso
        return true;
    }    
}
