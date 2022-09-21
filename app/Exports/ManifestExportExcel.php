<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ManifestExportExcel implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $data;
    private $gf;
    
    public function __construct($data, $gf)
    {
        $this->data = $data;
        $this->gf   = $gf;
    }
    public function collection()
    {
        //
    }

    public function view() : View
    {
        $data = $this->data;
        $gf   = $this->gf;

        return view('report.manifest', ['data' => $data,'gf' => $gf]);
    }
}
