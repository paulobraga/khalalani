<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('MaritalStatuses'); ?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-maritalStatus-dialog" href="javascript:void(0);"><i class="icon-plus"></i><?php echo __('New MaritalStatus'); ?></a>
                    </div>
                    <div class="right"></div>
                </div>
                <table class="dynamic styled with-prev-next" data-table-tools='{"display":true}'>
                    <thead>
                        <tr>
                            <th><?php echo __('id'); ?></th>
                            <th><?php echo __('name'); ?></th>
                            <th><?php echo __('created'); ?></th>
                            <th><?php echo __('modified'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($maritalStatuses as $maritalStatus): ?>
                            <tr>
                                <td><?php echo h($maritalStatus['MaritalStatus']['id']); ?>&nbsp;</td>
                                <td><?php echo h($maritalStatus['MaritalStatus']['name']); ?>&nbsp;</td>
                                <td><?php echo h($maritalStatus['MaritalStatus']['created']); ?>&nbsp;</td>
                                <td><?php echo h($maritalStatus['MaritalStatus']['modified']); ?>&nbsp;</td>
                                <td class="center">
                                    <a href="<?php echo $this->Html->url(array('action' => 'edit', $maritalStatus['MaritalStatus']['id']));?>" class="button small grey tooltip" data-gravity=s title="Edit"><i class="icon-pencil"></i></a>
                                    <?php echo $this->Form->postLink('<i class="icon-remove"></i>', array('action' => 'delete', $maritalStatus['MaritalStatus']['id']), array('class'=>'button small grey tooltip','data-gravity'=>'s','title'=>'Remove','escape'=>false), __('Are you sure you want to delete # %s?', $maritalStatus['MaritalStatus']['id'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->
</section>
<?php echo $this->Element('dialog_add_maritalStatus'); ?>
