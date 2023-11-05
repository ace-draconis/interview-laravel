<?php
namespace App\Http\Actions\Auth;

use App\Http\DataTransferObjects\Auth\RegisterData;
use App\Models\User;

class RegisterAction
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function execute(RegisterData $registerData) : array
    {
        $user = $this->createUser($registerData);
        $token = $user->createToken('auth-token')->plainTextToken;
        return ['token' => $token];
    }

    private function createUser(RegisterData $registerData): User
    {
        return $this->user->create($registerData->toArray());
    }










}