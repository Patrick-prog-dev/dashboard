<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

class PageController extends Controller

{
    public function accueil()
    {
        return view('welcome');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('pages.billing'); 
    }
    public function billing()
    {
        return view('billing');
    }
    public function dash()
    {
        return view('pages.dashboard'); 
    }
    public function dashboord()
    {
        return view('dashboord');
    }
    public function icon()
    {
        return view('pages.icons'); 
    }
    public function icons()
    {
        return view('icons');
    }

    public function land()
    {
        return view('pages.landing'); 
    }
    public function landing()
    {
        return view('landing');
    }

    public function mapp()
    {
        return view('pages.map'); 
    }
    public function map()
    {
        return view('map');
    }
    public function notif()
    {
        return view('pages.notifications'); 
    }
    public function notifications()
    {
        return view('notifications');
    }

    public function profil()
    {
        return view('pages.profile'); 
    }
    public function profile()
    {
        return view('profile');
    }

    public function rtll()
    {
        return view('pages.rtl'); 
    }
    public function rtl()
    {
        return view('rtl');
    }

    public function sing()
    {
        return view('pages.sing-in'); 
    }
    public function singin()
    {
        return view('sing-in');
    }

    public function singg()
    {
        return view('pages.sing-up'); 
    }
    public function singup()
    {
        return view('sing-up');
    }

    public function table()
    {
        return view('pages.tables'); 
    }
    public function tables()
    {
        return view('tables');
    }

    public function templates()
    {
        return view('pages.template'); 
    }
    public function template()
    {
        return view('template');
    }

    public function typographyy()
    {
        return view('pages.typography'); 
    }
    public function typography()
    {
        return view('typography');
    }

    public function virtual()
    {
        return view('pages.virtual_reality'); 
    }
    public function virtual_reality()
    {
        return view('virtual_reality');
    }

    public function app()
    {
        return view('pages.billing');
    }

    public function viewDashboard()
    {
        return view('pages.dashboard');
    }

    public function viewIcons()
    {
        return view('pages.icons');
    }

    public function viewLanding()
    {
        return view('pages.landing');
    }
    
    public function viewMap()
    {
        return view('pages.map');
    }

    public function viewTemplate()
    {
        return view('pages.template');
    }

    public function viewTypography()
    {
        return view('pages.typography');
    }

    public function viewSign_in()
    {
        return view('pages.sign-in');
    }

    public function viewSign_up()
    {
        return view('pages.sign-up');
    }

    

}

