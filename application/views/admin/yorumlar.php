<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        
<div>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            YORUMLAR LİSTESİ
                        </div>
                        <div class="table-responsive" >
                                <table class="table" >
                                    <thead>
                                       <tr>
						        <th>Kullanıcı adı</th>
						        <th>Yorum Tarihi</th>
						        <th>Yorum</th>
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
						        <td><?=$rs->tarih?></td>
								<td><?=$rs->comm?></td>
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
					
								<a  class="btn btn-xs btn-info" type="button" href="<?=base_url()?>admin/Home/yorum_onay/<?=$rs->id?>"><i class="ace-icon fa fa-trash-o bigger-120">Onayla</i></a>
							<?php 
							}
							?>
							<td>
								<a  class="btn btn-xs btn-danger" type="button" href="<?=base_url()?>admin/Home/yorum_sil/<?=$rs->id?>" onclick="return confirm('Silmek istediğinizden Eminmisiniz?');"><i class="ace-icon fa fa-trash-o bigger-120">Sil</i></a> </td>
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




      
		