<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Actions\Student\GetAllAction;
use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use Illuminate\Http\Request;
use App\Http\DataTransferObjects\Student\FilterData;
use App\Exceptions\GeneralHttpException;
use App\Support\ApiResponse;
 

class StudentController extends Controller
{
    public function __construct(ApiResponse $apiResponse, GetAllAction $getAllAction)
    {
        $this->apiResponse = $apiResponse;
        $this->getAllAction = $getAllAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filterData = FilterData::fromRequest($request);
            $students = $this->getAllAction->execute($filterData, $this->pageSize);
            return $this->apiResponse->success($students, __('message.success_retrieve'));
        } catch (GeneralHttpException $ex) {
            return $this->apiResponse->error([], $ex->getMessage());
        } catch (\Exception $ex) {
            return $this->apiResponse->serverError($ex->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
