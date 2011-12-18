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
<header class="page-header">
	<h1><?php echo __d('users', 'Login'); ?></h1>
</header>
<article>
	<?php echo $this->Session->flash('auth'); ?>
	<fieldset>
		<legend><?php echo __d('users', 'Login'); ?></legend>
		<?php
			echo $this->Form->create($model, array(
				'action' => 'login',
				'id' => 'LoginForm'));
			echo $this->Form->input('email', array(
				'label' => __d('users', 'Email')));
			echo $this->Form->input('password',  array(
				'label' => __d('users', 'Password')));

			echo $this->Form->input('remember_me',  array(
				'type'  => 'checkbox',
				'label' => __d('users', 'Remember Me')));
			
			echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';

			echo $this->Form->hidden('User.return_to', array(
				'value' => $return_to));
			echo $this->Form->end(__d('users', 'Login'));
		?>
	</fieldset>
</article>

<?php echo $this->element('Users/sidebar'); ?>