<?php require 'control/admin.php' ?>
<?php require 'common/header.php' ?>
<?php require 'control/dbconnect.php' ?>

<link rel="stylesheet" href="assets/swal2/sweetalert2.min.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/swal2/sweetalert2.min.js"></script>
<link href="bootstrap/css/Searchname.css" rel="stylesheet" media="screen">

 <div id="loader"></div>
<div class="container" style="text-align:center">
	<div class="">
		<h2><b>ລະບົບຂໍ້ມູນລາຍຊື່ນັກສືກສາ</b></h2>
		<div class="" style="float: right;">
			<a href="logout.php?logout">
				<button class="btn btn-info">
					<i class=" glyphicon glyphicon-log-out"></i>     ອອກຈາກລະບົບ
				</button>
			</a>
		</div>
		<div style="float: left;">
		  <a href="add_student.php">
		  	<button class="btn btn-info">
			 <i class="glyphicon glyphicon-asterisk"></i>     ເພີ່ມລາຍຊື່
		    </button>
		  </a>
		</div>
	</div>
</div>

<section>
<div id="load-products"></div>
 	<center>
<div>
 <form>
  <input type="text" id="myInput" onkeyup="myFunction()"  placeholder="ຄົ້ນຫາຊື່....">
  <button class="btn btn-info">
  	ຄົ້ນຫາ
  </button>

</form>
</div>
</center>

<div class="col-md-12">
<table id="myTable" style="margin-top: 5px" class="table table-hover">
  <tr class="color">
    <th>ເລກລຳດັບ</th>
		<th>ຮູບພາບ</th>
    <th>ຊື່ ແລະ ນາມສະກຸນ</th>
    <th>ລະຫັດນັກສືກສາ</th>
    <th>ອີເມວ</th>
    <th>ເບີໂທລະສັບ</th>
    <th>ທີ່ຢູ່</th>
    <th>ຈັດການ</th>

  </tr>

<?php

$query = "SELECT * FROM `user`" ;
$result = mysqli_query($DBcon, $query);
$rows=0;
if($result->num_rows > 0 ){
  while($row = $result->fetch_assoc()) {
    if ($rows == 0){
        echo "<div class='row'>";
     }
?>

  <tr>
    <td style="padding-top: 40px"><?php echo $row["user_id"]; ?></td>
	<td  class="col-md-1" ><a href="#"><img src="<?php echo "../img/uploads/".$row["user_img"]; ?>" alt="Responsive image" class="img-responsive"></a></td>
    <td style="padding-top: 40px"><?php echo $row["user_name"]; ?></td>
    <td style="padding-top: 40px"><?php echo $row["user_student"]; ?></td>
    <td style="padding-top: 40px"><?php echo $row["user_email"]; ?></td>
    <td style="padding-top: 40px"><?php echo $row["user_phone"]; ?></td>
    <td style="padding-top: 40px"><?php echo $row["user_ban"]; ?></td>
    <td style="padding-top: 40px">
			 <a  id="user_id" data-id="<?php echo $row["user_id"]; ?>" href="javascript:void(0)">
				 <i class="glyphicon glyphicon-trash"></i>   ລືບ</a>
			|
			<a href="edite-user.php?user_id=<?php echo $row["user_id"]; ?>">
				<i class="glyphicon glyphicon-pencil"></i>   ແກ້ໄຂ</a>
			|
			<a href="view.php?user_id=<?php echo $row["user_id"]; ?>">
				<i class="glyphicon glyphicon-eye-open"></i>   ຂໍ້ມູນ</a>
	</td>
  </tr>


<?php
  if($rows == 3){
       echo '</div>';
       $rows = -1;
    }
    $rows++; ?>

  <?php } }
  ?>

</table>
</div>
 </div>
</section>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<script>
	$(document).ready(function(){

		//readProducts(); /* it will load products when document loads */

		$(document).on('click', '#user_id', function(e){

			var productId = $(this).data('id');
			SwalDelete(productId);
			e.preventDefault();
		});

	});

	function SwalDelete(productId){
		swal({
			title: 'ແນ່ໃຈບໍ່ທີ່ຈະລົບ?',
			text: "ຈະໄດ້ຮັບການລຶບຢ່າງຖາວອນ!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'ລົບຂໍ້ມູນ',

			showLoaderOnConfirm: true,
			preConfirm: function() {
			  return new Promise(function(resolve) {

			     $.ajax({
			   		url: 'control/delete.php',
			    	type: 'POST',
			       	data: 'delete='+productId,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('ລືບສຳເລັດແລ້ວ', response.message, response.status);
					readProducts();
			     })
			     .fail(function(){
			     	swal('Oops...', 'ບໍ່ສາມາດລືບໄດ້!', 'error');
			     });
			  });
		    },
			allowOutsideClick: false
		});

	}

	// function readProducts(){
	// 	$('#load-products').load('home.php');
	// }

</script>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<?php require 'common/footer.php' ?>
