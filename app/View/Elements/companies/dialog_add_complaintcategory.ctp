<div style="display: none;" id="dialog_add_complaintcategory" title="<?php echo __('Add Complaint Category'); ?>">
    <?php
    echo $this->Form->create('ComplaintCategory', array('action' => 'add',
        'inputDefaults' => array(
            'label' => false,
            'div' => false
        ),
        'class' => 'full validate'
    ));
    echo $this->Form->input('company_id',array('type'=>'hidden','value'=>$company_id));
    ?>
    <div class="row">
        <label for="f1_normal_input">
            <strong><?php echo __('Name'); ?></strong>
        </label>
        <div>
            <?php echo $this->Form->input('name'); ?>
                <!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
        </div>
    </div>
    <!--</form>-->
    <?php echo $this->Form->end(); ?>
    <div class="actions">
        <div class="left">
            <button class="grey cancel"><?php echo __('Cancel');?></button>
        </div>
        <div class="right">
            <button class="submit"><?php echo __('Save');?></button>
        </div>
    </div>
</div>
<script>
    $$.ready(function() {
        $("#dialog_add_complaintcategory").dialog({
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
                $el.dialog('close');
            }
        }).end().find('button.cancel').click(function() {
            var $el = $(this).parents('.ui-dialog-content');
            $el.find('form')[0].reset();
            $el.dialog('close');
            ;
        });

        $(".open-add-complaintcategory-dialog").click(function() {
            $("#dialog_add_complaintcategory").dialog("open");
            return false;
        });
    });
</script>
<!--  End of Add Client Example Dialog -->