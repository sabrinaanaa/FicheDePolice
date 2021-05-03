<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Fiche de Police</title>
        
<link rel="stylesheet" href="style.css">

</head>

<body>
   <!-- 
    <form method="get" action="read.php">
    <button type="submit">Read</button>
	</form>
	
   <div class="button">
          <button type="submit">Consulter</button>
        </div>
        
        
         <form method="get" action="modify.php">
       
          <button type="submit">Modifier</button>
        
        
        </form>
        
        
        <div class="button">
          <button type="submit">Imprimer</button>
        </div>
        
      -->  
    <form action="insert.php" method="post">
       
         <!-- 
		
        <div>
          <label for="Date">Nr: </label> <input type="text" id="Date" name="slip_nr">
        </div>
        
       
        <div>
          <label for="Date">Hammamet Le:</label> <input type="text" id="Date" name="slip_date">
        </div>
       
       
       
        
        <div>
          <label for="name">DATE DE RECEPTION:</label> <input type="text" id="name" name="slip_rdate">
        </div>
          -->  
		  
		  <div>
           
          <p style="text-align:center">Fiche de Police</p>
 
        </div>
		
        <div id="box-one">
            <p style="text-align:left"></p>
         
        </div>
        
		
		
        <div>
          <label for="name">Réservation:</label> <input type="text" id="name" name="slip_cname">
        </div>
        
        <div>
          <label for="name">Chambre:</label> <input type="text" id="name" name="slip_ccontact">
        </div>
        
        <div>
          <label for="name">Type:</label> <input type="text" id="name" name="slip_cadress">
        </div>
        
        
        <div>
          <label for="name">Régime:</label> <input type="text" id="name" name="slip_ctel">
        </div>
        
		
		</div>
		  
        <div id="box-two">
            <p style="text-align:left">Date Arrivée:</p>
          </div>
        <label for= "DateArrivee">Date Arrivée: </label><input type="date" id="DateArrivee" name"DateArrivee">
		
		
		 <div id="box-two">
            <p style="text-align:left">Date Départ:</p>
         
        </div>
		
		<label for= "DateDepart">Date Depart: </label><input type="date" id="DateDepart" name"DateDepart"> 
		
       
       
        
        
        
        <div id="box-one">
             <p style="text-align:left">Titulaire:</p>
         
        </div>
        
        <div>
          <label for="name">Nom:</label> <input type="text" id="name" name="slip_mreference">
        </div>
        
        <div>
          <label for="name">Prénom:</label> <input type="text" id="name" name="slip_mdesign">
        </div>
        
        <div>
          <label for="name">Mail:</label> <input type="text" id="name" name="slip_mserial">
        </div>
       
       
        <div>
          <label for="name">Nationalité:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
	   <div>
          <label for="name">Venant de:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	    <div>
		
		 <div>
          <label for="name">Allant a:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		</div>
		<div>
		<p>Document:</p>
          <label for="Document">CIN:</label> <input type="radio" id="document" name="document">
		   <label for="Document">Permis de Séjour</label> <input type="radio" id="document" name="document">
		    <label for="Document">Passeport</label> <input type="radio" id="document" name="document">
      
	  </div>
	   
       
      <div>
          <label for="name">Numero Document:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
	   <p>Etat Civil:</p>
          <label for="Etat">Celibataire</label> <input type="radio" id="etat" name="etat">
		   <label for="Etat">En Couple</label> <input type="radio" id="etat" name="etat">
		    <label for="Etat">Avec Enfants</label> <input type="radio" id="etat" name="etat">
			
			<p>Sexe:</p>
          <label for="Document">Male</label> <input type="radio" id="sexe" name="sexe">
		   <label for="Document">Femelle</label> <input type="radio" id="sexe" name="sexe">
		    
			<p><p><div>
          <label for="name">NBr D.Enfants</label> <input type="text" id="name" name="slip_mstatus">
        </div>
	   
	   <div>
          <label for="name">Age de l enfant le plus jeune</label> <input type="text" id="name" name="slip_mstatus">
        </div>
	   <p>
	   <p>
	   <label for= "DateDepart">Date Naissance </label><input type="date" id="DateDepart" name"DateDepart"> 
       <p>
	   <label for= "DateDepart">Date d émission </label><input type="date" id="DateDepart" name"DateDepart"> 
	   <p><div>
          <label for="name">Profession</label> <input type="text" id="name" name="slip_mstatus">
        </div>
	   
	   
	   
       
        <div id="box-one">
            <p style="text-align:left">Adresse</p></div>
			
			<p></p>
          <label for="Document">Rue</label> <input type="radio" id="place" name="place">
		   <label for="Document">Avenue</label> <input type="radio" id="place" name="place">
			<label for="Document">Cours</label> <input type="radio" id="place" name="place">
			<label for="Document">Autres</label> <input type="radio" id="place" name="place">
			
                    <div>
          <label for="name">Adresse</label> <input type="text" id="name" name="slip_mstatus">
        </div>
        <div>
          <label for="name">Numero</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		<div>
          <label for="name">Escalier</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		<div>
          <label for="name">Etage</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		<div>
          <label for="name">Porte</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       <div>
          <label for="name">Localité</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		<div>
          <label for="name">Province</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		<div>
          <label for="name">Pays</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		<div>
          <label for="name">Tel</label> <input type="text" id="name" name="slip_mstatus">
        </div>
		<p></p>
          <p style="text-align:left">Motif du voyage</p></div>
		  <label for="Document">Tourisme</label> <input type="checkbox" id="place" name="place">
		   <label for="Document">Petit Sejour</label> <input type="checkbox" id="place" name="place">
			<label for="Document">Cyclotourisme</label> <input type="checkbox" id="place" name="place">
			<label for="Document">SPA/Wellness</label> <input type="checkbox" id="place" name="place">
			<label for="Document">Sports</label> <input type="checkbox" id="place" name="place">
			<label for="Document">Business</label> <input type="checkbox" id="place" name="place">
			
			
			
        <div id="box-one">
            <p style="text-align:left">1er Accompagnateur</p></div>
                    <div>
          <label for="name">Nom:</label> <input type="text" id="name" name="slip_mreference">
        </div>
        
        <div>
          <label for="name">Prénom:</label> <input type="text" id="name" name="slip_mdesign">
        </div>
       
	   
	   <div>
          <label for="name">Nationalité:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
		
		<div>
		<p>Document:</p>
          <label for="Document">CIN:</label> <input type="radio" id="document1" name="document1">
		   <label for="Document">Permis de Séjour</label> <input type="radio" id="document1" name="document1">
		    <label for="Document">Passeport</label> <input type="radio" id="document1" name="document1">
      
	  </div>
	   
       
      <div>
          <label for="name">Numero Document:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
	   <p>
			<p>Sexe:</p>
          <label for="Document">Male</label> <input type="radio" id="sexe1" name="sexe1">
		   <label for="Document">Femelle</label> <input type="radio" id="sexe1" name="sexe1">
		    
			<p><p>
	   
	   
	   <p>
	   <p>
	   <label for= "DateDepart">Date Naissance </label><input type="date" id="DateDepart" name"DateDepart"> 
	   <p>
	   <label for= "DateDepart">Date d emission </label><input type="date" id="DateDepart" name"DateDepart"> 
	   
	   
	   
       
        <div id="box-one">
            <p style="text-align:left">2eme Accompagnateur</p></div>
                   
				    <div>
          <label for="name">Nom:</label> <input type="text" id="name" name="slip_mreference">
        </div>
        
        <div>
          <label for="name">Prénom:</label> <input type="text" id="name" name="slip_mdesign">
        </div>
       
	   
	   <div>
          <label for="name">Nationalité:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
		
		<div>
		<p>Document:</p>
          <label for="Document">CIN:</label> <input type="radio" id="document2" name="document2">
		   <label for="Document">Permis de Séjour</label> <input type="radio" id="document2" name="document2">
		    <label for="Document">Passeport</label> <input type="radio" id="document2" name="document2">
      
	  </div>
	   
       
      <div>
          <label for="name">Numero Document:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
	   <p>
			<p>Sexe:</p>
          <label for="Document">Male</label> <input type="radio" id="sexe2" name="sexe2">
		   <label for="Document">Femelle</label> <input type="radio" id="sexe2" name="sexe2">
		    
			<p><p>
	   
	   
	   <p>
	   <p>
	   <label for= "DateDepart">Date Naissance </label><input type="date" id="DateDepart" name"DateDepart"> 
	   <p>
	   <label for= "DateDepart">Date d emission </label><input type="date" id="DateDepart" name"DateDepart"> 
	   
	   
	   
				   
				   
				   
		<div id="box-one">
            <p style="text-align:left">3eme Accompagnateur</p></div>
                   
				   
				    <div>
          <label for="name">Nom:</label> <input type="text" id="name" name="slip_mreference">
        </div>
        
        <div>
          <label for="name">Prénom:</label> <input type="text" id="name" name="slip_mdesign">
        </div>
       
	   
	   <div>
          <label for="name">Nationalité:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
		
		<div>
		<p>Document:</p>
          <label for="Document">CIN:</label> <input type="radio" id="document3" name="document3">
		   <label for="Document">Permis de Séjour</label> <input type="radio" id="document3" name="document3">
		    <label for="Document">Passeport</label> <input type="radio" id="document3" name="document3">
      
	  </div>
	   
       
      <div>
          <label for="name">Numero Document:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
	   
	   <p>
			<p>Sexe:</p>
          <label for="Document">Male</label> <input type="radio" id="sexe3" name="sexe3">
		   <label for="Document">Femelle</label> <input type="radio" id="sexe3" name="sexe3">
		    
			<p><p>
	   
	   
	   <p>
	   <p>
	   <label for= "DateDepart">Date Naissance </label><input type="date" id="DateDepart" name"DateDepart"> 
	   <p>
	   <label for= "DateDepart">Date d emission </label><input type="date" id="DateDepart" name"DateDepart"> 
	   
	   
	   
       <div id="box-one">
            <p style="text-align:left">text</p></div>
       
       
        <div>
          <label for="name"></label> 
        </div>
       
       
        <div>
          <label for="name">Signature Titulaire:</label> <input type="text" id="name" name="slip_reparer">
        </div>
       
       
        <div>
          <label for="name">Signature 1er Accompagnateur:	</label> <input type="text" id="name" name="slip_price">
        </div>
       
        <div>
          <label for="name">Signature 2eme Accompagnateur:	</label> <input type="text" id="name" name="slip_PaymentStatus">
        </div>
       
	   <div>
          <label for="name">Signature 3eme Accompagnateur:	</label> <input type="text" id="name" name="slip_PaymentStatus">
        </div>
	   
        <div>
         <p style="text-align:left"></p> 
        </div>
       
       
        <div>
          <p style="text-align:center"></p> 
        </div>
       
       
        <div>
          <p style="text-align:center">Société Anonyme de gestion et d’exploitation touristique et hôtellerie (sageth)
TVA : 0009925D T A M 000 – Rue de Nevers 8050 Hammamet
Tunisie/Tel : +216 72 280 144 – Fax : +216 72 281 077
www.orangersgarden.com
</p> 
        </div>
       
       
        
       
        <div class="button">
          <button type="submit">Save</button>
        </div>
    </form>
</body>

</html>