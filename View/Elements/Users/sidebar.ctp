<nav>
	<header>
		<h1><?php echo __('Actions')?></h1>
	</header>
	<ul>
		<?php if (!$this->Session->check('Auth.User.id')) : ?>
			<li><?php echo $this->Html->link(__d('users', 'Login'), array('action' => 'login')); ?></li>
			<li><?php echo $this->Html->link(__d('users', 'Register an account'), array('action' => 'add')); ?></li>
		<?php else : ?>
			<li><?php echo $this->Html->link(__d('users', 'Logout'), array('action' => 'logout')); ?>
			<li><?php echo $this->Html->link(__d('users', 'My Account'), array('action' => 'edit')); ?>
		<?php endif ?>
	</ul>
</nav>