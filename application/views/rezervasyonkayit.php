  <script>
        function validate(){

    if(!document.getElementById("password").value==document.getElementById("confirm_password").value)alert("Şifreler Eşleşmiyor");
    return document.getElementById("password").value==document.getElementById("confirm_password").value;
   return false;
    }
    </script>
    <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>REZERVASYON FORMU</h1>
        </div>
        
      </div>
    </div>
  </section>
 
  
  <!-- / .title -->       


  <section id="registration-page" class="container">
 
             
    <form class="center" onSubmit="return validate()" action="<?=base_url()?>/home/rezkaydet/<?=$veri[0]->id?>" method="POST">
      <fieldset class="registration-form">
        <div class="control-group">
          <!-- TC -->
         
          <div class="controls">
            <input type="hidden" maxlength="11" name="userid" value="<?=$this->session->logged_in['id'];?> " placeholder="">
          </div>
          
            <div class="controls">
            <input type="hidden" maxlength="11" name="bookid" value="<?=$veri[0]->id?>" placeholder="">
          </div>

           <div class="controls">
            Rezervasyon başlangıç tarihi:<input readonly type="date" maxlength="11"  name="borrowdate" value="<?php echo date('Y-m-d'); ?>" placeholder="Lütfen alış tarihini seçiniz">
          </div>
           <div class="controls">
            Rezervasyon bitiş    tarihi:<input readonly type="date" maxlength="11" name="returndate" value="<?php echo date("Y-m-d",mktime(0, 0, 0, date("m"), date("d")+3,   date("Y")));?>" placeholder="Lütfen iade tarhini seçiniz">
          </div>
        </div>

        <div>
      

   
        </div>
		
        <div class="control-group">
          <!-- adres -->
          <div class="controls">
          <i>Not bırakmak istermisiniz?</i><br>
            <textarea name="adress" rows="10" cols="20" style="margin: 0px 0px 10px; width: 286px; height: 231px;">              
			
            </textarea>
          </div>
        </div>



        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">REZERVASYON YAP</button>
          </div>
        </div>
      </fieldset>
    </form>
   
              
  </section>
  <!-- /#registration-page -->

