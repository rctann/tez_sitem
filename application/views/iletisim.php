  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Bize ulaşın</h1>
        </div>
        
      </div>
    </div>
  </section>
  <!-- / .title -->       
<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
  <h3><?=$this->session->flashdata("mesaj_sent")?></h3>
  <h3><?=$this->session->flashdata("email_sent")?></h3>
  <section id="registration-page" class="container">
    <form class="center" action='<?=base_url()?>Home/iletisim_ekle' method="POST">
      <fieldset class="registration-form">
        <div class="control-group">
          Adı soyadı giriniz:
          <div class="controls">
            <input type="text"  name="adsoyad"  class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          E-mail adresini giriniz:
          <div class="controls">
            <input type="text"  name="email"  class="input-xlarge">
          </div>
        </div>
          <div class="control-group">
           Telefonunuzu giriniz:
          <div class="controls">
            <input type="text"  name="tel" class="input-xlarge" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
          </div>
        </div>


       
        
        <div class="control-group">
          <!-- Password -->
          <div class="controls">
          <i>MESAJ</i>
            <textarea name="aciklama" rows="10" cols="20">
              

            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'aciklama' );
            </script>
          </div>
        </div>



        <input type="submit" class="btn btn-primary" value="MESAJ GÖNDER">

      </fieldset>
      
    </form>
  </section>
  <!-- /#registration-page -->
