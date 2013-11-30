<section id="content" class="container_12 clearfix" data-sort=true>
    <?php echo $this->Session->flash(); ?>
    <!--<h1 class="grid_12"><?php echo __('Add Operator'); ?></h1>-->
    <!--<div class="grid_12  center-elements">-->
    <div class="grid_8">
        <?php
        echo $this->Form->create('User', array(
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
            <h2><?php echo __('Sign Up'); ?></h2>
        </div>
        <div class="content">
            <div style="height:10px;" class="clear"></div>
            <div class="row" hidden>
                <p class="_100">
                    <?php echo $this->Form->input('Operator.company_id', array('data-placeholder' => __('Company'), 'class' => 'search', 'empty' => '')); ?>
                </p>
            </div>
            <div class="row">
                <p class="_50">
                    <?php echo $this->Form->input('PersonalDetail.first_name'); ?>
                </p>
                <p class="_50">
                    <?php echo $this->Form->input('PersonalDetail.last_name'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->input('ContactDetail.personal_email'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->input('User.password'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_100">
                    <?php echo $this->Form->input('User.password_confirmation'); ?>
                </p>
            </div>
            <div class="row">
                <p class="_50">
                    <label for="UserBirthday" class="inline add_2_points" style="top: 116px; ">Birthday</label>
                    <input name="data[PersonalDetail][birthday]" data-error-type="inline" class="required" type="date" id="UserBirthday" style="padding-left: 56px; ">
                </p>
                <p class="_50">
                    <?php echo $this->Form->input('PersonalDetail.gender', array('options' => array('1' => __('Masculine'), '2' => 'Femenine'), 'data-placeholder' => __('Select Gender'), 'class' => 'search', 'empty' => '')); ?>
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
    <!--</div>-->
</section>