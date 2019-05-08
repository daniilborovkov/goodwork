<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backup;

class BackupController extends Controller
{
    public function index() {}

    public function backup(Request $request) {
      // dd(config('backup.path'));
      $filename = config('backup.filename');
      Backup::export($filename);
    }

    public function restore(Request $request) {}

    public function delete(Request $request) {}

    public function download(Request $request) {}
}
