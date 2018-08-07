  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>ŞifremiUnuttum</h1>
        </div>
        
      </div>
    </div>
  </section>
  <!-- / .title -->       
<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<h3><?=$this->session->flashdata("email_sent")?></h3>
  <section id="registration-page" class="container">
    <form class="center" action='<?=base_url()?>Home/sifremi_unuttum_ekle' method="POST">
      <fieldset class="registration-form">
        <div class="control-group">
      

        <div class="control-group">
          E-mail adresini giriniz:
          <div class="controls">
            <input type="text"  name="useremail"  class="input-xlarge">
          </div>
        </div>
      
        <input type="submit" class="btn btn-primary" value="ŞİFRE GÖNDER">

      </fieldset>
      
    </form>
  </section>
  <!-- /#registration-page -->
