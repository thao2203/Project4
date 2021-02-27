<?php
namespace App\Components;

use App\Models\Menu;

class MenuRecusive
{
    //Khi instant ddtuong se gán vào biến
    //Construct sẽ chạy khi new 1 menu recusive
    private $html;
    public function __construct()
    {
        $this->html = ''; //Nối các option vs nhau
    }

	public function menuRecusiveAdd($parentId = 0, $subMark = '')
    {
        //$parentId = 0 để tim ra cái menu cha đầu tiên (vid 13)
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem) {
            $this->html .= '<option value="' . $dataItem->id . '">' . $subMark . $dataItem->name . '</option>';
            $this->menuRecusiveAdd($dataItem->id, $subMark . '--');
        }
        return $this->html;
    }


}

?>