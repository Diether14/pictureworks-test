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
        return $this->appRepository->getUserByID($id);
    }
}
