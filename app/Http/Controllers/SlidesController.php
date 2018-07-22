<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlidesController extends Controller
{
    public function getAll()
    {
        return Storage::disk('slides')->files('./');
    }

    public function get($slideName = null)
    {
        if ($slideName !== (string) $slideName) {
            $slideName = $slideName->get('id');
        }

        return Storage::disk('slides')->get($slideName);
    }
}
