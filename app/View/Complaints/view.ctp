<?php //   debug($complaint);           ?>
<!-- Here goes the content. -->
<section id="content" class="container_12 clearfix" data-sort=true>
    <div class="grid_6 profile">
        <?php if($role!='consumer'):?>
        <div class="header">

            <div class="title">
                <h2><?php echo h($complaint['Consumer']['User']['PersonalDetail']['name']); ?></h2>
                <h3><?php echo h($complaint['Consumer']['User']['ContactDetail']['personal_email']); ?></h3>
            </div>
            <div class="avatar">
                <img src="/khalalani/img/mangoadmin/img/elements/profile/avatar.png" />
                <!--<a href="javascript:void(0);">Change</a>-->
            </div>

            <ul class="info">

               

            </ul><!-- End of ul.info -->
        </div><!-- End of .header -->
        <?php endif;?>
        <div class="spacer"></div>
        <div class="grid_6">
            <form class="box validate">

                <div class="header">
                    <h2><img class="icon" src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/newspaper.png">Messages</h2>
                </div>

                <div class="content">
                    <div class="spacer"></div>
                    <div class="messages full chat">

                        <div class="msg reply">
                            <img src="/khalalani/img/mangoadmin/img/icons/packs/iconsweets2/25x25/user-2.png"/>
                            <div class="content">
                                <h3><a href="pages_profile.html">John Doe</a> <span>says:</span><small>3 hours ago</small></h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                    et dolore magna aliquyam erat, sed diam voluptua.</p>
                            </div>
                        </div>

                        <div class="msg">
                            <img src="/khalalani/img/mangoadmin/img/icons/packs/iconsweets2/25x25/user-2.png"/>
                            <div class="content">
                                <h3><a href="pages_profile.html">Peter Doe</a> <span>says:</span><small>5 hours ago</small></h3>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="msg">
                            <img src="/khalalani/img/mangoadmin/img/icons/packs/iconsweets2/25x25/user-2.png"/>
                            <div class="content">
                                <h3><a href="pages_profile.html">Peter Doe</a> <span>says:</span><small>5 hours ago</small></h3>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                    </div>
                </div><!-- End of .content -->


                <div class="actions">
                    <div class="left">
                        <label for="fb_pin" class=inline >Message to John Doe:</label>
                        <input type="text" class="required" name=fb_pin id=fb_pin />
                    </div>
                    <div class="right">
                        <input type="reset" value="Cancel" class="grey" />
                        <input type="submit" value="Send" name=send />
                    </div>
                </div><!-- End of .actions -->

            </form><!-- End of .box -->
        </div>
        <div class="details grid_6">
            <section>
                <table>
                    <tr>
                        <td>                
                            <?php echo $this->Html->image("{$complaint['Company']['logo_dir']}/{$complaint['Company']['logo']}", array('pathPrefix' => 'files/company/logo/')); ?>
                        </td>
                        <td>
                            <table>
                                <tr>                        
                                    <th><?php echo __('Company'); ?>:</th><td><?php echo $this->Field->f(($complaint['Company']['name'])); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo __('Complaint Category'); ?>:</th><td><?php echo $this->Field->f(($complaint['ComplaintCategory']['name'])); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo __('Created'); ?>:</th><td><?php echo $this->Field->f(h($complaint['Complaint']['created'])); ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th><?php echo __('Subject'); ?>:</th><td><?php echo $this->Field->f(($complaint['Complaint']['subject'])); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Description'); ?>:</th><td><?php echo $this->Field->f(html_entity_decode($complaint['Complaint']['description'])); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="box">
                            <div class="actions">
                                <div class="left">
                                    <table>
                                        <i style="color: <?php echo $complaint['Complaint']['status_color'];?>"><?php echo h($complaint['Complaint']['status_description']);?>&nbsp;</i>
                                      
                                    </table>
                                </div>
                                <div class="right">
                                    <input type="submit" value="<?php echo __('Encerrar'); ?>" />
                                </div>
                            </div><!-- End of .actions -->
                            </div>
                        </td>
                    </tr>

                </table>

            </section>
        </div><!-- End of .details -->
    </div>
</section>