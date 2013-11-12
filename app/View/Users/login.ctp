<?php
$this->layout='login';
echo $this->Form->create('User', array(
    'action' => 'login',
    'class' => 'box validate',
    'inputDefaults'=>array(
        'div'=>false,
        'label'=>false
    )
    
));
?>
<div class="header">
    <h2><span class="icon icon-lock"></span><?php echo __('Login')?></h2>
</div>
<div class="content">

    <!-- Login messages -->
    <div class="login-messages">
        <div class="message welcome"><?php echo __('Welcome back!');?></div>
        <div class="message failure">Invalid credentials.</div>
    </div>

    <!-- The form -->
    <div class="form-box">
         <div class="row">
                <label for="login_name">
                    <strong><?php echo __('Username');?></strong>
                    <small><?php echo __('Or email address');?></small>
                </label>
                <div>
                    <?php echo $this->Form->input('username');?>
                    <!--<input tabindex=1 type="text" class="required noerror" name=login_name id=login_name />-->
                </div>
            </div>

            <div class="row">
                <label for="login_pw">
                    <strong><?php echo __('Password');?></strong>
                    <small><a href="javascript:void(0);" id="">Forgot it?</a></small>
                </label>
                <div>
                    <?php echo $this->Form->input('password');?>
                    <!--<input tabindex=2 type="password" class="required noerror" name=login_pw id=login_pw />-->
                </div>
            </div>
    </div><!-- End of .form-box -->

</div><!-- End of .content -->
    <div class="actions">
        <div class="left">
            <div class="rememberme">
                <input tabindex=4 type="checkbox" name="login_remember" id="login_remember" checked /><label for="login_remember"><?php echo __('Remember me?');?></label>
            </div>
        </div>
        <div class="right">
            <input tabindex=3 type="submit" value="<?php echo __('Sign In');?>" name="login_btn" />
        </div>
    </div><!-- End of .actions -->
<?php
echo $this->Form->end();
?>