
<div class="grid_12">
    <?php
    echo $this->Form->create('PersonalDetail', array(
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
        <h2><?php echo __('Personal Details'); ?></h2>
    </div>
    <div class="content">
        <div style="height:10px;" class="clear"></div>
        <div class="row">
            <p class="_25">
                <?php echo $this->Form->input('first_name'); ?>
            </p>
            <p class="_50">
                <?php echo $this->Form->input('middle_name'); ?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('last_name'); ?>
            </p>
        </div>
        <div class="row">
            <p class="_25">
                <?php echo $this->Form->input('gender', array('options' => array('1' => __('Masculine'), '2' => 'Femenine'), 'data-placeholder' => __('Select Gender'),'class'=>'search','empty'=>'')); ?>
            </p>
            <p class="_25">
                <label for="UserBirthday" class="inline add_2_points" style="top: 116px; ">Birthday</label>
                <input name="data[User][birthday]" data-error-type="inline" class="required" type="date" id="UserBirthday" style="padding-left: 56px; ">
            </p>
            <p class="_25">
               <?php echo $this->Form->input('marital_status_id',array('data-placeholder'=>__('Select a Marital Status'),'class'=>'search','empty'=>''));?> 
            </p>
            <p class="_25">
                <?php echo $this->Form->input('nationality_id',array('data-placeholder'=>__('Select Your Nationality'),'class'=>'search','empty'=>''));?>
            </p>
        </div>
        <div class="row">
            <p class="_25">
                <?php echo $this->Form->input('country_id',array('data-placeholder'=>__('Born Country'),'class'=>'search','empty'=>''));?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('province_id',array('data-placeholder'=>__('Born Province/State'),'class'=>'search','empty'=>''));?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('city_id',array('data-placeholder'=>__('Born City'),'class'=>'search','empty'=>''));?>
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