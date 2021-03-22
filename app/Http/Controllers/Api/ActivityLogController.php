<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserActionResource;
use App\Models\UserAction;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index() {
        return new UserActionResource(UserAction::with('user')->get());
    }
}
