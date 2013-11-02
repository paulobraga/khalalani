
<div class="grid_12">
    <?php
    echo $this->Form->create('EducationDetail', array(
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
        <h2><?php echo __('Education Details'); ?></h2>
    </div>
    <div class="content">
        <div style="height:10px;" class="clear"></div>
        <div class="row">
            <p class="_25">
                <?php echo $this->Form->input('level_id',array('data-placeholder'=>__('Level'),'class'=>'search','empty'=>''));?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('course_id',array('data-placeholder'=>__('Course'),'class'=>'search','empty'=>''));?>
            </p>
            <p class="_25">
                <?php echo $this->Form->input('country_id',array('data-placeholder'=>__('Country'),'class'=>'search','empty'=>''));?>
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