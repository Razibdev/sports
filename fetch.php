<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "gbsports");

// $column = array("register.player_name", "register.player_gender", "register.player_department", "register.player_batch","register.player_roll");

$query = "SELECT * FROM register INNER JOIN department ON department.names = register.player_department  
  
";
$query .= " WHERE ";
if(isset($_POST["is_category"]))
{
 $query .= "register.player_department = '".$_POST["is_category"]."' AND ";
}
if(isset($_POST["search"]["value"]))
{
 $query .= '(register.player_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR register.player_gender LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR register.player_department LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR register.player_batch LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR register.player_roll LIKE "%'.$_POST["search"]["value"].'%") ';
 $query .= 'ORDER BY register.id DESC ';
}

// if(isset($_POST["order"]))
// {
//  $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
// }
// else
// {
//  $query .= 'ORDER BY register.id DESC ';
// }

$query1 = '';

if($_POST["length"] != 1)
{
 $query1 .= ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["player_name"];
 $sub_array[] = $row["player_gender"];
 $sub_array[] = $row["player_department"];
 $sub_array[] = $row["player_batch"];
 $sub_array[] = $row["player_roll"];
 $sub_array[] = $row["sports"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM register";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>