<?php


class Session{
    public function __construct(public string $username, public string $role) {
    }
}

class SessionManager{
    private static $SECRETKEY="ayosubschaanneelllSaaYa76453234guyfwdug";
    public static function login(string $username, string $password):bool
    {
        if($username==="arfian"&&$password==="admin"){
            $payload = [
                'username'=>$username,
                'role'=>'admin'
            ];
            $jwt = \Firebase\JWT\JWT::encode($payload, SessionManager::$SECRETKEY,'HS256');
            setcookie('JWTSESSION', $jwt, time()+2592000, httponly:true);
            return true;
        }else{
            return false;
        }
    }
    public static function getCurSes():Session
    {
        if($_COOKIE['JWTSESSION']){
            $jwt = $_COOKIE['JWTSESSION'];
            try {
                $payload = \Firebase\JWT\JWT::decode($jwt, SessionManager::$SECRETKEY, ['HS256']);
                return new Session(username : $payload->username, role : $payload->role);
            } catch (Exception $e) {
                throw new Exception("user not login");
                
            }

            
        }else{
            throw new Exception(('user is not login'));
        }
    }
}