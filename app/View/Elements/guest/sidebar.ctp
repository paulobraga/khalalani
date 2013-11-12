		<!-- The sidebar -->
		<aside>
			<div class="top">
			
				<!-- Navigation -->
				<nav><ul class="collapsible accordion">
				
					<li><a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'consumer_dashboard'));?>"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/dashboard.png" alt="" height=16 width=16><?php echo __('Dashboard');?></a></li>
					<li>
						<a href="javascript:void(0);"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/home.png" alt="" height=16 width=16><?php echo __('Companies');?></a>
						<ul>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'index'));?>"><span class="icon icon-list"></span><?php echo __('List');?></a></li>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'compare'));?>"><span class="icon icon-asterisk"></span><?php echo __('Compare');?></a></li>
							
						</ul>
					</li>
<!--                                        <li>
						<a href="javascript:void(0);"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/user--exclamation.png" alt="" height=16 width=16><?php echo __('Consumers');?></a>
						<ul>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'consumers','action'=>'add'));?>"><span class="icon icon-plus"></span><?php echo __('Add');?></a></li>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'consumers','action'=>'index'));?>"><span class="icon icon-list"></span><?php echo __('List');?></a></li>
							
						</ul>
					</li>-->
                                        <li>
						<a href="javascript:void(0);"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/exclamation.png" alt="" height=16 width=16><?php echo __('Complaints');?></a>
						<ul>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'selectCompany'));?>"><span class="icon icon-plus"></span><?php echo __('Add');?></a></li>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'complaints','action'=>'index'));?>"><span class="icon icon-list"></span><?php echo __('List');?></a></li>
							
						</ul>
					</li>
					
					<li>
						<a href="javascript:void(0);"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/chart.png" alt="" height=16 width=16>Statistics / Charts<!--<span class="badge">2</span>--></a>
						<ul>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'dashboard'));?>"><span class="icon icon-sitemap"></span>Statistics Elements</a></li>
							<li><a href="charts.html"><span class="icon icon-bar-chart"></span>Charts</a></li>
						</ul>
					</li>
					
				</ul></nav><!-- End of nav -->				
			</div><!-- End of .top -->
			
			<!--<div class="bottom sticky">
				<div class="divider"></div>
				<div class="progress">
					<div class="bar" data-title="Space" data-value="1285" data-max="5120" data-format="0,0 MB"></div>
					<div class="bar" data-title="Traffic" data-value="8.61" data-max="14" data-format="0.00 GB"></div>
					<div class="bar" data-title="Budget" data-value="20000" data-max="20000" data-format="$0,0"></div>
				</div>
				<div class="divider"></div>
				<div class="buttons">
					<a href="javascript:void(0);" class="button grey open-add-client-dialog">Add New Client</a>
					<a href="javascript:void(0);" class="button grey open-add-client-dialog">Open a Ticket</a>
				</div>
			</div>--><!-- End of .bottom -->
			
		</aside><!-- End of sidebar -->