<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */


$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>

		<?php echo $this->fetch('title'); ?>
	</title>
	<!-- Assets CDN -->
	<!-- estilos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- Font awesome -->
    <script src="https://kit.fontawesome.com/2b586779e3.js" crossorigin="anonymous"></script>
	<?php
		// Assets Locais
        echo $this->Html->meta('icon');

        echo $this->Html->css('sweetalert');
        echo $this->Html->css('style');

        echo $this->Html->script('jquery.inputmask');
        echo $this->Html->script('jquery.maskMoney');
        echo $this->Html->script('sweetalert.min');
        echo $this->Html->script('main');
        echo $this->Html->script('script');
    ?>

</head>
<body>
	<div id="header" style=" border: 1px solid black; background-color: #152E3E; width: 100%; height: 50px;">
		<?php echo $this->Html->image('roit.png', ['class' => 'ml-5 img-responsive', 'alt' => 'ROIT']); ?>
	</div>
	<div id="container" class="container-fluid">
		<h5 class="ml-4 mt-2 mb-0" style="font-family: Poppins; text-align: left;"><strong>Teste Engenheiro de Software Full Stack</strong></h5>
		<p class="ml-4" style="font-size: 14px; font-family: Poppins; text-align: left; color: #0000008A;">Desenvolva no padrão MVC. Use e abuse da Orientação a Objetos</p>
		<div id="content">

			<section class="container1">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

			</section>

		</div>
		<div id="footer">

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
<?php

?>
</html>
