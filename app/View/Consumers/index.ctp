<?php //debug($consumers); ?>
<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('Consumers'); ?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-consumer-dialog" href="javascript:void(0);"><i class="icon-plus"></i><?php echo __('New Consumer'); ?></a>
                    </div>
                    <div class="right"></div>
                </div>
                <table class="dynamic styled with-prev-next" data-table-tools='{"display":true}'>
                    <thead>
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Name'); ?></th>
                            <th><?php echo __('Created'); ?></th>
                            <th><?php echo __('Modified'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($consumers as $consumer): ?>

                            <tr class="gradeX tooltip" data-gravity=nw title="<?php echo h($consumer['User']['PersonalDetail']['name']); ?>" >
                                <td><?php echo h($consumer['Consumer']['id']); ?>&nbsp;</td>
                                <td><a href="<?php echo $this->Html->url(array('action'=>'view',$consumer['Consumer']['id']));?>"><?php echo h($consumer['User']['PersonalDetail']['name']); ?></a>&nbsp;</td>
                                <td><?php echo h($consumer['Consumer']['created']); ?>&nbsp;</td>
                                <td><?php echo h($consumer['Consumer']['modified']); ?>&nbsp;</td>
                                <td class="center">
                                    <?php echo $this->Html->link(__('View'), array('controller'=>'users','action' => 'view', $consumer['User']['id'])); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consumer['Consumer']['id'])); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consumer['Consumer']['id']), null, __('Are you sure you want to delete # %s?', $consumer['Consumer']['id'])); ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->
</section>
<?php echo $this->Element('dialog_add_consumer'); ?>

