<div class="attendees view">
<h2><?php echo __('Attendee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attendee['Attendee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($attendee['Attendee']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($attendee['Attendee']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone No'); ?></dt>
		<dd>
			<?php echo h($attendee['Attendee']['phone_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($attendee['Attendee']['timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendee'), array('action' => 'edit', $attendee['Attendee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendee'), array('action' => 'delete', $attendee['Attendee']['id']), null, __('Are you sure you want to delete # %s?', $attendee['Attendee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
