<h2>Login</h2>
<?php
  echo $this->Form->create(
    'User',
    array(
      'url' => array(
        'controller' => 'users',
        'action'     => 'login',
        '/'
      )
    )
  );
  echo $this->Form->input('email');
  echo $this->Form->input('password',array('type'=>'password'));
  echo $this->Form->end('Login');
?>