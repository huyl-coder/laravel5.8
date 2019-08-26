<?php
namespace App\Http\MenuComposers;

use Illuminate\View\View;
use App\Entity\Menu;
use Session;

class MenuComposer {
    /**
     * Create a new profile composer.
     *
     * @return  void
     */
    public function __construct()
    {
        //if(session menu chưa có){
        if(!Session::has('Menu')){
            $this->menu = Menu::all();
            $this->menuSau=[];
            Menu::menuParent($this->menu,$this->menuSau,0,0);
            Session::put('Menu',$this->menuSau);
           // gán menu sau vào session
        }
        //$this->menuSau = menu session
        $this->menuSau = Session::get('Menu'); 
    }
    /**
     * Bind data to the view.
     * Bind data vào view. $view->with('ten_key_se_dung_trong_view', $data);
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->menuSau);
    }
}