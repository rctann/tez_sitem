<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Hakkımızda</h2>
							


                    </div>
                </div>

                

<form action="<?=base_url()?>admin/home/guncelle/<?=$veri[0]->id?>" method="POST" >
			<textarea name="aboutus" rows="15"><?=$veri[0]->aboutus?></textarea><br>
		<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'aboutus' );
            </script>
		<input type="submit" class="btn btn-primary" value="KAYDET"/>
		</form>


            </div>




        </div>