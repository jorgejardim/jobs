<div class="users div-centro">
    <?php echo $this->Form->create('User', array('type' => 'file', 'url' => '/'.$this->params['url']['url'])); ?>
    <fieldset>
        <legend>Meus Dados</legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('email', array('label'=>'E-mail'));
        echo $this->Form->input('password');
        ?>            
        
        <legend>Informações Pessoais</legend>
        <?php
        echo $this->Form->input('UsersData.crmv', array('label' => 'CRMV'));
	echo $this->Form->input('UsersData.clinica', array('label' => 'Clínica'));                       
	echo $this->Form->input('UsersData.birth', array('class'=>'data', 'type'=>'text', 'label'=>'Aniversário')); 
	echo $this->Form->input('UsersPhone.number.R', array(
            'label'=>'Telefone',
            'class'=>'telefone',
            'value'=>@$this->data['UsersPhone']['number']['R']));
        echo $this->Form->input('UsersPhone.number.C', array(
            'label'=>'Celular',
            'class'=>'telefone',
            'value'=>@$this->data['UsersPhone']['number']['C']));
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

    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>