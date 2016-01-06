<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\TeamWorkPm;

class PersonController extends Controller
{
    // START configurtion
    const API_KEY = 'stripe730saloon';
    const API_COMPANY = 'mkgnao';
    private $model;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function twAuth()
    {
        static $auth = false;

        if (!$auth) {
            TeamWorkPm\Auth::set(self::API_COMPANY, self::API_KEY);
            $auth = true;
        }
    }

    private function twGet($what)
    {
        $this->model = TeamWorkPm\Factory::build($what);
        $value = $this->model->get();
        $value = trim(preg_replace('/\s+/', ' ', $value));

        return $value;
    }

    private function twGetAll($what)
    {
        $this->model = TeamWorkPm\Factory::build($what);
        $value = $this->model->getAll();
        $value = trim(preg_replace('/\s+/', ' ', $value));

        return $value;
    }

    private function jsPut($var, $value)
    {

        \JavaScript::put([
            $var => $value
        ]);
    }

    private function putTwJsValues()
    {
        twauth();

        $value = twGet('account');
        jsPut('tw_account', $value);

        $value = twGet('project');
        jsPut('tw_project_all', $value);
    }

    /**
     * Show the user main page.
     *
     * @return Response
     */
    public function index()
    {
        putTwJsValues();

        return view('/u/main');
    }
}
