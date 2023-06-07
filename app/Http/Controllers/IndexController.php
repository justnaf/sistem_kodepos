<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as Cel;
use App\Imports\ExcelImport;
use App\Imports\BaseImport;
use App\Models\excel;
use App\Models\base;

class IndexController extends Controller
{
    public function UploadKodepos()
    {
        return view('upkodepos');
    }

    public function ImportKodepos(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('excel',$namaFile);

        Cel::import(new ExcelImport, public_path('/excel/'.$namaFile));

        return redirect('/');
    }

    public function ImportBase(Request $request)
    {
        $file = $request->file('base');
        $namaFile = $file->getClientOriginalName();
        $file->move('base',$namaFile);

        Cel::import(new BaseImport, public_path('/base/'.$namaFile));

        return redirect('/');
    }

    public function Index()
    {
        $excel = excel::get();
        $base = base::get();

        $this->data['excel'] = $excel;
        $this->data['base'] = $base;

        return view('index',$this->data);
    }

    public function destroyExcel()
    {
        excel::truncate();

        return redirect('/');
    }

    public function destroyBase()
    {
        base::truncate();

        return redirect('/');
    }
}
