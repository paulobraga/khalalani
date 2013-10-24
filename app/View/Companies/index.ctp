<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="tabletools">
        <div class="left">
            <a class="open-add-company-dialog" href="javascript:void(0);"><i class="icon-plus"></i>New Company</a>
        </div>
        <div class="right">
            <a href="javascript:void(0);"><i class="icon-pencil"></i>Edit</a>
            <a href="javascript:void(0);"><i class="icon-remove"></i>Delete</a>
        </div>
    </div>
    <table class="styled dynamic full" data-filter-bar=none data-max-items-per-page=20>
        <thead>
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Website'); ?></th>
                <th><?php echo __(''); ?></th>
                <th><?php echo __(''); ?></th>
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
    </table><!-- End of table -->
</section><!-- End of #content -->
<?php echo $this->Element('dialog_add_company');?>

