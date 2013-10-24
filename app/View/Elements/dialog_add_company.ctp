<div style="display: none;" id="dialog_add_company" title="Add Company">
    <?php
    echo $this->Form->create('Company', array('action'=>'add',
        'inputDefaults' => array(
            'label' => false,
            'div' => false
        ),
        'class'=>'full validate'
    ));
    ?>
    <div class="row">
        <label for="f1_normal_input">
            <strong><?php echo __('Acronym'); ?></strong>
        </label>
        <div>
<?php echo $this->Form->input('acronym'); ?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
        </div>
    </div>
    <div class="row">
        <label for="f1_normal_input">
            <strong><?php echo __('Name'); ?></strong>
        </label>
        <div>
<?php echo $this->Form->input('name'); ?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
        </div>
    </div>
    <div class="row">
        <label for="f1_normal_input">
            <strong><?php echo __('Email'); ?></strong>
        </label>
        <div>
<?php echo $this->Form->input('email', array('type' => 'text')); ?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
        </div>
    </div>
    <div class="row">
        <label for="f1_normal_input">
            <strong><?php echo __('Address'); ?></strong>
        </label>
        <div>
<?php echo $this->Form->input('address'); ?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
        </div>
    </div>
    <div class="row">
        <label for="f1_normal_input">
            <strong><?php echo __('Website'); ?></strong>
        </label>
        <div>
<?php echo $this->Form->input('website'); ?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
        </div>
    </div>
    <!--</form>-->
<?php echo $this->Form->end(); ?>
    <div class="actions">
        <div class="left">
            <button class="grey cancel">Cancel</button>
        </div>
        <div class="right">
            <button class="submit">Add Company</button>
        </div>
    </div>
</div>
<script>
    $$.ready(function() {
        $("#dialog_add_company").dialog({
            autoOpen: false,
            modal: true,
            width: 400,
            open: function() {
                $(this).parent().css('overflow', 'visible');
                $$.utils.forms.resize()
            }
        }).find('button.submit').click(function() {
            var $el = $(this).parents('.ui-dialog-content');
            if ($el.validate().form()) {
                $el.find('form')[0].submit();
                $el.find('form')[0].reset();
                $el.dialog('close');
            }
        }).end().find('button.cancel').click(function() {
            var $el = $(this).parents('.ui-dialog-content');
            $el.find('form')[0].reset();
            $el.dialog('close');
            ;
        });

        $(".open-add-company-dialog").click(function() {
            $("#dialog_add_company").dialog("open");
            return false;
        });
    });
</script>
<!--  End of Add Client Example Dialog -->