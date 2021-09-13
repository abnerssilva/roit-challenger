<section class="container1">
    <div class="users form">
    <?php echo $this->Form->create('User');?>
        <fieldset>
            <legend class="text-center"><strong><em><?php echo __('Adicionar usuário'); ?></em></strong></legend>
            <?php

                echo "<div class='form-group'>";
                echo $this->Form->input('membro_id',array('class' => 'form-control', 'type' => 'text', 'autocomplete' => 'off', 'label' => 'ID de Membro:'));
                echo "</div>";

                echo "<div class='form-group'>";
                echo $this->Form->input('username',array('class' => 'form-control', 'autocomplete' => 'off', 'label' => 'Usuário:'));
                echo "</div>";

                echo "<div class='form-group'>";
                echo $this->Form->input('password',array('class' => 'form-control', 'autocomplete' => 'off','label' => 'Senha:'));
                echo "</div>";

                echo "<div class='form-group'>";
                echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome Completo:'));
                echo "</div>";

                echo "<div class='form-group'>";
                    echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email do usuário:'));
                echo "</div>";

                echo "<div class='form-group'>";
                echo $this->Form->input('perfil_id', array(
                    'label' => 'Perfil de Responsabilidade',
                    'id' => 'perfil',
                    'empty' => 'Selecione uma Opção',
                    'options' => $listaPerfis,                   
                    'class' => 'form-control list-group',
                ));
                echo "</div>";

            ?>
        </fieldset>
        <button type="submit" class="btn btn-success btn-sm float-right">Criar Usuário</button>
    </form>
    </div>
</section>  
    

