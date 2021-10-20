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
        // dd($request->all());
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
    public function edit($id)
    {
      $country = Country::find($id);
      return view('country.countryEdit',compact('country'));
    }

    public function details($id)
    {
      $country = Country::where('id','=',$id)->first();
    //   dd($country);
      return view('country.countryDetails',compact('country'));
    }

    public function update($id,Request $request)
    {
        $country = Country::find($id);

        $name = $request->input('country_name');
        $capital = $request->input('capital_name');
        $currency = $request->input('currency');
        $population = $request->input('population');

        $country->name = $name;
        $country->capital = $capital;
        $country->currency = $currency;
        $country->population = $population;
        $country->save();

        return redirect(route('country.show'));

    }
    public function destroy($id,Request $request)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect(route('country.show'));

    }
}
