<section id="content" class="container_12 clearfix" data-sort=true>
    <h1 class="grid_12">Add Company</h1>
    <!--<form action="" class="grid_12">-->
    <div class="grid_12">
        <?php
        echo $this->Form->create('Company', array(
            'inputDefaults' => array(
                'label' => array('class' => 'inline add_2_points', 'style' => array('top' => '6px')),
                'div' => false,
                'data-error-type' => 'inline',
                'class' => 'required'
            ),
            'class' => 'box validate',
            'type' => 'file'
        ));
        echo $this->Form->input('id');
        ?>
        <div class="header">
            <h2><?php echo __('Company Details'); ?></h2>
        </div>
        <div class="content">
            <div style="height:10px" class="clear"></div>
            <div class="row">
                <p class="_25">
                    <?php echo $this->Form->input('acronym'); ?>
                </p>
                <p class="_75">
                    <?php echo $this->Form->input('name'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_25">
                    <?php echo $this->Form->input('country_id', array('data-placeholder' => __('Country'), 'class' => 'search', 'empty' => '')); ?>
                </p>
                <p class="_25">
                    <?php echo $this->Form->input('province_id', array('data-placeholder' => __('Province'), 'class' => 'search', 'empty' => '')); ?>
                </p>
                <p class="_25">
                    <?php echo $this->Form->input('city_id', array('data-placeholder' => __('City'), 'class' => 'search', 'empty' => '')); ?>
                </p>
            </div>
            <div class="row">
                <p class="_75">
                    <?php echo $this->Form->input('street_address'); ?>
                </p>
                <p class="_25">
                    <?php echo $this->Form->input('zipcode'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_50">
                    <?php echo $this->Form->input('website'); ?>
                </p>
                <p class="_50">
                    <?php echo $this->Form->input('email', array('type' => 'text')); ?>
                </p>
            </div>
            
            <div class="row">
                <p class="_50">
                    <?php echo $this->Form->input('phone'); ?>
                </p>
                <p class="_50">
                    <?php echo $this->Form->input('fax'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_50">
                    <?php echo $this->Form->input('mobile'); ?>
                </p>
                <p class="_50">
                    <?php echo $this->Form->input('logo', array('type' => 'file')); ?>
                    <?php echo $this->Form->input('logo_dir', array('type' => 'hidden')); ?>
                    <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->input('Category'); ?>
                </p>
            </div>
            <div style="height:10px" class="clear"></div>
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