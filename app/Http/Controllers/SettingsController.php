<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateSettingsRequest;

class SettingsController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        view('settings');
    }

    public function update(UpdateSettingsRequest $request)
    {
        return auth()->user()->update($request->validated());
    }
}
