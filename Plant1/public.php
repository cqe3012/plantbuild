<?php
//        header('Content-Type:text/html;charset=UTF-8');
//        if (!empty($_POST['name'])) {
//            $name = $_POST['name'];
//        $sql = "select column1 as label, column2 as value, ... from table1 where column1 like '$term%'";
require 'medooinit.php';
//                        , ["name[~]" => "$name"]
$datas = $mydb->select('plant', ['name']);
$arrayData = [];
foreach ($datas as $data) {
    array_push($arrayData, $data['name']);
}
//print_r($arrayData);
echo json_encode($arrayData);
//$arrayData=["冬青","月季"];
//$string = "\"";
////    $name = $string.$data['name'].$string;
//    array_push($arrayData,$name);
//    echo $name;
//    echo '<br>';
//    $data["name"] = str_replace(',', "','", $data["name"]);

