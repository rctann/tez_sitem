<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        
<div>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ÖDÜNÇ LİSTESİ
                        </div>
                        <div class="table-responsive" >
                                <table class="table" >
                                    <thead>
                                       <tr>
						        
						        <th>Kullanıcı Id</th>
						        <th>Kitap Id</th>
						        <th>Adı </th>
                                <th>Soyadı </th>
                                <th>Kitap adı </th>
						        <th>Kitap alış tarihi</th>
						        <th>Kitap iadetarihi</th>
								
                                
												                            								
						    </tr>
							</thead>
							<?php
							foreach($veri as $rs)
							{
							?>
							 <tr>
						        
						        <td><?=$rs->userid?></td>
						        <td><?=$rs->bookid?></td>
                                <td><?=$rs->username?></td>
                                <td><?=$rs->usersurname?></td>
								<td><?=$rs->bookname?></td>
								<td><?=$rs->borrowdate?></td>
								<td><?=$rs->borrowrdate?></td>
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




       