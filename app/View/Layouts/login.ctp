<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>PIB</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('animate.delay');
		echo $this->Html->css('animate.min');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-override');
		echo $this->Html->css('bootstrap-theme');
		echo $this->Html->css('morris');
		echo $this->Html->css('pagination');
		echo $this->Html->css('select2');
		echo $this->Html->css('style.default');
		echo $this->Html->css('sweetalert');
		echo $this->Html->css('toggles');
		echo $this->Html->css('pace');
		echo $this->Html->css('jquery-ui-1.10.3');
		echo $this->Html->css('login');
		echo $this->Html->css('style');
	?>
		<!-- Font awesome -->
		<script src="https://kit.fontawesome.com/2b586779e3.js" crossorigin="anonymous"></script>
	<?php

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="signin">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>


	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
