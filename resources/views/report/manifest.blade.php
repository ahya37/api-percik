<table>
    <tr >
        <th colspan="11" align="center">
            <blockquote><strong>{{$data['title']}}</strong></blockquote>
        </th>
    </tr>
    <tr>
        <th colspan="11" align="center">
            <blockquote><strong>{{$data['subtitle1']}}</strong></blockquote>
        </th>
    </tr>
    <tr>
        <th colspan="11" align="center">
            <blockquote><strong>{{$data['subtitle2']}}</strong></blockquote>
        </th>
    </tr>
</table>

<table>
    <tr>
        <th colspan="11">
            <blockquote><strong>TOURCODE : {{$data['tourcode']}}</strong></blockquote>
        </th>
    </tr>
</table>

<table cellspacing='0'style="border: 1px solid black;">
    <tr >
        <th style="font-weight: bold;" align="center">NO</th>
        <th style="font-weight: bold;" align="center">NAME</th>
        <th style="font-weight: bold;" align="center">GENDER</th>
        <th style="font-weight: bold;" align="center">AGE</th>
        <th style="font-weight: bold;" align="center">PASSPORT NO</th>
        <th style="font-weight: bold;" align="center">PLACE OF BIRTH</th>
        <th style="font-weight: bold;" align="center">DATE OF BIRTH</th>
        <th style="font-weight: bold;" align="center">PLACE ISSUED PASSPORT</th>
        <th style="font-weight: bold;" align="center">ISSUED DATE</th>
        <th style="font-weight: bold;" align="center">EXPIRE DATE</th>
        <th style="font-weight: bold;" align="center">RELATION</th>
    </tr>
    @foreach ($data['data'] as $item)
        <tr>
            <td align="center">{{$data['no']++}}</td>
            <td>{{$item->NAMA}}</td>
            <td  align="center">{{$item->GENDER}}</td>
            <td  align="center">{{$item->AGE}}</td>
            <td  align="center">{{$item->PASPORT}}</td>
            <td  align="center">{{$item->TEMPAT_LAHIR}}</td>
            <td  align="center">{{date('d-m-Y', strtotime($item->TGL_LAHIR))}}</td>
            <td  align="center">{{$item->TEMPAT_TERBIT}}</td>
            <td  align="center">{{date('d-m-Y', strtotime($item->TGL_TERBIT))}}</td>
            <td  align="center">{{date('d-m-Y', strtotime($item->TGL_EXPIRED))}}</td>
            <td  align="center"></td>
        </tr>
        @endforeach
</table>
<table border="2">
    <tr><th></th></tr>
    <tr>
        <th style="font-weight: bold;" align="center">DARI</th>
        <th style="font-weight: bold;" align="center">KE</th>
        <th style="font-weight: bold;" align="center">TANGGAL BERANGKAT</th>
        <th style="font-weight: bold;" align="center">JAM BERANGKAT</th>
        <th style="font-weight: bold;" align="center">TANGGAL LANDING</th>
        <th style="font-weight: bold;" align="center">JAM LANDING</th>
        <th style="font-weight: bold;" align="center">MASKAPAI</th>
        <th style="font-weight: bold;" align="center">KETERANGAN</th>

    </tr>

    @foreach ($data['flight'] as $item)
        <tr>
            <td>{{$gf->ShortRute($item->DARI)}}</td>
            <td>{{$gf->ShortRute($item->KE)}}</td>
            <td>{{date('d-m-Y', strtotime($item->TGL_BERANGKAT))}}</td>
            <td>{{$item->JAM_BERANGKAT}}</td>
            <td>{{date('d-m-Y', strtotime($item->TGL_LANDING))}}</td>
            <td>{{$item->JAM_LANDING}}</td>
            <td>{{strtoupper($item->MASKAPAI)}}</td>
            <td>{{strtoupper($item->STATUS)}}</td>
        </tr>
    @endforeach

</table>