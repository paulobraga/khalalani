<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('Complaint Categories'); ?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-complaintCategory-dialog" href="javascript:void(0);"><i class="icon-plus"></i><?php echo __('New ComplaintCategory'); ?></a>
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
                        <?php foreach ($complaintCategories as $complaintCategory): ?>

                            <tr class="gradeX tooltip" data-gravity=nw title="<?php echo h($complaintCategory['ComplaintCategory']['name']); ?>" >
                                <td><?php echo h($complaintCategory['ComplaintCategory']['id']); ?>&nbsp;</td>
                                <td><a href="<?php echo $this->Html->url(array('action'=>'view',$complaintCategory['ComplaintCategory']['id']));?>"><?php echo h($complaintCategory['ComplaintCategory']['name']); ?></a>&nbsp;</td>
                                <td class="center">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $complaintCategory['ComplaintCategory']['id'])); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $complaintCategory['ComplaintCategory']['id'])); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $complaintCategory['ComplaintCategory']['id']), null, __('Are you sure you want to delete # %s?', $complaintCategory['ComplaintCategory']['id'])); ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->
</section>
<?php //echo $this->Element('dialog_add_complaintCategory'); ?>

