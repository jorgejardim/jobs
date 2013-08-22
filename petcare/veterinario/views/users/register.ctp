<?php if($ok!='ok') { ?>

    <h2>Cadastre-se</h2>
    <div id="login" class="cadastrar">
        <?php
            echo $this->Form->create(array('action' => 'register'));    
            echo $this->Form->input('name', array('label' => 'Nome'));
            echo $this->Form->input('UsersData.crmv', array('label' => 'CRMV', 'placeholder' => 'Exemplo: sp-0000'));
            echo $this->Form->input('UsersData.cpf', array('class'=>'cpf', 'type'=>'text', 'label'=>'CPF'));
            echo $this->Form->input('UsersData.clinica', array('label' => 'Clínica'));                       
            echo $this->Form->input('email', array('label' => 'E-mail'));             
            echo $this->Form->input('UsersData.birth', array('class'=>'data', 'type'=>'text', 'label'=>'Aniversário'));
        ?>
        
        <legend>Telefones</legend>
        <?php
        echo $this->Form->input('UsersPhone.number.R', array(
            'label'=>'Telefone',
            'class'=>'telefone',
            'div'=>array('class' => 'input password required')));
        echo $this->Form->input('UsersPhone.number.C', array(
            'label'=>'Celular',
            'class'=>'telefone'));
        ?> 
        
        <legend>Endereço</legend>
        <?php
        echo $this->Form->input('UsersAddress.zipcode', array('class'=>'cep')); 
        echo $this->Form->input('UsersAddress.address', array('class'=>'endereco'));
        echo $this->Form->input('UsersAddress.number');
        echo $this->Form->input('UsersAddress.complement', array('class'=>'estado'));
        echo $this->Form->input('UsersAddress.neighborhood', array('class'=>'bairro'));
        echo $this->Form->input('UsersAddress.city', array('class'=>'cidade'));
        echo $this->Form->input('UsersAddress.state', array('class'=>'estado'));
        ?>
        
        <legend>Senha</legend>
        <?php
        echo $this->Form->input('password',array('label' => 'Senha', 'type'=>'password'));
        echo $this->Form->input('password_confirmation', array('label' => 'Confirmar Senha', 'type' => 'password', 'class'=>'no-upper', 'div'=>array('class' => 'input password required')));
        echo $this->Form->input('UsersData.accept_sms', array('label' => 'Aceita receber SMS para confirmações de eventos', 'type'=>'checkbox', 'checked'=>true));
        echo $this->Form->input('UsersData.accept_email', array('label' => 'Aceita receber informações via E-mail', 'type'=>'checkbox', 'checked'=>true));
        ?>
        
        <?php
            echo $this->Form->end('Enviar');
        ?>
    </div>
    
<?php } else { ?>
    
    <h2>Olá <?php echo $this->data['User']['name']; ?>.</h2>
    <?php echo $this->Form->create(null); ?>
            <p><strong>Sua conta foi criada com sucesso.</strong></p>
            <p>No entanto, precisamos que ela seja validada. Abra sua caixa de entrada e clique no link de ativação que enviamos no seu e-mail.</p>
    <?php echo $this->Form->end(null); ?> 
            
<?php } ?>