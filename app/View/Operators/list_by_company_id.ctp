<?php // debug($operators); ?>
<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('Operators'); ?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-operator-dialog" href="javascript:void(0);"><i class="icon-plus"></i><?php echo __('New Operator'); ?></a>
                    </div>
                    <div class="right"></div>
                </div>
                <table class="dynamic styled with-prev-next" data-table-tools='{"display":true}'>
                    <thead>
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Name'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($operators as $operator): ?>

                            <tr class="gradeX tooltip" data-gravity=nw title="<?php echo h($operator['User']['PersonalDetail']['name']); ?>" >
                                <td><?php echo h($operator['Operator']['id']); ?>&nbsp;</td>
                                <td><a href="<?php echo $this->Html->url(array('action'=>'view',$operator['Operator']['id']));?>"><?php echo h($operator['User']['PersonalDetail']['name']); ?></a>&nbsp;</td>
                                <td class="center">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $operator['Operator']['id'])); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operator['Operator']['id'])); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operator['Operator']['id']), null, __('Are you sure you want to delete # %s?', $operator['Operator']['id'])); ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->
</section>
<?php // echo $this->Element('dialog_add_operator'); ?>


