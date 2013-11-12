<div style="display: none;" id="dialog_add_category" title="<?php echo __('Add Category'); ?>">
    <?php
    echo $this->Form->create('Company', array('action' => 'edit',
        'inputDefaults' => array(
            'label' => false,
            'div' => false
        ),
        'class' => 'full validate'
    ));
    echo $this->Form->input('id');
    ?>
    <div class="row">
        <label for="f1_normal_input">
            <strong><?php echo __('Category'); ?></strong>
        </label>
        <div>
            <?php //debug($Category);?>
            <?php echo $this->Form->input('Category'); ?>
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
        $("#dialog_add_category").dialog({
            autoOpen: false,
            modal: true,
            width: 400,
            open: function() {
                $(this).parent().css('overflow', 'visible');
                $$.utils.forms.resize()
            }
        }).find('button.submit').click(function() {
            //alert('Hello');
            var $el = $(this).parents('.ui-dialog-content');
            if ($el.validate().form()) {
                $el.find('form')[0].submit();
                $el.dialog('close');
            }
        }).end().find('button.cancel').click(function() {
            var $el = $(this).parents('.ui-dialog-content');
            $el.find('form')[0].reset();
            $el.dialog('close');
            ;
        });

        $(".open-add-category-dialog").click(function() {
            $("#dialog_add_category").dialog("open");
            return false;
        });
    });
</script>
<!--  End of Add Client Example Dialog -->