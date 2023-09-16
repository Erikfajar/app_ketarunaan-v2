<?php

namespace App\Exports;

use App\Models\pasal;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class PasalExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = pasal::latest()->get();
        return view('pasal.export',['data'=> $data]);
    }
}
