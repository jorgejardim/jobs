<?php
class TrabalheConoscoController extends AppController {

    var $name = 'TrabalheConosco';
    var $uses = array();

    function index() {
        
        if(isset($this->data)) {
            $this->loadModel('Curriculum');
            
            $upload = $this->_uploads();
            if($upload[0]=='ok') {
                if($upload[1])
                    $this->data['Curriculum']['curriculum'] = $upload[1]; 
            
                $this->Curriculum->create();
                if ($this->Curriculum->save($this->data)) {                
                    $this->set('data', $this->data['Curriculum']);

                    $this->Email->to          = 'jorge.testes@gmail.com';
                    $this->Email->subject     = 'Curriculum Site - Saúde Viver';
                    $this->Email->template    = 'copia_curriculum';
                    $this->Email->filePaths   = array(ROOT . DS . APP_DIR . DS . WEBROOT_DIR . DS . 'uploads' . DS . 'curriculuns' . DS); 
                    $this->Email->attachments = array($this->data['Curriculum']['curriculum']); 
                    if ( $this->Email->send() ) {
                        $this->Session->setFlash('Curriculum enviado com sucesso.');                    
                    }
                }
            } else {
                $this->Session->setFlash($upload[1], true);
            }              
        }
    }   
    
    /*
    * UPLOAD DE COMPROVANTES
    */     
    private function _uploads() {

        App::import('Vendor', 'Upload', array('file' => 'class.upload'.DS.'class.upload.php'));

        $handle = new upload($this->data['Curriculum']['curriculum']);
        if ($handle->uploaded) {

            //$handle->file_new_name_body   = md5(uniqid(rand(), true));  
            $handle->file_name_body_pre   = 'curriculum_'.time().'_';
            $handle->file_safe_name       = true;                              
            $handle->file_overwrite       = false;                                
            $handle->mime_check           = true;                                
            $handle->allowed              = array('image/*','application/*');
            $handle->mime_types = array(                                            
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'jpe' => 'image/jpeg',
                'gif' => 'image/gif',
                'png' => 'image/png',
                'bmp' => 'image/bmp',                                        
                'doc' => 'application/msword',
                'docx' => 'application/msword',
                'xls' => 'application/vnd.ms-excel',                    
                'ppt' => 'application/vnd.ms-powerpoint',
                'pps' => 'application/vnd.ms-powerpoint',                   
                'pdf' => 'application/pdf',                    
                'zip' => 'application/zip',
                'tar' => 'application/x-tar',                    
                'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            );                

            $handle->process(ROOT . DS . APP_DIR . DS . WEBROOT_DIR . DS . 'uploads' . DS . 'curriculuns' . DS);   

            if ($handle->processed) {
                return array('ok',$handle->file_dst_name);                        
            } else {
                return array('error',$handle->error);
            }                
        }
        $this->data['Curriculum']['curriculum'] = false;
    }      
}
?>