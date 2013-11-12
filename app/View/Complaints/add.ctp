<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12 profile">

        <div class="header">

            <div class="title">
                <h2><?php echo h($company['Company']['acronym']); ?></h2>
                <h3><?php echo h($company['Company']['name']); ?></h3>
            </div>
            <div class="avatar">
                <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/')); ?>
                <!--<a href="javascript:void(0);">Change</a>-->
            </div>

            <ul class="info">

                <li>
                    <a href="javascript:void(0);">
                        <strong><?php echo count($company['CompanyLike']); ?></strong>
                        <small><?php echo __('Likes'); ?></small>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <strong>5,216</strong>
                        <small><?php echo __('Views'); ?></small>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <strong><?php echo count($company['Category']); ?></strong>
                        <small><?php echo __('Categories'); ?></small>
                    </a>
                </li>

            </ul><!-- End of ul.info -->
        </div><!-- End of .header -->
    </div>
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
                <p class="_100">
                    <?php echo $this->Form->input('subject'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->input('complaint_category_id',array('class'=>'search','data-placeholder'=>__('Select a Complaint Category'),'empty'=>'')); ?>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->textarea('description', array('class' => 'editor')); ?>
                </p>
            </div>
        </div>
            <div class="actions">
                <div class="left">
                    <input type="reset" value="<?php echo __('Cancel');?>"/>
                </div>
                <div class="right">
                    <input type="submit" value="<?php echo __('Save');?>"/>
                </div>
            </div>


            <?php echo $this->Form->end(); ?>
        </div>
</section>