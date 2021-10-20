<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function create()
    {
        $countries = Country::all();
        return view('person.createPerson',compact('countries'));
        // $personList = Person::all();
        // dd($personList);
        // return 'person';
    }
    public function show()
    {
        $persons = Person::get();
      
        return view('person.persons',compact('persons'));

    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $country_id = $request->input('country_id');




        $person = new Person();
        $person->name = $name;
        $person->email = $email;
        $person->phone = $phone;
        $person->country_id = $country_id;


        $person->save();

        return redirect(route('person.show'));
    }
}
