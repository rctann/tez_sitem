<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                       
<div>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ÜYE LİSTESİ
                        </div>
                        <div class="table-responsive" >
                                <table class="table" style="text-align: center;">
                                    <thead>
                                       <tr>
						        <th style="text-align: center;">ID</th>
						        <th style="text-align: center;">TC</th>
						        <th style="text-align: center;">KULLANICI ADI</th>
						        <th style="text-align: center;">KULLANICI SOYADI</th>
						        <th style="text-align: center;">KULLANICI ŞİFRE</th>
								<th style="text-align: center;">KULLANICI E-MAİL</th>																
								<th style="text-align: center;">TELEFON NUMARASI</th>
								<th style="text-align: center;">YETKİ</th>
		
                                <th>Sil</th>
								<th>Düzenle</th>				                            								
						    </tr>
							</thead>
							<?php
							foreach($veri as $rs)
							{
							?>
							 <tr>
						        <td><?=$rs->id?></td>
						        <td><?=$rs->TC?></td>
						        <td><?=$rs->username?></td>
								<td><?=$rs->usersurname?></td>
								<td><?=$rs->userpassword?></td>
								<td><?=$rs->useremail?></td>
								<td><?=$rs->usertel?></td>
								<td><?=$rs->attribute?></td>
								
								 
								<!--<td>  <img src="<?=base_url()?>/uploads/<?=$rs->resim?>" height="40" width="40">
								  <a href="<?=base_url()?>admin/kitaplar/resimekle/<?=$rs->id?>" >Resim Ekle</a>
								</td>-->
								<td><a  class="btn btn-xs btn-danger" type="button" href="<?=base_url()?>admin/uyeler/sil/<?=$rs->id?>" onclick="return confirm('Silmek istediğinizden Eminmisiniz?');"><i class="ace-icon fa fa-trash-o bigger-120">Sil</i></a> </td>
								<td><a  class="btn btn-xs btn-info" type="button"  href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->id?>" ><i class="ace-icon fa fa-pencil bigger-120">Düzenle</i></a></td>							
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




       		