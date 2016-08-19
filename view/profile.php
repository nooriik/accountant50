<?php include("../public/session.php"); ?>
<?php include("../view/headers.php"); ?>
<?php include("../includes/functions.php"); ?>
   <body>
     <!-- MENU BAR -->
     <?php include("../view/menubar.php"); ?>
     <!-- MENU BAR -->
       
     <div id="main-container-profile">
              <!-- Profile And Cover Photo -->
              <div class="cover-photo"></div>
              <div class="profile-photo"></div>
              <!-- Profile And Cover Photo -->
               
              <!-- Profile Information Table -->
              <div class="row" id="load-edit-page">
                <div class="col-md-6 col-md-offset-3">
                  <div class="alert alert-info strong" align="center"> Welcome <?= $name['name']?></div>
                  <div class="table-responsive">
                   <table class="table">
                          <tr class="success">
                            <th>Name:</th>
                            <td><?= $name['name'] ?></td>  
                          </tr>
                          <tr>
                            <th>Email:</th>
                            <td><?= $name['email']?></td>
                          </tr>
                          <tr class="info">
                            <th>Role:</th>
                            <td><?= $name['role']?></td>
                          </tr>
                          <tr>
                            <th>Company:</th>
                            <td><?= $name['company']?></td>
                          </tr>
                          <tr>
                               <td colspan="2" align="center"><button class="btn btn-danger btn-md" id="editBtn"><span class="glyphicon glyphicon-user"></span> Edit Profile</button></td>
                          </tr>
                   </table>
                  </div>
                </div>
              </div>
              <!-- Profile Information Table -->
         </div>
         <!-- Main Profile Info Container -->
       
     <script>
    //AJAX Edit Profile
    var a = document.getElementById("editBtn");
         
    a.addEventListener("click", function(){
         $.ajax({
                 url : "editprofile.php",
                 type : "GET",
                 success : function(data)
                 {
                    $('#load-edit-page').html(data);   
                 }
        });
    });
    //Edit Profile
     </script>
<?php include("../view/footer.php"); ?>