<?php 
include('include.php');
if(isset($_GET['id'])){
$user = $conn->query("SELECT * FROM admin where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	<!-- andito yung form id -->
	<form class="form-horizontal" method="POST" enctype="multipart/form-data" name="userform" id="manage-user">
		<input type="hidden" name="currnt_date" class="form-control" id="record-id"value="<?php echo $currnt_date;?>">
		<div class="form-group">
			<div class="row">
				<label class="col-sm-3 control-label">ID#:  </label>
				<div class="col-sm-9">
				<input type="text" name="id" class="form-control" placeholder="<?php echo isset($meta['id']) ? $meta['id']: '' ?>" id="id"  value="" required="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
			<label class="col-sm-3 control-label">Full Name</label>
			<div class="col-sm-9">
				<input type="text" name="fname" class="form-control" placeholder="<?php echo isset($meta['fname']) ? $meta['fname']: '' ?>" id="fname"  value="" required="">
			</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
			<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-9">
				<input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email" placeholder="<?php echo isset($meta['email']) ? $meta['email']: '' ?>" value="" required>
				</div>
			</div>
		</div>

			<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<form action="view_user.php" method="get">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>"  data-title="<?php echo $row['id']; ?>"data-fname="<?php echo $fname; ?>" data-email="<?php echo $email; ?>">
				<button 
					type="submit" 
					name="update_data_btn" 
					class="btn btn-primary" 
					id="btnUpdate" 
					data-bs-toggle="modal" 
					data-bs-target="#myModal" 
					data-title="<?php echo $row['id']; ?>" 
					data-id="123">Update Data</button>
			</form>
			<!-- ito ay isang action="update_user" -->
			</div>
		</form>
</div>
<script>
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'update_user.php',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}
			}
		})
	})
</script>






<script>
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'ajax.php?action=save_user',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}
			}
		})
	})
</script>