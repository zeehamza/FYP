<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Property;
use Validator;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $properties = Property::paginate(100);
        return view('/dashboard', [
            'properties' => $properties,
            'user' => $request->user(),
        ]);
    }

}