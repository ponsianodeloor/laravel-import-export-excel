<?php

namespace App\Http\Controllers;

use App\Imports\DPAImport;
use App\Models\DPA;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DPAController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function createExcel(){
        return view('system.dpa.imports.excel.dpa');
    }

    public function importExcel(Request $request){
        DPA::truncate();
        $file_import_dpa = $request->file('import_dpa');
        Excel::import(new DPAImport(), $file_import_dpa);

        return redirect()->route('system')->with('success', 'DPA registradas correctamente');
    }

    public function store(Request $request){

    }

    public function show(DPA $dPA){

    }

    public function edit(DPA $dPA){

    }

    public function update(Request $request, DPA $dPA){

    }

    public function destroy(DPA $dPA){

    }
}
