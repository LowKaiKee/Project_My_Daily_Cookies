<?php
error_reporting(0);
include_once ("dbconnect.php");
    $sql = "SELECT * FROM REVIEW";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    $response["review"] = array();
    while ($row = $result ->fetch_assoc())
    {
        $reviewlist = array();
        $reviewlist[image] = $row["IMAGE"];
        $reviewlist[cookiesname] = $row["COOKIESNAME"];
        $reviewlist[email] = $row["EMAIL"];
        $reviewlist[name] = $row["NAME"];
        $reviewlist[review] = $row["REVIEW"];
        $reviewlist[date] = $row["DATE"];
        array_push($response["review"], $reviewlist);
    }
    echo json_encode($response);
    
}else{
    
    echo "nodata";
}
?>