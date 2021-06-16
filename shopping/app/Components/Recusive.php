<?php
namespace App\Components;

use Illuminate\Support\Facades\DB;

class Recusive
{
	private $data;
	private $htmlSelect = '';
	public function __construct($data)
	{
		$this->data = $data;
	}

	public function categoryRecusive($parentId, $id = 0, $text = '')
    {
    	foreach ($this->data as $value) 
    	{
    		if($value['parent_id'] == $id)
    		{
    			if (!empty($parentId) && $parentId == $value['id'])
    			{
    				$this->htmlSelect .= "<option selected value='" . $value['id'] . "'>" . $text .$value['name']. "</option>";
    			}
    			else
    			{
    				$this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $text .$value['name']. "</option>";
    			}
    			
    			$this->categoryRecusive($parentId, $value['id'], $text. '--');	
    		}
    	}

		return $this->htmlSelect;    				
    }

	public function categoryRecusiveSupplier($supplierid)
    {
		
    	foreach ($this->data as $value) 
    	{
    		if ($supplierid == $value['ID'])
    		{
    			$this->htmlSelect .= "<option selected value='" . $value['ID'] . "'>" .$value['Name']. "</option>";
				
    		}
			else{
				$this->htmlSelect .= "<option value='" . $value['ID'] . "'>" .$value['Name']. "</option>";
				
			}
    	}

		return $this->htmlSelect;    				
    }

	public function categoryDropdown()
    {
    	foreach ($this->data as $value) 
    	{
    		$this->htmlSelect .= "<option value='" . $value['id'] . "'>" .$value['name']. "</option>";
    	}

		return $this->htmlSelect;    				
    }

	public function categoryRecusiveUpdate($parentId, $id = 0, $text = '')
    {
    	foreach ($this->data as $value) 
    	{
    		if($value['parent_id'] == $id)
    		{
    			if (!empty($parentId) && $parentId == $value['id'])
    			{
    				$this->htmlSelect .= "<option selected value='" . $value['id'] . "'>" . $text .$value['name']. "</option>";
    			}
    			else
    			{
    				$this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $text .$value['name']. "</option>";
    			}
    			
    			$this->categoryRecusiveUpdate($parentId, $value['id'], $text. '--');	
    		}
			
    	}

		return $this->htmlSelect;    				
    }
	public function categoryRecusiveUpdatewithlink($parentId, $id = 0, $text = '')
    {
    	foreach ($this->data as $value) 
    	{
    		if($value['parent_id'] == $id)
    		{
    			if (!empty($parentId) && $parentId == $value['id'])
    			{
    				$this->htmlSelect .= "<a href='/categories/". $value['id']."' class='accordion'>". $text .$value['name']. "</a><br>";
    			}
    			else
    			{
					$this->htmlSelect .= "<a href='/categories/". $value['id']."' class='accordion'>". $text .$value['name']. "</a><br>";
    			}
    			
    			$this->categoryRecusiveUpdatewithlink($parentId, $value['id'], $text. '--');	
    		}
			
    	}

		return $this->htmlSelect;    				
    }
// 	public function statusRecusive ($id)
// 	{
// 		foreach ($this->data as $value)
// 		{
// 			if($value['id'] == $id)
// 			{
// 				if($value['status'] == 0){
// 					$this->htmlSelect .= "<option selected value='0'> Chờ xác nhận </option>";
// 					$this->htmlSelect .= "<option value='1'> Đã xác nhận </option>";
// 					$this->htmlSelect .= "<option value='2'> Đã giao hàng </option>";
// 					$this->htmlSelect .= "<option value='3'> Đã thanh toán </option>";
// 				}
// 				elseif($value['status'] == 1){
// 					$this->htmlSelect .= "<option value='0'> Chờ xác nhận </option>";
// 					$this->htmlSelect .= "<option selected value='1'> Đã xác nhận </option>";
// 					$this->htmlSelect .= "<option value='2'> Đã giao hàng </option>";
// 					$this->htmlSelect .= "<option value='3'> Đã thanh toán </option>";
// 				}
// 				elseif($value['status'] == 2){
// 					$this->htmlSelect .= "<option value='0'> Chờ xác nhận </option>";
// 					$this->htmlSelect .= "<option value='1'> Đã xác nhận </option>";
// 					$this->htmlSelect .= "<option selected value='2'> Đã giao hàng </option>";
// 					$this->htmlSelect .= "<option value='3'> Đã thanh toán </option>";
// 				}
// 				else{
// 					$this->htmlSelect .= "<option value='0'> Chờ xác nhận </option>";
// 					$this->htmlSelect .= "<option value='1'> Đã xác nhận </option>";
// 					$this->htmlSelect .= "<option value='2'> Đã giao hàng </option>";
// 					$this->htmlSelect .= "<option selected value='3'> Đã thanh toán </option>";
// 				}
// 				$this->categoryRecusiveUpdate($id,$value['status']);
// 			}
			
// 		}
// 	}
 }
