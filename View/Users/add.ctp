<?php
/**
 * Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<section class="page-header">
	<h1><?php echo __d('users', 'Users'); ?></h1>
</section>
<article class="main">
	<?php echo $this->Form->create($model, array('class'=>'body')); ?>
		<fieldset>
			<legend>
				<?php echo __d('users', 'Add User'); ?>
			</legend>
			<?php
				echo $this->Form->input('username', array(
					'label' => __d('users', 'Username')));
				echo $this->Form->input('email', array(
					'label' => __d('users', 'E-mail (used as login)'),
					'error' => array('isValid' => __d('users', 'Must be a valid email address'),
					'isUnique' => __d('users', 'An account with that email already exists'))));
				echo $this->Form->input('password', array(
					'label' => __d('users', 'Password'),
					'type' => 'password'));
				echo $this->Form->input('temppassword', array(
					'label' => __d('users', 'Password (confirm)'),
					'type' => 'password'));
				$tosLink = $this->Html->link(__d('users', 'Terms of Service'), array('controller' => 'pages', 'action' => 'tos'));
				echo $this->Form->input('tos', array(
					'label' => __d('users', 'I have read and agreed to ') . $tosLink));
			?>
		</fieldset>
	<?php echo $this->Form->end(__d('users', 'Submit')); ?>
</article>

<aside>
<?php echo $this->element('Users/sidebar'); ?>
</aside>