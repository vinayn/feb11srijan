<?php
namespace Shopping;

use OrderplacementInterface;
use User;
use Product;



Class Orderplacement extends OrderplacementInterface {
	
	
	public function Getorder(User userobject ,int orderid){
		
		return productdetails;
	}
	
	
	public function Addorder(User userobject,Product productobject){
		
		$productid;
		$productquantity;
		$productorder;
		
		return orderid;
		
		
	}	
	
	public function Deleteorder(User userobject,int orderid){
		
	}
	
	public function Changequantity(User userobject,int orderid){
		
	}
	
	public function MovetheordertoShipping(User userobject,int orderid){
		
		
		/* unpublish the order or deleter the order */
		Deleteorder(User userobject,int orderid);
		
	}

	
	
	
}



	
	
Interface OrderplacementInterface{
	
	public function Getorder(User userobject ,int orderid);
	
	public function Addorder(User userobject,Product productobject);
	
	
}	
	