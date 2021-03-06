<?php
namespace App\Repositories\course;

use App\Repositories\course\CourseRespositoryInterface;
use App\Repositories\BaseRepositoryAbstract;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseRespository extends BaseRepositoryAbstract implements CourseRespositoryInterface {
    public function getAll(){
        $courses = $this->model->with(["teacher" => function($query){
            $query->with("user");
        }])->paginate(10);
        // dd($courses);
        return $courses;
        // return Course::paginate(10);
    }


    public function create()
    {

    }
    public function edit($id)
    {

    }
    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id){

    }
}
