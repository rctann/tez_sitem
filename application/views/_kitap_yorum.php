<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="<?=base_url()?>assets/main/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/main/css/bootstrap-responsive.min.css">
    
    
    <link rel="stylesheet" href="<?=base_url()?>assets/main/css/sl-slide.css">
</head>
<body>

                <?php
              foreach($bilgi as $rs)
              {
			
              ?>
                            
                         
                                
                                    <strong><a href="#"><?=$rs->username?></a> tarafından yapıldı.</strong><br>
                                    <small><?=$rs->tarih?></small><br>
                                    <p><?=$rs->comm?></p>
                                
                           

              <?php 
              }
			  
			  if(!$bilgi)
			  {
		?>
		<p>Bu kitap hakkında yorum yapılmamış</p>
<?php
		
			  }
              ?>

                       

                      
						


</body>
</html>

