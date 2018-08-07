  <script>
        function validate(){

    if(!document.getElementById("password").value==document.getElementById("confirm_password").value)alert("Şifreler Eşleşmiyor");
    return document.getElementById("password").value==document.getElementById("confirm_password").value;
   return false;
    }
    </script>
  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>KAYIT FORMU</h1>
        </div>
         <h3><?=$this->session->flashdata("kayit_ol")?></h3>
         <h3><?=$this->session->flashdata("tc_ol")?></h3>
      </div>
    </div>
  </section>
  <!-- / .title -->       


  <section id="registration-page" class="container">
    <form class="center" onSubmit="return validate()" action="<?=base_url()?>/home/kaydet" method="POST">
      <fieldset class="registration-form">
        <div class="control-group">
          <!-- TC -->
          <div class="controls">
            <input type="text" maxlength="11" minlength="11" name="TC" placeholder="TC KİMLİK NO" required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- ad-soyad -->
          <div class="controls">
            <input type="text"  name="username" placeholder="Ad" required="required" class="input-xlarge">
          </div>
		  <div class="controls">
            <input type="text"  name="usersurname" placeholder="soyad"  required="required" class="input-xlarge">
          </div>
        </div>
          <div class="control-group">
          <!-- email-->
          <div class="controls">
            <input type="email" name="useremail" placeholder="E-Mail" required="required" class="input-xlarge">
          </div>
        </div>
        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <input type="password" id="password" name="userpassword"  required="required" placeholder="Şifre" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="password" id="confirm_password" name="confirm_password" required="required" placeholder="Şifre tekrar" class="input-xlarge">
          </div>
        </div>
		
        <div class="control-group">
          <!-- usertel -->
          <div class="controls">
             <input type="text"  name="usertel" class="input-xlarge" maxlength="11" minlength="11" placeholder="Telefon Numarası"  required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
          </div>
        </div>
		
		
		<div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="hidden" name="attribute" value="Üye">
          </div>
        </div>
		
        <div class="control-group">
          <!-- adres -->
          <div class="controls">
          <i>Adres bilginizi giriniz</i><br>
            <textarea name="useradressid" rows="10"  required="required" cols="20" style="margin: 0px 0px 10px; width: 286px; height: 231px;">              
			
            </textarea>
          </div>
        </div>



        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">KAYIT OL</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>
  <!-- /#registration-page -->

