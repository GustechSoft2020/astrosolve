<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use DB;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class AstrologerController extends Controller
{
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $countries = Country::get(["name", "id"]);
        return view('dropdown', compact('countries'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)
                                ->get(["name", "id"]);
  
        return response()->json($data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)
                                    ->get(["city", "id"]);
                                      
        return response()->json($data);
    }
    
    //Register page
    public function RegisterForm(){

        $countries = Country::get(["name", "id"]);

        return view('frontend.astrologer.registerform', compact('countries'));

    }

    //Store
    public function StoreAstrologer(Request $request){
        //dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'max:255'],
            'mobile'=> ['required', 'string'],
            'address'=>['required', 'string', 'max:255'],
            'dateofbirth'=> ['required'],
            'gender'=> ['required', 'string', 'max:255'],
            'language'=> ['required'],
            'skills'=> ['required'],
            'expertise'=> ['required'],
            'state'=> ['required', 'string', 'max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'pincode'=> ['required', 'string', 'max:255'],
            'pancardnum'=> ['required', 'string', 'max:255'],
            'bankname'=> ['required', 'string', 'max:255'],
            'accounttype'=> ['required', 'string', 'max:255'],
            'accountnumber'=> ['required', 'string', 'max:255'],
            'ifsccode'=> ['required', 'string', 'max:255'],
            'branchcity'=> ['required', 'string', 'max:255'],
            'branchaddress'=>['required', 'string', 'max:255'],
            'whatsappnum'=> ['required'],
            'suitabletimeofInterview'=> ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $userId = DB::getPdo()->lastInsertId();

        $langs = implode(',', $request->language);
        $skills = implode(',', $request->skills);
        $expert = implode(',', $request->expertise);

        if ($request->file('profilePic') && $request->file('uploadIdProof')) {
            $image = $request->file('profilePic');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
 
            Image::make($image)->resize(430,327)->save('upload/astrologer/'.$name_gen);
            $save_url = 'upload/astrologer/'.$name_gen;

            $imageUpload = $request->file('uploadIdProof');
            $name_genUpload = hexdec(uniqid()).'.'.$imageUpload->getClientOriginalExtension();  // 3434343443.jpg
 
            Image::make($image)->resize(430,327)->save('upload/astrologer/'.$name_gen);
            $save_urlUpload = 'upload/astrologer/'.$name_genUpload;


            UserDetails::insert([
                'user_id' => $userId,
                'mobile'=> $request->mobile,
                'address'=>$request->address,
                'dateofbirth'=>$request->dateofbirth,
                'gender'=>$request->gender,
                'languages'=>$langs,
                'skills'=>$skills,
                'expertise'=>$expert,
                'state'=>$request->state,
                'city'=>$request->city,
                'pincode'=>$request->pincode,
                'pancardnum'=>$request->pancardnum,
                'bankname'=>$request->bankname,
                'accounttype'=>$request->accounttype,
                'accountnumber'=>$request->accountnumber,
                'ifsccode'=>$request->ifsccode,
                'branchcity'=>$request->branchcity,
                'branchaddress'=>$request->branchaddress,
                'upiId'=>$request->upiId,
                'paytmNumber'=>$request->paytmNumber,
                'profilePic'=>$save_url,
                'uploadIdProof'=>$save_urlUpload,
                'altemail'=>$request->altemail,
                'whatsappnum'=>$request->whatsappnum,
                'altmobnum'=>$request->altmobnum,
                'suitabletimeofInterview'=>$request->suitabletimeofInterview,
                'created_at' => Carbon::now(),
            ]);


        } else if ($request->file('profilePic')) {
            $image = $request->file('profilePic');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
 
             Image::make($image)->resize(430,327)->save('upload/astrologer/'.$name_gen);
            $save_url = 'upload/astrologer/'.$name_gen;

            UserDetails::insert([
                'user_id' => $userId,
                'mobile'=> $request->mobile,
                'address'=>$request->address,
                'dateofbirth'=>$request->dateofbirth,
                'gender'=>$request->gender,
                'languages'=>$langs,
                'skills'=>$skills,
                'expertise'=>$expert,
                'state'=>$request->state,
                'city'=>$request->city,
                'pincode'=>$request->pincode,
                'pancardnum'=>$request->pancardnum,
                'bankname'=>$request->bankname,
                'accounttype'=>$request->accounttype,
                'accountnumber'=>$request->accountnumber,
                'ifsccode'=>$request->ifsccode,
                'branchcity'=>$request->branchcity,
                'branchaddress'=>$request->branchaddress,
                'upiId'=>$request->upiId,
                'paytmNumber'=>$request->paytmNumber,
                'profilePic'=>$save_url,
                'altemail'=>$request->altemail,
                'whatsappnum'=>$request->whatsappnum,
                'altmobnum'=>$request->altmobnum,
                'suitabletimeofInterview'=>$request->suitabletimeofInterview,
                'created_at' => Carbon::now(),
            ]);


        } else if ($request->file('uploadIdProof')) {
            $imageUpload = $request->file('uploadIdProof');
            $name_genUpload = hexdec(uniqid()).'.'.$imageUpload->getClientOriginalExtension();  // 3434343443.jpg
 
             Image::make($image)->resize(430,327)->save('upload/astrologer/'.$name_gen);
            $save_urlUpload = 'upload/astrologer/'.$name_genUpload;

            UserDetails::insert([
                'user_id' => $userId,
                'mobile'=> $request->mobile,
                'address'=>$request->address,
                'dateofbirth'=>$request->dateofbirth,
                'gender'=>$request->gender,
                'languages'=>$langs,
                'skills'=>$skills,
                'expertise'=>$expert,
                'state'=>$request->state,
                'city'=>$request->city,
                'pincode'=>$request->pincode,
                'pancardnum'=>$request->pancardnum,
                'bankname'=>$request->bankname,
                'accounttype'=>$request->accounttype,
                'accountnumber'=>$request->accountnumber,
                'ifsccode'=>$request->ifsccode,
                'branchcity'=>$request->branchcity,
                'branchaddress'=>$request->branchaddress,
                'upiId'=>$request->upiId,
                'paytmNumber'=>$request->paytmNumber,
                'uploadIdProof'=>$save_urlUpload,
                'altemail'=>$request->altemail,
                'whatsappnum'=>$request->whatsappnum,
                'altmobnum'=>$request->altmobnum,
                'suitabletimeofInterview'=>$request->suitabletimeofInterview,
                'created_at' => Carbon::now(),
            ]);

        }
        else{

            UserDetails::insert([
                'user_id' => $userId,
                'mobile'=> $request->mobile,
                'address'=>$request->address,
                'dateofbirth'=>$request->dateofbirth,
                'gender'=>$request->gender,
                'languages'=>$langs,
                'skills'=>$skills,
                'expertise'=>$expert,
                'state'=>$request->state,
                'city'=>$request->city,
                'pincode'=>$request->pincode,
                'pancardnum'=>$request->pancardnum,
                'bankname'=>$request->bankname,
                'accounttype'=>$request->accounttype,
                'accountnumber'=>$request->accountnumber,
                'ifsccode'=>$request->ifsccode,
                'branchcity'=>$request->branchcity,
                'branchaddress'=>$request->branchaddress,
                'upiId'=>$request->upiId,
                'altemail'=>$request->altemail,
                'whatsappnum'=>$request->whatsappnum,
                'altmobnum'=>$request->altmobnum,
                'suitabletimeofInterview'=>$request->suitabletimeofInterview,
                'created_at' => Carbon::now(),
            ]);

        }

       

        $notification = array(
            'message' => 'User Successfully', 
            'alert-type' => 'success'
        );

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
