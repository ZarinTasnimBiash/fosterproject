<html lang="en">
<head>
<title>admin login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h1>Silver Linings</h1>

<header>
  <h2>Admin Login</h2>
</header>

<section>
  
    <ul>
      <h2>Sign In</h2><br/>
           <section id="section1">
       <div class="title">ADMIN SIGN IN</div>

       <form action="adminlogin.php" class="form_design" method="post">
         <input type="submit" value="ADMIN">
       </form>
     </section>

          <section id="section2">
       <div class="title">USER SIGN IN</div>

       <form action="userlogin.php" class="form_design" method="post">
         <input type="submit" value="USER">
       </form>
     </section>

          <section id="section1">
       <div class="title">FOSTER CARE SIGN IN</div>

       <form action="fosterlogin.php" class="form_design" method="post">
         <input type="submit" value="FOSTER-CARE">
       </form>
     </section>

    </ul>

  
</section>

<footer>
  
</footer>

</body>
</html>
