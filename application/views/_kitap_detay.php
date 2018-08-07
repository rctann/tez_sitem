<section id="about-us" class="container">
        <div class="row-fluid">
            <div >
                <div class="blog">
                    <div class="blog-item well">
                        <a href="#"><h2><?=$veri[0]->bookname?></h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">  <img src="<?=base_url()?>/uploads/<?=$veri[0]->book_img?>" width="350" height="500"/><h3> &nbsp	ISBN NO: <?=$veri[0]->isbnno?></h3>
						<h3> &nbsp	Yayımlanma Tarihi: <?=$veri[0]->publishdate?></h3>	
						<h3> &nbsp	Yayımcı Adı: <?=$veri[0]->publishername?></h3>	
						<h3> &nbsp	Miktarı: <?=$veri[0]->amount?></h3>
						<h3> &nbsp	Yazar Adı: <?=$veri[0]->authorname?></h3>
						<h3>&nbsp	Kategori: <?=$veri[0]->categoryname?></h3>
						<h3> &nbsp	Sayfa Sayısı: <?=$veri[0]->pagenumber?></h3></p>							
		<form action="<?=base_url()?>home/rez_ekle/<?=$veri[0]->id?>" method="POST">

       
       
       <?php   if($this->session->logged_in){
       ?>&nbsp &nbsp
       <input type="submit" value="Rezervasyon Yap" class="btn btn-large btn-primary" />
       
       <?php }else{ ?>
       
        &nbsp &nbsp <a href="<?=base_url()?>Home" class="btn-btn primary" >REZERVASYON YAPMAK İÇİN GİRİŞ YAPINIZ.</a><br>

        <?php } ?>
</form>
                    <div id="comments" class="comments">

                        <!-- Start Comment Form -->
                        <div class="comment-form">
                            
                            <form action="<?=base_url()?>Home/yorumekle/<?=$veri[0]->id?>" method="POST">
                                <?php   if($this->session->logged_in){
       ?>
        &nbsp &nbsp <textarea style="resize:none; margin-left: 0px; margin-right: 0px; width: 768px; height: 0px;" placeholder="Bir yorum yap..." name="comm"></textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'aciklama' );
            </script>
       <br>
       &nbsp &nbsp <input type="submit" value="Yorum yap" class="btn btn-large btn-primary" />
       <?php }else{ ?>
      
       &nbsp &nbsp <a href="<?=base_url()?>oturum" class="btn-btn primary" >YORUM YAPMAK İÇİN GİRİŞ YAPINIZ.</a><br>

        <?php } ?>
                            </form>
                        </div>
                        <!-- End Comment Form -->

                    </div>

                </div>
				</div>
                <div class="comments-list">
                <?php
              foreach($bilgi as $rs)
              {
              ?>
                            <div class="comment media">
                                <div class="pull-left">
                                     
                                </div>

                                <div class="media-body">
                                    <strong>Posted by <a href="#"><?=$rs->username?></a></strong><br>
                                    <small><?=$rs->tarih?></small><br>
                                    <p><?=$rs->comm?></p>
                                </div>
                            </div>

              <?php 
              }
              ?>

                       

                        </div>
              
                <!-- End Blog Item -->

            </div>
        </div>
        
    </div>

</section>
