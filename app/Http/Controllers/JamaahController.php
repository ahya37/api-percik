<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use DB;

class JamaahController extends Controller
{
    public function suratPerjanjianUmrah()
    {
        try {
            // program / tourcode
            $program   = request()->program;
            $hrg_umrah = request()->hrgumrah;

            $umrah   = DB::table('jadwal_umrah')->select('TIPE','BERANGKAT','PULANG','KODE')->where('KODE', $program)->first(); 

            $room    = "select DISTINCT a.HOTEL, a.KOTA
                        from bookinghotel as a inner join jadwal_umrah as b on a.TOURCODE=b.KODE 
                        where a.TOURCODE!='' and a.TOURCODE ='$program' order by a.CREATED_DATE desc";
            
            if ($program != '') {
                $sql      = "select distinct a.NAMA,a.NIK, a.PEKERJAAN, a.ALAMAT, a.TELEPON
                            from umrah as a 
                            inner join jadwal_umrah as b on a.JENIS_UMRAH=b.KODE  
                            inner join bookinghotel as e on a.JENIS_UMRAH = e.TOURCODE 
                            where a.KEPASTIAN='CFM'
                            and e.TOURCODE = '$program'
                            order by a.PRIOR_ROOMLIST asc, a.FAMILY_CODE_ROOMLIST asc";

            }

            $data     = DB::select($sql);
            $room     = DB::select($room);

            $result    = [];
            foreach ($data as $value) {
                $result[] = [
                    'nama' => $value->NAMA,
                    'pekerjaan' => $value->PEKERJAAN,
                    'alamat' => $value->ALAMAT,
                    'telepon' => $value->TELEPON,
                    'hotel' => $room 
                ];
            }

            return ResponseFormatter::success([
                'umrah' => $result,
                'message' => 'data surat perjanjian'
            ]);
            
        }catch (\Exception $e) {
            return ResponseFormatter::error([
                'message' => 'Gagal!',
                'error' => $e->getMessage()
            ]);

        }
        
    }
}
