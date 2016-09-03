<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domains\User\Repository\UserRepository;
//use Response;

class UserController extends Controller
{
    private $repository;

    /**
     * UserController constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all users
     * @return mixed
     */
    public function index(Request $request)
    {
        return response()->json([
            'message' => '',
            'result'  => $this->repository->findAll()
        ], 200);
    }
}