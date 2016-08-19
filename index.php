<?php include("view/header.php"); ?>
  <body>
<div id="screen">
  <!-- Custom Responsive Menu Bar -->
        <div class = "menu">
           <div class = "logo">
               <a href="index.html">Accountant50</a>
           </div>
           <div class = "items">
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">About</a></li>
                  <li id="last"><a href="#">Contact</a></li>
              </ul>
          </div>
        </div> 
   <!-- Custom Responsive Menu Bar -->
  <!-- Body Section -->   
  <div id="topcontainer">
   
    <div class="container toprow">
     <div class="row">
        <div class="col-md-6 col-md-offset-3">
           <h1 align="center" class="my-font">Welcome to <span class="logo-body">Accountant50</span></h1>
           <p class="lead" align="center">Accountant50 is an Online Accounting Application which is capable of performing small business accounting. </p>
            
           <h1 class="my-font" align="center">Features</h1>
            <p class="lead" align="center"><span class="logo-body">Accountant50</span> is empowered with lots of features such as ledger entry, statements and print capability etc. </p>
            <div class="alert alert-danger" id="message"></div>
            <form>
               <div class="input-group input-style">
                   <span class="input-style input-group-addon glyphicon glyphicon-user" id="glyph"></span>
                   <input type="text" class="user input-style form-control" name="username" placeholder="Enter Username"/> 
               </div>
               </br>
               <div class="input-group input-style">
                   <span class="input-style input-group-addon glyphicon glyphicon-lock" id="glyph"></span>
                   <input type="password" class="pass input-style form-control" name="password" placeholder="Enter Your Password"/>
               </div>
                   <button class="button mv" align="center">Click To Login</button>
            </form>      
        </div>
     </div>    
    </div>
  </div> 
  <!-- END: Body Section -->
  <!-- Footer -->
  <footer>
      <div class="foot">
           <p>Copyright &copy; 2016 <a href="index.php">Accountant50</a>
               &amp; <a href="http://www.cs50.tv">CS50.tv</a></p>
      </div>
  </footer>
  <!-- Footer -->
</div>
    
  <script>
      $('#screen').css('height', $(window).height());
         
     </script>
  </body>
</html>