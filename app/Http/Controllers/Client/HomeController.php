<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\course\CourseRespositoryInterface;
use App\Repositories\menu\MenuItemReposiroryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $menuitem;
    public function __construct(MenuItemReposiroryInterface $menuitem ,
                                CourseRespositoryInterface $course
                                )
    {
        $this->menuitem = $menuitem;
        $this->course = $course;
    }

    public function Home(){
        $menuitems = $this->menuitem->getAll()->where('parent_id',null);

        $courses = $this->course->getAll();
        // $courses = $this->course->getAll()->with(["teacher", function($query){
        //     $query->with("user");
        // }]);
        // dd($courses);



        return view('client.home',compact('menuitems','courses'));
    }
}
