<!-- Here goes the content. -->
<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_12 profile">

        <div class="header">

            <div class="title">
                <h2><?php echo h($company['Company']['acronym']); ?></h2>
                <h3><?php echo h($company['Company']['name']); ?></h3>
            </div>
            <div class="avatar">
                <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/')); ?>
                <a href="javascript:void(0);">Change</a>
            </div>

            <ul class="info">

                <li>
                    <a href="javascript:void(0);">
                        <strong><?php echo count($company['Category']);?></strong>
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

        <div class="details grid_12">
            <h2>Details</h2>
            <a href="javascript:$$.settings();"><span class="icon icon-pencil"></span>Update Details</a>
            <section>
                <table>
                    <tr>
                        <th>Name:</th><td><?php echo h($company['Company']['name']); ?></td>
                    </tr>
                    <tr>
                        <th>Acronym:</th><td><?php echo h($company['Company']['acronym']); ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th><td><i><?php echo h($company['Company']['email']); ?></i></td>
                    </tr>
                    <tr>
                        <th>Website:</th><td><a href="<?php echo h($company['Company']['website']); ?>"><?php echo h($company['Company']['website']); ?></a></td>
                    </tr>
                    <tr>
                        <th>Address:</th><td><?php echo h($company['Company']['address']); ?></td>
                    </tr>
                </table>
            </section>
        </div><!-- End of .details -->

<!--        <div class="clearfix"></div>
        <div class="divider"></div>-->
        <div class="grid_12">
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
        </div><!-- End of .grid_6 -->

        <div class="details grid_12">
            <h2><?php echo __('Categories'); ?></h2>
            <a class="open-profile-dialog" href="javascript:void(0);"><span class="icon icon-plus"></span>Add Category</a>
            <!--<a class ="open-profile-dialog" href="javascript:void(0);"><span class="icon icon-remove"></span>Remove Coupon</a>-->
            <section>
                <?php if (!empty($company['Category'])): ?>
                    <ul class="logs">
                        <?php foreach ($company['Category'] as $category): ?>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'categories', 'action' => 'view', $category['id'])); ?>">
                                    <strong><?php echo $category['name']; ?></strong>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                <?php endif; ?>
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

        <div class="grid_12">
            <a href="javascript:void(0);" class="button red right"><?php echo __('Deactivate Company') ?></a>
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
<div class="companies view">
    <h2><?php echo __('Company'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($company['Company']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($company['Company']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
            <?php echo h($company['Company']['email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Logo'); ?></dt>
        <dd>
            <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/')); ?>
        </dd>
        <dt><?php echo __('Address'); ?></dt>
        <dd>
            <?php echo h($company['Company']['address']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Website'); ?></dt>
        <dd>
            <?php echo h($company['Company']['website']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Complaint Categories'), array('controller' => 'complaint_categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Complaint Category'), array('controller' => 'complaint_categories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Managers'), array('controller' => 'managers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'managers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Operators'), array('controller' => 'operators', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Operator'), array('controller' => 'operators', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Branches'); ?></h3>
    <?php if (!empty($company['Branch'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Province Id'); ?></th>
                <th><?php echo __('City Id'); ?></th>
                <th><?php echo __('Address'); ?></th>
                <th><?php echo __('Company Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($company['Branch'] as $branch):
                ?>
                <tr>
                    <td><?php echo $branch['id']; ?></td>
                    <td><?php echo $branch['province_id']; ?></td>
                    <td><?php echo $branch['city_id']; ?></td>
                    <td><?php echo $branch['address']; ?></td>
                    <td><?php echo $branch['company_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'branches', 'action' => 'view', $branch['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'branches', 'action' => 'edit', $branch['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'branches', 'action' => 'delete', $branch['id']), null, __('Are you sure you want to delete # %s?', $branch['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Complaint Categories'); ?></h3>
    <?php if (!empty($company['ComplaintCategory'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Company Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($company['ComplaintCategory'] as $complaintCategory):
                ?>
                <tr>
                    <td><?php echo $complaintCategory['id']; ?></td>
                    <td><?php echo $complaintCategory['company_id']; ?></td>
                    <td><?php echo $complaintCategory['name']; ?></td>
                    <td><?php echo $complaintCategory['created']; ?></td>
                    <td><?php echo $complaintCategory['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'complaint_categories', 'action' => 'view', $complaintCategory['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'complaint_categories', 'action' => 'edit', $complaintCategory['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'complaint_categories', 'action' => 'delete', $complaintCategory['id']), null, __('Are you sure you want to delete # %s?', $complaintCategory['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Complaint Category'), array('controller' => 'complaint_categories', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Complaints'); ?></h3>
    <?php if (!empty($company['Complaint'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Company Id'); ?></th>
                <th><?php echo __('Consumer Id'); ?></th>
                <th><?php echo __('Status'); ?></th>
                <th><?php echo __('Rate'); ?></th>
                <th><?php echo __('Review'); ?></th>
                <th><?php echo __('Description'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Privacy'); ?></th>
                <th><?php echo __('Allow Comments'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($company['Complaint'] as $complaint):
                ?>
                <tr>
                    <td><?php echo $complaint['id']; ?></td>
                    <td><?php echo $complaint['company_id']; ?></td>
                    <td><?php echo $complaint['consumer_id']; ?></td>
                    <td><?php echo $complaint['status']; ?></td>
                    <td><?php echo $complaint['rate']; ?></td>
                    <td><?php echo $complaint['review']; ?></td>
                    <td><?php echo $complaint['description']; ?></td>
                    <td><?php echo $complaint['created']; ?></td>
                    <td><?php echo $complaint['privacy']; ?></td>
                    <td><?php echo $complaint['allow_comments']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'complaints', 'action' => 'view', $complaint['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'complaints', 'action' => 'edit', $complaint['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'complaints', 'action' => 'delete', $complaint['id']), null, __('Are you sure you want to delete # %s?', $complaint['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Managers'); ?></h3>
    <?php if (!empty($company['Manager'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Company Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($company['Manager'] as $manager):
                ?>
                <tr>
                    <td><?php echo $manager['id']; ?></td>
                    <td><?php echo $manager['user_id']; ?></td>
                    <td><?php echo $manager['company_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'managers', 'action' => 'view', $manager['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'managers', 'action' => 'edit', $manager['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'managers', 'action' => 'delete', $manager['id']), null, __('Are you sure you want to delete # %s?', $manager['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'managers', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Operators'); ?></h3>
    <?php if (!empty($company['Operator'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Company Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($company['Operator'] as $operator):
                ?>
                <tr>
                    <td><?php echo $operator['id']; ?></td>
                    <td><?php echo $operator['user_id']; ?></td>
                    <td><?php echo $operator['company_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'operators', 'action' => 'view', $operator['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'operators', 'action' => 'edit', $operator['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operators', 'action' => 'delete', $operator['id']), null, __('Are you sure you want to delete # %s?', $operator['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Operator'), array('controller' => 'operators', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Categories'); ?></h3>
    <?php if (!empty($company['Category'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Description'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($company['Category'] as $category):
                ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['description']; ?></td>
                    <td><?php echo $category['created']; ?></td>
                    <td><?php echo $category['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $category['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $category['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $category['id']), null, __('Are you sure you want to delete # %s?', $category['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
