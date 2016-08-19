<?php include("../public/session.php"); ?>
<?php include("../view/headers.php"); ?>
   <body>
     <!-- MENU BAR -->
     <?php include("../view/menubar.php"); ?>
     <!-- MENU BAR -->
       
     <!-- Content -->
     <div class="container-fluid body-dashboard" id="main-container">
        <div class="row">
           <div class="col-md-12">
              <div class="alert alert-success" align="center">You have successfully Logged In as <?= $name['name']; ?>
                  </div>
          <div class="container">
             <form  role="form" id='form-search'>
                 <div class="form-group form-inline navbar-right">
                    <input type='text' class='form-control' name='search'/>
                    <button class="btn btn-info"><span class='glyphicon glyphicon-search'></span> Search</button>
                 </div>
             </form>
          </div>
        <div class="panel panel-info">
         <div class="panel-heading">List Of Accounts
         </div>
            <div class="panel-body">

               <div class="table-responsive">
                  <table class="table">
                    <tr class="info">
                     <th>Serial</th>
                     <th>Account Name</th>
                     <th>Balance</th>
                     <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Expense Account</td>
                        <td>Cr 2000</td>
                        <td><a href=""><span class="glyphicon glyphicon-log-in"></span> View</a></td>
                    </tr>
                  </table>
               </div>
                  </div>
              </div>
            </div>
          </div>
     </div>  
<?php include("../view/footer.php"); ?>