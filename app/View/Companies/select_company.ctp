<?php //debug($companies);   ?>
<section id="content" class="container_12 clearfix" data-sort=true>
    <h1 class="grid_12"><?php echo __('Select Company'); ?></h1>
    <?php
    echo $this->Form->create('Company', array(
        'inputDefaults' => array(
            'label' => false,
            'div' => false
        ),
        'class' => 'grid_12 validate'
    ));
    ?>

    <fieldset class="not-on-phone">
        <legend><?php echo __('Select Company'); ?></legend>

        <div class="row">
            <label for="f2_select1">
                <strong><?php echo __('Company'); ?></strong>
                <!--<small><?php echo __('required'); ?></small>-->
            </label>
            <div class="width_full">
                <?php //echo $this->Form->input('company_id', array('class' => 'search required', 'data-placeholder' => __('Choose a Company'), 'label' => false, 'div' => false, 'empty' => '')); ?>
                <select id="UserCompanyId" name="data[User][company_id]" class="search required">
                    <option value data-description="<?php echo __('Select') ?>"><?php echo __('Company'); ?></option>
                    <?php foreach ($companies as $company): ?>
                        <option value="<?php echo $company['Company']['id']; ?>" data-description="<?php echo $company['Company']['name']; ?>" data-image="/khalalani/files/company/logo/<?php echo $company['Company']['logo_dir'] . '/' . $company['Company']['logo']; ?>"><?php echo $company['Company']['acronym']; ?></option>

                    <?php endforeach; ?>
                </select>
            </div>
        </div>

    </fieldset><!-- End of fieldset -->
    <div class="actions">
        <div class="left">
            <a href="#" class="button grey"><span><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/arrow-180.png" width=16 height=16></span><?php echo __('Back'); ?></a>
        </div>
        <div class="right">
            <input type="submit" value="<?php echo __('Next'); ?>" />
        </div>
    </div><!-- End of .actions -->
    <?php echo $this->Form->end(); ?><!-- End of form -->
</section>
<script>
//    $(document).ready(function(e) {
    $("#UserCompanyId").msDropdown();
    $('input[type=submit]').click(function() {
    });
//});

</script>