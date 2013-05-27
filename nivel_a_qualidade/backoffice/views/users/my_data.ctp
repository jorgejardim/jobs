<div class="users div-centro">
    <?php echo $this->Form->create('User', array('type' => 'file', 'url' => '/'.$this->params['url']['url'])); ?>
    <fieldset>
        <legend>Meus Dados</legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('email', array('label'=>'E-mail'));
        echo $this->Form->input('password');
        ?>        
        
        <legend>Telefones</legend>
        <?php
        echo $this->Form->input('UsersPhone.number.R', array(
            'label'=>'Telefone Residêncial',
            'class'=>'telefone',
            'value'=>@$this->data['UsersPhone']['number']['R']));
        echo $this->Form->input('UsersPhone.number.C', array(
            'label'=>'Celular',
            'class'=>'telefone',
            'value'=>@$this->data['UsersPhone']['number']['C']));
        ?>       
        
        <legend>Informações Pessoais</legend>
        <?php
        echo $this->Form->input('UsersData.birth', array('class'=>'data', 'type'=>'text', 'label'=>'Aniversário')); 
        echo $this->Form->input('UsersData.sex', array('label'=>'Sexo', 'empty'=>true, 'options'=>array(
            'Masculino'=>'Masculino',
            'Feminino'=>'Feminino'))); 
        echo $this->Form->input('UsersData.civil_status', array('label'=>'Estado Civil', 'empty'=>true, 'options'=>array(
            'Solteiro'=>'Solteiro',
            'Casado'=>'Casado',
            'Divorciado'=>'Divorciado',
            'Viuvo'=>'Viúvo'))); 
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

        <legend><?php __('Foto'); ?></legend>
        <?php
        echo $this->Commons->foto(null, @$this->data['User']['id']);
        echo $this->Form->input('Arquivo.avatar', array('label' => 'Foto', 'type' => 'file'));
        ?>

    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>