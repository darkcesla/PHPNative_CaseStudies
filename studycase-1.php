<?php
//array untuk simpan token
$tokens = [];

function generateRandomString($length = 32){
    return bin2hex(random_bytes($length / 2));
}

function generateToken($user){
    global $tokens;

    $token = generateRandomString();

    if(!isset($tokens[$user])){
        $tokens[$user] = [];
    }

    $tokens[$user][] = $token;

    if(count($tokens[$user]) > 10){
        array_shift($tokens[$user]);
    }
    return $token;
}

function verifyToken($user, $token){
    global $tokens;

    if(!isset($tokens[$user])){
        return false;
    }

    $index = array_search($token, $tokens[$user]);

    if($index !== false){
        unset($tokens[$user][$index]);
        $tokens[$user] = array_values($tokens[$user]);
        return true;
    }
    return false;
}

$user = 'pengguna';
$token1 = generateToken($user);
echo "Generated token 1: ". $token1. PHP_EOL;

$token2 = generateToken($user);
echo "Generated token 2: ". $token2. PHP_EOL;

if(verifyToken($user, $token1)){
    echo "Token 1 terverifikasi dan remove" . PHP_EOL;
}else{
    echo "Token 1 not found" . PHP_EOL;
}

if(verifyToken($user, $token2)){
    echo "Token 2 terverifikasi dan remove" . PHP_EOL;
}else{
    echo "Token 2 not found" . PHP_EOL;
}

?>