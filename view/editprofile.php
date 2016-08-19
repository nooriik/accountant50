<?php
    include("../public/session.php");

    //Get Company
    $role = $name['role']; //Get Role  -- ADMIN ROLE IS NOT CHANGEABLE --
    $company = $name['company']; //Get Company

    //Check For Admin
    if($name['username'] == 'admin'){ //If Admin Then Give Authority To Change Company
        $company_edit = "<input type='text' class='form-control' placeholder='$company'/>";
    }
    else  //Otherwise let the company field uneditable
    {
        $company_edit = $company;
    }
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
         <div class="alert alert-info strong" align="center"> You can change your profile settings below</div>
             <div class="table-responsive">
                <table class="table">
                   <form role="form">
                     <tr class="success">
                        <th>Name:</th>
                        <td><input type="text" class="form-control" placeholder="<?= $name['name']?>"></td>  
                     </tr>
                     <tr>
                        <th>Email:</th>
                        <td><input type="text" class="form-control" placeholder="<?= $name['email']?>"></td>
                     </tr>
                     <tr class="info">
                        <th>Role:</th>
                        <td><?= $role ?></td>
                     </tr>
                     <tr>
                        <th>Company:</th>
                        <td><?= $company_edit ?></td>
                     </tr>
                     <tr class="info">
                        <th>Old Password</th>
                        <td><input type="password" class="form-control" placeholder="Old Password"/></td>
                     </tr>
                     <tr>
                        <th>New Password</th>
                        <td><input type="password" class="form-control" placeholder="New Password"/></td>
                     </tr>
                     <tr class="info">
                        <th>Confirm Password</th>
                        <td><input type="password" class="form-control" placeholder="Confirm Password"/></td>
                     </tr>
                     <tr>
                         <td colspan="2" align="center"><button class="btn btn-danger btn-md" id="editBtn"><span class="glyphicon glyphicon-plus"></span> Change Profile</button></td>
                     </tr>
                   </form>
               </table>
          </div>
     </div>
</div>