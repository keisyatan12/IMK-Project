<?php

namespace App\Modules\JobSeeker\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function index()
    {
        $page = [
            'title' => 'JobSeeker - Dashboard',
        ];

        $props = compact('page');
        return view('JobSeeker.jobseeker-dashboard' , $props);
    }
    public function alljob()
    {
        $page = [
            'title' => 'JobSeeker - All Job',
        ];

        $props = compact('page');
        return view('JobSeeker.jobseeker-alljob', $props);
    }
    public function history()
    {
        $page = [
            'title' => 'JobSeeker - Aplication History',
        ];

        $props = compact('page');
        return view('JobSeeker.jobseeker-history' , $props);
    }
    public function profil()
    {
        $page = [
            'title' => 'JobSeeker - Profil',
        ];

        $props = compact('page');
        return view('JobSeeker.jobseeker-profil' , $props);
    }
}
