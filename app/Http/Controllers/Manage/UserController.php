<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:user-view', ['only' => ['index']]);
    }
    
    public function index()
    {
        $users = User::whereHas('role', function (Builder $query) {
            $query->where('role_id','!=',1);
        })->paginate(10);

        return view('admin.user.index', compact('users'));
    }
}