<?php include("../public/session.php"); ?>
<?php include("../view/headers.php"); ?>
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
                        <button class="btn btn-danger"><span class='glyphicon glyphicon-print'></span> Print This Trial Balance</button>
                    </div>
                  </form>
              </div>
          <div class="panel panel-default">
       <div class="panel-heading"> <span class="account-name">Trial Balance</span>
         </div>
            <div class="panel-body">
              <div class="table-responsive">
                  <table class="table" >
                    <tr class="info">
                        <th>S.No</th>
                        <th>Heads Of Accounts</th>
                        <th>Debit</th>
                        <th>Credit</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>343323</td>
                        <td>0</td>
                    </tr>
                    <tr class="danger">
                      <td></td>
                      <td>Total</td>
                      <td>132233</td>
                      <td>132233</td>
                    </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
     </div>
<?php include("../view/footer.php"); ?>