<?php

namespace App\Http\Controllers;

use App\Classes\BigQuery;

class DatabaseController extends Controller
{
    function index() {
        $bigQuery = new BigQuery();
        return view('database', ['data' => $bigQuery->table['volunteer_registration']->rows()]);
    }
}
