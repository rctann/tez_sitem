<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>ÜYE DÜZENLE</h2>
 <div class="box dark">
        <header>
            <div class="icons"><i class="icon-edit"></i></div>
            <h5>Alanları doldurun</h5>
            <div class="toolbar">
                <ul class="nav">
                  
                  
                    <li>
                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-1">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div id="div-1" class="accordion-body collapse in body">
            <form class="form-horizontal" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->id?>" method="POST">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">TC</label>

                    <div class="col-lg-8">
                        <input type="text" name="TC" placeholder="" value="<?=$veri[0]->TC?>" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı adı</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="username" required="" value="<?=$veri[0]->username?>"
                            data-placement="top"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı soyadı</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="usersurname"  required="" value="<?=$veri[0]->usersurname?>"
                                data-placement="top"/>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı şifre</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text" name="userpassword" required="" value="<?=$veri[0]->userpassword?>"
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı email</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="useremail" required="" value="<?=$veri[0]->useremail?>"
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Adres id</label>

                    <div class="col-lg-8"> 
                        <input class="form-control"  type="text"  name="useradressid" value="<?=$veri[0]->useradressid?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""
                               data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Tel id</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="usertelid" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?=$veri[0]->usertelid?>"
                                data-placement="top"/>
                    </div>
                </div><div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı telefon</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="usertel" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?=$veri[0]->usertel?>"
                                data-placement="top"/>
                    </div>
                </div>

                <
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Ünvan</label>

                    <div class="col-lg-8">
                        <select class="form-control" name="attribute">
						 <option selected ><?=$veri[0]->attribute?></option>
						<option>Admin</option>
						<option>Üye</option>
																	
					</select><br>
                    </div>
                </div>
				
                
                    <div class="form-group">
                    <div class="col-lg-8">
                         <input type="submit" class="btn btn-primary" value="KAYDET" />
                    </div>
                </div>

                

                

                

                
            </form>
        </div>
    </div>


                    </div>
                </div>

                <hr />




            </div>




        </div>