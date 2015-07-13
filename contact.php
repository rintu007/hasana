<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
<meta name="google-site-verification" content="KKFUHHW1lI7uTdUwviDpgOVkE_FZreETKkdBfG8R29w" />
<meta name="description" content="बचतले जिवन सम्बृद्धि बनाउन सहयोग गर्छ भन्ने धारणा लिई वि.सं. २०६३ सालमा बचतको लागि खोलिएको हसना कोषको बिस्तारित संस्था नै यस हसना बचत तथा ऋण सहकारी संस्था लि. बलम्बु (भास्तिपुर) हो । यस संस्थाले नियमन निकाय डिभिजन सहकारी कार्यालय, काठमाडौंबाट मिति २०६५ साल चैत्र १९ गने दर्ता भई दर्ता नं. २१५८ पाएको छ ।"" />
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



</head>

<body>

<?php include('includes/header.php'); ?>
<?php $current=1; include('includes/navigation.php'); ?>

<main role="main">
<section id="wrapper">
<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hasana+building+Nepal&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=34.534108,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Hasana+Bldg,+Balambu,+Bagmati,+Central+Region+44600,+Nepal&amp;ll=27.691266,85.2455&amp;spn=0.004712,0.010568&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
	<section class="main-wrapper">
    
    <section id="contact">
    	<section class="contact-left">
        <h1>सम्पर्क</h1><br>

        <p>तपाईंको केही सुझाव सल्लाह भए कृपया सम्पर्क गर्नुहोला ।</p><br>
<br>

        <strong>हसना बचत तथा ऋण सहकारी संस्था लि.</strong><br>
		बलम्बु (भास्तिपुर) - २, काठमाडौ‌<br>
		फोन नं: ०१ - ४३१६१७३<br>
		फ्याक्स: ०१ - ४३१६१७४<br><br>
		इमेल: <a href="mailto:hasana2065@gmail.com">hasana2065@gmail.com</a>
        
        </section>
        
        <section class="contact-right">
        <?php 
if(isset($_POST['Submit'])){
//$to = "iamanilmhj@hotmail.com";
$from = $_POST['email'];			
$subject = "Mail from hasanafamily.com";
$message = "<strong>".$_POST['sender_name']."</strong> Has send you a message.<br/><br/>".$_POST['message']."<br/><br/>Sender: ".$from."<br/>Mobile no: ".$_POST['mobile'];

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'To:hasana2065@gmail.com' . "\r\n";
$headers .= 'From: '.$from.'' . "\r\n";
//$headers .= 'Cc: iamanilmhj@hotmail.com' . "\r\n";
$headers .= 'Bcc: simpleanilcha@yahoo.com' . "\r\n";

//print_r($message); die;      

@mail($to,$subject,$message,$headers);
echo "<script type='text/javascript'>alert('तपाईंको सुझावको लागि धन्यवाद !!!');</script>";
	   }
?>
<form action="" method="post" class="contact_form">
        <p>जिज्ञासा, सुझाव, सल्लाह तथा जानकारीको लागि कृपया तलको फर्म भर्नुहोस् ।</p><br>

            <input type="text" id="name" placeholder="नाम" required name="sender_name"/>
            <div id="msg1"></div>
            <input type="email" id="email" placeholder="इमेल" required name="email" />
            <div id="msg2"></div>
            <input type="text"  placeholder="मोबाइल नं" required name="mobile" />
            <div id="msg3"></div>
            <section class="clear"></section>
            <textarea id="message" placeholder="तपाईंको सुझाव" name="message"></textarea>
            <div id="msg"></div>
            <input type="submit" value="पठाउनुहोस्" class="submit" name="Submit">
            </form>

        </section>
	
    </section>

 	</section>
</section>
</main>    

<?php include('includes/footer.php');?>

</body>
</html>        