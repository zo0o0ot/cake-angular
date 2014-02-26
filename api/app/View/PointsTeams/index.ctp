<div class="pointsTeams index">
	<h2><?php echo __('Points Teams'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('point_id'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pointsTeams as $pointsTeam): ?>
	<tr>
		<td><?php echo h($pointsTeam['PointsTeam']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pointsTeam['Point']['name'], array('controller' => 'points', 'action' => 'view', $pointsTeam['Point']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pointsTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $pointsTeam['Team']['id'])); ?>
		</td>
		<td><?php echo h($pointsTeam['PointsTeam']['created']); ?>&nbsp;</td>
		<td><?php echo h($pointsTeam['PointsTeam']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pointsTeam['PointsTeam']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pointsTeam['PointsTeam']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pointsTeam['PointsTeam']['id']), null, __('Are you sure you want to delete # %s?', $pointsTeam['PointsTeam']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Points Team'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>