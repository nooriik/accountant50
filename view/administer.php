<?php 
  include("headers.php");
  include("../public/session.php");
  include("menubar.php");
?>

<div class="container-fluid" id="main-container">
   <div class="row">
      <div class="col-md-6">
         <div class="panel panel-info" id="fixed-height">
            <div class="panel-heading">Sign Up Requests</div>
            <div class="panel-body">
            <div class="table-responsive">
               <table class="table">
                 <tr class='success'>
                   <td><button class="btn btn-success">Accept</button>
                   <button class="btn btn-danger">Delete</button></td>
                   <td>naveed@gmail.com</td>
                   <td>Naveed</td>
                 </tr>
                 <tr class='success'>
                   <td><button class="btn btn-success">Accept</button>
                   <button class="btn btn-danger">Delete</button></td>
                   <td>naveed@gmail.com</td>
                   <td>Naveed</td>
                 </tr>
                 <tr class='success'>
                   <td><button class="btn btn-success">Accept</button>
                   <button class="btn btn-danger">Delete</button></td>
                   <td>naveed@gmail.com</td>
                   <td>Naveed</td>
                 </tr>
                 <tr class='success'>
                   <td><button class="btn btn-success">Accept</button>
                   <button class="btn btn-danger">Delete</button></td>
                   <td>naveed@gmail.com</td>
                   <td>Naveed</td>
                 </tr>
               </table>
            </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="panel panel-info">
            <div class="panel-heading">Add Accounts To Ledger</div>
            <div class="panel-body">
            <div class="table-responsive">
               <table class="table">
                 <tr class="success">
                    <form role="form" class="add-account">
                        <td><input type="text" class="form-control ac_name" placeholder="Account Name e.g Cash"></td>
                        <td>
                            <select class="form-control category">
                              <option>Select Category</option>
                              <option>Assets</option>
                              <option>Liability</option>
                              <option>Expense</option>
                              <option>Capital</option>
                              <option>Customer</option>
                              <option>Supplier</option>
                            </select>
                        </td>
                        <td><button class="btn btn-success">Add</button></td>
                    </form>
                 </tr>
                 <tr class="success">
                    <form role="form" class="add-account">
                        <td><input type="text" class="form-control ac_name" placeholder="Account Name e.g Cash"></td>
                        <td>
                            <select class="form-control category">
                              <option>Select Category</option>
                              <option>Assets</option>
                              <option>Liability</option>
                              <option>Expense</option>
                              <option>Capital</option>
                              <option>Customer</option>
                              <option>Supplier</option>
                            </select>
                        </td>
                        <td><button class="btn btn-success">Add</button></td>
                    </form>
                 </tr>
                 <tr class="success">
                    <form role="form" class="add-account">
                        <td><input type="text" class="form-control ac_name" placeholder="Account Name e.g Cash"></td>
                        <td>
                            <select class="form-control category">
                              <option>Select Category</option>
                              <option>Assets</option>
                              <option>Liability</option>
                              <option>Expense</option>
                              <option>Capital</option>
                              <option>Customer</option>
                              <option>Supplier</option>
                            </select>
                        </td>
                        <td><button class="btn btn-success">Add</button></td>
                    </form>
                 </tr>
                 <tr class="success">
                    <form role="form" class="add-account">
                        <td><input type="text" class="form-control ac_name" placeholder="Account Name e.g Cash"></td>
                        <td>
                            <select class="form-control category">
                              <option>Select Category</option>
                              <option>Assets</option>
                              <option>Liability</option>
                              <option>Expense</option>
                              <option>Capital</option>
                              <option>Customer</option>
                              <option>Supplier</option>
                            </select>
                        </td>
                        <td><button class="btn btn-success">Add</button></td>
                    </form>
                 </tr>
                 
               </table>
            </div>
            </div>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
         <div class="panel panel-info">
            <div class="panel-heading">Add Users</div>
            <div class="panel-body">
            <div class="table-responsive">
               <table class="table">
                  <form role="form">
                     <tr class="success">
                       <th>Name:</th>
                       <td><input type="text" class="form-control" placeholder="Name e.g. David John"></td>
                     </tr>
                     <tr class="success">
                       <th>Role:</th>
                       <td><input type="text" class="form-control" placeholder="Role e.g. Admin"></td>
                     </tr>
                     <tr class="success">
                       <th>Email:</th>
                       <td><input type="email" class="form-control" placeholder="Email Address"></td>
                     </tr>
                     <tr class="success">
                       <th>Password:</th>
                       <td><input type="password" class="form-control" placeholder="Password"></td>
                     </tr>
                     <tr class="success">
                       <th>Confirm Password:</th>
                       <td><input type="password" class="form-control" placeholder="Confirm Password"></td>
                     </tr>
                     <tr class="success">
                       <td align="center" colspan="2"><button class="btn btn-danger">Add Member</button></td>
                     </tr>
                  </form>
               </table>
            </div>
            </div>
         </div>
        </div>
        <div class="col-md-6">
         <div class="panel panel-info" id="fixed-height-2">
            <div class="panel-heading">Remove Users</div>
            <div class="panel-body">
            <div class="table-responsive">
               <table class="table">
                 <tr class='success'>
                   <td>Naveed</td>
                   <td>Accountant</td>
                   <td>naveed@gmail.com</td>
                   <td><button class="btn btn-danger">Remove</button></td>
                 </tr>
               </table>
            </div>
            </div>
         </div>
      </div>
    </div>
</div>
<script>
  $('.add-account').on("submit", function(event){
        //Preventing Default Submission
        event.preventDefault();
        
        //Values
        var ac_name = $('.ac_name').val();
        var category = $('.category').val();
      
        //Validation
        if(ac_name == "" && category == "Select Category")
        {
            alert("Please Enter Account And Select Category");
        }
        else if(ac_name == "")
        {
            alert("Account Name Field Field Is Empty");
        }
        else if(category == "Select Category")
        {
            alert("Select A Category");
        }
        else
        {
            $.ajax({
                url : "../public/add-ac.php",
                type : "POST",
                data : {
                    ac_name : ac_name,
                    category: category
                },
                success : function(data){
                    alert(data);
                }
                
            });
        }
    });

</script>




<?php include("footer.php"); ?>