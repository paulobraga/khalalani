<?php //debug($complaints);?>
<section id="content" class="container_12 clearfix" data-sort=true>
    <?php echo $this->Session->flash();?>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('Complaints'); ?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-complaint-dialog" href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'selectCompany'));?>"><i class="icon-plus"></i><?php echo __('New Complaint'); ?></a>
                    </div>
                    <!--<div class="right"></div>-->
                </div>
                <table class="dynamic styled with-prev-next" data-table-tools='{"display":true}'>
                    <thead>
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Subject'); ?></th>
                            <th><?php echo __('Company'); ?></th>
                            <th><?php echo __('Estado'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($complaints as $complaint): ?>

                        <tr class="gradeX tooltip" data-gravity=nw title="<?php echo strip_tags($complaint['Complaint']['description']); ?>" >
                                <td><?php echo h($complaint['Complaint']['id']); ?>&nbsp;</td>
                                <td><a href="<?php echo $this->Html->url(array('action' => 'view', $complaint['Complaint']['id']));?>"><?php echo h($complaint['Complaint']['subject']); ?>&nbsp;</a></td>
                                <td><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'view',$complaint['Company']['id']));?>"><?php echo h($complaint['Company']['name']); ?></a>&nbsp;</td>
                                <td class="center"><i style="color: <?php echo $complaint['Complaint']['status_color'];?>"><?php echo __(h($complaint['Complaint']['status_description']));?>&nbsp;</i></td>
                                
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->
</section>
<?php //echo $this->Element('dialog_add_complaint'); ?>

