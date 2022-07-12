<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function dataSiswa()
    {
        return view('admin.dataSiswa');
    }
}
