<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\RoomlistExportExcel;
use App\Exports\ManifestExportExcel;
use Maatwebsite\Excel\Excel;
use DB;
use PDF;
use App\Providers\Globalprovider;

class RoomlistController extends Controller
{
    public $excel;
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function roomlist()
    {
        $program = request('program');

        $umrah   = DB::table('jadwal_umrah')->select('TIPE','BERANGKAT','PULANG','KODE')->where('KODE', $program)->first(); 

        $room    = "select DISTINCT a.HOTEL, a.KOTA
                    from bookinghotel as a inner join jadwal_umrah as b on a.TOURCODE=b.KODE 
                    where a.TOURCODE!='' and a.TOURCODE ='$program' order by a.CREATED_DATE desc";
        
        if ($program != '') {
            $sql      = "select distinct a.NAMA as NAME,a.PRIOR_ROOMLIST as PRIOR,(year(curdate())-year(a.TGL_LAHIR)) as AGE, a.ROOM, case when a.GENDER = 'Laki-laki' then 'M' else 'F' end as 'MF',
                        a.FAMILY_CODE_ROOMLIST as FAMILY_CODE, a.FAMILY_CODE as FAMILY_NAME
                        from umrah as a 
                        inner join jadwal_umrah as b on a.JENIS_UMRAH=b.KODE  
                        inner join bookinghotel as e on a.JENIS_UMRAH = e.TOURCODE 
                        where a.KEPASTIAN='CFM'
                        and e.TOURCODE = '$program'
                        order by a.PRIOR_ROOMLIST asc, a.FAMILY_CODE_ROOMLIST asc";

        }else{
            $sql      = "select distinct a.NAMA as NAME,a.PRIOR_ROOMLIST as PRIOR,(year(curdate())-year(a.TGL_LAHIR)) as AGE, a.ROOM, case when a.GENDER = 'Laki-laki' then 'M' else 'F' end as 'MF',
            a.FAMILY_CODE_ROOMLIST as FAMILY_CODE, a.FAMILY_CODE as FAMILY_NAME
            from umrah as a 
            inner join jadwal_umrah as b on a.JENIS_UMRAH=b.KODE  
            inner join bookinghotel as e on a.JENIS_UMRAH = e.TOURCODE 
            where a.KEPASTIAN='CFM'
            order by a.PRIOR_ROOMLIST asc, a.FAMILY_CODE_ROOMLIST asc";
        }

        $data     = DB::select($sql);
        $dataRoom = DB::select($room);

        $title     = 'PT. PERCIKAN IMAN TOURS & TRAVEL';
        $subtitle1 = 'ROOMING LIST HOTEL';
        $subtitle2 = 'UMRAH '. $umrah->TIPE. ' ' .date('d-m-Y', strtotime($umrah->BERANGKAT)).' - '.date('d-m-Y', strtotime($umrah->PULANG));

        $totalData = count($data);

        $countRoom = array_count_values(array_column($data, 'ROOM')); 
        $countMf = array_count_values(array_column($data, 'MF')); 

        // $resultRoom = [];
        // foreach ($countRoom as $key => $value) {

        //     // JUMLAH ROOM TYPE BERDASARKAN KELOMPOK

        //     $resultRoom[] = [
        //         'room_type' => $key,
        //         'jml_room_jamaah' => $value
        //     ];
        // }

        // return $resultRoom;
        
        // NOT YET
        // JUMLAH ORANG PER ROOM TYPE
        // JUMLAH ROOM TYPE BERDASARKAN KELOMPOK

        $result = [
            'title' => $title ?? '',
            'subtitle1' => $subtitle1 ?? '',
            'subtitle2' => strtoupper($subtitle2) ?? '',
            'total_data' => $totalData ?? '',
            'count_room' => $countRoom ?? '',
            'count_mf' => $countMf ?? '',
            'room' => $dataRoom ?? [],
            'data' => $data ?? [],
            'no' => 1
        ];

        // return $result;
        $gf = new Globalprovider();

        return $this->excel->download(new RoomlistExportExcel($result, $gf),'Roomlist.xls');
        
    }
    
    public function manivestVisa()
    {
        $program = request('program');

        $umrah   = DB::table('jadwal_umrah')->select('TIPE','BERANGKAT','PULANG','KODE')->where('KODE', $program)->first(); 

        $room    = "select DISTINCT a.HOTEL, a.KOTA
                    from bookinghotel as a inner join jadwal_umrah as b on a.TOURCODE=b.KODE 
                    where a.TOURCODE!='' and a.TOURCODE ='$program' order by a.CREATED_DATE desc";

        $flight = "select distinct a.STATUS, a.DARI, a.KE, a.DEPARTURE AS TGL_BERANGKAT, a.DEPARTURE_TIME AS JAM_BERANGKAT, 
                    a.ARRIVAL AS TGL_LANDING, a.ARRIVAL_TIME AS JAM_LANDING, d.NAMA as MASKAPAI
                    from booking as a LEFT join jadwal_umrah as b on a.TOURCODE=b.KODE 
                    LEFT join umrah as c on a.TOURCODE=c.JENIS_UMRAH 
                    LEFT JOIN MASKAPAI as d on a.FLIGHT_CODE = d.KODE 
                    where a.TOURCODE !='' and a.TOURCODE = '$program'";


        if ($program != '') {
            $sql = "select
                a.NAMA, 
                if(a.GENDER='Perempuan','F','M') as GENDER,
                (year(curdate()) - year(a.TGL_LAHIR)) as AGE, 
                a.PASPORT, 
                a.TEMPAT_LAHIR, 
                a.TGL_LAHIR, 
                a.TEMPAT_TERBIT,
                a.TGL_TERBIT, 
                a.TGL_EXPIRED
                from 
                mofa as d 
                inner join 
                umrah as a 
                on d.NO_DAFTAR=a.NO_DAFTAR 
                inner join 
                VISA as b 
                on a.NO_DAFTAR=b.NO_DAFTAR 
                inner join 
                jadwal_umrah as c 
                on a.JENIS_UMRAH=c.KODE 
                where a.JENIS_UMRAH = '$program'
                order by 
                b.NO_URUT 
                asc";
        }else{
            $sql = "select
                a.NAMA, 
                if(a.GENDER='Perempuan','F','M') as GENDER,
                (year(curdate()) - year(a.TGL_LAHIR)) as AGE, 
                a.PASPORT, 
                a.TEMPAT_LAHIR, 
                a.TGL_LAHIR, 
                a.TEMPAT_TERBIT,
                a.TGL_TERBIT, 
                a.TGL_EXPIRED
                from 
                mofa as d 
                inner join 
                umrah as a 
                on d.NO_DAFTAR=a.NO_DAFTAR 
                inner join 
                VISA as b 
                on a.NO_DAFTAR=b.NO_DAFTAR 
                inner join 
                jadwal_umrah as c 
                on a.JENIS_UMRAH=c.KODE 
                order by 
                b.NO_URUT 
                asc";
        }

        $data     = DB::select($sql);
        $flight   = DB::select($flight);

        $title     = 'PT. PERCIKAN IMAN TOURS & TRAVEL';
        $subtitle1 = 'MANIFEST VISA';
        
        $subtitle2 = $umrah == null ? '' : 'UMRAH '. $umrah->TIPE. ' ' . date('d-m-Y', strtotime($umrah->BERANGKAT)).' - '.date('d-m-Y', strtotime($umrah->PULANG));

        $result = [
            'title' => $title ?? '',
            'subtitle1' => $subtitle1 ?? '',
            'subtitle2' => strtoupper($subtitle2) ?? '',
            'tourcode' => $umrah->KODE ?? '',
            'flight' => $flight ?? [],
            'data' => $data ?? [],
            'no' => 1
        ];

        // return $result;

        $gf = new Globalprovider();

        return $this->excel->download(new ManifestExportExcel($result, $gf),'Manifest.xls');

    }

    public function tagOrange($program)
    {
        $pdf = PDF::LoadView('report.tagorange')->setPaper('a4', 'landscape');
        return $pdf->stream('tagorange.pdf');
    }

    
}
