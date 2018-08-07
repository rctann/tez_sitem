 <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>KİTAP DÜZENLE</h2>
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
            <form class="form-horizontal" action="<?=base_url()?>admin/kitaplar/guncelle/<?=$veri[0]->id?>" method="POST">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">ISBN NO</label>

                    <div class="col-lg-8">
                        <input type="text" name="isbnno" value="<?=$veri[0]->isbnno?>"placeholder="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kitap adı</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text" name="bookname" value="<?=$veri[0]->bookname?>"
                                data-placement="top"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yayım tarihi</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="publishdate"value="<?=$veri[0]->publishdate?>"
                            data-placement="top"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Miktar</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="amount" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?=$veri[0]->amount?>"
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yayımcı</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="publishername" value="<?=$veri[0]->publishername?>"
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yazar id</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="authorid" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?=$veri[0]->authorid?>"
                               data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Yazar adı</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="authorname"  value="<?=$veri[0]->authorname?>"
                                data-placement="top"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kategori id</label>

                    <div class="col-lg-8">
                        <input class="form-control"  type="text"  name="categoryid"onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?=$veri[0]->categoryid?>"
                                data-placement="top"/>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Kategori adı</label>

                    <div class="col-lg-8">
                        <select class="form-control" name="categoryname" >
						 <option selected ><?=$veri[0]->categoryname?></option>
						<option>Roman</option>
						<option>Ansiklopedi</option>
						<option>Ders kitabı</option>											
					</select><br>
                    </div>
                </div>
				<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Sayfa numarası</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text"  name="pagenumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?=$veri[0]->pagenumber?>"
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