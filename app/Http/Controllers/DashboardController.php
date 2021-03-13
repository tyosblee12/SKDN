<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;

class DashboardController extends Controller
{
    public function index(){
        $mhs = MahasiswaModel::all()->count();

        return view('admin.index',compact('mhs'));
    }
}