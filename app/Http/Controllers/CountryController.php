<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function create()
    {
        return view('country.create');
    }

    public function store(Request  $request)
    {
        dd($request->all());
        $name = $request->input('country_name');
        $capital = $request->input('capital_name');
        $currency = $request->input('currency');
        $population = $request->input('population');


        // 1st approach

        // Country::create([
        //     'name' => $name,
        //     'capital' => $capital,
        //     'currency' => $currency,
        //     'population' => $population,
        // ]);



        // 2nd approach

        $country = new Country();
        $country ->name = $name;
        $country ->capital = $capital;
        $country ->currency = $currency;
        $country ->population = $population;

        $country->save();




        // return back();
        return redirect(route('country.show'));


    }
    public function show()
    {
        $countries = Country::all();
        return view('country.showAllCountry',compact('countries'));
    }
}
