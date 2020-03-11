<?php

namespace App\Http\Controllers\Api\Repo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepoInviteController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('repo:invites_view', $request->user()->currentAccessToken());

        if ($request->user()->tokenCan('repo:invites_view')) {
            return response(null, 401);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('repo:invites_create', $request->user()->currentAccessToken());
    }
}
