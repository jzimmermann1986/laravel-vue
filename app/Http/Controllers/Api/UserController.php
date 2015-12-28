<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {

    public function index(Request $request) {
        if (request()->wantsJson()) {

            return User::all()->toJson();
        }
    }

    public function destroy($id) {
        return User::findOrNew($id)->delete() ? response()->json(['status' => 200]):response()->json(['status' => 404]);
    }
}
