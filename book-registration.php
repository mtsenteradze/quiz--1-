<?php



if (!empty ($_POST['book_name']) && !empty ($_POST['book_author'])){
	$name = $_POST['book_name'];
	$author = $_POST['book_author'];
	header("Content_Type: application/json");
    header("HTTP/1.0 201 Created");
    $arr1 = array(
    	"book" => array(
    		"name" => $name,
    		"author" => $author,
    		  )
    	);

     echo json_encode($arr1);
     

}else{
    header("Content_Type: application/json");
    header("HTTP/1.0 400 Bad Request");

    $arr2 = array(
    	"error" => array(
    		"message" => "book was not registered"
    		  )
    	);
    echo json_encode($arr2);
    

}
	



?>