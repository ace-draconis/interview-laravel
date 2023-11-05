<?php
namespace App\Http\Actions\Auth;

use App\Http\DataTransferObjects\Auth\LoginData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\GeneralHttpException;

class LoginAction
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function execute(LoginData $loginData) : array
    {
 
        if (Auth::attempt(['email' => $loginData->email, 'password' => $loginData->password])) {
            $token = auth()->user()->createToken('auth-token')->plainTextToken;
            return ['token' => $token];
        }

        throw new GeneralHttpException(__('message.invalid_login'));
        
    }

    private function createUser(CreateOrUpdateData $createOrUpdateData): User
    {
        return $this->user->create($createOrUpdateData->toArray());
    }










}