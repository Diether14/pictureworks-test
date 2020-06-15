<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\AppRepositoryInterface;

class UserController extends Controller
{
    private $appRepository;

    public function __construct(AppRepositoryInterface $appRepository) {
        $this->appRepository = $appRepository;
    }

    public function getUserByID($id) {
        $user = $this->appRepository->getUserByID($id);
        if (isset($user->id)) {
            return view('result.main')->with(['user' => $user]);
        }
        return $user;
    }

    public function appendUserComments(Request $request) {
        if($request->isJson()) {
            return $this->appRepository->appendUserComments($request->all());
        } else {
            return response('Invalid POST JSON', 422);
        }
    }
}
