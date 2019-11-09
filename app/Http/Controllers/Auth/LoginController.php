<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('front_end.login');
    }

    public function validateLogin(Request $request) {}

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            $message = ['errors' => $validator->messages()->all()];
            $response = response()->json($message, 202);
        }else{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $message = ['success' => 'Rất vui khi thấy bạn ở đây!', 'url' => 'http://localhost/ShareRoom/public/'];
                $response = response()->json($message, 200);
            }else{
                $message = ['errors' => 'Làm ơn hãy kiểm tra lại tài khoản của bạn.'];
                $response = response()->json($message, 202);
            }
        }
        return $response;
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
