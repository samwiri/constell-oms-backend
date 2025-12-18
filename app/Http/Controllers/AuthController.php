<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Mail\SendOtp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    /** 
     * Create profile account 
     * 
     * @group User profile
     * @bodyParam full_name string required
     * @bodyParam email string required   
     * @bodyParam phone string required
     * @bodyParam tin string
     * @bodyParam passport string
     * @bodyParam address string
     * @authenticated
     * @response  {
     *       "status": "success",
     *       "message": "Account created successfully",
     *       "data": {
     *           "full_name": "Thembo Charles",
     *           "email": "ashley7520charles@gmail.com",
     *           "phone": "0787444081",
     *           "tin": "110023452",
     *           "passport": "65748",
     *           "address": "Kampala",
     *           "updated_at": "2025-12-05T06:42:09.000000Z",
     *           "created_at": "2025-12-05T06:42:09.000000Z",
     *           "id": 1
     *       }
     *   }
     * 
    **/

    function register(Request $request){

        $rules = [
            'full_name'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required|unique:users',
            'password' => 'required|string|confirmed',
        ];

        $message = User::getValidationMessage($request,$rules);

        if(!empty($message))

            return  response()->json(['status' => 'failed', 'message' => $message],422);

        $user = User::createUser($request->full_name,$request->email,$request->phone,$request->password,$request->tin,$request->passport,$request->address);
        
        $userMessage = "Hello $user->full_name Your account has been created successfully. Start shipping now!";

        Mail::to($user->email)->send(new SendOtp($userMessage));

        User::sendSms($user->phone, env("APP_NAME")." | ".$userMessage);

        $data = [
            'status' => 'success',
            'message' => 'Account created successfully',
            'data'=>$user,
        ];

        return response()->json(($data),200);

    }


    /** 
     * Send OTP
     * 
     * @group User profile  
     * @header Bearer Token    
     * @bodyParam validation_text string required Example: Email or Password
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "An OTP has been sent to your phone and email",            
     *       }
     *   } 
     * 
    **/

    function sendOtp(Request $request){

        $rules = [
            'validation_text'=>'required'
        ];

        $message = User::getValidationMessage($request,$rules);

        if(!empty($message))

            return  response()->json(['status' => 'failed', 'message' => $message],422);

        $user = User::where('email',$request->validation_text)->orWhere('phone',$request->validation_text)->firstOrFail();
        
        if(empty($user)){

            return  response()->json(['status' => 'failed', 'message' => "Account not found"],404);

        }         

        $user->otp = rand(1000,9999);

        $user->save();

        $userMessage = "Hello ".$user->full_name." Your OTP is ".$user->otp;

        Mail::to($user->email)->send(new SendOtp($userMessage));

        User::sendSms($user->phone, $userMessage);

        $data = [
            'status' => 'success',
            'message' => 'An OTP has been sent to your phone and email',      
        ];

        return response()->json(($data),200);

    }


    /** 
     * Verify OTP
     * 
     * @group User profile  
     * @header Bearer Token    
     * @bodyParam validation_text string required Example: Email or phone number
     * @bodyParam otp string required
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "An OTP has been sent to your phone and email",            
     *       }
     *   } 
     * 
    **/

    function verifyOtp(Request $request){

        $rules = [
            'validation_text'=>'required',
            'otp'=>'required'
        ];

        $message = User::getValidationMessage($request,$rules);

        if(!empty($message))

            return  response()->json(['status' => 'failed', 'message' => $message],422);

        $user = User::where(function ($q) use ($request) {
                $q->where('email', $request->validation_text)
                ->orWhere('phone', $request->validation_text);
            })
            ->where('otp', $request->otp)
            ->firstOrFail();

        if(empty($user)){
            return  response()->json(['status' => 'failed', 'message' => "Account not found"],404);
       }

        $data = [
            'status'  => 'success',
            'message' => 'Account Authenticity verified',
            'data'    =>$user     
        ];

        return response()->json(($data),200);  
 
    }

    /** 
     * Set or change password
     * 
     * @group User profile  
     * @header Bearer Token    
     * @bodyParam password string required
     * @bodyParam password_confirmation string required
     * @bodyParam user_id required
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Account Password has been reset",            
     *       }
     *   } 
     * 
    **/

    function changePassword(Request $request){

       $rules = [
            'password' => 'required|confirmed',
            'user_id'  =>  'required'
        ];

        $message = User::getValidationMessage($request,$rules);

        if(!empty($message))

            return  response()->json(['status' => 'failed', 'message' => $message],422);

        $newUser = User::find($request->user_id);

        $newUser->password = Hash::make($request->password);

        $newUser->save();

        $data = [
            'status' => 'success',
            'message' => 'Account Password has been reset',      
        ];

        return response()->json(($data),200);  
        
    }

    /** 
     * Login
     * 
     * @group User profile  
     * @header Bearer Token    
     * @bodyParam password string required
     * @bodyParam email string required
     * @authenticated
     * @response  {
     *       "status": "success",
     *       "message": "Successfully loged in",
     *       "authorization": {
     *           "token": "1|ipsfUoT7lmvPZaeKNtyU5GDIarzgv084cW0RLfxl80a3b2ec",
     *           "token_type": "Bearer"
     *       },
     *       "data": {
     *           "id": 1,
     *           "full_name": "Thembo Charles",
     *           "email": "ashley7520charles@gmail.com",
     *           "phone": "0787444081",
     *           "email_verified_at": null,
     *           "tin": "110023452",
     *           "passport": "65748",
     *           "address": "Kampala",
     *           "otp": "4782",
     *           "status": "active",
     *           "user_type": "user",
     *           "created_at": "2025-12-05T06:42:09.000000Z",
     *           "updated_at": "2025-12-05T07:58:28.000000Z",
     *           "deleted_at": null
     *       }
     *   }
     * 
    **/

    public function login(Request $request)
    {
       
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string',
        ];

        $message = User::getValidationMessage($request,$rules);

        if(!empty($message))

            return  response()->json(['status' => 'failed', 'message' => $message],422);       

        $credentials = $request->only('email', 'password');

        $token = Auth::attempt($credentials);

         if (!$token)

            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized '. $token
            ],
            401);

        $user = Auth::user();       

        $token = $user->createToken('token')->plainTextToken;  

        $data = [
            'status' => 'success', 
            'message'=>'Successfully loged in',
            'authorization'=>[
                'token'=>$token,
                'token_type' => 'Bearer',
            ] ,
            'data'=>$user,              
        ];

        return response()->json(($data),200);    
    }

    /** 
     * Log Out  User
     * 
     * @group User profile  
     * @header Bearer Token    
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Successfully logged out",            
     *       }
     *   } 
     * 
    **/

    public function userLogout(Request $request)
    {
    
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
        
    }

    /** 
     * User Profile
     * 
     * @group User profile  
     * @header Bearer Token    
     * @authenticated
     * @response  {
     *   "status": "success",
     *   "message": "User Profile",
     *   "data": {
     *       "id": 1,
     *       "full_name": "Thembo Charles",
     *       "email": "ashley7520charles@gmail.com",
     *       "phone": "0787444081",
     *       "email_verified_at": null,
     *       "tin": "110023452",
     *       "passport": "65748",
     *       "address": "Kampala",
     *       "otp": "4782",
     *       "status": "active",
     *       "user_type": "user",
     *       "created_at": "2025-12-05T06:42:09.000000Z",
     *       "updated_at": "2025-12-05T07:58:28.000000Z",
     *       "deleted_at": null
     *   }
     *  }
     * 
    **/

    function userProfile(){

        $user = Auth::user(); 

        $data = [
            'status' => 'success', 
            'message'=>'User Profile',           
            'data'=>$user,              
        ];

        return response()->json(($data),200);
        
    }

    /** 
     * Update user
     * 
     * @group User profile  
     * @header Bearer Token 
     * @bodyParam phone string required 
     * @bodyParam full_name string required 
     * @bodyParam tin string 
     * @bodyParam passport string
     * @bodyParam address string
     * @authenticated
     * @response  {
     *          "status": "success", 
     *          "message": "Successfully logged out",            
     *       }
     * 
    **/ 
 
    function updateUser(UpdateUserRequest $request)
    { 

        Auth::user()->update($request->validated());

        return response()->json([
                'status'  => 'success',
                'message' => 'Account Profile updated',
                'data'    => Auth::user(),
            ], 200);
        }
        
    }
