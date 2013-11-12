<?php 
echo $this->Element('companies/select_company');

?>
<?php  //debug($most_complained_companies);          ?>
<!-- Here goes the content. -->
<section id="content" class="container_12 clearfix" data-sort=true>
    <?php echo $this->Session->flash(); ?>
    <!--    <div class="alert error no-margin-top">
                                            <span class="icon"></span>
                                            <strong>Error!</strong> Something went wrong here!
                                    </div>-->
    <div class="grid_6">
        <div class="box">
            <div class="header"><h2><?php echo __('Mais Reclamadas'); ?></h2></div>
            <div class="content">
                <table class="styled borders">
                    <thead>
                        <tr>
                            <th><?php echo __('Company'); ?></th>
                            <th><?php echo __('Complaints'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($most_complained_companies as $company): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'view',$company['Company']['id']));?>">
                                    <table>
                                        <tr>
                                            <td rowspan="2">
                                                <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/', 'style' => $this->Html->style(array('height' => '50px', 'width' => '50px')))); ?>
                                            </td>
                                            <td>
                                                <?php echo $company['Company']['acronym'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $company['Company']['name'];?></td>
                                        </tr>
                                    </table>
                                    </a>
                                </td>
                                <td><?php echo count($company['Complaint']);?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
      <div class="grid_6">
        <div class="box">
            <div class="header"><h2><?php echo __('Mais Reclamadas'); ?></h2></div>
            <div class="content">
                <table class="styled borders">
                    <thead>
                        <tr>
                            <th><?php echo __('Company'); ?></th>
                            <th><?php echo __('Complaints'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($most_complained_companies as $company): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'view',$company['Company']['id']));?>">
                                    <table>
                                        <tr>
                                            <td rowspan="2">
                                                <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/', 'style' => $this->Html->style(array('height' => '50px', 'width' => '50px')))); ?>
                                            </td>
                                            <td>
                                                <?php echo $company['Company']['acronym'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $company['Company']['name'];?></td>
                                        </tr>
                                    </table>
                                    </a>
                                </td>
                                <td>12</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
      <div class="grid_6">
        <div class="box">
            <div class="header"><h2><?php echo __('Mais Reclamadas'); ?></h2></div>
            <div class="content">
                <table class="styled borders">
                    <thead>
                        <tr>
                            <th><?php echo __('Company'); ?></th>
                            <th><?php echo __('Complaints'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($most_complained_companies as $company): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'view',$company['Company']['id']));?>">
                                    <table>
                                        <tr>
                                            <td rowspan="2">
                                                <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/', 'style' => $this->Html->style(array('height' => '50px', 'width' => '50px')))); ?>
                                            </td>
                                            <td>
                                                <?php echo $company['Company']['acronym'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $company['Company']['name'];?></td>
                                        </tr>
                                    </table>
                                    </a>
                                </td>
                                <td>12</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
      <div class="grid_6">
        <div class="box">
            <div class="header"><h2><?php echo __('Mais Reclamadas'); ?></h2></div>
            <div class="content">
                <table class="styled borders">
                    <thead>
                        <tr>
                            <th><?php echo __('Company'); ?></th>
                            <th><?php echo __('Complaints'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($most_complained_companies as $company): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'view',$company['Company']['id']));?>">
                                    <table>
                                        <tr>
                                            <td rowspan="2">
                                                <?php echo $this->Html->image("{$company['Company']['logo_dir']}/{$company['Company']['logo']}", array('pathPrefix' => 'files/company/logo/', 'style' => $this->Html->style(array('height' => '50px', 'width' => '50px')))); ?>
                                            </td>
                                            <td>
                                                <?php echo $company['Company']['acronym'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $company['Company']['name'];?></td>
                                        </tr>
                                    </table>
                                    </a>
                                </td>
                                <td>12</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     
</section><!-- End of #content -->