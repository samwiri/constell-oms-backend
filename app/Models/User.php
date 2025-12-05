<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Validator;

 
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity;

 
        protected $fillable = [
            'full_name', 'email', 'phone', 'password',
            'tin', 'passport', 'address', 'status','otp'
        ];
    
        protected $hidden = [
            'password',
            'remember_token',
        ];
    
        protected $casts = [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];

 
        public function orders()
        {
            return $this->hasMany(Order::class);
        }

        public function invoices()
        {
            return $this->hasMany(Invoice::class);
        }

        public static function createUser($full_name,$email,$phone,$password,$tin,$passport,$address){

            $saveUser = new User();

            $saveUser->full_name = $full_name;

            $saveUser->email = $email;

            $saveUser->phone = $phone;

            $saveUser->password = Hash::make($password);

            $saveUser->tin = $tin;

            $saveUser->passport = $passport;

            $saveUser->address = $address;

            $saveUser->remember_token = Str::random(32);

            $saveUser->save();

            return $saveUser;
            
        }


        public static function getValidationMessage($request, $rules){

            $val = Validator::make($request->all(), $rules);

            $message = NULL;

            if ($val->fails()) {

                $errors = $val->errors()->toArray();

                if (isset($errors['full_name']))
                    $message .= $errors['full_name'][0] . " ";
                if (isset($errors['email']))
                    $message .= $errors['email'][0] . " ";
                if (isset($errors['password']))
                    $message .= $errors['password'][0] . " ";
                if (isset($errors['phone']))
                    $message .= $errors['phone'][0] . " ";                
                if (isset($errors['validation_text']))
                    $message .= $errors['validation_text'][0] . " ";
                if (isset($errors['otp']))
                    $message .= $errors['otp'][0] . " ";
                if (isset($errors['user_id']))
                    $message .= $errors['user_id'][0] . " ";
                if (isset($errors['code']))
                    $message .= $errors['code'][0] . " ";
                     
            }

            return $message;
            
        }


    public static function validatePhoneNumber($phone)
    {
        $phone_number = "";
        if ($phone[0] == "+") {
            $phone_number = str_replace("+", "", $phone);
        } elseif ($phone[0] == "0") {
            $out = ltrim($phone, "0");
            $phone_number = "256" . $out;
        } else {
            $phone_number = $phone;
        }

        return $phone_number;
    }

    public static function sendSms($phone_number, $message)
    {

        $sender = env("APP_NAME");

        $message = $sender."| ".$message;

        $number = User::validatePhoneNumber($phone_number);                  
    
        $url = "www.egosms.co/api/v1/plain/?";
    
        $parameters = "number=[number]&message=[message]&username=[username]&password=[password]&sender=[sender]";
        
        $parameters = str_replace("[message]", urlencode($message) , $parameters);
        
        $parameters = str_replace("[sender]", urlencode($sender) , $parameters);
        
        $parameters = str_replace("[number]", urlencode($number) , $parameters);
        
        $parameters = str_replace("[username]", urlencode(env("EGOSMS_USERNAME")) , $parameters);
        
        $parameters = str_replace("[password]", urlencode(env('EGOSMS_PASSWORD')) , $parameters);
        
        $live_url = "https://" . $url . $parameters;
        
        $parse_url = file($live_url);
        
        $response = $parse_url[0];
        
        return $response;
        
    }

 
        public function getActivitylogOptions(): LogOptions
        {
            return LogOptions::defaults()->logFillable();
        }
        
}
