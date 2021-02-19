<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include("css.php"); ?>
	<style>
		#modal
		{
			background-color: rgba(0,0,0,0.7);
			height: 100%;
			width: 100%;
			position: fixed;
			top: 0px;
			left: 0px;
			display: none;
		}
		#modal-form
		{
			background-color: white;
			width: 30%;
			height: auto;
			margin-left: 30%;
			margin-top: 100px;
			border-radius: 8px;
			padding: 10px;
			position: absolute;
		}
		#close-btn
		{
			background-color: red;
			color: white;
			width: 30px;
			height: 30px;
			position: absolute;
			top: -15px;
			right: -15px;
			text-align: center;
			border-radius: 8px;
			cursor: pointer;
		}
	</style>
</head>
<body>
<?php
//first method data show by loop
// foreach($profile as $prof)
// {
// 	echo $prof->name;
// }
?>
<div class="container">
	<div class="row">
		<div class="col-xl-4"><img src="<?php echo base_url().'img/'.$profile[0]->pic ?>" style="width: 250px; height: 300px;"></div>
		<div class="col-xl-4">
			<div class="row">
				<div class="col-xl-12 mt-4">Name : <?php echo $profile[0]->name; ?></div>
				<div class="col-xl-12 mt-4">Email : <?php echo $profile[0]->email; ?></div>
				<div class="col-xl-12 mt-4">Password : <?php echo $profile[0]->password; ?></div>
				<div class="col-xl-12 mt-4">Mobile : <?php echo $profile[0]->mobile; ?></div>
				<div class="col-xl-12 mt-4">Gender : <?php echo $profile[0]->gender; ?></div>
				<div class="mt-4">
					<button id="editbtn" class="btn btn-info" data-eid="<?php echo $profile[0]->id ?>">Edit</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="modal">
	<div id="modal-form">
		<h2>Edit Form..</h2>
		<form id="edit_form" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" value="<?php echo $profile[0]->id; ?>">
			<div class="form-group">
				<label>Name : </label>
				<input type="text" name="name" id="name" value="<?php echo $profile[0]->name; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Email : </label>
				<input type="text" name="email" id="email" value="<?php echo $profile[0]->email; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile : </label>
				<input type="text" name="mobile" id="mobile" value="<?php echo $profile[0]->mobile; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Gender : </label>
				<input type="radio" name="gender" id="gender" value="Male"
				<?php
				if($profile[0]->gender=='Male')
				{
					echo "checked";
				}
				?>
				> Male
				<input type="radio" name="gender" id="gender" value="Female"
				<?php
				if($profile[0]->gender=='Female')
				{
					echo "checked";
				}
				?>
				> Female
			</div>
			<div class="form-group">
				<label>Image : </label>
				<input type="file" name="new_pic" id="new_pic" class="form-control">
				<input type="hidden" name="old_pic" id="old_pic" value="<?php echo $profile[0]->pic; ?>"><br>
				<img src="<?php echo base_url().'img/'.$profile[0]->pic ?>" style="width: 80px; height: 80px;">
			</div>
			<input type="submit" value="Update" class="btn btn-info">
			<!-- man2.jpg -->

		</form>
	</div>
</div>
</body>
</html>