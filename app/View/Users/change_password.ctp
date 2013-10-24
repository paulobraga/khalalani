<article class="module width_full">
    <header>
        <h3><?php echo __('Alterar Palavra-passe'); ?></h3>
    </header>
    <div class="module_content">
        <?php echo $this->Form->create('User'); ?>
        <table width="100%">
        <tr>
            <td width="15%"><b><?php echo __('Username'); ?></b></td>
            <td><?php echo h($user['User']['username']); ?>
                &nbsp;</td>
        </tr>
        </table>
        <?php if($role!='admin'):?>
        <fieldset>
            <?php echo $this->Form->input('current_password',
                    array('label'=>__('Antiga palavra-passe'),
                        'type'=>'password')); ?>
        </fieldset>
        <?php endif; ?>
        <fieldset>
            <?php echo $this->Form->input('password', array(
                'label'=>__('Nova palavra-passe'),
                'type'=>'password')); ?>
        </fieldset>
        <fieldset>
            <?php echo $this->Form->input('password_confirmation', array(
                'label'=>__('Confirme a Nova palavra-passe'),
                'type'=>'password')); ?>
        </fieldset>
         <?php echo $this->Form->end(__('Submit')); ?>
    </div>
</article>