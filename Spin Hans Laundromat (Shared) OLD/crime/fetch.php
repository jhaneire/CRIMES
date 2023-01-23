<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=laundry_db", "root", "");


$column = array('fname', 'month', 'week', 'todays_date', 'delivery_date', 'sname', 'linen', 'towel', 'pillowcase', 'robe', 'rug', 'facetowel', 'pillow', 'weight', 'perkg', 'prizes', 'total', 'delivery_status');

$query = '
SELECT * FROM order 
WHERE fname LIKE "%'.$_POST["search"]["value"].'%" 
OR month LIKE "%'.$_POST["search"]["value"].'%" 
OR week LIKE "%'.$_POST["search"]["value"].'%" 
OR todays_date LIKE "%'.$_POST["search"]["value"].'%" 
OR delivery_date LIKE "%'.$_POST["search"]["value"].'%" 
OR sname LIKE "%'.$_POST["search"]["value"].'%" 
OR linen LIKE "%'.$_POST["search"]["value"].'%" 
OR towel LIKE "%'.$_POST["search"]["value"].'%" 
OR pillowcase LIKE "%'.$_POST["search"]["value"].'%" 
OR robe LIKE "%'.$_POST["search"]["value"].'%" 
OR rug LIKE "%'.$_POST["search"]["value"].'%" 
OR facetowel LIKE "%'.$_POST["search"]["value"].'%" 
OR pillow LIKE "%'.$_POST["search"]["value"].'%" 
OR weight LIKE "%'.$_POST["search"]["value"].'%" 
OR perkg LIKE "%'.$_POST["search"]["value"].'%" 
OR prizes LIKE "%'.$_POST["search"]["value"].'%" 
OR total LIKE "%'.$_POST["search"]["value"].'%" 
OR delivery_status LIKE "%'.$_POST["search"]["value"].'%" 

';

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY order_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$total_order = 0;

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["fname"];
 $sub_array[] = $row["month"];
 $sub_array[] = $row["week"];
 $sub_array[] = $row["todays_date"];
 $sub_array[] = $row["delivery_date"];
 $sub_array[] = $row["sname"];
 $sub_array[] = $row["linen"];
 $sub_array[] = $row["towel"];
 $sub_array[] = $row["pillowcase"];
 $sub_array[] = $row["robe"];
 $sub_array[] = $row["rug"];
 $sub_array[] = $row["facetowel"];
 $sub_array[] = $row["pillow"];
 $sub_array[] = $row["weight"];
 $sub_array[] = $row["perkg"];
 $sub_array[] = $row["prizes"];
 $sub_array[] = $row["total"];
 $sub_array[] = $row["delivery_status"]; 


 $total_order = $total_order + floatval($row["total"]);
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM order";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST["draw"]),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data,
 'total'    => number_format($total_order, 2)
);

echo json_encode($output);


?>
