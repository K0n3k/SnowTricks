<?php

namespace App\Service;
use App\Entity\Token;
use App\Entity\User;
use Symfony\Component\Uid\Uuid;
use App\Repository\TokenRepository;


class TokenCreator {
    
    public const REGISTRATION = 'registration';
    public const PASSWORD = 'password';

    public static function createToken(TokenRepository $TokenRepository, User $user, string $type): Token
    {
        //dd($user);
        $tempToken = $TokenRepository->findOneBy(['user' => $user]);
        
        if($tempToken !== null) {
            return $tempToken;
        }
        $token = new Token();
        $token->setToken(Uuid::v4());
        $token->setUser($user);
        $token->setType($type);
        $TokenRepository->save($token, true);
        

        return $token;
    }

}