<?php 

require_once ('Model/model.php');

function fetchAllProducts($tableName){
	return showAllData($tableName);

}

function fetchProduct($tableName, $id){
	return showData($tableName, $id);

}