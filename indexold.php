<?php
session_start(); 

 if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }

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
    <title>Fiche De Police</title>
	

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
	
	<!--
	<style>
body  {
  background-image: url("img/back.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>

	-->
	
	   
	
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
	  <form class="needs-validation" action="review.php" method="post" novalidate>
      
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name / Prenom / الأسم</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name / Nom / اللقب</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="birth">Birth Date / Date de Naissance / الميلاد</label>
          <div class="input-group">
           <!-- <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
			-->
            <input type="Date" class="form-control" id="birth" name="birth" placeholder="" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your Birth Date is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email / البريد الإلكتروني<span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="mb-3">
          <label for="place0">Address / Adresse / العنوان</label>
          <input type="text" class="form-control" id="place0" name="place0" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="mb-3">
          <label for="place">Address 2 / Adresse 2 / 2 العنوان<span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="place" name="place" placeholder="Apartment or suite" value="">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country / Pays / البلد</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
              <option value="">Choose...</option>
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
            <label for="state">Town / Ville / المدينة</label>
            <select class="custom-select d-block w-100" id="state" name ="state" required>
              <option value="">Choose...</option>
              <option>California</option>
			  <option>Others</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip / C.Post. / الصندوق البريدي</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        
        
        <hr class="mb-4">

        <h4 class="mb-3">Document</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">CIN</label>
			
			
			<div class="col-md-6 mb-3">
            <label for="cin"></label>
            <input type="text" class="form-control" id="cin" name="cin" placeholder="" >
            <small class="text-muted">Full CIN Number displayed on card</small>
            <div class="invalid-feedback">
              CIN Number is required
            </div>
          </div>
			
			
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Passeport</label>
			
			 <div class="col-md-6 mb-3">
            <label for="passeport"></label>
            <input type="text" class="form-control" id="passeport" name="passeport" placeholder="" >
            <div class="invalid-feedback">
              Passport number is required
            </div>
          </div>
			
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">Permis de Séjour</label>
			
			 <div class="col-md-3 mb-3">
            <label for="sejour"></label>
            <input type="text" class="form-control" id="sejour" name="sejour" placeholder="" >
            <div class="invalid-feedback">
              Permis de Sejour is required
            </div>
          </div>
			
			
          </div>
        </div>
        <div class="row">
          
         
        </div>
        <div class="row">
         
          
        </div>
        <hr class="mb-4">
	
    
   
    <input type="hidden" name="button_pressed" value="1" />
	
	        
		
			
    <div id="container"/>
	</div>
		
      
		<button class="btn btn-primary btn-lg btn-block" type="submit">Send Mail / Envoyer l Email / تنزيل</button>
      </form>
	  
	  
	  
	  
	  
	  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
      <span class="file-name">Choose a file...</span>
      <label for="file-upload">Browse
	  <input class="btn btn-primary btn-lg btn-block" type="file" id="file-upload" name="uploadedFile"></label>
    </div>
 
    <input class="btn btn-primary btn-lg btn-block" type="submit" name="uploadBtn" value="Upload" />
  </form>
	  

  
	    

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
