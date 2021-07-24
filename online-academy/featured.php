<section class="section">
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 text-center h2">
          <h2 class="myfont fs50">ফিচার্ড হয়েছে </h2>
    </div>
    
    <?php
    
    $select_featured_query = "SELECT * FROM featured_companies WHERE 1";
    $result_featured = mysqli_query($con,$select_featured_query);
    $count_featured = mysqli_num_rows($result_featured);
    if($count_featured>0):
        $i = 0;
        foreach($result_featured as $fcompany):
            $i++;
    ?>
    
    <div class="col-12  text-center col-md-2 col-sm-2 mb-4">
        <a href="<?=$fcompany['fc_link']?>" target="_blank"><img src="settings/images/featured/<?=$fcompany['fc_image']?>" height="60px" alt="<?=$fcompany['fc_title']?>"></a>
    </div>
    
    <?php
         endforeach;
    endif;		  
    ?>    
    
    </div>
  </div>
</section>
