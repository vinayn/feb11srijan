<?php
namespace Shopping;

use Orderplacement; 
use OrderShippingInterface;

use User;
use Product;
use OrderDelivery;


Class Ordershipping extends OrderplacementInterface {
	
	
	public function Shiptheorder(User $userobject ,int shippingid){
		
		
		$Orderplacementobj = new Orderplacement();
		
		/* get order id from shipping table */
		$orderid 
			
		$Orderplacementobj->MovetheordertoShipping(User userobject, orderid);

			
		$OrderDelivery = new OrderDelivery();	
		
		
		/* $deliverystatus =1 means shipping */
		$OrderDelivery->Setdeliverystatus(( $userobject , $shippingid,$deliverystatus =1);
		
		
	}
	
	public function Shipmultipleeorder(User $userobject ,array orderids){
		
		Orderplacementobj = new Orderplacement();
		
		foreach($orderids as $eachorderid)
		{
			
				
			Orderplacementobj->MovetheordertoShipping(User userobject,$eachorderid);
		
		}


			
		
		
	}
	
	public function Addtoshipping(User $userobject ,int orderid){
		
		
		$shippingid;
		
		/* oderid and shipping mapping */
		$orderid;

		Shiptheorder(User $userobject ,int shippingid);	
		
		
	}
	
	

	
	
	
}



	
	
Interface OrderShippingInterface{
	
	public function Shiptheorder(User userobject ,int orderid);
	
	
	
	
}