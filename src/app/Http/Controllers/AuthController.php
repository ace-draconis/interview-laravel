<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Exceptions\GeneralHttpException;
use App\Http\DataTransferObjects\Auth\RegisterData;
use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\Actions\Auth\RegisterAction;
use App\Http\Actions\Auth\LoginAction;
use App\Support\ApiResponse;

class AuthController extends Controller
{
    public function __construct(ApiResponse $apiResponse, RegisterAction $registerAction, LoginAction $loginAction)
    {
        $this->apiResponse = $apiResponse;
        $this->registerAction = $registerAction;
        $this->loginAction = $loginAction;

    }
    public function register(RegisterRequest $request)
    {
        try {
            $registerData = RegisterData::fromRequest($request);
            $registerAction = $this->registerAction->execute($registerData);
            return $this->apiResponse->success($registerAction, __('message.success_register'));
        } catch (GeneralHttpException $ex) {
            return $this->apiResponse->error([], $ex->getMessage(), $ex->getStatusCode());
        } catch (\Exception $ex) {
            return $this->apiResponse->serverError($ex->getMessage());
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $loginData = LoginData::fromRequest($request);
            $loginAction = $this->loginAction->execute($loginData);
            return $this->apiResponse->success(['token' => $loginAction], __('message.success_login'));
        } catch (GeneralHttpException $ex) {
            return $this->apiResponse->error([], $ex->getMessage(), $ex->getStatusCode());
        } catch (\Exception $ex) {
            return $this->apiResponse->serverError($ex->getMessage());
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out'], 200);
    }
}
