<section id="content" class="container_12 clearfix" data-sort=true>
    <h1 class="grid_12"><?php echo __('Select User Role'); ?></h1>
    <form action="" class="grid_12">

        <fieldset class="not-on-phone">
            <legend><?php echo __('Select User Role'); ?></legend>

            <div class="row">
                <label for="f2_select1">
                    <strong><?php echo __('Role'); ?></strong>
                    <small>With search</small>
                </label>
                <div>
                    <?php echo $this->Form->input('group_id',array('class'=>'search','data-placeholder'=>'Choose a Role','label'=>false,'div'=>false,'empty'=>''));?>
<!--                    <select name=f2_select1 id=f2_select1 class="search" data-placeholder="Choose a Name">
                        <option value=""></option>
                        <option value="Oliver">Oliver</option> 
                        <option value="Jack">Jack</option> 
                        <option value="Harry">Harry</option> 
                        <option value="Alfie">Alfie</option> 
                        <option value="Charlie">Charlie</option> 
                        <option value="Thomas">Thomas</option> 
                        <option value="William">William</option> 
                        <option value="Joshua">Joshua</option> 
                        <option value="George">George</option> 
                        <option value="James">James</option> 
                        <option value="Olivia">Olivia</option> 
                        <option value="Sophie">Sophie</option> 
                        <option value="Emily">Emily</option> 
                        <option value="Lily">Lily</option> 
                        <option value="Amelia">Amelia</option> 
                        <option value="Jessica">Jessica</option> 
                        <option value="Ruby">Ruby</option> 
                        <option value="Chloe">Chloe</option> 
                        <option value="Grace">Grace</option> 
                        <option value="Evie">Evie</option> 
                    </select>-->
                </div>
            </div>

        </fieldset><!-- End of fieldset -->
    <div class="actions">
        <div class="left">
            <a href="#" class="button grey"><span><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/arrow-180.png" width=16 height=16></span>Back</a>
        </div>
        <div class="right">
            <a href="#" class="button grey"><span><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/arrow.png" width=16 height=16></span>Next</a>
        </div>
    </div><!-- End of .actions -->
    </form><!-- End of form -->
</section>