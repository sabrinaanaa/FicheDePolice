<?php
session_start(); 

















 if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$birth = $_SESSION['birth'];
$email = $_SESSION['email'];
$place0 = $_SESSION['place0'];
$place = $_SESSION['place'];
$country = $_SESSION['country'];
$state = $_SESSION['state'];
$zip = $_SESSION['zip'];
$cin = $_SESSION['cin'];
$passeport = $_SESSION['passeport'];
$sejour = $_SESSION['sejour'];

$newFileName = $_SESSION['newFileName'];
$_SESSION['newFileName'] = $newFileName;
?>
<!doctype html>
<html lang="en">
  <head>
  <link href="w3.css" type="text/css" rel="stylesheet" />

    <style type="text/css">
        .m-signature-pad--body canvas {
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            height: 250px;
            border: 1px solid #CCCCCC;
        }    
    </style>
	
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Sabri Naanaa IT manager Orangers Garden">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Review</title>
	
	<?php

	

?>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
   </head>
  <body class="bg-light">
 
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="./bootstrap/brand/logo.png" alt="" width="72" height="72">
    <h2>Fiche De Police</h2>
    <p class="lead">made by sab</p>
  </div>


 <!-- 
 <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
	
	-->
    
      <h4 class="mb-3">Formulaire</h4>
   <form class="needs-validation" action="Confirmation.php" method="post" name="DAFORM" onSubmit="submitForm();" enctype="multipart/form-data" target="_self" novalidate>
      
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Your First name is / Votre Prenom est </label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="<?php echo $firstName;?>" value="<?php echo $firstName;?>" >
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name / Nom</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="<?php echo $lastName;?>" value="<?php echo $lastName;?>" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Birth Date / Date de Naissance</label>
          <div class="input-group">
           <!-- <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
			-->
            <input type="Date" class="form-control" id="username" name="birth" placeholder="<?php echo $birth;?>" value="<?php echo $birth;?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your Date is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="<?php echo $email;?>" name="email" value="<?php echo $email;?>">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="place0">Address</label>
          <input type="text" class="form-control" id="place0" placeholder="<?php echo $place0;?>" name="place0" value="<?php echo $place0;?>">
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="mb-3">
          <label for="place">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="place" placeholder="<?php echo $place;?>" name="place" value="<?php echo $place;?>">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" name="country" placeholder="<?php echo $country;?>" value="<?php echo $country;?>">
              <option value="<?php echo $country;?>"><?php echo $country;?></option>
              <option>United States</option>
			  <option>United Kingdoms</option>
			  <option>Tunisia</option>
			  <option>France</option>
			  <option>Italy</option>
			  <option>Germany</option>
			  <option>Canada</option>
			  <option>Russia</option>
			  <option>Others</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name ="state" placeholder="<?php echo $state;?>" value ="<?php echo $state;?>">
              <option value="<?php echo $state;?>"><?php echo $state;?></option>
              <option>California</option>
			  <option>Others</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="<?php echo $zip;?>" value="<?php echo $zip;?>">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Document</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked >
            <label class="custom-control-label" for="credit">CIN</label>
			
			
			<div class="col-md-6 mb-3">
            <label for="cin"></label>
            <input type="text" class="form-control" id="cin" name="cin" placeholder="<?php echo $cin;?>" value="<?php echo $cin;?>">
            <small class="text-muted">Full CIN Number displayed on card</small>
            <div class="invalid-feedback">
              CIN Number is required
            </div>
          </div>
			
			
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" >
            <label class="custom-control-label" for="debit">Passeport</label>
			
			 <div class="col-md-6 mb-3">
            <label for="passeport"></label>
            <input type="text" class="form-control" id="passeport" name="passeport" placeholder="<?php echo $passeport;?>" value="<?php echo $passeport;?>">
            <div class="invalid-feedback">
              Passport number is required
            </div>
          </div>
			
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" >
            <label class="custom-control-label" for="paypal">Permis de Séjour</label>
			
			 <div class="col-md-3 mb-3">
            <label for="sejour"></label>
            <input type="text" class="form-control" id="sejour" name="sejour" placeholder="<?php echo $sejour;?>" value="<?php echo $sejour;?>">
            <div class="invalid-feedback">
              Permis de Sejour is required
            </div>
          </div>
			
			
          </div>
        </div>
		
        <div class="row">
          
        </div>
        <hr class="mb-4">
	
    <input type="hidden" name="bodytext" value="It s a test">
	<input type="hidden" name="from" value="<?php echo $email;?>">
	<input type="hidden" name="from_name" value="Sabri">
	<input type="hidden" name="subject" value="<?php echo 'FP '.$lastName.' '.$firstName;?>">
	<input type="hidden" name="to" value="frontdesk.orangersgarden@gmail.com">  
   
    <input type="hidden" name="button_pressed" value="1" />
        
		
		
		
	<div class="w3-container">    
    <h1>Signature / Signature / الإمضاء</h1>
    
  
    
        <div id="signature-pad" class="m-signature-pad">
            <div class="m-signature-pad--body">
                <canvas></canvas>
                <input type="hidden" name="signature" id="signature" value="">
            </div>
        </div>        

        
        <button type="button" class="w3-btn w3-black" onclick="signaturePad.clear();">Effacer</button>
        <button type="button" class="w3-btn w3-red" onclick="download('sig.png');">Enregistrer</button>
   
</div>	
		
		
		
		
		
		
		<button class="btn btn-primary btn-lg btn-block" type="submit" >Signer et confirmer</button>
      </form>
	  
	  
	  
	<!--
	<div class="w3-container">    
    <h1>Signature / Signature / الإمضاء</h1>
    
  
    <form class="w3-container" action="process.php" method="POST" name="DAFORM" onSubmit="submitForm();" enctype="multipart/form-data" target="_self">
        <div id="signature-pad" class="m-signature-pad">
            <div class="m-signature-pad--body">
                <canvas></canvas>
                <input type="hidden" name="signature" id="signature" value="">
            </div>
        </div>        

        <button type="submit" class="w3-btn w3-blue-grey">Envoyer</button>
        <button type="button" class="w3-btn w3-black" onclick="signaturePad.clear();">Effacer</button>
        <button type="button" class="w3-btn w3-red" onclick="download('sig.png');">Enregistrer</button>
    </form>
</div>

-->

<script src="signature_pad.js"></script>
<script type="text/javascript">
var wrapper = document.getElementById("signature-pad"),
   canvas = wrapper.querySelector("canvas"),
   signaturePad;

/**
*  Behandlung der Größenänderung der Unterschriftenfelds
*/
function resizeCanvas() {
    var oldContent = signaturePad.toData();
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
    signaturePad.clear();
    signaturePad.fromData(oldContent);
}


/**
*  Speichern des Inhaltes als Bild
*/
function download(filename) {
  var blob = dataURLToBlob(signaturePad.toDataURL());
  var url = window.URL.createObjectURL(blob);

  var a = document.createElement("a");
  a.style = "display: none";
  a.href = url;
  a.download = filename;

  document.body.appendChild(a);
  a.click();

  window.URL.revokeObjectURL(url);
}

/**
* DataURL in Binär umwandeln
*/
function dataURLToBlob(dataURL) {
  // Code von https://github.com/ebidel/filer.js
  var parts = dataURL.split(';base64,');
  var contentType = parts[0].split(":")[1];
  var raw = window.atob(parts[1]);
  var rawLength = raw.length;
  var uInt8Array = new Uint8Array(rawLength);

  for (var i = 0; i < rawLength; ++i) {
    uInt8Array[i] = raw.charCodeAt(i);
  }

  return new Blob([uInt8Array], { type: contentType });
}

/**
* Behanlung beim Absenden, damit der Inhalt des Canvas
* übermittelt werden kann, wird dieser als DataURL dem
* versteckten Feld zugewiesen    
*/
function submitForm() {
    //Unterschrift in verstecktes Feld übernehmen
    document.getElementById('signature').value = signaturePad.toDataURL();
}


var signaturePad = new SignaturePad(canvas);
signaturePad.minWidth = 1; //minimale Breite des Stiftes
signaturePad.maxWidth = 5; //maximale Breite des Stiftes
signaturePad.penColor = "#000000"; //Stiftfarbe
signaturePad.backgroundColor = "#FFFFFF"; //Hintergrundfarbe

window.onresize = resizeCanvas;
resizeCanvas();

</script>
	  
	    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Orangers Garden</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="jquery-3.5.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="./bootstrap/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="./bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script>
		</body>
</html>