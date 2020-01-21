<?php
                require 'includes/header.php';
            ?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/e-store.jpg" />
        <title>Contact us |  E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
            

<style>
    .gfg2 { 
                text-align:left; 
                margin-bottom: 2px;
            } 
             .main { 
                border:1px solid black; 
            } 
   img{
            float:right;
       }
       .responsive{
           margin-left: 600px;
          
       }
            
            
div.elem-group {
  margin: 20px 20px 20px 30px;
}
h4{
  margin: 0px 0px 0px 30px;  
}
h1{
    margin: 0px 0px 0px 30px;
}

h3{
 margin: 0px 0px 0px 30px;   
}

p{
  margin: 20px 20px 20px 30px;  
  font-weight: bold;
}



label {
  display: block;
  font-family: 'Aleo';
  padding-bottom: 4px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Aleo';
  width: 500px;
  padding: 8px;
}

textarea {
  height: 150px;
}

button {
  height: 50px;
  background: green;
  color: white;
  border: 2px solid darkgreen;
  font-size: 1.25em;
  font-family: 'Aleo';
  border-radius: 4px;
  cursor: pointer;
   margin: 20px 20px 20px 0px;
}

button:hover {
  border: 2px solid black;
}
</style>
<div class="container" id="content">
<img src="img/contact.png" class="img-responsive"  width="330" height="270">      
<h1 >LIVE SUPPORT</h1>
<p>24 hours | 7 days a week | 365 days a year Live Technical Support <br><br>
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. 
    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).ok like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><BR>
<form action="contact_us.php.php" method="post">
    
     
  <div class="elem-group">
       <table>
      <tr>
       <th><h2>CONTACT US</h2></th>
       <th><h3>company information :</h3> </th>
       </tr>
       <tr>
       <td><label for="name">Your Name</label></td>
       <td> <h4>500 lorem lpsum Dolor sitt,</h4></td>
       </tr>
       <tr>
           <td> <input type="text" id="name" name="visitor_name" placeholder="Abni Raj" pattern=[A-Z\sa-z]{3,20} required></td>
           <td> <h4>25-56-2-9 sit Amet, Lorem,</h4></td>
       </tr>
  </div>
  <div class="elem-group">
      <tr>
          
      
      <td><label for="email">Your E-mail</label></td>
      
      <td><h4>  USA  </h4></td>
  </tr>
  <tr>
  <td><input type="email" id="email" name="visitor_email" placeholder="Raj0101@email.com" required></td>
  <td> <h4> phone: (00)222 666 444 </h4> </td>
  </tr>
  </div>
  <div class="elem-group">
      <tr>
      <td><label for="message">Write your message</label></td>
      <td> <h4>Fax: (000) 000 00 00 0 </h4></td>
  </tr>
  <tr>
      
  
      <td> <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea></td>
      <td><h4> Email: info@mycompany.com</h4></td>
  
  </tr>
  </div>
    <tr>
    <td> <button type="submit"> Submit </button></td>
  
    <td><h4>Follow on: Facebook,Twitter</h4></td>  
  </tr>
  
</form>
</table>
</div>
 </div>
<?php
   require 'includes/footer.php';
?>
</body>
</html>
        
        
        