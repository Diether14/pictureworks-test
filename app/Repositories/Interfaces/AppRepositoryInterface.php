<?php

namespace App\Repositories\Interfaces;

use App\User;

interface AppRepositoryInterface {
    public function getUserByID($id);
}