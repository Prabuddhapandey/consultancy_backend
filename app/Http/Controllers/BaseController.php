<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Branch;
use App\Models\Courses;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    //
    public $title;
    public function _construct($title)
    {
        $this->title=$title;
    }

    public function __construct()
    {

        $destination=Destination::all();

        view()->share('destination', $destination);

        $branch=Branch::all();

        view()->share('branch', $branch);


        $course=Courses::all();

        view()->share('course', $course);






    }
}
