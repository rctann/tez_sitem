<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>KiTAP EKLEME</h2>
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
            <form class="form-horizontal" action="<?=base_url()?>admin/kitaplar/kaydet" method="POST">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">ISBN NO</label>

                    <div class="col-lg-8">
                        <input type="text" name="isbnno" placeholder="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kitap adı</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text" name="bookname" required=""
                                data-placement="top"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yayım tarihi</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="publishdate" required=""
                            data-placement="top"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Miktar</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="amount" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yayımcı</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="publishername"onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yazar id</label>

                    <div class="col-lg-8"> 
                        <input class="form-control"  type="text"  name="authorid" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""
                               data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yazar adı</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="authorname" required=""
                                data-placement="top"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kategori id</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="categoryid"onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kategori adı</label>

                    <div class="col-lg-8">
                        <select class="form-control" name="categoryname">
						<option>Roman</option>
						<option>Ansiklopedi</option>
						<option>Ders kitabı</option>											
					</select><br>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Sayfa numarası</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="pagenumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""
                              data-placement="top"/>
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