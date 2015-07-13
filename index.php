<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
<meta name="google-site-verification" content="KKFUHHW1lI7uTdUwviDpgOVkE_FZreETKkdBfG8R29w" />
<meta name="description" content="बचतले जिवन सम्बृद्धि बनाउन सहयोग गर्छ भन्ने धारणा लिई वि.सं. २०६३ सालमा बचतको लागि खोलिएको हसना कोषको बिस्तारित संस्था नै यस हसना बचत तथा ऋण सहकारी संस्था लि. बलम्बु (भास्तिपुर) हो । यस संस्थाले नियमन निकाय डिभिजन सहकारी कार्यालय, काठमाडौंबाट मिति २०६५ साल चैत्र १९ गने दर्ता भई दर्ता नं. २१५८ पाएको छ ।" />
<title>हसना बचत तथा ऋण सहकारी संस्था लि‌</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<!-- Main css -->
<link rel="stylesheet" type="text/css" href="css/import.css" />



<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery-1.6.1.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/modernizr.custom.js" charset="utf-8"></script>

<!-- nav js -->
<script type="text/javascript" src="js/nav.js" charset="utf-8"></script>

<!-- Slider -->
<link rel="stylesheet" type="text/css" href="css/camera.css" />
<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/camera.min.js'></script> 

<script>
	jQuery(function(){
		
		jQuery('#camera_wrap_1').camera({
			height: '382px',
			thumbnails: true
			
		});

	});
</script>

<!-- pop up -->
<script type="text/javascript">
$(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		//var maskHeight = $(document).height();
		//var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		//$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		//var winH = $(window).height();
		//var winW = $(window).width();
              
		//Set the popup window to center
		//$(id).css('top',  winH/2-$(id).height()/5);
		//$(id).css('left', winW/2-$(id).width()/5);
	
		//transition effect
		$(id).fadeIn(2000); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	//$('#mask').click(function () {
		//$(this).hide();
		//$('.window').hide();
	//});		
	
});

</script>

<style type="text/css">

#mask {
  position:fixed;
  left:0;
  top:0;
  bottom:0;
  z-index:9000;
  background-color:#000;
  display:block;
  width:100%;
  height:100% !important;
}  
#boxes .window {

  left:0;
  top:0;
  width:auto;
  height:auto;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes #dialog {
  width:auto; 
  height:auto;
  padding:10px;
  background-color:#eeeeee;
  position:fixed;
}
.close{
	position:absolute;
	top:-12px;
	right:-12px;
	}
</style>
</head>

<body>

<?php include('includes/header.php'); ?>
<?php $current=1; include('includes/navigation.php'); ?>

<main role="main">
<section id="wrapper">
	<section class="main-wrapper">
    <!-- Slider starts here -->
    <div class="fluid_container">
    <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="images/slider/1.jpg" data-src="images/slider/1.jpg">
                <div class="camera_caption fadeFromBottom">
                    संस्थाका सञ्चालक समिति तथा कर्मचारी समुह
                </div>
            </div>
            <div data-thumb="images/slider/2.jpg" data-src="images/slider/2.jpg">
                <div class="camera_caption fadeFromBottom">
                    संस्थाको तेस्रो वार्षिक साधारण सभामा सम्मानित विद्यार्थीहरू, अतिथिहरू तथा सञ्चालक समिति
                </div>
            </div>
            <div data-thumb="images/slider/3.jpg" data-src="images/slider/3.jpg">
                <div class="camera_caption fadeFromBottom">
                    हसना सोसियल सोसाइटी तथा स्पार्क हेल्थ होमको संयुक्त आयोजनामा संचालित निशु:ल्क स्वास्थ्य शिविर
                </div>
            </div>
            <div data-thumb="images/slider/4.jpg" data-src="images/slider/4.jpg">
                <div class="camera_caption fadeFromBottom">
                   मातातीर्थ वृद्धाश्रममा भोजन दान कार्यक्रम
                </div>
            </div>
            <div data-thumb="images/slider/5.jpg" data-src="images/slider/5.jpg">
                <div class="camera_caption fadeFromBottom">
                  दोस्रो खुल्ला रक्तदान कार्यक्रममा अतिथिहरूको साथमा हसना समुह
                </div>
            </div>
            <div data-thumb="images/slider/6.jpg" data-src="images/slider/6.jpg">
                <div class="camera_caption fadeFromBottom">
                   नेपाल सम्वत् ११३३ को उपलक्ष्यमा आयोजित मोटरसाइकल र्‍यालीमा सहभागी हुँदै हसना समुह
                </div>
            </div>
        </div>
    </div>
    <!-- Slider ends -->
    
    <section class="main_news">
        	<section class="news_details">
            <h1>हाम्रा खबरहरू</h1>
            <section class="home_news">
            	<img title="" alt="" src="images/news_pic_01.jpg">
                <h2>सहकारीमा सञ्चालकको संलग्नता</h2>
                <p>अहिलेको समयमा सहकारी क्षेत्रमा एउटा विषय चर्चा तथा विवादास्पद रूपमा आएको छ । सहकारी संस्थाका सञ्चालकहरू संस्थामा कार्यकारीको रूपमा रहन नपाउने विषयमा निकै चर्चा भइरहेको छ । यस विषयमा सबैले आ-आफ्नो भनाई तथा सुझाव व्यक्त गरिरहेका छन् । तर यो विषय ठीक हो वा होइन भनी ठोस निष्कर्ष निस्कन सकेको छैन ।</p>
               
                <h3><a href="info.php#fst-news">बाँकी अंश‌...</a></h3>
            </section>
            
            <section class="home_news">
            	<img title="" alt="" src="images/news_pic_02.jpg">
                <h2>होर्डिङ्ग बोर्डको समस्या</h2>
                <p>सहकारी संस्थालाई व्यवस्थित तथा सहकारीको मूल्य, मान्यता अनुरूप सञ्चालन गर्न सहकारी संस्थाको होर्डिङ्ग बोर्ड एउटै साइज ( ३ x ४) को तयार गर्नुपर्ने नियम ल्याएको नियमन सहकारी निकायले समेत यस नियमलाई स्थायित्व दिन सकिरहेको छैन ।</p>
               
                <h3><a href="info.php#snd-news">बाँकी अंश‌...</a></h3>
            </section>
            </section>
            <section class="events">
            <h1>हाम्रा कार्यक्रमहरू</h1>
            	
                <section class="event_detail">
                <section class="event_date">
                <h2>चैत्र</h2>
                <h3>२१</h3>
                </section>
                <section class="event_desc">
                <h2>रक्तदान कार्यक्रम</h2>
                <p>यही गएको चैत्रमा हसना सोसियल सोसाइटीसँग सहकार्य गरी चौथो खुल्ला रक्तदान कार्यक्रम सम्पन्न भएको छ ।</p>
               <!-- <h2><a href="">बाँकी अंश‌...</a></h2>-->
                </section>
                </section>
                
                <section class="event_detail">
                <section class="event_date">
                <h2>चैत्र</h2>
                <h3>१९</h3>
                </section>
                <section class="event_desc">
                <h2>‌सातौ वार्षिकोत्सव</h2>
                <p>यस हसना बचत तथा ऋण सहकारी संस्था लि‌ को ‌सातौ वार्षिकोत्सव मिति २०७१ चैत्र १९ का दिन संस्थाको कार्यालयमा मनायौ‌ ।</p>
                <!--<h2><a href="">बाँकी अंश‌...</a></h2>-->
                </section>
                </section>
                
                <section class="event_detail">
                <section class="event_date">
                <h2>म‌सीर</h2>
                <h3>२७</h3>
                </section>
                <section class="event_desc">
                <h2>छैठौ‌ वार्षिक साधारण सभा</h2>
                <p>यस संस्थाको छैठौ‌ वार्षिक साधारण सभा यही मिति २०७१ म‌सीर २७ गते शनिबारका दिन संस्थाको कार्यालय प्राङ्गण बलम्बु २ काठमाडौंमा सम्पन्‍न भएको छ ।</p>
                <!--<h2><a href="">बाँकी अंश‌...</a></h2>-->
                </section>
                </section>
            
            	<section class="event_detail">
                <section class="event_date">
                <h2>असोज</h2>
                <h3>२२</h3>
                </section>
                <section class="event_desc">
                <h2>मातातिर्थ वृद्धाश्रममा भोजन दान</h2>
                <p>यस संस्थाले पहिलाका वर्षहरूमा जस्तै यही गएको २०७१ असोज २२ गते पनि मातातिर्थ वृद्धाश्रममा भोजन दान कार्यक्रम सम्पन्‍न गरेको छ ।</p>
                <!--<h2><a href="">बाँकी अंश‌...</a></h2>-->
                </section>
                </section>
                
            	
                
                <!--<section class="event_detail">
                <section class="event_date">
                <h2>भाद्र </h2>
                <h3>८</h3>
                </section>
                <section class="event_desc">
                <h2>निशु:ल्क स्वास्थ्य शिविर</h2>
                <p>यस संस्थाको प्रायोजनमा बाडभञ्ज्याङ्ग गा.वि.स.को मसिनेमा निशु:ल्क स्वास्थ्य शिविर सम्पन्न भयो ।</p>
                </section>
                </section>-->
                
            </section>
        </section>
    
    </section>
    


</section>
</main>

<!-- pop up details start -->
<!-- <div id="boxes">
<div style="top: 100px; left: 36%; display: none;" id="dialog" class="window">

<a href="#" class="close"><img src="images/popup/close.png" alt="Close" title="Close" /></a>
<img src="images/popup/Blood-Donation.jpg" alt="रक्तदान कार्यक्रम" title="रक्तदान कार्यक्रम"/>
</div>  -->
 <!-- Mask to cover the whole screen -->
<!-- <div style=" display: none; opacity: 0.8;" id="mask"></div>
</div> -->

<?php include('includes/footer.php');?>

</body>
</html>