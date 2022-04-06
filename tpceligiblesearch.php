<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["TPC"])){
    header("Location:login.php");
}
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Eligibile Students Search</title>  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
 
  <style>
  .bootstrap-tagsinput {
   width: 100%;
  }
  </style>
 </head>
 <body>
 <?php include 'partials/tpcnav.php' ?>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 class="font-weight-bold" style="font-size: 30px; text-align: center;">Search Eligible Students Details</h2><br />
   <div class="form-group">
    <div class="row">
     <div class="col-md-10">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" />
     </div>
     <div class="col-md-2">
      <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
     </div>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <div align="right">
     <p><b>Total Records - <span id="total_records"></span></b></p>
    </div>
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Company Name</th>
       <th>BTECH_CS</th>
       <th>BTECH_IT</th>
       <th>BTECH_EC</th>
       <th>BTECH_EE</th>
       <th>BTECH_EI</th>
       <th>BTECH_MT</th>
       <th>BTECH_BT</th>
       <th>BTECH_CE</th>
       <th>MCA</th>
       <th>MSC_CS</th>
       <th>MTECH_CS</th>
       <th>MTECH_IT</th>
       <th>MTECH_VLSI</th>
       <th>MTECH_RS</th>
       <th>TOTAL_ES</th>
       <th>TEST_DATE</th>
       <th>INTERVIEW_S_DATE</th>
       <th>INTERVIEW_E_DATE</th>
       <th>RESULT_DATE</th>
       <th>AP_WRITTETEST</th>
       <th>GD</th>
       <th>SS_INTERVIEW</th>
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
   url:"eligiblefetch.php",
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
      html += '<td>'+data[count].CNAME+'</td>';
      html += '<td>'+data[count].BTECH_CS+'</td>';
      html += '<td>'+data[count].BTECH_IT+'</td>';
      html += '<td>'+data[count].BTECH_EC+'</td>';
      html += '<td>'+data[count].BTECH_EE+'</td>';
      html += '<td>'+data[count].BTECH_EI+'</td>';
      html += '<td>'+data[count].BTECH_MT+'</td>';
      html += '<td>'+data[count].BTECH_BT+'</td>';
      html += '<td>'+data[count].BTECH_CE+'</td>';
      html += '<td>'+data[count].MCA+'</td>';
      html += '<td>'+data[count].MSC_CS+'</td>';
      html += '<td>'+data[count].MTECH_CS+'</td>';
      html += '<td>'+data[count].MTECH_IT+'</td>';
      html += '<td>'+data[count].MTECH_VLSI+'</td>';
      html += '<td>'+data[count].MTECH_RS+'</td>';
      html += '<td>'+data[count].TOTAL_ES+'</td>';
      html += '<td>'+data[count].Test_Date+'</td>';
      html += '<td>'+data[count].Invertiew_S_Date+'</td>';
      html += '<td>'+data[count].Invertiew_E_Date+'</td>';
      html += '<td>'+data[count].Result_Date+'</td>';
      html += '<td>'+data[count].Ap_Written_Test+'</td>';
      html += '<td>'+data[count].GD+'</td>';
      html += '<td>'+data[count].SS_INTERVIEW+'</td></tr>';
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