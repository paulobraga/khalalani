<?php // debug($company);     ?>
<!-- Here goes the content. -->
<section id="content" class="container_12 clearfix" data-sort=true>
    <?php echo $this->Session->flash(); ?>
    <!--    <div class="alert error no-margin-top">
                                            <span class="icon"></span>
                                            <strong>Error!</strong> Something went wrong here!
                                    </div>-->
    <div class="grid_12 profile">

        <div class="header">

            <div class="title">
                <h2><?php echo h($company['Company']['acronym']); ?></h2>
                <h3><?php echo h($company['Company']['name']); ?></h3>
            </div>
            <div class="avatar">
                <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/')); ?>
                <?php if ($role == 'manager'): ?>
                <a href="javascript:void(0);">Change</a>
                <?php endif;?>
            </div>

            <ul class="info">

                <li>
                    <a href="javascript:void(0);">
                        <strong><?php echo count($company['CompanyLike']); ?></strong>
                        <small><?php echo __('Likes'); ?></small>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <strong>5,216</strong>
                        <small><?php echo __('Views'); ?></small>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <strong><?php echo count($company['Category']); ?></strong>
                        <small><?php echo __('Categories'); ?></small>
                    </a>
                </li>

            </ul><!-- End of ul.info -->
        </div><!-- End of .header -->
        <?php if ($role == 'consumer'): ?>
            <div class="details grid_12">
                <div class="box">
                    <div class="actions">
                        <div class="left">
                            <?php $like = ($companyLike) ? __('Liked') : __('Like'); ?>
                            <?php $like_tooltip = ($companyLike) ? __('Unlike') : __('Like'); ?>
                            <?php $action = ($companyLike) ? 'delete' : 'add' ?>
                            <?php $icon = ($companyLike) ? 'icon-thumbs-down' : 'icon-thumbs-up'; ?>
                            <?php
                            if ($companyLike) {
                                echo $this->Form->postLink('<span class="' . $icon . '"></span>' . $like, array('controller' => 'companylikes', 'action' => $action, $companyLike['CompanyLike']['id']), array('class' => 'button grey tooltip', 'original-title' => $like_tooltip, 'escape' => false));
                            } else {
                                echo $this->Form->postLink('<span class="' . $icon . '"></span>' . $like, array('controller' => 'companylikes', 'action' => $action, $company['Company']['id'], $this->Session->read('Auth.User.Consumer.id')), array('class' => 'button grey tooltip', 'original-title' => $like_tooltip, 'escape' => false));
                            }
                            ?>
                        </div>
                        <div class="right"> 
                            <a href="<?php echo $this->Html->url(array('controller' => 'complaints', 'action' => 'add', $company['Company']['id'])); ?>" class="right button" style="border: 1px solid #1d5d1c;
                               background: url('../img/elements/badges/green.png') repeat-x #40913f;"><span class="icon icon-plus"></span><?php echo __('Send Complaint'); ?></a> 

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="details grid_6">
            <h2><?php echo __('Details'); ?></h2>
            <?php if ($role == 'manager'): ?>
                <a class="open-edit-company-dialog" href="javascript:void(0);"><span class="icon icon-pencil"></span><?php echo __('Update Details'); ?></a>
            <?php endif; ?>
            <section>
                <table>
                    <tr>
                        <th><?php echo __('Name'); ?>:</th><td><?php echo $this->Field->f(($company['Company']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acronym'); ?>:</th><td><?php echo $this->Field->f(h($company['Company']['acronym'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Email'); ?>:</th><td><i><?php echo $this->Field->f(h($company['Company']['email'])); ?></i></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Website'); ?>:</th><td><a href="<?php echo $this->Field->f(h($company['Company']['website'])); ?>"><?php echo $this->Field->f(h($company['Company']['website'])); ?></a></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Address'); ?>:</th><td><?php echo $this->Field->f(h($company['Country']['name'])) . ', ' . $this->Field->f(h($company['Province']['name'])) . ', ' . $this->Field->f(h($company['City']['name'])); ?></td>
                    </tr>
                    <tr>
                        <th></th><td><?php echo $this->Field->f(h($company['Company']['street_address'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Zip/Postal Code'); ?>:</th><td><?php echo $this->Field->f(h($company['Company']['zipcode'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Phone') . ':'; ?></th><td><?php echo $this->Field->f($company['Company']['phone']); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Fax') . ':'; ?></th><td><?php echo $this->Field->f($company['Company']['fax']); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Mobile') . ':'; ?></th><td><?php echo $this->Field->f($company['Company']['mobile']); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Created') . ':'; ?></th><td><?php echo $this->Field->f($company['Company']['created']); ?></td>
                    </tr>
                </table>
            </section>
        </div><!-- End of .details -->

        <!--        <div class="clearfix"></div>
                <div class="divider"></div>-->
        <!--<div class="grid_12">-->
        <!--            <div class="box tabbedBox">
        
                        <div class="header">
                            <h2>Tabs</h2>
                            <ul>
                                <li><a href="#t1-c1">First Tab</a></li>
                                <li><a href="#t1-c2">Second Tab</a></li>
                                <li><a href="#t1-c3">Third Tab</a></li>
                            </ul>
                        </div> End of .header 
        
                        <div class="content tabbed">
        
                            <div id="t1-c1">
                                
                            </div>
        
                            <div id="t1-c2">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                            </div>
        
                            <div id="t1-c3">
                                <p>Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
        
                        </div>
                        End of .content
        
                    </div>--><!-- End of .box -->
        <!--</div> End of .grid_6 -->

        <div class="details grid_6">
            <h2><?php echo __('Categories'); ?></h2>
            <?php if ($role == 'admin'): ?>
                <a class="open-add-category-dialog" href="javascript:void(0);"><span class="icon icon-pencil"></span><?php echo __('Update Categories'); ?></a>
                <!--<a class ="open-profile-dialog" href="javascript:void(0);"><span class="icon icon-remove"></span>Remove Coupon</a>-->
            <?php endif; ?>
            <section>
                <?php if (!empty($company['Category'])) { ?>
                    <ul class="logs">
                        <?php foreach ($company['Category'] as $category): ?>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'categories', 'action' => 'view', $category['id'])); ?>">
                                    <strong><?php echo $category['name']; ?></strong>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                <?php }else { ?>
                    <p><i><?php echo __('No Categories'); ?></i></p>
                <?php } ?>
            </section>
        </div><!-- End of .details -->
        <div class="details grid_6">
            <h2><?php echo __('Complaint Categories'); ?></h2>
            <?php if ($role == 'manager'): ?>
                <a class="open-add-complaintcategory-dialog" href="javascript:void(0);"><span class="icon icon-plus"></span><?php echo __('Add Complaint Category'); ?></a>
                <!--<a class ="open-profile-dialog" href="javascript:void(0);"><span class="icon icon-remove"></span>Remove Coupon</a>-->
            <?php endif; ?>
            <section>
                <?php if (!empty($company['ComplaintCategory'])) { ?>
                    <ul class="logs">
                        <?php foreach ($company['ComplaintCategory'] as $complaintCategory): ?>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'complaintcategories', 'action' => 'view', $complaintCategory['id'])); ?>">
                                    <strong><?php echo $complaintCategory['name']; ?></strong>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                <?php }else { ?>
                    <p><i><?php echo __('No Complaint Categories'); ?></i></p>
                <?php } ?>
            </section>
        </div><!-- End of .details -->

        <!--        <div class="details grid_6">
                    <h2>Subscription</h2>
                    <a class="open-profile-dialog" href="javascript:void(0);"><span class="icon icon-plus"></span>Add Subscription</a>
                    <section class="center-elements">
                        <p><i>No active subscription</i></p>
                    </section>
                </div> End of .details -->

        <!--        <div class="details grid_12">
                    <h2>Logs</h2>
                    <a href="javascript:void(0);">More<span class="icon icon-hand-right right"></span></a>
                    <section>
                        <ul class="logs">
                            <li class="error">
                                <a href="javascript:void(0);">
                                    <strong>Failed Login</strong>
                                    <small>2012/01/15 11:36:03</small>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <strong>Created Category “Overdue Tickets”</strong>
                                    <small>2012/01/15 08:57:17</small>	
                                </a>
                            </li>
                        </ul>
                    </section>
                </div> End of .details -->


        <div class="clearfix"></div>
        <div class="divider"></div>
        <?php if ($role == 'admin'): ?>
            <div class="grid_12">
                <a href="javascript:void(0);" class="button red right"><?php echo __('Deactivate Company') ?></a>
            </div>
        <?php endif; ?>
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

            $("#edit-company-dialog").dialog({
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

            $(".open-edit-company-dialog").click(function() {
                $("#edit-company-dialog").dialog("open");
                return false;
            });

            // Profile Dialog




        });
    </script>
</section><!-- End of #content -->
<?php echo $this->Element('companies/dialog_edit_company'); ?>
<?php echo $this->Element('companies/dialog_add_complaintcategory', array('company_id' => $company['Company']['id'])); ?>
<?php echo $this->Element('companies/dialog_add_category'); ?>