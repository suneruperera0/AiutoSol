<?php


session_start();
$theapifunction="xyz123";
//Fuction


function test_input($data) {
	$isequal = "=";
$oneone = "1=1";
$quote ='"';
	
if ($data==$isequal or $data==$oneone or $data=="105" or $data==$quote) {
$data="";
}
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




//Validation 



$sessionpass = test_input($_SESSION["pass@"]);



//Checking whether it is there or not 

//accessing the database and value from auth.php and db.php

include 'auth.php';



//code continued  



if ($allowauthencity==1){

?>
  

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon" sizes="57x57" href="Images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="Images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="Images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="Images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="Images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="Images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="Images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="Images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="Images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="Images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="Images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="Images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="Images/favicon-16x16.png">
<link rel="manifest" href="Images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="Images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 /* demo theme styles */
    .container3 {
     
    overflow: auto;

    }	 
	 
	 #container3 {
		   overflow: auto;

}

    .site-header .logo {
      width: 100%;
    }

    .logo span,
    .logo img {
      display: block;
      float: left;
    }

    .logo span {
      padding: 10px 0 0 10px;
    }

    .site-header {
      padding: 5px 0;
      z-index: 10;
    }

    @media (max-width: 767px) {
      .site-header .logo span {
        display: block;
      }
    }


    .demo-wrapper {
      margin-bottom: 50px;
      line-height: 1.6;
    }

/* unvisited link */
a:link {
  color: white;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
  color: white;
}

/* selected link */
a:active {
  color: white;
}

.flex2-container {
	display: inline-block;
 position: relative;
  display: flex;
  flex-direction: row;
  
}

.flex2-container > div {
	display: inline-block;
  width: 40%;
  height: 100%;  
   position: relative;
  margin: 10px;
  padding: 20px;
  font-size: 12px;
}



body {
 background-image: url("Images/1515114578.jpg");
    background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
background-color: #ffffff;
  
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}



.center {
  display: block;
  margin-up: auto;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}
.panel {
 display: block;
  margin-left: auto;
  margin-right: auto;
  
	width: 100%;
	
}


.progress-bg {
	margin: 0 auto;
	width: 65%;
	height: 78px;
	border-radius: 10px;
  text-align: center;
	-moz-box-shadow:    inset 0 0 10px #ccc;
	-webkit-box-shadow: inset 0 0 10px #ccc;
	box-shadow:         inset 0 0 10px #ccc;
}

.progress-bar {
	height: 78px;
	border-radius: 10px;
	float: left;
	width: 50%;
	/* fallback */ 
	background-color: #1c314a; 
	
	/* Safari 4-5, Chrome 1-9 */ 
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1c314a), to(#27425f)); 
	
	/* Safari 5.1, Chrome 10+ */ 
	background: -webkit-linear-gradient(top, #1c314a, #27425f); 
	
	/* Firefox 3.6+ */ 
	background: -moz-linear-gradient(top, #1c314a, #27425f); 
	
	/* IE 10 */ 
	background: -ms-linear-gradient(top, #1c314a, #27425f); 
	
	/* Opera 11.10+ */ 
	background: -o-linear-gradient(top, #1c314a, #27425f);	
}

.progress-bg h3.goal, .progress-bg h3.raised {
	font-family: Arial,sans-serif;
  font-size: 2em;
  font-weight: 600;
	line-height: 78px;
	margin: 0;
	padding: 0;
	text-align: center;
	display: inline;
}


.progress-bg h3.raised {
	color: #fff;
	margin: 14px 25px 0 50px;
	padding: 0 25px 0 0;
}

.progress-bg h3.goal {
	color: #b2b2b2;
  text-align: center;
}

body .progress-bg h3.raised {
    -webkit-animation: fadein 4s; /* Safari and Chrome */
       -moz-animation: fadein 4s; /* Firefox */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera */
            animation: fadein 4s;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari and Chrome */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}​

/* Opera */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}​

.progress-bg h3.goal {
	float: right;
	display: inline;
	padding: 0 25px 0 0;
  text-align: center;
}

body .progress-bg div {
	-webkit-animation: progress-bar 2s ease forwards;
	-moz-animation: progress-bar 2s ease forwards;
	-o-animation: progress-bar 2s ease forwards;
	animation: progress-bar 2s ease forwards;
}

@-webkit-keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

@-moz-keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

@-o-keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

@keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #1c314a;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #1c315a;
}

.button:hover {background-color: #476ECC}

.button:active {
  background-color: #476ECC;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>
</head>
<body>





<?php  
//add navbar
include "navbar.php";

 ?> 
<br>
<br> 
 
</div> 
  
</body>
</html>
        <title>Power Realty</title>  
<link rel="stylesheet" type="text/css" href="pb/goalProgress.css" />
   
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>  
    <body>  
	
    



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="sobdar.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Font Icon -->
    <link rel="stylesheet" href="form/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="form/vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="form/css/style.css">
</head>

<body2>

    <div class="main">

        <div class="container2">
            <form method="POST" id="signup-form" class="signup-form" action="ap.php">
                <div>
				
				<h3>Updating Database</h3>
                    <fieldset>
           		 <h2>Updating Database</h2>
                        <p class="desc">The updating logs are generated below</p>
                        <p class="desc">Please Note: <b> <  > " 1=1 105 </b> and other similar characters are not allowed for security reasons</p>
                       
					   <div class="fieldset-content">
                      
<?php
   
  


//The Post data updated



if (test_input($_POST["apass"])=="" or test_input($_POST["amemo"])=="" or test_input($_POST["fpass"])=="" or test_input($_POST["fmemo"])=="" or test_input($_POST["ipass"])=="" or test_input($_POST["imemo"])=="" or test_input($_POST["vcpass"])=="" or test_input($_POST["bpackcontent"])=="" or test_input($_POST["bpackprice"])=="" or test_input($_POST["bpackprice2"])=="" or test_input($_POST["bpackprice3"])=="" or test_input($_POST["bcolor"])=="" or test_input($_POST["spackcontent"])=="" or test_input($_POST["spackprice"])=="" or test_input($_POST["spackprice2"])=="" or test_input($_POST["spackprice3"])=="" or test_input($_POST["scolor"])=="" or test_input($_POST["ppackcontent"])=="" or test_input($_POST["ppackprice"])=="" or test_input($_POST["ppackprice2"])=="" or test_input($_POST["ppackprice3"])=="" or test_input($_POST["pcolor"])=="" or test_input($_POST["plpackcontent"])=="" or test_input($_POST["plpackprice"])=="" or test_input($_POST["plpackprice2"])=="" or test_input($_POST["plpackprice3"])=="" or test_input($_POST["plcolor"])=="" or test_input($_POST["cpackcontent"])=="" or test_input($_POST["cpackprice"])=="" or test_input($_POST["cpackprice2"])=="" or test_input($_POST["cpackprice3"])=="" or test_input($_POST["ccolor"])=="" or test_input($_POST["ipackcontent"])=="" or test_input($_POST["ipackprice"])=="" or test_input($_POST["ipackprice2"])=="" or test_input($_POST["ipackprice3"])=="" or test_input($_POST["icolor"])=="" or test_input($_POST["pbachieved"])=="" or test_input($_POST["pbfrom"])=="" or test_input($_POST["newcontent"])=="" or test_input($_POST["clientid"])=="")
{	
	echo 'One of the field is blank or Invaild Character is used. <br> Please note : <b> <  > " 1=1 105 </b> and other similar characters are not allowed for security reasons';
}
	
else{	

	
if ($theapifunction=="xyz123"){


//Update admin Sql 
$apass=test_input($_POST["apass"]);
$amemo=test_input($_POST["amemo"]);
include 'db2.php';
$sql ='UPDATE control SET pass="'.$apass.'", memo="'.$amemo.'" WHERE id="'."admin".'"';
if ($conn->query($sql) === TRUE) {
  echo "Admin Record updated successfully";
} else {
  echo "Admin Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED


//Update fnf Sql 
$fpass=test_input($_POST["fpass"]);
$fmemo=test_input($_POST["fmemo"]);
include 'db2.php';
$sql ='UPDATE control SET pass="'.$fpass.'", memo="'.$fmemo.'" WHERE id="'."fandf".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>FandF Record updated successfully";
} else {
  echo "<br>FandF Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED





//Update Investor Sql 
$ipass=test_input($_POST["ipass"]);
$imemo=test_input($_POST["imemo"]);
include 'db2.php';
$sql ='UPDATE control SET pass="'.$ipass.'", memo="'.$imemo.'" WHERE id="'."investor".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>Investor Record updated successfully";
} else {
  echo "<br>Investor Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED

//Update VC Sql 
$vcpass=test_input($_POST["vcpass"]);
$vcmemo=test_input($_POST["vcmemo"]);
include 'db2.php';
$sql ='UPDATE control SET pass="'.$vcpass.'", memo="'.$vcmemo.'" WHERE id="'."vc".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>VC Record updated successfully";
} else {
  echo "<br>VC Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED


//Update Package Backer 
$bpackcontent=test_input($_POST["bpackcontent"]);
$bpackprice=test_input($_POST["bpackprice"]);
$bpackprice2=test_input($_POST["bpackprice2"]);
$bpackprice3=test_input($_POST["bpackprice3"]);
$bcolor=test_input($_POST["bcolor"]);
include 'db2.php';
$sql ='UPDATE packages SET packcontent="'.$bpackcontent.'", packprice="'.$bpackprice.'", packprice2="'.$bpackprice2.'", packprice3="'.$bpackprice3.'", color="'.$bcolor.' " WHERE packname="'."Backer".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>Backer Package Record updated successfully";
} else {
  echo "<br>Backer Pacakge Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED


//Update Package Supporter 
$spackcontent=test_input($_POST["spackcontent"]);
$spackprice=test_input($_POST["spackprice"]);
$spackprice2=test_input($_POST["spackprice2"]);
$spackprice3=test_input($_POST["spackprice3"]);
$scolor=test_input($_POST["scolor"]);
include 'db2.php';
$sql ='UPDATE packages SET packcontent="'.$spackcontent.'", packprice="'.$spackprice.'", packprice2="'.$spackprice2.'", packprice3="'.$spackprice3.'", color="'.$scolor.' " WHERE packname="'."Supporter".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>Supporter Package Record updated successfully";
} else {
  echo "<br>Supporter Package Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED


//Update Package Pioneer 
$ppackcontent=test_input($_POST["ppackcontent"]);
$ppackprice=test_input($_POST["ppackprice"]);
$ppackprice2=test_input($_POST["ppackprice2"]);
$ppackprice3=test_input($_POST["ppackprice3"]);
$pcolor=test_input($_POST["pcolor"]);
include 'db2.php';
$sql ='UPDATE packages SET packcontent="'.$ppackcontent.'", packprice="'.$ppackprice.'", packprice2="'.$ppackprice2.'", packprice3="'.$ppackprice3.'", color="'.$pcolor.' " WHERE packname="'."Pioneer".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>Pioneer Package Record updated successfully";
} else {
  echo "<br>Pioneer Package Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED


//Update Package Planeteer
$plpackcontent=test_input($_POST["plpackcontent"]);
$plpackprice=test_input($_POST["plpackprice"]);
$plpackprice2=test_input($_POST["plpackprice2"]);
$plpackprice3=test_input($_POST["plpackprice3"]);
$plcolor=test_input($_POST["plcolor"]);
include 'db2.php';
$sql ='UPDATE packages SET packcontent="'.$plpackcontent.'", packprice="'.$plpackprice.'", packprice2="'.$plpackprice2.'", packprice3="'.$plpackprice3.'", color="'.$plcolor.' " WHERE packname="'."Planeteer".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>Planeteer Package Record updated successfully";
} else {
  echo "<br>Planeteer Package Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED


//Update Package Captain Planet
$cpackcontent=test_input($_POST["cpackcontent"]);
$cpackprice=test_input($_POST["cpackprice"]);
$cpackprice2=test_input($_POST["cpackprice2"]);
$cpackprice3=test_input($_POST["cpackprice3"]);
$ccolor=test_input($_POST["ccolor"]);
include 'db2.php';
$sql ='UPDATE packages SET packcontent="'.$cpackcontent.'", packprice="'.$cpackprice.'", packprice2="'.$cpackprice2.'", packprice3="'.$cpackprice3.'", color="'.$ccolor.' " WHERE packname="'."Captain Planet".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>Captain Planet Package Record updated successfully";
} else {
  echo "<br>Captain Planet Package Error updating record: " . $conn->error;
}
$conn->close();

//UPDATED


//Update package Investor
$ipackcontent=test_input($_POST["ipackcontent"]);
$ipackprice=test_input($_POST["ipackprice"]);
$ipackprice2=test_input($_POST["ipackprice2"]);
$ipackprice3=test_input($_POST["ipackprice3"]);
$icolor=test_input($_POST["icolor"]);
include 'db2.php';
$sql ='UPDATE packages SET packcontent="'.$ipackcontent.'", packprice="'.$ipackprice.'", packprice2="'.$ipackprice2.'", packprice3="'.$ipackprice3.'", color="'.$icolor.' " WHERE packname="'."Investor".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>Investor Package Record updated successfully";
} else {
  echo "<br>Investor Package Error updating record: " . $conn->error;
}
$conn->close();  

//UPDATED

$pbachieved=test_input($_POST["pbachieved"]);
$pbfrom=test_input($_POST["pbfrom"]);
include 'db2.php';
$sql ='UPDATE Settings SET value="'.$pbachieved.','.$pbfrom.'" WHERE Name="'."progressbar".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>progress bar Record updated successfully";
} else {
  echo "<br>progress bar Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED



$newcontent=test_input($_POST["newcontent"]);
include 'db2.php';
$sql ='UPDATE Settings SET value="'.$newcontent.'" WHERE Name="'."content".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>content Record updated successfully";
} else {
  echo "<br>content Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED



$clientid=test_input($_POST["clientid"]);
include 'db2.php';
$sql ='UPDATE Settings SET value="'.$clientid.'" WHERE Name="'."clientid".'"';
if ($conn->query($sql) === TRUE) {
  echo "<br>clientid Record updated successfully";
} else {
  echo "<br>clientid Error updating record: " . $conn->error;
}
$conn->close();  
//UPDATED


}
else{
	echo "API Error";
}
}




//Display the Form 






   ?>

					  
							
                        </div>
							</fieldset>
				
				
				
					
					
					
					
					
                </div>
				
				
				
				
				
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="form/vendor/jquery/jquery.min.js"></script>
    <script src="form/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="form/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="form/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="form/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="form/vendor/nouislider/nouislider.min.js"></script>
    <script src="form/vendor/wnumb/wNumb.js"></script>
    <script src="form/js/main.js"></script>
</body2>

</html>



  




  </div>


<script>
document.title = "Crowdfunding";
</script>



<script>
 if( jQuery('.custom-form').length > 0 ) {
	jQuery('.gfield_radio input[type=radio]').bind("click", function() {
		//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
		jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
	});
}

jQuery(document).bind('gform_page_loaded', function(event, form_id, current_page){
      // code to be trigger when next/previous page is loaded
      if( jQuery('.custom-form').length > 0 ) {
		jQuery('.gfield_radio input[type=radio]').bind("click", function() {
			//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
			jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
		});
	}
  });
  
 if( jQuery('.custom-form').length > 0 ) {
	jQuery('.gfield_radio input[type=radio]').bind("click", function() {
		//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
		jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
	});
}

jQuery(document).bind('gform_page_loaded', function(event, form_id, current_page){
      // code to be trigger when next/previous page is loaded
      if( jQuery('.custom-form').length > 0 ) {
		jQuery('.gfield_radio input[type=radio]').bind("click", function() {
			//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
			jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
		});
	}
  }); 
  
// This is the initial GravityForms binding, it will be lost upon a page change with next/previous
// Thus we make a bind on gform_page_loaded event also
 if( jQuery('.custom-form').length > 0 ) {
	jQuery('.gfield_radio input[type=radio]').bind("click", function() {
		//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
		jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
	});
}

onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex === 0) {
                form.parent().parent().parent().append('<div class="footer footer-' + currentIndex + '"></div>');
            }
            if (currentIndex === 1) {
                form.parent().parent().parent().find('.footer').removeClass('footer-0').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 2) {
                form.parent().parent().parent().find('.footer').removeClass('footer-1').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 3) {
                form.parent().parent().parent().find('.footer').removeClass('footer-2').addClass('footer-' + currentIndex + '');
            }
            // if(currentIndex === 4) {
            //     form.parent().parent().parent().append('<div class="footer" style="height:752px;"></div>');
            // }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
</script>
<script>

 
function updatefunction() {
			let element = document.querySelectorAll("a[href='."'#finish']".'");

              element.innerHTML = '."`".'<a href="ap.php" role="menuitem">Back</a>'."`;".'
}

updatefunction();
</script>

<?php

}
else {
	
	echo '
	
	<script>
	window.location.href = "login.php";
	</script>
	
	
	';
}

?>
