
<?php 
    include("../public/session.php"); 
    include("../view/headers.php");
    include("../includes/functions.php"); 
?>
   <body>
   <div class='screen'>
      <!-- MENU BAR -->
     <?php include("../view/menubar.php"); ?>
     <!-- MENU BAR -->
       
     <!-- Entry Forms -->
     <div class="container-fluid body-dashboard" id="main-container">
        <div class="row">
           <div class="col-md-12">
                <!-- Alert -->
                <div class="alert alert-success alert-entry" align="center"></div>
                <!-- Alert -->
                <div class='table-responsive'>
                <form class="entryForm" id="entryform">
                  <table class='table'>
                          <tr>
                             <th>Account</th>
                             <th>Date</th>
                             <th>Particulars</th>
                             <th>Debit</th>
                             <th>Credit</th>
                          </tr>
                          <tr> 
                              <td><input type='hidden' name='entry[]' /><select name="account[]" class='form-control accountSelector'>
                                   <option>Select Account</option>
                                   <?= selector('ac_name') ?>
                                   </select> 
                               </td>
                               <td><input type='text' name="date[]" class='form-control date' placeholder="dd/mm/yyyy"></td>
                               <td><input type='text' name="particulars[]" class='form-control particulars'></td>
                               <td><input type='text' name="debit[]" class='form-control debit'></td>
                               <td><input type='text' name="credit[]" class='form-control credit'></td>
                          </tr>
                          <tr> 
                              <td><input type='hidden' name='entry[]' /><select name="account[]" class='form-control accountSelector'>
                                   <option>Select Account</option>
                                   <?= selector('ac_name') ?>
                                   </select> 
                               </td>
                               <td><input type='text' name="date[]" class='form-control date' placeholder="dd/mm/yyyy"></td>
                               <td><input type='text' name="particulars[]" class='form-control particulars'></td>
                               <td><input type='text' name="debit[]" class='form-control debit'></td>
                               <td><input type='text' name="credit[]" class='form-control credit'></td>
                          </tr>
                          <tr> 
                              <td><input type='hidden' name='entry[]' /><select name="account[]" class='form-control accountSelector'>
                                   <option>Select Account</option>
                                   <?= selector('ac_name') ?>
                                   </select> 
                               </td>
                               <td><input type='text' name="date[]" class='form-control date' placeholder="dd/mm/yyyy"></td>
                               <td><input type='text' name="particulars[]" class='form-control particulars'></td>
                               <td><input type='text' name="debit[]" class='form-control debit'></td>
                               <td><input type='text' name="credit[]" class='form-control credit'></td>
                          </tr>
                          <tr> 
                              <td><input type='hidden' name='entry[]' /><select name="account[]" class='form-control accountSelector'>
                                   <option>Select Account</option>
                                   <?= selector('ac_name') ?>
                                   </select> 
                               </td>
                               <td><input type='text' name="date[]" class='form-control date' placeholder="dd/mm/yyyy"></td>
                               <td><input type='text' name="particulars[]" class='form-control particulars'></td>
                               <td><input type='text' name="debit[]" class='form-control debit'></td>
                               <td><input type='text' name="credit[]" class='form-control credit'></td>
                          </tr>
                          <tr> 
                              <td><input type='hidden' name='entry[]' /><select name="account[]" class='form-control accountSelector'>
                                   <option>Select Account</option>
                                   <?= selector('ac_name') ?>
                                   </select> 
                               </td>
                               <td><input type='text' name="date[]" class='form-control date' placeholder="dd/mm/yyyy"></td>
                               <td><input type='text' name="particulars[]" class='form-control particulars'></td>
                               <td><input type='text' name="debit[]" class='form-control debit'></td>
                               <td><input type='text' name="credit[]" class='form-control credit'></td>
                          </tr>
                          <tr> 
                              <td><input type='hidden' name='entry[]' /><select name="account[]" class='form-control accountSelector'>
                                   <option>Select Account</option>
                                   <?= selector('ac_name') ?>
                                   </select> 
                               </td>
                               <td><input type='text' name="date[]" class='form-control date' placeholder="dd/mm/yyyy"></td>
                               <td><input type='text' name="particulars[]" class='form-control particulars'></td>
                               <td><input type='text' name="debit[]" class='form-control debit'></td>
                               <td><input type='text' name="credit[]" class='form-control credit'></td>
                          </tr>
                      </table>
                       <input type="submit" class="btn btn-primary btn-sm btn-block" value="Add Entries" />
                      </form>
                 </div>
            </div>
         </div>
     </div>
     <!-- END: ENTRY FORMS -->
<?php include("../view/footer.php"); ?>