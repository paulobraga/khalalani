<!----------------------->
<!-- Some dialogs etc. -->
<!--------------------------------->
<!-- Now, the page itself begins -->
<!--------------------------------->


<!-- Here goes the content. -->
<section id="content" class="container_12 clearfix" data-sort=true>
    <ul class="stats not-on-phone">
        <li>
            <strong>61263</strong>
            <small>Reclamações</small>
            <span class=green>+26%</span>
        </li>
        <li>
            <strong>23</strong>
            <small>Operadores</small>
            <span class=green>16 Online</span>
        </li>
        <li>
            <strong>2165.57</strong>
            <small>Reclamaões nao atendidas</small>
            <span class=red>-8%</span>
        </li>
        <li>
            <strong>0</strong>
            <small>Overdue Tickets</small>
            <span>0%</span>
        </li>
        <li>
            <strong>7</strong>
            <small>Reported Bugs</small>
            <span class=red>+17%</span>
        </li>
    </ul><!-- End of ul.stats -->

    <h1 class="grid_12 margin-top no-margin-top-phone">Dashboard</h1>

    <div class="grid_12 center-elements">
        <div class="full-stats">
            <div class="stat minichart" data-total=16525 data-values="[4,6,7,7,4,3,2,1,4]" data-title=Visits data-format="+0,0;-0,0" data-change=22></div>
        </div>
        <div class="full-stats">
            <div class="stat minichart" data-total=-17 data-values="[2,5,8,7,3,0,-1,-2,-4]" data-title=Users data-format="+0,0;-0,0" data-change=-6></div>
        </div>
        <div class="full-stats">
            <div class="stat minichart" data-total=0 data-values="[0,0,0,1,2,1,-2,-2,-1]" data-title=Orders data-change=0></div>
        </div>
    </div>

    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><img class="icon" src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/chart-up-color.png">Charts</h2>

                <a href="javascript:void(0);" class="menu icon-cog"></a>
                <menu>
                    <a href="javascript:void(0);" class="open-add-client-dialog"><span class="icon icon-plus"></span>Add Client</a>
                    <a href="javascript:void(0);"><div class="icon icon-pencil"></div>Edit</a>
                    <a href="javascript:void(0);"><div class="icon icon-remove"></div>Remove</a>
                </menu>
            </div>

            <div class="content" style="height: 250px;">
                <table class=chart >
                    <thead>
                        <tr>
                            <th></th>
                            <th>1-jan</th>
                            <th>1-fev</th>
                            <th>1-Mar</th>
                            <th>1-Abril</th>
                            <th>1-Maio</th>
                            <th>1-Jun</th>
                            <th>1-Agos</th>
                            <th>1-Set</th>
                            <th>1-Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><?php echo __('Likes');?></th>
                            <td>48</td>
                            <td>125</td>
                            <td>159</td>
                            <td>147</td>
                            <td>154</td>
                            <td>114</td>
                            <td>163</td>
                            <td>122</td>
                            <td>96</td>
                        </tr>
                        <tr>
                            <th><?php echo __('Complaints');?></th>
                            <td>8</td>
                            <td>27</td>
                            <td>0</td>
                            <td>79</td>
                            <td>47</td>
                            <td>59</td>
                            <td>80</td>
                            <td>30</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <th><?php echo __('Visits');?></th>
                            <td>28</td>
                            <td>56</td>
                            <td>98</td>
                            <td>112</td>
                            <td>87</td>
                            <td>26</td>
                            <td>38</td>
                            <td>110</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th><?php echo __('Consumers');?></th>
                            <td>38</td>
                            <td>43</td>
                            <td>69</td>
                            <td>54</td>
                            <td>16</td>
                            <td>16</td>
                            <td>202</td>
                            <td>20</td>
                            <td>73</td>
                        </tr>
                    </tbody>	
                </table>
            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->

<!--    <div class="grid_6">

        <div class="box">

            <div class="header">
                <h2><img class="icon" src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/receipt-invoice.png">Invoices statistics</h2>
            </div>

            <div class="content">
                <div class="spacer"></div>
                <div class="full-stats">
                    <div class="stat hlist" data-list='[{"val":17621,"format":"$0,0;-$0,0","title":"already paid","color":"green"},{"val":1125,"format":"$0,0;-$0,0","title":"not paid yet","color":"red"},{"val":18746,"format":"$0,0;-$0,0","title":"total taxes"}]' data-flexiwidth=true></div>
                </div>
                <div class="clearfix"></div>
                <div class="ui-progressbar" data-value=90 data-showtitle=percentage data-color=blue data-showvalue=true></div>
            </div> End of .content 

            <div class="actions">
                <div class="left">
                    <a href="#" class="button grey">Print invoices</a>
                </div>
                <div class="right">
                    <a href="#" class="button">Generate report</a>
                </div>
            </div> End of .actions 

        </div> End of .box 

        
    </div> End of .grid_6 -->

<!--    <div class="grid_6">
        <div class="box">

            <div class="header">
                <h2><img class="icon" src="/khalalani/img/mangoadmin/img/icons/packs/fugue/16x16/calendar-select.png">Calendar</h2>
            </div>
            <div class="content calendar demo"></div>

        </div>
    </div> End of .grid_6 -->

 


</section><!-- End of #content -->




