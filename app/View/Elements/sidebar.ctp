		<!-- The sidebar -->
		<aside>
			<div class="top">
			
				<!-- Navigation -->
				<nav><ul class="collapsible accordion">
				
					<li><a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'dashboard'));?>"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/dashboard.png" alt="" height=16 width=16>Dashboard</a></li>
					<li>
						<a href="javascript:void(0);"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/home.png" alt="" height=16 width=16><?php echo __('Companies');?></a>
						<ul>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'add'));?>"><span class="icon icon-plus"></span><?php echo __('Add');?></a></li>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'index'));?>"><span class="icon icon-list"></span><?php echo __('List');?></a></li>
							
						</ul>
					</li>
                                        <li>
						<a href="javascript:void(0);"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/users.png" alt="" height=16 width=16><?php echo __('Consumers');?></a>
						<ul>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'consumers','action'=>'add'));?>"><span class="icon icon-plus"></span><?php echo __('Add');?></a></li>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'consumers','action'=>'index'));?>"><span class="icon icon-list"></span><?php echo __('List');?></a></li>
							
						</ul>
					</li>
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
							<li><a href="statistics.html"><span class="icon icon-sitemap"></span>Statistics Elements</a></li>
							<li><a href="charts.html"><span class="icon icon-bar-chart"></span>Charts</a></li>
						</ul>
					</li>
                                        <li>
						<a href="javascript:void(0);"><img src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/hammer.png" alt="" height=16 width=16>Admin</a>
						<ul>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'categories','action'=>'index'));?>"><?php echo __('Categories of Companies');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index'));?>"><?php echo __('Users');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'courses','action'=>'index'));?>"><?php echo __('Courses');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'levels','action'=>'index'));?>"><?php echo __('Levels');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'nationalities','action'=>'index'));?>"><?php echo __('Nationalities');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'countries','action'=>'index'));?>"><?php echo __('Countries');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'provinces','action'=>'index'));?>"><?php echo __('Provinces');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'cities','action'=>'index'));?>"><?php echo __('Cities');?></a></li>
                                                        <li><a href="<?php echo $this->Html->url(array('controller'=>'maritalstatuses','action'=>'index'));?>"><?php echo __('Marital Statuses');?></a></li>
<!--							<li><a href="pages_profile.html">Profile</a></li>
							<li><a href="pages_invoice.html">Invoice<span class="badge grey">1 open</span></a></li>
							<li><a href="pages_faq.html">FAQ</a></li>
							<li><a href="pages_search.html">Search</a></li>
							<li><a href="pages_error_404.html">Error Page (404)</a></li>-->
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