<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;
// use Auth;
// use Session;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $auth;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $serviceAccount = ServiceAccount::fromArray([
            "type" => "service_account",
            "project_id" => config('services.firebase.project_id'),
            "private_key_id" => config('services.firebase.private_key_id'),
            "private_key" => config('services.firebase.private_key'),
            "client_email" => "firebase-adminsdk-8g2ac@laboratory-project.iam.gserviceaccount.com",
            "client_id" => config('services.firebase.client_id'),
            "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
            "token_uri" => "https://oauth2.googleapis.com/token",
            "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
            "client_x509_cert_url" => config('services.firebase.client_x509_cert_url')
        ]);
        $this->auth = (new Factory())->withServiceAccount($serviceAccount)->createAuth();
    }

    protected function login(Request $request)
    {
        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($request['email'], $request['password']);
            $user = new User($signInResult->data());

            //uid Session
            $loginuid = $signInResult->firebaseUserId();
            Session::put('uid', $loginuid);

            $result = Auth::login($user);
            return redirect($this->redirectPath());
        } catch (FirebaseException $e) {
            throw ValidationException::withMessages([$this->username() => [trans('auth.failed')],]);
        }
    }
    public function username()
    {
        return 'email';
    }
    // public function handleCallback(Request $request, $provider)
    // {
    //     $socialTokenId = $request->input('social-login-tokenId', '');
    //     try {
    //         $verifiedIdToken = $this->auth->verifyIdToken($socialTokenId);
    //         $user = new User();
    //         $user->displayName = $verifiedIdToken->getClaim('name');
    //         $user->email = $verifiedIdToken->getClaim('email');
    //         $user->localId = $verifiedIdToken->getClaim('user_id');
    //         Auth::login($user);
    //         return redirect($this->redirectPath());
    //     } catch (\InvalidArgumentException $e) {
    //         return redirect()->route('login');
    //     } catch (InvalidTokenException $e) {
    //         return redirect()->route('login');
    //     }
    // }
    public function show()
    {
        return view('login');
    }
    public function onRegister(Request $request)
    {
        dd($request->email);
        $signInResult = $this->auth->signInWithEmailAndPassword($request->email,$request->password);
        dd($signInResult);
    }
}
