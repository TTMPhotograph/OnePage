<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AuthController extends Controller
{
    /**
     * ユーザーをTwitterの認証ページにリダイレクトする
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }
    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
      $provider = 'twitter';
        $user = Socialite::driver('twitter')->user();
       $authUser =$this->findOrCreateUser($user,$provider);//初回ならユーザー追加、2回目以降ユーザーデータ取得
       Auth::login($authUser,true);//Authに情報を預けてログインする
        return redirect('/bookshelf');//認証後に表示したいページ
        // $response =
        //     "id: ".$user->id
        //     ."<br/>Nickname: ".$user->nickname
        //     ."<br/>name: ".$user->name
        //     ."<br/>Email: ".$user->email
        //     ."<br/>Avater: <img src='".$user->avatar."'>"
        //     . "<br/><br/>";
        // OAuth Two Providers
      //$response .= print_r($user, true);
        // return $response;
    }
    public function findOrCreateUser($user,$provider){
        //usersをidで検索
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            //ユーザーが存在してたら値を入れて返す
        return $authUser;
        }
        //そうでないなら新しくユーザーを登録する
        return User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider' => $provider,
                'provider_id' => $user->id
            ]);
    }
}