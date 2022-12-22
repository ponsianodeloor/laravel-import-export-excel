<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(){

    }

    public function exportExcel(){
        return Excel::download(new UsersExport(), 'users.xlsx');
    }

    public function create(){

    }

    public function createExcel(){
        return view('system.users.imports.excel.users');
    }

    public function importExcel(Request $request){
        $file_import_users = $request->file('import_users');
        Excel::import(new UsersImport(), $file_import_users);

        return redirect()->route('system')->with('success', 'Usuarios registrados correctamente');
    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
