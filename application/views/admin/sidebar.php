 <?php

		$sql = "SELECT count(id) as adet FROM users";
		$query2 = $this->db->query($sql);
		$query2 = $query2->result();
		
		$sql = "SELECT count(id) as adet FROM books";
		$query3 = $this->db->query($sql);
		$query3 = $query3->result();
		
		$sql = "SELECT count(borrowid) as adet FROM borrow";
		$query4 = $this->db->query($sql);
		$query4  = $query4->result();
		
		$say="SELECT count(id) as sayi FROM comment where onay=1";
		$query = $this->db->query($say);
		$query = $query ->result();
 
		$sql = "SELECT count(id) as adet FROM borrowtamam GROUP BY userid";
		$query5 = $this->db->query($sql);
		$query5 = $query5->result();
		
		$sql = "SELECT count(id) as adet FROM mesajlar";
		$query6 = $this->db->query($sql);
		$query6 = $query6->result();
 
 ?>



 <div id="left" >
            <div class="media user-media well-small">
                
                
                <div class="media-body">
				
                    <h5 class="media-heading"> <?php
							if($this->session->logged_in)
						{?>
							<a ><?=$this->session->logged_in['username'];?> <?=$this->session->logged_in['usersurname'];?> </a></h5>
							<?php	}
						?>
                   
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                
				


                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> ÜYELER    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default"><?=$query2[0]->adet?></span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="<?=base_url()?>admin/uyeler"><i class="icon-angle-right"></i> ÜYE LİSTELE </a></li>
                         <li class=""><a href="<?=base_url()?>admin/uyeler/ekle"><i class="icon-angle-right"></i> ÜYE EKLE</a></li>
                        
                    </ul>
                </li>
				
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-table"></i> KİTAPLAR
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success"><?=$query3[0]->adet?></span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="<?=base_url()?>admin/kitaplar"><i class="icon-angle-right"></i> KİTAP LİSTELE </a></li>
                        <li class=""><a href="<?=base_url()?>admin/kitaplar/ekle"><i class="icon-angle-right"></i> KİTAP EKLE </a></li>
                       
                    </ul>
                </li>
                <li class="panel">
                    <a href="<?=base_url()?>admin/home/rezervasyon" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-table"></i> REZERVASYON
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger"><?=$query4[0]->adet?></span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">
   
                    </ul>
                </li>
                 <li class="panel">
                    <a href="<?=base_url()?>admin/Home/yorum" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-table"></i> YORUMLAR
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger"><?=$query[0]->sayi?></span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">
   
                    </ul>
                </li>
                 <li class="panel">
                    <a href="<?=base_url()?>admin/Home/odunc" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-table"></i> ÖDÜNÇ LİSTESİ
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger"></span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">
   
                    </ul>
                </li>

                <li class="panel">
                    <a href="<?=base_url()?>admin/Home/mesajlar" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                        <i class="icon-table"></i> MESAJLAR
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
						&nbsp; <span class="label label-danger"><?=$query6[0]->adet?></span>&nbsp;
                    </a>
                    
                </li>
				
               <li class="panel">
                    <a href="<?=base_url()?>admin/home/Hakkimizda" >
                        <i class="icon-table"></i> HAKKIMIZDA
	   
                       
                    </a>                   
                </li>
           


               
                <li><a href="<?=base_url()?>admin/login/logout"><i class="icon-signin"></i> ÇIKIŞ </a></li>

            </ul>

        </div>