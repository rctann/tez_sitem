<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>ÜYE EKLEME</h2>
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
            <form class="form-horizontal" action="<?=base_url()?>admin/uyeler/kaydet" method="POST">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">TC</label>

                    <div class="col-lg-8">
                        <input type="text" name="TC" placeholder="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı şifre</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text" name="userpassword" required=""
                                data-placement="top"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı adı</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="username" required=""
                            data-placement="top"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı soyadı</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="usersurname"  required=""
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı email</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="useremail" required=""
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Adres id</label>

                    <div class="col-lg-8"> 
                        <input class="form-control"  type="text"  name="useradressid" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""
                               data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Tel id</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="usertelid" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                data-placement="top"/>
                    </div>
                </div><div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kullanıcı telefon</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="usertel" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                data-placement="top"/>
                    </div>
                </div>

                <
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Ünvan</label>

                    <div class="col-lg-8">
                        <select class="form-control" name="attribute">
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