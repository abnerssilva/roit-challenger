<section>
<div id="pops"><?php echo $this->Flash->render(); ?></div>
    <div class="panel panel-signin">
        <div class="panel-body">
            <div class="logo text-center">
                <?php echo $this->Html->image('PIB2.jpg', array('class' => 'logoLogin img-responsive', 'alt' => 'PIB')); ?>
            </div>
            <br />
            <h4 class="text-center">Acesse sua conta</h4>

            <div class="mb30"></div>

            <?php echo $this->Flash->render('auth'); ?>
    		<?php echo $this->Form->create('User', array('role' => 'login'));?>
                <div class="input-group-prepend mb15">
                    <span class="input-group-addon text-center" style="width: 1%;"><i class="fas fa-user mt-3"></i></span>
                    <input name="data[User][username]" placeholder="usuário" class="form-control input-lg" maxlength="50" type="text" id="UserUsername">
                </div>
                <div class="input-group-prepend mb15">
                    <span class="input-group-addon text-center" style="width: 1%;"><i class="fas fa-lock mt-3"></i></span>
                    <input name="data[User][password]" placeholder="Senha" style="width: 100%;" class="form-control input-lg" type="password" id="UserPassword">
                </div>

                <div class="clearfix">
                    <div class="pull-left">
                    <a class="btn btn-success float-left" href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'add')); ?>"><i class="fa fa-angle-left mr5"></i> Cadastre-se</a>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-success float-right">Acessar o sistema <i class="fa fa-angle-right ml5"></i></button>
                    </div>
                </div>
            <?php echo $this->Form->end();?>

        </div>
    </div><!-- panel -->

</section>
