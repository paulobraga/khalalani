<!----------------------->
<!-- Some dialogs etc. -->
<!--------------------------------->
<!-- Now, the page itself begins -->
<!--------------------------------->


<!-- Here goes the content. -->
<section id="content" class="container_12 clearfix" data-sort=true>
    <ul class="stats not-on-phone">
        <li>
            <strong><?php echo $total_consumers;?></strong>
            <small><?php echo __('Consumers');?></small>
            <span class=green>+26%</span>
        </li>
        <li>
            <strong><?php echo $total_complaints;?></strong>
            <small><?php echo __('Complaints');?></small>
            <span class=green>+16%</span>
        </li>
        <li>
            <strong>2165</strong>
            <small>Reclamações Atendidas</small>
            <span class=red>8%</span>
        </li>
        <li>
            <strong><?php echo $total_companies;?></strong>
            <small><?php echo __('Companies');?></small>
            <span>+16%</span>
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
            <div class="stat minichart" data-total=16525 data-values="[4,6,7,7,4,3,2,1,4]" data-title=Visitas data-format="+0,0;-0,0" data-change=22></div>
        </div>
        <div class="full-stats">
            <div class="stat minichart" data-total=-17 data-values="[2,5,8,7,3,0,-1,-2,-4]" data-title=Reclamações data-format="+0,0;-0,0" data-change=-6></div>
        </div>
        <div class="full-stats">
            <div class="stat minichart" data-total=2000 data-values="[0,0,0,1,2,1,-2,-2,-1]" data-title=Comsumidores data-change=20></div>
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
                            <th><?php echo __('Visits');?></th>
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
                            <th><?php echo __('Complaints');?></th>
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




 


</section><!-- End of #content -->




