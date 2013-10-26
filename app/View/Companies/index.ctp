<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('Companies');?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-company-dialog" href="javascript:void(0);"><i class="icon-plus"></i><?php echo __('New Company'); ?></a>
                    </div>
                    <div class="right"></div>
                </div>
                <table class="dynamic styled with-prev-next" data-table-tools='{"display":true}'>
                    <thead>
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Name'); ?></th>
                            <th><?php echo __('Website'); ?></th>
                            <th><?php echo __('Email'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($companies as $company): ?>
                            <tr class="gradeX">
                                <td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
                                <td><?php echo h($company['Company']['name']); ?>&nbsp;</td>
                                <td><?php echo h($company['Company']['website']); ?>&nbsp;</td>
                                <td><?php echo h($company['Company']['email']); ?>&nbsp;</td>
                                <td class="center">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
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

