<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderSystemController extends Controller
{
    public function index()
    {
        return view('folderSystem');
    }

    public function addFolder()
    {
        print_r("test");
        $folder = '<div class="folder"><i class="fas fa-folder"></i><span class="folder-title highlighted" contenteditable="true">Untitled</span><i class="fas fa-plus add-folder" onclick="addItem(this)"></i><div class="folder-content"></div></div>';
        return response()->json($folder);
    }
}
