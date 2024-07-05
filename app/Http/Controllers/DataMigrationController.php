<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DataMigrationController extends Controller
{
    public function migrateData()
    {
        Artisan::call('data:migrate');
        $output = Artisan::output();
        return redirect()->back()->with('status', 'Datos migrados exitosamente a MongoDB.');
    }
}
