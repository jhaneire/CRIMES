<?php

date_default_timezone_set('Asia/Manila');

$current_date = date('Y-m-d');

include('../connect.php');

 



if(isset($_POST['btn_save'])) {

  $fname = $_POST['fname'];

  $month = $_POST['month'];

  $week = $_POST['week'];

  $todays_date = $_POST['todays_date'];

  $delivery_date = $_POST['delivery_date'];

  $linen = $_POST['linen'];

  $towel = $_POST['towel'];

  $pillowcase = $_POST['pillowcase'];

  $robe = $_POST['robe'];

  $rug = $_POST['rug'];

  $facetowel = $_POST['facetowel'];

  $pillow = $_POST['pillow'];


  $weight = $_POST['weight'];

  $perkg = $_POST['perkg'];

  $prizes = $_POST['prizes'];



  $multiple = $weight * $perkg;



  $sum = $multiple + $prizes;



   $sql="INSERT INTO `order`(

  `fname`,

   `month`,

   `week`,

   `todays_date`,

   `delivery_date`,  

   `linen`,

   `towel`,

   `pillowcase`,

   `robe`,

   `rug`,

   `facetowel`,

   `pillow`,

   `weight`,

   `perkg`,

   `prizes`,

   `total`) VALUES (

  '$fname',

   '$month',

   '$week',

   '$todays_date',

   '$delivery_date',

   '$linen',

   '$towel',

   '$pillowcase',

   '$robe',

   '$rug',

   '$facetowel',

   '$pillow',

   '$weight',

   '$perkg',

   '$prizes',

   '$sum')";



}




/*$passw = hash('sha256', $_POST['password']);*/

//$passw = hash('sha256',$p);

//echo $passw;exit;

/*function createSalt()

{

    return '2123293dsj2hu2nikhiljdsd';

}

$salt = createSalt();

$pass = hash('sha256', $salt . $passw);*/



 



/*$image = $_FILES['image']['name'];*/

/*$target = "../uploadImage/Profile/".basename($image);*/



 



/*if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {*/

// @unlink("uploadImage/Profile/".$_POST['old_image']);

    /*  $msg = "Image uploaded successfully";

    }else{

      $msg = "Failed to upload image";

    }*/



 



// extract($_POST);



 



/*

<!-- $sname=$_POST['sname'];

$exp=explode(',', $sname); -->

*/



if ($conn->query($sql) === TRUE) {

  $_SESSION['success']=' Record Successfully Added';

?>

<script type="text/javascript">

window.location="../view_order.php";

</script>

<?php

} else {

  $_SESSION['error']='Something Went Wrong';

?>

<script type="text/javascript">

window.location="../view_order.php";

</script>

<?php

}

?>