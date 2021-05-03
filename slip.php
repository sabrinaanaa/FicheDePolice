<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Fiche d intervention</title>
    <style>
      form {
        /* Just to center the form on the page */
        margin: 0 auto;
        width: 900px;
        /* To see the outline of the form */
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
      }
      form div + div {
        margin-top: 1em;
      }
      
       labelD {
        /* Date Labeld */
        display: inline-block;
        width: 30px;
        text-align: right;
      }
      
      
      
      label {
        /* To make sure that all labels have the same size and are properly aligned */
        display: inline-block;
        width: 333px;
        text-align: right;
      }
      input, textarea {
        /* To make sure that all text fields have the same font settings By default, textareas have a monospace font */
        font: 1em sans-serif;
        /* To give the same size to all text fields */
        width: 300px;
        box-sizing: border-box; /* To harmonize the look & feel of text field border */
        border: 1px solid #999;
      }
      
      
      
      
      input:focus, textarea:focus {
        /* To give a little highlight on active elements */
        border-color: #000;
      }
      textarea {
        /* To properly align multiline text fields with their labels */
        vertical-align: top;
        /* To give enough room to type some text */
        height: 5em;
      }
      .button {
        /* To position the buttons to the same position of the text fields */
        padding-left: 666px;
        /* same size as the label elements */
      }
      button {
        /* This extra margin represent roughly the same space as the space between the labels and their text fields */
        margin-left: .5em;
      }
      
      
      /*
      .wrapper {
  margin: 1em;
  max-width: 500px;
}

p {
  color: white;
  font-size: 24px;
  
  /* Main Style for the paragraph effect */
  display: inline;
  background: #191c34;
  padding: 4px;
  line-height: 1.8;
}
      
 */     
    </style>
    
</head>

<body>
    
    
    
<?php $slip_nr = $_GET["slip_nr"];   ?>
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
        
        
        
        
    <form action="update.php" method="post">
       
        
        <div>
          <label for="Date">Nr: </label> <input type="text" id="Date" name="slip_nr">
        </div>
        
       
        <div>
          <label for="Date">Hammamet Le:</label> <input type="text" id="Date" name="slip_date">
        </div>
       
       
       <div>
           
          <p style="text-align:center">FICHE D INTERVENTION</p>
 
        </div>
        
        <div>
          <label for="name">DATE DE RECEPTION:</label> <input type="text" id="name" name="slip_rdate">
        </div>
        
        <div>
            <p style="text-align:left">CLIENT</p>
         
        </div>
        
        <div>
          <label for="name">RAISON SOCIALE:</label> <input type="text" id="name" name="slip_cname">
        </div>
        
        <div>
          <label for="name">CONTACT:</label> <input type="text" id="name" name="slip_ccontact">
        </div>
        
        <div>
          <label for="name">ADRESSE:</label> <input type="text" id="name" name="slip_cadress">
        </div>
        
        
        <div>
          <label for="name">TEL:</label> <input type="text" id="name" name="slip_ctel">
        </div>
        
        <div>
          <label for="name">TEL MOBILE:</label> <input type="text" id="name" name="slip_cmobile">
        </div>
        
        <div>
          <label for="mail">E-mail:</label> <input type="email" id="mail" name="slip_cmail">
        </div>
        
        
        
        
        <div>
             <p style="text-align:left">MACHINE:</p>
         
        </div>
        
        <div>
          <label for="name">REFERENCE:</label> <input type="text" id="name" name="slip_mreference">
        </div>
        
        <div>
          <label for="name">DESIGNATION:</label> <input type="text" id="name" name="slip_mdesign">
        </div>
        
        <div>
          <label for="name">N° SERIE:</label> <input type="text" id="name" name="slip_mserial">
        </div>
       
       
        <div>
          <label for="name">STATUS:</label> <input type="text" id="name" name="slip_mstatus">
        </div>
       
       
       
      
       
       
       
        <div>
            <p style="text-align:left">DESCRIPTION DE LA PANNE</p>
                   <textarea id="msg" name="slip_faultdesc"></textarea>
        </div>
       
       
        <div>
            <p style="text-align:left">INTERVENTION</p>
                    <textarea id="msg" name="slip_intervention"></textarea>
        </div>
       
       
        <div>
            <p style="text-align:left">COMPOSANTS REMPLACER</p>
                    <textarea id="msg" name="slip_components"></textarea>          
        </div>
       
       
       
       
        <div>
          <label for="name">MAKTABI:	</label> 
        </div>
       
       
        <div>
          <label for="name">Réparer par:</label> <input type="text" id="name" name="slip_reparer">
        </div>
       
       
        <div>
          <label for="name">Prix:	</label> <input type="text" id="name" name="slip_price">
        </div>
       
        <div>
         <p style="text-align:left">NB: Retour accepter seulment dans les 48H</p> 
        </div>
       
       
        <div>
          <p style="text-align:center">Av. du Koweit - 8050 Hammamet.</p> 
        </div>
       
       
        <div>
          <p style="text-align:center">Tel : +216 72 264 258 / Fax : +216 72 263 222 / E-mail : maktabi2013@gmail.com</p> 
        </div>
       
       
        
       
        <div class="button">
          <button type="submit">Save</button>
        </div>
    </form>
</body>

</html>