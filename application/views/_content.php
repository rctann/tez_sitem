<script type="text/javascript">
window.onload = function(){ 
    //Get submit button
    var submitbutton = document.getElementById("tfq");
    //Add listener to submit button
    if(submitbutton.addEventListener){
        submitbutton.addEventListener("click", function() {
            if (submitbutton.value == 'Search our website'){//Customize this text string to whatever you want
                submitbutton.value = '';
            }
        });
    }
}
</script>
<!-- CSS styles for standard search box with placeholder text-->
<style type="text/css">
    #tfheader{
        background-color:#c3dfef;
    }
    #tfnewsearch{
        float:right;
        padding:20px;
    }
    .tftextinput2{
        margin: 0;
        padding: 5px 15px;
        font-family: Arial, Helvetica, sans-serif;
        font-size:14px;
        color:#666;
        border:1px solid #0076a3; border-right:0px;
        border-top-left-radius: 5px 5px;
        border-bottom-left-radius: 5px 5px;
    }
    .tfbutton2 {
        margin: 0;
        padding: 5px 7px;
        font-family: Arial, Helvetica, sans-serif;
        font-size:14px;
        font-weight:bold;
        outline: none;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        color: #ffffff;
        border: solid 1px #0076a3; border-right:0px;
        background: #0095cd;
        background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
        background: -moz-linear-gradient(top,  #00adee,  #0078a5);
        border-top-right-radius: 5px 5px;
        border-bottom-right-radius: 5px 5px;
    }
    .tfbutton2:hover {
        text-decoration: none;
        background: #007ead;
        background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
        background: -moz-linear-gradient(top,  #0095cc,  #00678e);
    }
    /* Fixes submit button height problem in Firefox */
    .tfbutton2::-moz-focus-inner {
      border: 0;
    }
    .tfclear{
        clear:both;
    }
</style>

<section id="portfolio" class="container main"> 
 
    
        <form  method="get" action="<?=base_url()?>Home/kitap_ara/">
                <input type="text" required="required" id="tfq" class="tftextinput2" name="ara" size="21" maxlength="120" placeholder="Kitap arayınız">
                <input type="submit" value="ARA" class="tfbutton2">
        </form>
       



<h3 align="center">Kitaplarımız</h3>
<section id="portfolio" class="container main">    
        <ul class="gallery col-4">
            <!--Item 1-->
            <?php
							foreach($books as $rs){
							?> <li>
                <div class="preview">
                    <img alt=" " src="<?=base_url()?>uploads/thumb/<?=$rs->book_img?>">
                    <div class="overlay" style="width: 250px; height: 250px;">
					<h6 align="center"><?=$rs->bookname?></h6> 
                    </div>
                    <div class="links" align="center">
                        <a  data-toggle="modal" href="<?=base_url()?>home/kitap_detay/<?=$rs->id?>"><i class="icon-eye-open"></i></a>                                
                    </div>
                </div>
                
                               
            </li>
            <!--/Item 1--> 

                <?php
							}
							?>            

        </ul>
        
    </section>
<h3 align="center"><?=$linkler?></h3>
<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
            <h1>MİSYONUMUZ</h1>
                Misyonumuz
Üniversitemizin eğitim – öğretim ve araştırma faaliyetlerini  desteklemek amacı ile her türlü basılı ve elektronik bilgi kaynağını sağlamak, belirli bir sistem dahilinde düzenlemek, en hızlı ve en kolay biçimde kullanıcıların hizmetine sunmaktır.

Vizyonumuz
Sürekli olarak bilgi kaynaklarının güncellenmesi, yenilenmesi, koleksiyonun geliştirilmesi ve kullanıcıların kütüphane hizmetlerinden en etkin şekilde yararlanabilmelerini sağlamak.Kütüphane hizmetlerinin dünya standartlarına ulaşmasını sağlamak
            
        </div>
    </div>
</section>
<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
           
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Bilgi hizmetleri alanında çalışanlar;</h4>
                        <p>Bilgi hizmetleri alanında çalışanlar
1. İnsan Hakları Evrensel Bildirgesi ve diğer uluslararası sözleşmelerde öngörülen bilgi edinme
özgürlüğünü, toplumun tüm bireyleri için savunur ve gereklerini yerine getirmeye çalışır.
2. Mesleki gücünü, bilginin kullanımından alır.
3. Bilgi kullanıcılarına ırk, dil, din, cinsiyet, toplumsal statü ve görüş ayrımı gözetmeksizin bilgiye
erişimde eşit davranır.
4. Doğru ve yeterli bilgiyi zamanında sunarak, mesleki görevini mesleğe değer katacak şekilde
gerçekleştirir; böylece bireylerin, yönetimin ve toplumun saygısını kazanır ve bunu korur.
5. Bilgi üreticilerinin telif haklarına saygı duyar ve korur.
6. Kişiler hakkında bilgi sağlarken hem doğru bilgi verir, hem de özel yaşamın gizliliğini korur.
7. İstenen veya sağlanan bilgi ile ilgili olarak her kullanıcının özel yaşamının gizliliğine saygı
gösterilmesi ilkesine bağlı kalır.
8. Nesnel verilere dayanmayan, haksız karalamalarla meslek elemanlarının, genel olarak meslek
grubunun ya da bir bilgi merkezinin saygınlığını zedeleyecek söylem ve davranışlarda
bulunmaz.
9. Bağlı bulunduğu kuruma ve haklarına zarar verecek davranışlardan kaçınır, bağlı bulunduğu
kurumun amaçlarına hizmet eder.
10. Mesleki çıkarları kişisel çıkarlarından üstün tutar.
11. Mesleğini ve görevini kişisel çıkarları için kötü amaçlarla kullanmaz.
12. Bu ilkelerin benimsenmesi için çaba harcar.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-thumbs-up-alt icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">KBÜ KÜTÜPHANE VE DOKÜMANTASYON DAİRESİ BAŞKANLIĞI KAMU HİZMET STANDARDLARI TABLOSU</h4>
                        <p>
                     
SIRA NO HİZMETİN ADI    BAŞVURUDA İSTENEN BELGELER  HİZMETİN ORTALAMA TAMAMLANMA SÜRESİ
1   Üyelik İşlemleri    Üniversite kimlik kartı 2 DAKİKA
2   Ödünç Kitap Verme-İade Alma İşlemleri   Üniversite kimlik kartı, Ödünç almak istenilen yayın, İade edilen yayın 1 DAKİKA
3   Üniversitelerarası Ödünç Kitap İşlemleri    Kütüphanelerarası Ödünç Kitap Formu 7 İŞGÜNÜ
                     
        "Başvuru esnasında yukarıda belirtilen belgelerin dışında belge istenmesi, eksiksiz belge ile başvuru yapılmasına rağmen hizmetin belirtilen sürede tamamlanmaması veya yukarıdaki tabloda bazı hizmetlerin bulunmadığının tespiti durumunda ilk müracaat yerine ya da ikinci müracaat yerine başvurunuz."
                     
                     
    İlk Müracaat Yeri   : KBÜ Kütüphane ve Dokümantasyon Dairesi Başkanlığı İkinci Müracaat Yeri    : KBÜ Genel Sekreterlik
    İsim                    :Özcan Büyükgenç    İsim                            : Av. Yaşar ALPAY
    Unvan                   : Kütüphane ve Dokümantasyon Daire Başkanı  Unvan                       : Genel Sekreter
    Adres                   :Balıklarkayası Mevkii 78050 KARABÜK    Adres                       :Balıklarkayası Mevkii 78050 KARABÜK
    Tel.                        : (0370) 433 44 13  Tel.                        : (0370) 433 20 03
    Faks                    : (0370) 433 44 62  Faks                         
    e-Posta                 : kutuphane@karabuk.edu.tr  e-Posta       buyukgencozcan@karabuk.edu.tr         </p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Açıklama</h4>
                        <p>Kütüphanemiz Üniversitemizin eğitim-öğretim,bilimsel araştırma ve çalışmalarını desteklemek amacıyla basılı ve elektronik bilgi kaynaklarını sağlamak,elektronik ortama da kütüphane kurallarına göre düzenleyerek kaydetmek ve kullanıcılara en hızlı ve en kolay şekilde sunmak için faaliyetlerde bulunur.Kütüphanemiz kolleksiyonunda 50.000 adet kitap TÜBİTAK ve ULAKBİM’in sağladıkları ile Dünya kütüphanelerine ulaşma imkanı sağlayan 23 adet veritabanı mevcuttur.Koleksiyonumuzda olmayan materyaller,kütüphaneler arası işbirliği çerçevesinde başka kütüphanelerden temin edilebilmektedir.Merkez Kütüphanemizde kullanıcılar için 7 gün 24 saat açık ferah bir çalışma ortamı sağlayan okuma salonu ile hizmet verilmektedir.3.000 metre kare alan üzerinde yapımı hızla devam eden yeni Merkez Kütüphanemiz çok yakında sizlerin hizmetine girecektir.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-shopping-cart icon-medium"></i>
                    </div>
                  
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->


