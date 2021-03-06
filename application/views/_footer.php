<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2017 <a target="_blank" href="<?=base_url()?>" title="Kütüphane Otomasyonu">REU</a>. Bütün hakları saklıdır.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<?php				
							if (!$this->session->logged_in)
						{ ?>
							
						
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?=base_url()?>/home/login_ol" method="post" id="form-login">
            <input type="text" name="useremail" class="input-small" placeholder="Email">
            <input type="password" name="userpassword" class="input-small" placeholder="Password">
            
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
        <a href="<?=base_url()?>/home/sifremi_unuttum">Forgot your password?</a>
		<?=$this->session->set_flashdata("login_hata","Geçersiz Email yada Şifre")?>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->
<?php }
						?> 
<script src="<?=base_url()?>assets/main/js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?=base_url()?>assets/main/js/vendor/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/main/js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?=base_url()?>assets/main/js/jquery.ba-cond.min.js"></script>
<script src="<?=base_url()?>assets/main/js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>