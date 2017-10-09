<!DOCTYPE html>
<html>
<title>Bootgrid example - justlaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
<body class="w3-container ">
  <header class="w3-container w3-text-indigo w3-margin-top-64">
   <h2>Bootgrid in Codeigniter 3.1.6 </h2>
   <small class="pull-right"><a href="http://www.facebook.com/eboominathan" target="_blank" > - Boominathan </a></small>
 </header>

 <?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
 <div class="alert alert-success" >
  <a href="#" class="close" data-dismiss="alert">&times;</a>
  <?php echo $msg; ?>
</div>
<?php } ?>


<table id="grid-basic" class="w3-table-all w3-card-4">
 <thead>
  <tr class="w3-cyan">
   <th data-column-id="id" data-type="numeric" data-order="asc">#</th>
   <th data-column-id="first_name" >First Name</th>
   <th data-column-id="last_name" >Last Name</th>
   <th data-column-id="gender" >Gender</th>
   <th data-column-id="email" >Email</th>
   <th data-column-id="country" >Country</th>
   <th data-column-id="salary">Salary</th>
   <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
 </tr>
</thead>
<tbody>
  <?php foreach($data as $details):
  echo '<tr>
  <td>'.$details->id.'</td>
  <td>'.$details->first_name.'</td>
  <td>'.$details->last_name.'</td>
  <td>'.$details->gender.'</td>
  <td>'.$details->email.'</td>
  <td>'.$details->country.'</td>
  <td>'.$details->salary.'</td>
  </tr>';
endforeach;
?>
</tbody>
</table>
<div id="edit" class="w3-modal">
 <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  <div class="w3-center"><br>
   <span onclick="document.getElementById('edit').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
 </div>
 <header class="w3-container w3-text-indigo w3-margin-top-64">
   <h1>Edit Details</h1>
 </header>
 <form class="w3-container" action="<?php echo base_url(); ?>home/save" method = "POST">              
  <input type="hidden" id="edit_id" name="edit_id">
  <div class="w3-section">
    <div class="w3-row">
     <div class="w3-col s4"><label><b>First name</b></label></div>
     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="fname" type="text" placeholder="Enter First name" name="firstname" required>
     </div>
   </div>
   <div class="w3-row">
     <div class="w3-col s4">
      <label><b>Last name</b></label>
    </div>
    <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="lname" type="text" placeholder="Enter Last name" name="lastname" required></div>
  </div>
  <div class="w3-row">
   <div class="w3-col s4">
    <label><b>Gender</b></label>
  </div>
  <div class="w3-col s8">
    <select class="w3-select w3-border w3-margin-bottom" id="gender" name="gender" required>
     <option value="" disabled selected>Choose your option</option>
     <option value="Male">Male</option>
     <option value="Female">Female</option>
   </select>
 </div>
</div>
<div class="w3-row">
 <div class="w3-col s4">
  <label><b>Email</b></label>
</div>
<div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="email" type="email" placeholder="Enter Email" name="email" required></div>
</div>
<div class="w3-row">
 <div class="w3-col s4">
  <label><b>Country</b></label>
</div>
<div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="country" type="text" placeholder="Enter Country" name="country" required></div>
</div>
<div class="w3-row">
 <div class="w3-col s4">
  <label><b>Salary</b></label>
</div>
<div class="w3-col s8"><input class="w3-input w3-border" id="salary" type="text" placeholder="Enter Salary" name="salary" required></div>
</div>
<button class="w3-btn-block w3-indigo w3-section w3-padding" type="submit">Save</button>
</div>
</form>
<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
 <button onclick="document.getElementById('edit').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
</div>
</div>
</div>
<div id="delete" class="w3-modal">
 <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  <div class="w3-center"><br>
   <span onclick="document.getElementById('delete').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
 </div>
 <header class="w3-container w3-text-indigo w3-margin-top-64">
   <h1>Delete</h1>
 </header>
 <form class="w3-container" action="<?php echo base_url(); ?>home/delete" method="POST">              
  <input type="hidden" id="del_id" name="del_id">
  <div class="w3-section">
    <p>Are you sure, you want to delete <span id ="delete_name"></span> ?</p>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
     <button type="submit" class="w3-btn w3-indigo "> Delete </button>
     <button onclick="document.getElementById('delete').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
   </div>

 </div>
</form>
</div>
</div>
<script>
 $( document ).ready(function(){
   $("#grid-basic").bootgrid({
     formatters: {
       "actions": function(column, row)
       {
         return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-id=\"" + row.id + "\" data-first_name=\"" + row.first_name + "\" data-last_name=\"" + row.last_name + "\" data-email=\"" + row.email + "\" data-gender=\"" + row.gender + "\" data-country=\"" + row.country + "\" data-salary=\"" + row.salary + "\" class=\"w3-btn w3-blue w3-small edit\"><span class=\"fa fa-pencil\"></span></button> " +
         "<button onclick=\"document.getElementById('delete').style.display='block'\" data-first_name=\"" + row.first_name + "\" data-last_name=\"" + row.last_name + "\" data-id=\"" + row.id + "\" class=\"w3-btn w3-blue w3-small delete\"><span class=\"fa fa-remove\"></span></button>";

       }
     }}).on("loaded.rs.jquery.bootgrid", function (){
       /* Executes after data is loaded and rendered */
       $(this).find(".edit").click(function (e) {

         $('#edit_id').val($(this).data("id"));
         $('#fname').val($(this).data("first_name"));
         $('#lname').val($(this).data("last_name"));
         $('#gender').val($(this).data("gender"));
         $('#email').val($(this).data("email"));
         $('#country').val($(this).data("country"));
         $('#salary').val($(this).data("salary"));
       });
       $(this).find(".delete").click(function (e) {
         $('#del_id').val($(this).data("id"));
         $('#delete_name').html($(this).data("first_name") +" "+ $(this).data("last_name"));
       });
     });
   });

 </script>
</body>
</html>
