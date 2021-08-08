<html>
 <head>
       <meta charset="uft-8"/>
       <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
       <meta name="discription" content="About the site"/>
       <meta name="author" content="Author name"/>
       <title> The Title </title>

<style>
  body {
    background-color: #2B2D33;
  font-family: 'Dosis', Helvetica, Arial, sans-serif;
  font-weight: 600;
  }
input {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  width: 250px;
  opacity: 0.6;
  position: relative;
}


input:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  opacity: 1;
}
p { 
  text-transform: uppercase;
  color: white;
  font-size: 6em;
  text-align: center;
  text-shadow: 0 0 2px rgba(255, 255, 255, 0.2), 0 0 8px rgba(255, 255, 255, 0.2), 0 0 10px rgba(255, 255, 255, 0.2), 0 0 15px rgba(100, 220, 300, 0.5), 0 0 20px rgba(255, 255, 255, 0.5), 0 0 30px rgba(255, 255, 255, 0.2);
}

</style>
 </head>

 <body>
<center>
<br><br>
       
<link href='https://fonts.googleapis.com/css?family=Dosis:600' rel='stylesheet' type='text/css'>
<p>Silver Linings</p>

     <section id="section1">
       <div class="title"></div>

       <form action="adminlogin.php" class="form_design" method="post">
         <input type="submit" value="ADMIN SIGN IN">
       </form>
     </section>

          <section id="section2">
       <div class="title"></div>

       <form action="userlogin.php" class="form_design" method="post">
         <input type="submit" value="USER SIGN IN">
       </form>
     </section>

          <section id="section1">
       <div class="title"></div>

       <form action="fosterlogin.php" class="form_design" method="post">
         <input type="submit" value="FOSTER CARE SIGN IN">
       </form>
     </section>
     <section id="footer">

     </section>
   </center>

 </body>
</html>