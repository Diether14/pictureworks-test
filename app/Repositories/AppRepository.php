<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AppRepositoryInterface;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AppRepository implements AppRepositoryInterface {
    public function getUserByID($id) {
        try {
            $user = User::findOrFail($id);
        } catch(QueryException $e) {
            return response('No such user (2)', 404);
        } catch(ModelNotFoundException  $e) {
            return response('No such user (2)', 404);
        }
        return $user;
    }
}