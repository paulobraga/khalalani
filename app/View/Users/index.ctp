<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('Users'); ?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-user-dialog" href="javascript:void(0);"><i class="icon-plus"></i><?php echo __('New user'); ?></a>
                    </div>
                    <div class="right"></div>
                </div>
                <table class="dynamic styled with-prev-next" data-table-tools='{"display":true}'>
                    <thead>
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Username'); ?></th>
                            <th><?php echo __('Group'); ?></th>
                            <th><?php echo __('status'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr class="gradeX tooltip" data-gravity=nw title="<?php echo h($user['PersonalDetail']['first_name']); ?>" >
                                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
                                </td>
                                <td><?php echo h($user['User']['status']); ?>&nbsp;</td>

                                <td class="actions">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->
</section>
<?php echo $this->Element('dialog_add_company'); ?>
