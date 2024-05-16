<?php

namespace App\Modules\JobSeeker\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function index()
    {
        return view('JobSeeker.jobseeker-dashboard');
    }
    public function alljob()
    {
        return view('JobSeeker.jobseeker-alljob');
    }
    public function history()
    {
        return view('JobSeeker.jobseeker-history');
    }
}
