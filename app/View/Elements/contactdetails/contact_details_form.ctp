
<div class="grid_12">
    <?php
    echo $this->Form->create('ContactDetail', array(
        'inputDefaults' => array(
            'label' => array('class' => 'inline add_2_points', 'style' => array('top' => '6px')),
            'div' => false,
            'data-error-type' => 'inline',
            'class' => 'required'
        ),
        'class' => 'box validate'
    ));
    ?>
    <div class="header">
        <h2><?php echo __('Contact Details'); ?></h2>
    </div>
    <div class="content">
        <div style="height:10px;" class="clear"></div>
        <div class="row">
            <p class="_25">
                <?php echo $this->Form->input('country_id',array('data-placeholder'=>__('Country'),'class'=>'search','empty'=>''));?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('province_id',array('data-placeholder'=>__('Province/State'),'class'=>'search','empty'=>''));?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('city_id',array('data-placeholder'=>__('City'),'class'=>'search','empty'=>''));?>
            </p>
        </div>
        <div class="row">
            <p class="_75">
                <?php echo $this->Form->input('address_street'); ?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('zipcode'); ?>
            </p>
        </div>
        <div class="row">
            <p class="_50">
                <?php echo $this->Form->input('home_telephone'); ?>
            </p>
            <p class="_50">
                <?php echo $this->Form->input('mobile'); ?>
            </p>
        </div>
        <div class="row">
            <p class="_50">
                <?php echo $this->Form->input('personal_email'); ?>
            </p>
            <p class="_50">
                <?php echo $this->Form->input('work_email'); ?>
            </p>
        </div>
        <div class="row">
            <p class="_50">
                <?php echo $this->Form->input('other_email'); ?>
            </p>
        </div>
        
        <div style="height:10px;" class="clear"></div>

    </div>
    <div class="actions">
        <div class="left">
            <input type="reset" value="Cancel" />
        </div>
        <div class="right">
            <input type="submit" value="Save" name=send />
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>