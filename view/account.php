<?php include("../includes/headers.php"); ?>
   <body>
     <!-- MENU BAR -->
     <?php include("../view/menubar.php"); ?>
     <!-- MENU BAR -->

     <div class="container-fluid body-dashboard" id="main-container">
        <div class="row">
           <div class="col-md-12">
              <div class="container">
                  <form  role="form" id='form-search'>
                     <div class="form-group form-inline navbar-right">
                        <input type='text' class='form-control' name='search'/>
                        <button class="btn btn-info"><span class='glyphicon glyphicon-search'></span>Search</button>
                    </div>
                  </form>
              </div>
          <div class="panel panel-default">
       <div class="panel-heading"> <span class="account-name">Sales Account</span>
         </div>
            <div class="panel-body">
              <div class="table-responsive">
                  <table class="table" >
                    <tr class="info">
                        <th>Count</th>
                        <th>Date</th>
                        <th>Particulars</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2/12/2016</td>
                        <td>Cash Sale of Goods</td>
                        <td>0</td>
                        <td>300</td>
                        <td>
                            <a href=""><span class="glyphicon glyphicon-trash"></span> Edit</a>
                            &nbsp; <a href=""><span class="glyphicon glyphicon-pencil"></span> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2/12/2016</td>
                        <td>Cash Sale of Goods</td>
                        <td>0</td>
                        <td>300</td>
                        <td>
                            <a href=""><span class="glyphicon glyphicon-trash"></span> Edit</a>
                            &nbsp; <a href=""><span class="glyphicon glyphicon-pencil"></span> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2/12/2016</td>
                        <td>Cash Sale of Goods</td>
                        <td>0</td>
                        <td>300</td>
                        <td>
                            <a href=""><span class="glyphicon glyphicon-trash"></span> Edit</a>
                            &nbsp; <a href=""><span class="glyphicon glyphicon-pencil"></span> Delete</a>
                        </td>
                    </tr>
                    </table>
                  </div>
                </div>
               </div>
             <div class="alert alert-danger balance">Balance: <span> 2000 (Debit)</span></div>
           </div>
         </div>
     </div>  
<?php include("../includes/footer.php");?>