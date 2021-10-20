<?php

$pdo=mysqli_connect('localhost','root','root','cognate','3307');

$data = array();

switch ($_POST['type']) {
    default: break;
        
    //  case "firstname":   
        
    // $query = "SELECT firstname FROM customers  WHERE firstname LIKE '%" . $_POST['search'] . "%' ";
    
    // $statement=mysqli_query($pdo,$query);
    
    // while($row=mysqli_fetch_assoc($statement)){
        
    //     $data[] = $row["firstname"];       
    // }
    //      break;
    case "Name":
        
     $query = "SELECT Name FROM view_all_artists  WHERE Name LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($pdo,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Name"];
        
//        $data[] = [
//        "D" => $row['product_name'],
//        "cost" => $row['product_cost'],
//        "qty" => $row['quantity']
//      ];     
    }
         break;
}

if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$pdo = null;


?>