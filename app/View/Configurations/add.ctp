<section id="content" class="container_12 clearfix" data-sort=true>
    ﻿			<h1 class="grid_12"><?php echo __('Configurations'); ?></h1>
    <?php
    echo $this->Form->create('Configuration', array(
        'action' => 'add',
        'class' => 'grid_12',
        'inputDefaults'=>array(
            'div'=>false,
            'label'=>false
        )
    ));
    ?>
    <fieldset>
        <legend><?php echo __('Add Configuration'); ?></legend>
        <div class="row">
            <label for="f1_normal_input">
                <strong><?php echo __('Maximum Opened Complaints per Consumer');?></strong>
            </label>
            <div>
                <?php echo $this->Form->input('max_opened_complaints');?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
            </div>
        </div>
        <div class="row">
            <label for="f1_normal_input">
                <strong><?php echo __('Maximum Reply Time for Complaint (Hours)');?></strong>
            </label>
            <div>
                <?php echo $this->Form->input('max_reply_time');?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
            </div>
        </div>
    </fieldset>

    <?php echo $this->Form->end(); ?>
</section>

