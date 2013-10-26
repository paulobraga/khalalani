<section id="content" class="container_12 clearfix" data-sort=true>
    <h1 class="grid_12">Add Company</h1>
			<?php echo $this->Form->create('Company',array(
                            'inputDefaults'=>array(
                                'label'=>false,
                                'div'=>false
                            ),
                            'class'=>'grid_12',
                            'type'=>'file'
                        ));?>
			<!--<form action="" class="grid_12">-->
				<fieldset>
					<legend>Input Fields</legend>
					<div class="row">
						<label for="f1_normal_input">
							<strong><?php echo __('Acronym');?></strong>
						</label>
						<div>
                                                    <?php echo $this->Form->input('acronym');?>
							<!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
						</div>
					</div>
					<div class="row">
						<label for="f1_normal_input">
							<strong><?php echo __('Name');?></strong>
						</label>
						<div>
                                                    <?php echo $this->Form->input('name');?>
							<!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
						</div>
					</div>
                                        <div class="row">
						<label for="f1_normal_input">
							<strong><?php echo __('Email');?></strong>
						</label>
						<div>
                                                    <?php echo $this->Form->input('email',array('type'=>'text'));?>
							<!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
						</div>
					</div>
                                        <div class="row">
						<label for="f1_normal_input">
							<strong><?php echo __('Address');?></strong>
						</label>
						<div>
                                                    <?php echo $this->Form->input('address');?>
							<!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
						</div>
					</div>
                                        <div class="row">
						<label for="f1_normal_input">
							<strong><?php echo __('Website');?></strong>
						</label>
						<div>
                                                    <?php echo $this->Form->input('website');?>
							<!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
						</div>
					</div>
                                        <div class="row">
						<label for="f1_normal_input">
							<strong><?php echo __('Categories');?></strong>
						</label>
						<div>
                                                    <?php echo $this->Form->input('Category');?>
							<!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
						</div>
					</div>
                                        <div class="row">
						<label for="f1_normal_input">
							<strong><?php echo __('logo');?></strong>
						</label>
						<div>
                                                    <?php echo $this->Form->input('logo',array('type'=>'file'));?>
							<!--<input type="text" name=f1_normal_input id=f1_normal_input />-->
						</div>
					</div>
					
				</fieldset><!-- End of fieldset -->
                                <div class="actions">
						<div class="left">
							<input type="reset" value="Cancel" />
						</div>
						<div class="right">
							<input type="submit" value="Save" name=send />
						</div>
					</div><!-- End of .actions -->
<!--</form>-->
                                <?php echo $this->Form->end();?>
</section>