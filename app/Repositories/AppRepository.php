<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AppRepositoryInterface;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Arr;

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

    public function appendUserComments(Array $req) {
        // dd(Arr::exists($req, 'password'));
        foreach(['password', 'id', 'comments'] as $key){
            if(!Arr::exists($req, $key) || !$req[$key]) {
                return response('Missing key/value for "'.$key.'"', 422);
            }
        }

        $req['password'] = '720DF6C2482218518FA20FDC52D4DED7ECC043AB';

        if($req['password'] != '720DF6C2482218518FA20FDC52D4DED7ECC043AB') {
            return response('Invalid password', 401);
        }

        if(!is_numeric($req['id'])) {
            return response('Invalid id', 422);
        }

        $user = $this->getUserByID($req['id']);
        try {
            $user->comments .= ' '. $req['comments'];
            $user->save();
        } catch(\Exception $e){
            return response('Could not update database: '.$e->getMessage(), 500);
        }
        return response('Ok', 200);
    }
}