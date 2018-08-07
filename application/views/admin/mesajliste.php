<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        
<div>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESAJLAR LİSTESİ
                        </div>
                        <div class="table-responsive" >
                                <table class="table" >
                                    <thead>
                                       <tr>
						        <th>ID</th>
						        <th>ADSOYAD</th>
						        <th>EMAİL</th>
								<th>TEL</th>
								<th>MESAJ</th>																
								<th>TARİH</th>
                                <th>Sil</th>
												                            								
						    </tr>
							</thead>
							<?php
							foreach($veri as $rs)
							{
							?>
							 <tr>
						        <td><?=$rs->id?></td>
						        <td><?=$rs->adsoyad?></td>
						        <td><?=$rs->email?></td>
								<td><?=$rs->tel?></td>
								<td><?=$rs->aciklama?></td>
								<td><?=$rs->tarih?></td>
								
								 
								<!--<td>  <img src="<?=base_url()?>/uploads/<?=$rs->resim?>" height="40" width="40">
								  <a href="<?=base_url()?>admin/kitaplar/resimekle/<?=$rs->id?>" >Resim Ekle</a>
								</td>-->
								
								<td><a href="<?=base_url()?>admin/home/mesaj_sil/<?=$rs->id?>" onclick="return confirm('Silmek İstediğinizden Eminmisiniz?');">Sil</a></td>									
						    </tr>
							<?php 
							}
							?>
                                    
                                </table>
                            </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>


                    </div>
                </div>


            </div>