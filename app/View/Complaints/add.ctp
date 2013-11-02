<?php //debug($company);?>
<section id="content" class="container_12 clearfix" data-sort=true>
    <h1 class="grid_12"><?php echo __('Add Complaint'); ?></h1>
    <!--<form action="" class="grid_12">-->
    <div class="grid_12">
        <?php
        echo $this->Form->create('Complaint', array(
            'inputDefaults' => array(
                'label' => array('class' => 'inline add_2_points', 'style' => array('top' => '6px')),
                'div' => false,
                'data-error-type' => 'inline',
                'class' => 'required'
            ),
            'class' => 'box validate',
            'type' => 'file'
        ));
        ?>  
        <?php echo $this->Form->input('consumer_id', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.Consumer.id'))); ?>

        <div class="header">
            <h2><?php echo __('Complaint Details'); ?></h2>
        </div>
        <div class="content">
            <div style="height:10px" class="clear"></div>
            <div class="row">
                <p class="_25">
                    <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/')); ?>
                    <a href="javascript:void(0);">Change</a>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->input('subject'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->input('ComplaintCategory'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->textarea('description', array('class' => 'editor')); ?>
                </p>
            </div>
            <div class="actions">
                <div class="left">
                    <input type="reset" value="Cancel"/>
                </div>
                <div class="right">
                    <input type="submit" value="Save"/>
                </div>
            </div>


            <?php echo $this->Form->end(); ?>
        </div>
</section>

<div class="complaints form">
    <?php echo $this->Form->create('Complaint'); ?>
    <fieldset>
        <legend><?php echo __('Add Complaint'); ?></legend>
        <?php
        echo $this->Form->input('company_id');
        echo $this->Form->input('consumer_id');
        echo $this->Form->input('status');
        echo $this->Form->input('rate');
        echo $this->Form->input('review');
        echo $this->Form->input('description');
        echo $this->Form->input('privacy');
        echo $this->Form->input('allow_comments');
        echo $this->Form->input('subject');
        echo $this->Form->input('complaint_category_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Complaints'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Complaint Categories'), array('controller' => 'complaint_categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Complaint Category'), array('controller' => 'complaint_categories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Complaint Comments'), array('controller' => 'complaint_comments', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Complaint Comment'), array('controller' => 'complaint_comments', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Complaint Likes'), array('controller' => 'complaint_likes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Complaint Like'), array('controller' => 'complaint_likes', 'action' => 'add')); ?> </li>
    </ul>
</div>
