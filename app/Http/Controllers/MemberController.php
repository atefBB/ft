<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $members = Person::orderBy("birth_date")->paginate(10);

        return view(
            'member', array(
                "members" => $members
            )
        );
    }

    public function store() 
    {
        $person = Person::create(request()->all());
	return $person;
    }
}
