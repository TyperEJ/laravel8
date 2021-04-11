<?php

namespace App\Http\Controllers;

use App\Models\OauthUser;
use App\Services\Contracts\Oauth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FacebookController extends Controller
{
    protected $oauth;

    /**
     * FacebookController constructor.
     * @param Oauth $oauth
     */
    public function __construct(Oauth $oauth)
    {
        $this->oauth = $oauth;
    }

    /**
     * Facebook login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function login(Request $request)
    {
        if(!$request->has('code'))
        {
            return $this->redirectOauth();
        }

        $accessToken = $this->getAccessToken($request);

        $profile = $this->oauth->getProfile($accessToken);

        $oauthUser = OauthUser::query()
            ->with('user')
            ->where('service_id','=',$profile->user_id)
            ->where('service','=',OauthUser::FACEBOOK)
            ->first();

        if(!$oauthUser)
        {
            return redirect()->route('login');
        }

        auth()->login($oauthUser->user);

        return redirect()->route('home');
    }

    /**
     * Bind facebook account to user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function bind(Request $request)
    {
        if(!auth()->check())
        {
            return redirect()->route('login');
        }

        if(!$request->has('code'))
        {
            return $this->redirectOauth();
        }

        $accessToken = $this->getAccessToken($request);

        $profile = $this->oauth->getProfile($accessToken);

        auth()->user()->oauthUser()->updateOrCreate([
            'service' => OauthUser::FACEBOOK,
        ],[
            'service_id' => $profile->user_id,
            'access_token' => $accessToken,
        ]);

        return redirect()->route('home');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectOauth()
    {
        $redirectUrl = $this->oauth->getRedirectUrl([
            'redirect_uri' => URL::current(),
            'state' => 'state',
        ]);

        return redirect()->away($redirectUrl);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    protected function getAccessToken(Request $request)
    {
        return $this->oauth->getAccessToken(
            $request->input('code'),
            URL::current()
        );
    }
}
