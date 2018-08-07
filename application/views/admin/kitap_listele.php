
<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        
<div>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            KİTAP LİSTESİ
                        </div>
                        <div class="table-responsive" >
                                <table class="table" style="text-align: center;" >
                                    <thead>
                                       <tr>
						        <th style="text-align: center;">ID</th>
						        <th style="text-align: center;">ISBN NO</th>
						        <th style="text-align: center;">KİTAPADI</th>
								<th style="text-align: center;">MİKTAR</th>
								<th style="text-align: center;">YAZARADI</th>
								<th style="text-align: center;">YAYIMCI</th>
								<th style="text-align: center;">KATEGORİADI</th>
								<th style="text-align: center;">Resim Ekle</th>
                                <th style="text-align: center;">Sil</th>
								<th style="text-align: center;">Düzenle</th>				                            								
						    </tr>
							</thead>
							<?php
							foreach($veri as $rs)
							{
							?>
							 <tr>
						        <td><?=$rs->id?></td>
						        <td><?=$rs->isbnno?></td>
						        <td><?=$rs->bookname?></td>
								<td><?=$rs->amount?></td>
								<td><?=$rs->authorname?></td>
								<td><?=$rs->publishername?></td>
								<td><?=$rs->categoryname?></td>
								
								
								 
								<td>  <img src="<?=base_url()?>/uploads/thumb/<?=$rs->book_img?>" height="75" width="75">
								  <a href="<?=base_url()?>admin/kitaplar/resimekle/<?=$rs->id?>" >Resim Ekle</a>
								</td>
								<td><a  class="btn btn-xs btn-danger" type="button" href="<?=base_url()?>admin/kitaplar/sil/<?=$rs->id?>" onclick="return confirm('Silmek İstediğinizden Eminmisiniz?');"><i class="ace-icon fa fa-trash-o bigger-120">Sil</i></a> </td>
								<td><a  class="btn btn-xs btn-info" type="button"  href="<?=base_url()?>admin/kitaplar/duzenle/<?=$rs->id?>" ><i class="ace-icon fa fa-pencil bigger-120">Düzenle</i></a></td>							
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




     
		