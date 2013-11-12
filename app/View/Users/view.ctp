<!-- Here goes the content. -->
<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12 profile">

        <div class="header">

            <div class="title">
                <h2><?php echo h($user['PersonalDetail']['name']); ?></h2>
                <h3><?php echo h($user['Group']['name']); ?></h3>
            </div>
            <div class="avatar">
                <img src="/khalalani/img/mangoadmin/img/elements/profile/avatar.png" />
                <a href="javascript:void(0);">Change</a>
            </div>

            <ul class="info">

                <li>
                    <a href="javascript:void(0);">
                        <strong>42</strong>
                        <small>Categories</small>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <strong>5,216</strong>
                        <small>Views</small>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <strong>106</strong>
                        <small>Orders</small>
                    </a>
                </li>

            </ul><!-- End of ul.info -->
        </div><!-- End of .header -->

        <div class="details grid_6">
            <h2><?php echo __('Personal Details'); ?></h2>
            <a href="javascript:$$.settings();"><span class="icon icon-pencil"></span><?php echo __('Update Details');?></a>
            <section>
                <table>
                    <tr>
                        <th><?php echo __('Name') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['full_name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Birthday') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['birthday'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Gender') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['gender'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Marital Status') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['MaritalStatus']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Nationality') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['Nationality']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Born Country') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['Country']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Born Province/State') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['Province']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Born City') . ':'; ?></th><td><?php echo $this->Field->f(h($user['PersonalDetail']['City']['name'])); ?></td>
                    </tr>
                </table>
            </section>
        </div><!-- End of .details -->

        <div class="details grid_6">
            <h2><?php echo __('Contact Details'); ?></h2>
            <a href="javascript:$$.settings();"><span class="icon icon-pencil"></span><?php echo __('Update Details');?></a>
            <section>
                <table>
                    <tr>
                        <th><?php echo __('Country') . ':'; ?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['Country']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Province/State') . ':'; ?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['Province']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('City') . ':'; ?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['City']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Address Street').':';?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['address_street']));?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Zip/Postal Code').':';?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['zipcode']));?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Home Telephone') . ':'; ?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['home_telephone'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Mobile').':';?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['mobile']));?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Personal Email').':';?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['personal_email']));?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Work Email').':';?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['work_email']));?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Other Email').':';?></th><td><?php echo $this->Field->f(h($user['ContactDetail']['other_email']));?></td>
                    </tr>
                    
                </table>
            </section>
        </div><!-- End of .details -->
        <div class="details grid_6">
            <h2><?php echo ('Education Details'); ?></h2>
            <a href="javascript:$$.settings();"><span class="icon icon-pencil"></span><?php echo __('Update Details');?></a>
            <section>
                <table>
                    <tr>
                        <th><?php echo __('Level') . ':'; ?></th><td><?php echo $this->Field->f(h($user['EducationDetail']['Level']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Course') . ':'; ?></th><td><?php echo $this->Field->f(h($user['EducationDetail']['Course']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Country') . ':'; ?></th><td><?php echo $this->Field->f(h($user['EducationDetail']['Country']['name'])); ?></td>
                    </tr>
                </table>
            </section>
        </div><!-- End of .details -->
        
          <div class="details grid_6">
            <h2><?php echo __('Auth Details'); ?></h2>
            <a href="javascript:$$.settings();"><span class="icon icon-pencil"></span><?php echo __('Update Details');?></a>
            <section>
                <table>
                    <tr>
                        <th><?php echo __('Group') . ':'; ?></th><td><?php echo $this->Field->f(h($user['Group']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Username') . ':'; ?></th><td><?php echo $this->Field->f(h($user['User']['username'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Status') . ':'; ?></th><td><?php echo $this->Field->f(h($user['User']['status'])); ?></td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td >
                            <input class="grey change_password_button" type="button" id="settings-pw" value="Change Password..." data-lang-changed="Password changed" />
                        </td>    
                    </tr>

                </table>
            </section>
        </div><!-- End of .details -->

        <div class="clearfix"></div>
        <div class="divider"></div>

        <div class="grid_12">
            <a href="javascript:void(0);" class="button red right"><?php echo __('Deactivate Account');?></a>
        </div>

        <!-- Example Profile Dialog -->							
        <div style="display: none;" id="profile-dialog" title="Example Profile Dialog">

            <form action="" class="full validate">
                <div class="row">
                    <label for="d1_textfield">
                        <strong>Coupon Name</strong>
                    </label>
                    <div>
                        <input class="required" type=text name=d1_textfield id=d1_textfield />
                    </div>
                </div>
                <div class="row">
                    <label for="d1_spinner">
                        <strong>Percent off</strong>
                    </label>
                    <div>
                        <input data-type="spinner" min=1 max=100 value=5 id=d1_spinner name=d1_spinner />
                    </div>
                </div>
                <div class="row">
                    <label for="d1_select">
                        <strong>Duration</strong>
                    </label>
                    <div style="padding-bottom: 10px">
                        <select name=d1_select id=d1_select class="required">
                            <option value="once">Once</option>
                            <option value="multi_month">Multi-month</option>
                            <option value="forever">Forever</option>
                        </select>
                    </div>
                </div>
            </form>

            <div class="actions">
                <div class="left">
                    <button class="grey cancel">Cancel</button>
                </div>
                <div class="right">
                    <button class="submit">Submit</button>
                </div>
            </div>

        </div><!-- End of #profile-dialog -->

    </div>

    <script>
        $$.ready(function() {
            // Profile Dialog

            $("#profile-dialog").dialog({
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

            $(".open-profile-dialog").click(function() {
                $("#profile-dialog").dialog("open");
                return false;
            });
        });
    </script>
</section><!-- End of #content -->
