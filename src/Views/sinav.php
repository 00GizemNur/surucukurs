<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="?sinav">Örnek Sınav</a></li>
                    <li class="list-inline-item text-white h3 font-secondary nasted"></li>
                </ul>
                <p class="text-lighten">Ehliyet sınav sorularını çözerek sınava hazırlananın!  <br>                                                 
                 Aşağıda yer alan 50 soruluk sınav örneği, çıkmış ehliyet sınav sorularından hazırlanmıştır.</p>

            </div>
        </div>
    </div>
</section>
<!-- sayfa başlık -->

<!-- sayfa başlık -->



<style>
     body {
        background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg);
	background-position: center; /* Görseli Ortala */
	background-repeat: no-repeat; /* Resmi tekrarlama */
  
	background-size: cover;

	margin:0;
	padding:0;

}
*{
	box-sizing: border-box;
	font-family: sans-serif;
}

        #main {
            width: 80%;
            max-width: 950px;
            border: 1px gray solid;
            margin: auto;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
        }





.quiz_wrapper{
	height: 650px;
	width: 950px ;
	background-color: #d47fb8 ;
    position: relative;
    right: 150px;
    top: -20px;
    margin:80px auto;
	margin-right: 250px;
	
	border-radius: 8px;
	padding: 40px;
}

.quiz_wrapper .question{
	padding: 15px;
	background-color:#77007e;
	border-radius: 8px;
	color:#ffffff;
	font-size:20px;
	float: left;
	width: 100%;

}
.quiz_wrapper .options{
	float: left;
	width: 100%;
}

.quiz_wrapper .options ul{
	list-style: none;
	padding: 0px;
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
}

.quiz_wrapper .options ul li{
	display: inline-block;
	background-color:#ffc7fa;
	width: 47%;
	padding: 15px;
	border-radius:8px;
	margin-top: 25px;
	font-size: 15px;
	color:#0f0e0e;
	box-shadow: 0px 3px 0px rgb(199, 199, 199);
	cursor: pointer;
	outline: none;
	text-align: center;
}
.quiz_wrapper .options ul li:active{
	box-shadow: 0px 3px 0px transparent;	

}
.quiz_wrapper .options ul li.correct{
	background-color: #0fd40f;
	box-shadow: 0px 3px 0px #03a503;
}

.quiz_wrapper .options ul li.wrong{
	background-color: #e91e1e;
	box-shadow: 0px 3px 0px #cb0b0b;
}

.quiz_wrapper .score{
	float: left;
	width: 100%;
   
    
	padding:25px 0px;

}

.quiz_wrapper .score .next{
	width: 40%;
	float: left;
 
}
.quiz_wrapper .score .next button{
	padding: 15px 80px;
	color:white;
	background-color:#77007e;
	border:none;
	border-radius:8px;
	font-size: 15px;
	cursor: pointer;
	box-shadow: 0px 3px 0px #c906af;
	outline: none;
}
.quiz_wrapper .score .next button:active{
box-shadow: 0px 3px 0px transparent;	
}

.quiz_wrapper .score .score-card{
	width: 60%;
	float: left;
}
.quiz_wrapper .score .score-card{
	font-size: 20px;
	color:white;
	line-height: 50px;
	text-transform: uppercase;
}
.quiz_wrapper .score .score-card span{
	background-color: rgb(0, 47, 201);
	padding: 5px 20px;
	border-radius: 8px;
	color:#ffffff;

}



.welcome_text {
  width: 400px;
}



.welcome_form input,
.welcome_form button {
  display: block;
  width: 100%;
}

.welcome_form input {
  background-color: transparent;
  color: #fff;
  font-size: 30px;
  text-align: center;
  border: none;
  border-bottom: 1px solid #fff;
  margin-bottom: 15px;
}

.welcome_form input:focus {
  outline: none;
}

.welcome_form button {
  padding: 20px 0;
  border: none;
  border-radius: 100px;
  background-color: rgb(243, 167, 220);
  color: #341f97;
  font-size: 22px;
  transition: 0.4s all;
}

.welcome_form button:hover {
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.2);
  transform: translateY(-5px);
  cursor: pointer;
}
#timer {
	background-color: rgb(0, 47, 201);
	padding: 4px;
	border-radius: 4px;
	color:#ffffff;
	width: 16.5%;
	float: right;
}
#saniye {
	background-color: rgb(0, 47, 201);
	padding: 4px ;
	border-radius: 4px;
	color:#ffffff;
	width: 5%;
;
	float: right;
}
#kronometre {
	background-color: rgb(0, 47, 201);
	padding: 4px ;
	border-radius: 4px;
	color:#ffffff;
	width: 20%;
	float: right;
}
    </style>



<div class="quiz_wrapper">
           <div class="quiz-time">
            <br><div id="saniye">&nbsp;</div> <div id="timer">Kalan Süre:&nbsp; </div>       
    </div>
   
           <div class="question" id="questionBox"> </div>
           <div class="options">
              <ul id="ul">
                  <li id="op1" onclick="button(this)"></li>
                  <li id="op2" onclick="button(this)"></li>
                  <li id="op3" onclick="button(this)"></li>
                  <li id="op4" onclick="button(this)"></li>
              </ul>
           </div>
           <div class="score">
               <div class="next">
                  <button type="button" onclick="next()" id="button">İleri</button>
               </div>

               <div class="score-card">
                  Skor : <span id="scoreCard">0</span>
               </div>
                <div id="kronometre">
          <span id="minutes">00</span>:<span id="seconds">00</span> Sürede Tamamladınız.
        </div>
           </div>
  </div>
    <script >

var ul=document.getElementById('ul');
   var btn=document.getElementById('button');
   var scoreCard=document.getElementById('scoreCard');
   var quizBox=document.getElementById('questionBox');
  var op1=document.getElementById('op1');
  var op2=document.getElementById('op2');
  var op3=document.getElementById('op3');
  var op4=document.getElementById('op4');
  var player=document.getElementById("audio-player");
  var timer=document.getElementById('timer');
  var kronometre=document.getElementById('kronometre');
  var zaman=document.getElementById('saniye');
 

var sayac=0;
var deger;
var saniye=61;
function saniyeDurdur()
  {
  window.clearInterval(deger);
  }
function saniyeBaslat()
{
  this.saniye --;
  if(this.saniye >=0){
    document.getElementById('saniye').innerHTML=saniye;
  }
  else{
    window.location.href="?sinav";
    window.alert("Süreniz Bitti");
     
  }
}
var deger=window.setInterval('saniyeBaslat()',1000);

var sec = 0;
      function pad ( val ) { return val > 9 ? val : "0" + val; }
var func;
  

    function timerstart(){
func = setInterval( function(){
              $("#seconds").html(pad(++sec%60));
              $("#minutes").html(pad(parseInt(sec/60,10)));
          }, 1000);
}
timerstart();

          function myStopFunction() {
                  clearInterval(func);
          }
function myClearFunction(){
myStopFunction();
$("#seconds").html(pad(00));
              $("#minutes").html(pad(00));
sec = 0;
}

 while(this.saniye==0){
                  this.app.next();
                  this.app.clickAble();
              }


      var app={
                questions:[
      

                  {q:'SORU Köprücük kemiği kırıklarında yaralının hangi bölgesi tespit edilir?',options:['El','Kalça','Omuz','Göğüs'],answer:3},
                  {q:'SORU Aşağıdakilerden hangisi trafik kazalarının önlenmesinde en önemli unsurdur?',options:['Yolları ve kaldırımları onarmak','Kurallara uymayı alışkanlık hâline getiren bireyler yetiştirmek ','Araçların bakım ve onarımını önemsemek','Yağmurlu ve sisli havalarda daha dikkatli olmak',],answer:4},
                  {q:'SORU Ticari amaçla yük taşımacılığı yapan ve azami ağırlığı 3,5 tonu geçen araç şoförlerinin; sürekli 4,5 saatlik araç kullanma süresi sonunda, eğer istirahata çekilmiyor ise en az kaç dakika mola alması mecburidir? ',options:['45','35','25','20'],answer:1},
                  {q:'SORU Öksüren, nefes alabilen ve tıkandığını ifade edebilen bir kazazedeye aşağıdaki ilk yardım uygulamalarından hangisi yapılır?',options:['Kazazedeye dokunulmadan öksürmeye teşvik edilir.','Bir elin topuk kısmıyla iki kürek kemiğinin arasına 5 kez kuvvetlice vurulur.','Bir elin başparmağı midenin üst kısmına, göğüs kemiği altına gelecek şekilde yumruk yaparak konur, kuvvetle arkaya ve yukarı doğru bastırılır.','Kazazedenin bacakları üzerine ata biner şekilde oturulur ve bir elin topuğuyla göbeğin üzerinden kürek kemiklerine doğru eğik bir baskı uygulanır.'],answer:2},
                  {q:'SORU Bak - Dinle - Hisset yönteminde "Bak" ne anlama gelir? ',options:['Yaralıda kırık olup olmadığına bakılması','Kaza bölgesinde yanıcı madde olup olmadığına bakılması','Kaç yaralı olduğuna bakılması','Yaralının göğüs kafesinin inip kalktığına bakılması'],answer:4},
                  {q:'SORU Aşağıdaki durumların hangisinde motorlu aracın kara yolunda sürülmesi yasaktır?',options:['Sürülecek araç başkasına aitse','Kasko sigortası yaptırılmamışsa','Sürücü belgesi sürülecek aracın cinsine uygun değilse','Aracın periyodik bakım süresi geçmişse'],answer:3},
                  {q:'SORU Yerleşim yeri içinde, trafik işaret levhalarına yaklaşım yönünde kaç metre mesafede duraklamak yasaktır? ',options:['30','25','20','15'],answer:4},
                  {q:'SORU <br>I- Üzerlerini çizerek veya delerek bozma <br> II- Yerlerini değiştirmek veya ortadan kaldırmak <br> III- Görülmelerini güçleştirecek şekilde bir şey atmak <br> Kara yolu yapısı ve trafik işaretleri ile ilgili olarak yukarıdaki davranışlardan hangilerini yapmak yasaktır?',options:['I','I Ve II','II Ve III','I,II Ve III'],answer:4},
                  {q:'SORU Ölümle sonuçlanan trafik kazalarına asli kusurlu olarak sebebiyet veren sürücülerin sürücü belgeleri, ilgili mahkeme tarafından kaç yıl süre ile geri alınır?',options:['1','2','3','4'],answer:1},
                  {q:'SORU   <legend> <img class="rounded-5" src="./public/images/sınav/d.jpg"  </legend> Şekildeki trafik işaretinin anlamı nedir? ',options:['SAĞA DÖNÜLMEZ','SOLA DÖNÜLMEZ','SOLA ZORUNLU YÖN','SAĞA ZORUNLU YÖN'],answer:2},
                  {q:'SORU Aşağıdakilerden hangisi sağa tehlikeli devamlı viraj trafik işaretidir? ',options:['<label><img class="rounded-5" src="./public/images/sınav/t1.jpg" ></label>','<label><img class="rounded-5" src="./public/images/sınav/t2.jpg" ></label>','<label><img class="rounded-5" src="./public/images/sınav/t3.jpg" ></label>','<label><img class="rounded-5" src="./public/images/sınav/t4.jpg" ></label>'],answer:2},
                  {q:'SORU <legend>Şekle göre sürücü nasıl davranmalıdır?<img class="rounded-5" src="./public/images/sınav/t5.jpg" ></legend>',options:['Korna çalıp yayayı durdurmalı','Geçiş hakkını kendi kullanmalı','Geçiş hakkını yayaya vermeli','Yayanın yola girmesini önlemeli'],answer:2},
                  {q:'SORU I- Korkutmak veya şaşırtmak <br>II- Su, çamur ve benzerlerini sıçratmak, atmak ve dökmek <br>III- Keyfi davranışlarda bulunmak suretiyle yaya veya araç trafiğini tehlikeye düşürmekSürücülerin yukarıdaki davranışlarından hangileri, kişilere zarar verecek tedbirsiz ve saygısız davranışlar kapsamına girer?',options:['I','I Ve II','II Ve III','I, II Ve III'],answer:4},
                  {q:'SORU Otomobilinin muayene zamanını öğrenmek isteyen sürücü, aşağıdaki belgelerden hangisini kontrol etmelidir?',options:['Sürücü belgesi','Motorlu araç trafik belgesi','Araç imalat belgesi',' Araç tescil belgesi'],answer:2},
                  {q:'SORU Eğimli iki yönlü dar yollarda karşılaşan araç sürücüleri için aşağıdakilerden hangisi doğrudur?',options:['İnen araç sürücüsünün çıkan araç sürücüsüne yol vermesi','Çıkan araç sürücüsünün inen araç sürücüsüne yol vermesi','İnen araç sürücüsünün çıkan araç sürücüsünü ikaz edip durdurması','İnen araç sürücüsünün aracın motorunu durdurup, vitesi boşa alması'],answer:1},
                  {q:'SORU <legend>Şekildeki trafik işaretinin anlamı nedir?<img class="rounded-5" src="./public/images/sınav/t6.jpg" ></legend>',options:['Ehli hayvanlar giremez.','Ehli hayvanlar geçebilir','Vahşi hayvanlar giremez', 'Vahşi hayvanlar geçebilir.'],answer:4},
                  {q:'SORU Sürücülerin aşağıdaki davranışlarından hangisi trafik kazalarına yol açmaktadır?',options:['Hız sınırlarını aşmaları','Kuralları uygun davranmaları.','Belirli aralıklarla mola vermeleri.',' Araç kullanırken dikkatli olmaları.'],answer:1},
                  {q:'SORU Aşağıdakilerden hangisi Kara Yolları Genel Müdürlüğünün görev ve yetkilerindendir?',options:['Çocuk trafik eğitim parklarını yapmak','Duran ve akan trafiği düzenlemek ve yönetmek','Tüm kara yollarındaki işaretleme standartlarını tespit etmek, yayınlamak ve kontrol etmek.','Sürücü adaylarının teorik ve uygulamalı sınavlarını yapmak ve başarılı olanlara sertifika verilmesini sağlamak.'],answer:3},
                  {q:'SORU Aşağıdakilerden hangisi trafik kazalarına neden olan faktörlerden yol unsuru içinde yer alır?',options:['Havanın sisli olması','Yol zemininin gevşek olması','Yüksek hızda araç kullanılması','Araç fren sisteminin arızalanması'],answer:2},
                  {q:'SORU Aşağıdaki trafik işaretlerinden hangisi yolda gizli buzlanma olabileceğini bildirir?',options:['<label><img class="rounded-5" src="./public/images/sınav/t7.jpg" ></label>','<label><img class="rounded-5" src="./public/images/sınav/t8.jpg" ></label>','<label><img class="rounded-5" src="./public/images/sınav/t9.jpg" ></label>','<label><img class="rounded-5" src="./public/images/sınav/t10.jpg" ></label>'],answer:1},
                  {q:'SORU Kaza sonuçlarının ağırlaşmasını önlemek için olay yerinin değerlendirilmesini kapsar. En önemli işlem olay yerinde oluşabilecek tehlikeleri belirleyerek güvenli bir çevre oluşturmaktır.Verilen bilgi, ilk yardımın temel uygulamalarından hangisiyle ilgilidir?',options:['Bildirme','Koruma','Kurtarma','Tedavi Etme'],answer:2},
                  {q:'SORU Aşağıdakilerden hangisi ilk yardımın amaçlarından biri değildir?',options:['İlaçla tedavi etmek','Durumun kötüleşmesini önlemek','Hayati tehlikeyi ortadan kaldırmak','Yaşamsal fonksiyonların sürdürülmesini sağlamak'],answer:1},
                  {q:'SORU Aşağıdakilerden hangisi yan yatış pozisyonuna alınarak taşınabilir?',options:['Göğüs kemiğinde kırık olan','Bulantı ve kusması olan','Kalça kemiğinde kırık olan','Omurilik zedelenmesi olan'],answer:2},
                  {q:'SORU <br>I. Hoşgörülü olunması <br>II. Bencillikten uzak durulması<br>III. Olaylara aşırı tepki gösterilmesi <br>Trafik ortamını paylaşanlarda, yukarıda verilen tutum ve davranışlardan hangilerinin bulunması hâlinde trafik düzeni ve güvenliği olumlu yönde etkilenir?',options:['Yalnız I','I-II','I--III','HEPSİ'],answer:2},
                  {q:'SORU Şekildeki gibi kontrolsüz kavşakta karşılaşan araçların geçiş hakkı sıralaması nasıl olmalıdır?<br>  <img class="rounded-5" src="./public/images/sınav/t11.png" >',options:['1-2-3','3-1-2','2-1-3','3-2-1'],answer:4},
                  {q:'SORU Araç kornalarının kullanımı ile ilgili olarak aşağıdakilerden hangisi yanlıştır? ',options:['Korkutmadan uyarması','Ses tonunun sabit olması','Uyarı amacı dışında kullanılması','Rahatsız etmeyecek şekilde kullanılması'],answer:3},
                  {q:'SORU  Şekildeki trafik işaretinin anlamı nedir? <img class="rounded-5" src="./public/images/sınav/t12.jpg" >',options:['Açılan köprü','Sola tehlikeli viraj','Soldan daralan kaplama','Sola tehlikeli devamlı viraj'],answer:2},
                  {q:'SORU Araçların muayene süresi dolmasa bile, aşağıdaki hâllerin hangisinden dolayı özel muayenesi zorunludur? ',options:['Üzerinde teknik değişiklik yapıldığında','Sürücüsü veya işleticisi değiştiğinde','Motoru bakımdan geçirildiğinde','Sahibi değiştiğinde'],answer:1},
                  {q:'SORU  <br> I- Motosikletinde aşınmış lastik kullanması<br>II- Seyir hâlinde iken koruma başlığı ve koruma gözlüğü kullanması<br>III- Motosikletine aldığı yolcuya koruma başlığı takması <br>Yukarıdakilerden hangileri güvenilir motosiklet sürücüsünün özelliklerindendir? ',options:['Yalnız I','I-II','II-III','I-II-III'],answer:1},
                  {q:'SORU  <br>I. Şerit değiştirmelerde <br> II. Sağa ve sola dönüşlerde br> III. Bir aracın geçilmesi esnasında <br> Yukarıdakilerin hangilerinde dönüş ışıklarının kullanılması zorunludur? ',options:['Yalnız I','I-II','II-III','I-II-III'],answer:4},
                  {q:'SORU <br>I. Beyaz baston taşıyan<br> II. Kollarında üç siyah yuvarlaklı sarı bant bulunan <br> III. Bir yayanın veya bir köpeğin yardımı ile yürüyen <br> Yukarıda verilen gözleri görmeyen kişilerden hangilerinin, taşıt yolu üzerinde bulunması hâlinde bütün sürücülerin yavaşlamaları, gerektiğinde durmaları ve yardımcı olmaları mecburidir?  ',options:['Yalnız I','I-II','II-III','I-II-III'],answer:4},
                  {q:'SORU Aküden gelen düşük gerilimi, buji tırnakları arasında kıvılcım oluşturacak şekilde yüksek gerilime dönüştüren ateşleme sistemi elemanına ne ad verilir?',options:['Kontak Anahtarı','Endüksiyon Bobini','Konjektör','Sigorta'],answer:2},
                  {q:'SORU Aşağıdakilerden hangisi akünün kendiliğinden boşalmasına neden olur? ',options:['Kutup başlarının sıkı olması','Kutup başlarının temiz olması','Akü reklam etiketinin yırtılması','Üst kısmında pisliklerin birikmesi'],answer:4},
                  {q:'SORU Aracın belli bir mesafe gidebileceği kadar yakıtın araç üzerinde bulundurulmasına yarayan parça hangisidir? ',options:['Torpido','Bagaj','Yakıt deposu','Karter'],answer:3},
                  {q:'SORU ABS fren sistemi, frenleme sırasında tekerleklerin kilitlenmesini önler.Buna göre ABS fren sistemi, frenleme sırasında aşağıdakilerden hangisini artırır? ',options:['Aracın yol üzerinde kaymasını','Direksiyon Hakimiyeti','Virajlarda savrulmayı','Trafik kazası riskini'],answer:2},
                  {q:'SORU Aracın gösterge panelinde bulunan şekildeki gösterge sürücüye neyi bildirir?<img class="rounded-5" src="./public/images/sınav/t13.png" >',options:['Araç Hızını','Yakıt Miktarını','Motor Devir Sayısını','Motor Sıcaklığını'],answer:3},
                  {q:'SORU Akünün artı (+) kutup başı, eksi (-) kutup başına göre nasıldır? ',options:['Daha kısa','Daha ince','Daha kalın','Daha uzun'],answer:3},
                  {q:'SORU Şekilde gösterilen marş motorunun görevi nedir?<img class="rounded-5" src="./public/images/sınav/t14.png" > ',options:['Motora ilk hareketi vermek','Aküyü şarj etmek','Araca ilk hareketi vermek','Motoru çalışma sıcaklığında tutmak'],answer:1},
                  {q:'SORU Şekilde soru işareti (?) ile gösterilen motor soğutma sistemi parçasının adı nedir?<img class="rounded-5" src="./public/images/sınav/t15.png" > ',options:['Kompresör','Radyatör','Vantilatör','Hararet müşiri'],answer:2},
                  {q:'SORU Aşağıdakilerden hangisi sürücüden kaynaklanan trafik kazası sebebidir? ',options:['Havanın yağışlı olması','Aracın bakımsız olması','Alkollü olarak araç kullanması','Yol yapımında hata olması'],answer:3},
                  {q:'SORU Trafik zabıtası veya yetkililerce Kanunda ve yönetmelikte belirtilen hâllerde araçla ilgili belgelerin alınması ve aracın belirli bir yere çekilerek trafikten alıkonulmasına ne denir?',options:['Trafik suçu','Trafik terörü','Trafik kusuru','Trafikten men'],answer:4},
                  {q:'SORU Kamyon, kamyonet ve römorklarda yükle birlikte yolcu taşınırken aşağıdakilerden hangisinin yapılması yasaktır? ',options:['Yüklerin bağlanması','Yolcuların yüklerin üzerine oturtulması','Kasanın yan ve arka kapaklarının kapatılması','Yolcuların kasa içinde ayrılmış bir yere oturtulması'],answer:2},
                  {q:'SORU Alkol en çok beyin hücrelerini etkilemekte ve merkezi sinir sisteminde olumsuz etki yapmaktadır. Buna göre aşağıdakilerden hangisi bu durumun sonuçlarındandır? ',options:['Karar verme ve kendini kontrol edebilme yeteneğinin azalması','Yollarda tehdit unsuru oluşumunun azalması','Kaza yapma riskinin azalması','Sürüş yeteneğinin artması'],answer:1},
                  {q:'SORU Kamu hizmeti yapan yolcu taşıtlarının yolcu veya hizmetlileri bindirmeleri, indirmeleri veya duraklamaları için yatay ve düşey işaretlerle belirlenmiş yere ne ad verilir? ',options:['Garaj','Park yeri','Durak','Otopark'],answer:3},
                  {q:'SORU Kavşağa yaklaşan bir sürücü, trafik işaret ışığının aralıklarla kırmızı yanıp söndüğünü fark etmiştir. Bu durumda sürücü nasıl davranmalıdır? ',options:['Durmalı, ilk geçiş hakkını kendisi kullanmalı','Hızını sabit tutmalı, kontrollü bir şekilde geçmeli','Durmalı, ilk geçiş hakkını diğer yönden gelen araçlara vermeli','Hızını azaltmalı, kontrollü bir şekilde durmadan geçmeli'],answer:3},
                  {q:'SORU Kara Yolları Trafik Kanunu’na göre “C1, C1E, C, CE, D1, D1E, D ve DE” sınıfı sürücü belgeleri kaç yıl süreyle geçerlidir? ',options:['2','5','7','10'],answer:2},
                  {q:'SORU Bir aracın yolcu indirmek amacıyla kısa süreli durdurulmasına ne denir? ',options:['Durma','Bekleme','Duraklama','Park Etme'],answer:3},
                  {q:'SORU Frenleri sağlam olan arızalı araç ile çeken araç arasındaki bağlantının uzunluğu en fazla kaç metre olmalıdır? ',options:['2','3','4','5'],answer:4},
                  {q:'SORU Aşağıdakilerden hangisinde araç sürücüsünün emniyet kemeri kullanması zorunludur? ',options:['Motosiklet','İş Makinesi','Lastik tekerlekli traktör','Hususi otomobil'],answer:4},
                  {q:'SORU Aşağıdakilerden hangisi sürücüler için trafik suçudur? ',options:['Seyir hâlindeyken elindeki cep telefonu ile konuşmak','Öndeki aracı güvenli mesafeden izlemek','Yaya ve okul geçitlerinde aracını yavaşlatmak','Gidişe ayrılan sağdaki şeritte seyretmek'],answer:1}, 
                      ],
                index:0,

                load:function(){
                     if(this.index<=this.questions.length-1){
                        quizBox.innerHTML=this.index+1+". "+this.questions[this.index].q;      
                        op1.innerHTML=this.questions[this.index].options[0];
                        op2.innerHTML=this.questions[this.index].options[1];
                        op3.innerHTML=this.questions[this.index].options[2];
                        op4.innerHTML=this.questions[this.index].options[3];
                           this.scoreCard();
                         kronometre.style.display="none"; 

                        
                        
                       
                        }
                        else{

                        quizBox.innerHTML=' <center>Sınav Bitti </center>' ;    
                        op1.style.display="none";
                        op2.style.display="none";
                        op3.style.display="none";
                        op4.style.display="none";
                        btn.style.display="none";
                        timer.style.display="none";
                        kronometre.style.display="";
                        zaman.style.display="none";
                        }
                         if(saniye==0)
                           {  
                              
                              window.clearInterval(func);
                              quizBox.innerHTML="----------Sınav Bitti!----------" ;    
                        op1.style.display="none";
                        op2.style.display="none";
                        op3.style.display="none";
                        op4.style.display="none";
                        btn.style.display="none";
                        timer.style.display="none";
                        kronometre.style.display="";   
                       
                           }

                },
                 next:function(){
                    this.index++;
                    this.load();
                    
                 },
                check:function(ele){
                   
                         var id=ele.id.split('');
                         
                         if(id[id.length-1]==this.questions[this.index].answer){
                          this.score++;
                          ele.className="correct";
                          ele.innerHTML="Doğru";
                          this.scoreCard();

                         }
                         else{
                          ele.className="wrong";
                          ele.innerHTML="Yanlış";
                           document.getElementById('op' + this.questions[this.index].answer).className ="correct";
                         }
                },
                notClickAble:function(){
                       for(let i=0;i<ul.children.length;i++){
                            ul.children[i].style.pointerEvents="none";

                       }
                },

                clickAble:function(){
                       for(let i=0;i<ul.children.length;i++){
                            ul.children[i].style.pointerEvents="auto";
                            ul.children[i].className=''
                       }
                },
                score:0,
                scoreCard:function(){
                  scoreCard.innerHTML=this.questions.length+"/"+this.score;
                }
                
           }


           window.onload=app.load();

           function button(ele){
                 app.check(ele);
                 app.notClickAble();
           }

         function  next(){
              app.next();
              app.clickAble();
              this.sayac++;
              this.saniye=61;
             
              if(sayac>49)
                      {
                            clearInterval(func);
                            window.clearInterval(deger);
                      }
         }
    </script>

    




