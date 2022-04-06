<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["TPO"])){
    header("Location:login.php");
}
?>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Selected Students Search</title>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css"/>
   <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  <style>
  .bootstrap-tagsinput {
   width: 100%;
  }
  </style>
 </head>
 <body>
     <?php include 'partials/_nav.php' ?>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 class="font-weight-bold" style="font-size: 30px; text-align: center;">Search Selected Students Details</h2><br />
   <div class="form-group">
    <div class="row">
     <div class="col-md-10">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" />
     </div>
     <div class="col-md-2">
      <button type="button" name="search" class="btn btn-primary" id="search" style="font-size: 13px;">Search</button>
     </div>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <div align="right">
     <p><b>Total Records - <span id="total_records"></span></b></p>
    </div>
    <table class="table table-bordered table-striped" >
     <thead>
      <tr>
      <th>Unique ID</th>
       <th>Company Name</th>
       <th>Course Name</th>
       <th>Full Time Employee</th>
       <th>Six Months Internship</th>
       <th>PPO_Full Time</th>
       <th>PPO Six Months</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
  </div>
  <div style="clear:both"></div>
  <br />
 
  <br />
  <br />
  <br />

 </body>
</html>




<script>
$(document).ready(function(){
 
 load_data();


 function load_data(query)
 {
  $.ajax({
   url:"selectedfetch.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      html += '<td>'+data[count].UID+'</td>';
      html += '<td>'+data[count].CNAME+'</td>';
      html += '<td>'+data[count].COURSENAME+'</td>';
      html += '<td>'+data[count].FULLTIMEEMP+'</td>';
      html += '<td>'+data[count].SIXMI+'</td>';
      html += '<td>'+data[count].PPO_FTE+'</td>';
      html += '<td>'+data[count].PPO_SMI+'</td></tr>';
     }
    }
    else
    {
     html = '<tr><td colspan="5">No Data Found</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }


 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });


});
</script>