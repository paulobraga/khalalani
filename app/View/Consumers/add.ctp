<section id="content" class="container_12 clearfix" data-sort=true>
 <h1 class="grid_12"><?php echo __('Add Consumer');?></h1>
 <?php 
 echo $this->Element('personaldetails/personal_details_form',
         array('maritalStatuses'=>$maritalStatuses,
             'nationalities'=>$nationalities,
             'countries'=>$countries,
             'provinces'=>$provinces,
             'cities'=>$cities));
  echo $this->Element('contactdetails/contact_details_form',
         array('maritalStatuses'=>$maritalStatuses,
             'nationalities'=>$nationalities,
             'countries'=>$countries,
             'provinces'=>$provinces,
             'cities'=>$cities));
    echo $this->Element('educationdetails/education_details_form',
         array('maritalStatuses'=>$maritalStatuses,
             'nationalities'=>$nationalities,
             'countries'=>$countries,
             'provinces'=>$provinces,
             'cities'=>$cities));
 ?>
</section>