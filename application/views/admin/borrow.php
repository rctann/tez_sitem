<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        
<div>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            REZERVASYON LİSTESİ
                        </div>
                        <div class="table-responsive" >
                                <table class="table" >
                                    <thead>
                                       <tr>
						        <th>Kullanıcı adı</th>
						        <th>Alış tarihi</th>
						        <th>Geri dönüş tarihi</th>
						        <th>Kitap adı</th>
						        <th>Onay Durumu</th>
                                <th>Sil</th>
                                
												                            								
						    </tr>
							</thead>
							<?php
							foreach($veri as $rs)
							{
							?>
							 <tr>
						        
						        <td><?=$rs->username?></td>
						        <td><?=$rs->borrowdate?></td>
								<td><?=$rs->returndate?></td>
								<td><?=$rs->bookname?></td>
							<td>	<?php
									if($rs->onay!=='0')
								{
							 ?>
							<a  class="btn btn-xs btn-info" type="button" href="#"><i class="ace-icon fa fa-trash-o bigger-120">onaylandı</i></a>  <?php 
							}
							?>

							<?php
									if($rs->onay!=='1')
								{
							 ?>
					
								<a  class="btn btn-xs btn-info" type="button" href="<?=base_url()?>admin/Home/rezervasyon_onay/<?=$rs->borrowid?>"><i class="ace-icon fa fa-trash-o bigger-120">Onayla</i></a>
							<?php 
							}
							?>
							<td>
								<a  class="btn btn-xs btn-danger" type="button" href="<?=base_url()?>admin/Home/rezervasyon_sil/<?=$rs->borrowid?>" onclick="return confirm('Silmek istediğinizden Eminmisiniz?');"><i class="ace-icon fa fa-trash-o bigger-120">Sil</i></a> </td>
								  </td>
								  
								  

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




        </div>
		