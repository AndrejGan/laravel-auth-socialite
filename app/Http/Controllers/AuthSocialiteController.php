<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;


class AuthSocialiteController extends Controller
{
    public function vk(): RedirectResponse
    {
        return Socialite::driver('vkontakte')->redirect();
    }
    public function vkCallback(): RedirectResponse
    {
        $vkUser = Socialite::driver('vkontakte')->user();
        $user = User::query()->updateOrCreate([
            'email' => $vkUser->getEmail(),
        ], [
            'name' => $vkUser->getName(),
            'email' => $vkUser->getEmail(),
            'avatar' => $vkUser->getAvatar(),
            'password' => bcrypt(Str::random(20)),
        ]);

        Auth::login($user, true);

        return redirect()->intended(route('index'));
    }

    public function ok(): RedirectResponse
    {
        return Socialite::driver('odnoklassniki')->redirect();
    }
    public function okCallback(): RedirectResponse
    {
        $okUser = Socialite::driver('odnoklassniki')->user();
        $user = User::query()->updateOrCreate([
            'email' => $okUser->getEmail(),
        ], [
            'name' => $okUser->getName(),
            'email' => $okUser->getEmail(),
            'avatar' => $okUser->getAvatar(),
            'password' => bcrypt(Str::random(20)),
        ]);

        Auth::login($user, true);

        return redirect()->intended(route('index'));
    }

    public function mailru(): RedirectResponse
    {
        return Socialite::driver('mailru')->redirect();
    }
    public function mailruCallback(): RedirectResponse
    {
        $mailruUser = Socialite::driver('mailru')->user();
        $user = User::query()->updateOrCreate([
            'email' => $mailruUser->getEmail(),
        ], [
            'name' => $mailruUser->getName(),
            'email' => $mailruUser->getEmail(),
            'avatar' => $mailruUser->getAvatar(),
            'password' => bcrypt(Str::random(20)),
        ]);

        Auth::login($user, true);

        return redirect()->intended(route('index'));
    }

    public function yandex(): RedirectResponse
    {
        return Socialite::driver('yandex')->redirect();
    }
    public function yandexCallback(): RedirectResponse
    {
        $yandexUser = Socialite::driver('yandex')->user();
        $user = User::query()->updateOrCreate([
            'email' => $yandexUser->getEmail(),
        ], [
            'name' => $yandexUser->getName(),
            'email' => $yandexUser->getEmail(),
            'avatar' => $yandexUser->getAvatar(),
            'password' => bcrypt(Str::random(20)),
        ]);

        Auth::login($user, true);

        return redirect()->intended(route('index'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
