<?php

namespace Mahabub\GGLink\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ReportController extends Controller
{
    /**
     * Set access control.
     *
     */
    function __construct()
    {
    }


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        return view('gglink::report.index');
    }
}
