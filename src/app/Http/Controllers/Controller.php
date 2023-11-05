<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Support\ApiResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $pageSize = 20;

    protected $apiResponse;

    public function __construct()
    {
        $this->apiResponse = new ApiResponse;
    }
}
