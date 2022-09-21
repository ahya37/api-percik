<table>
    <tr >
        <th colspan="9" align="center">
            <blockquote><strong>{{$data['title']}}</strong></blockquote>
        </th>
    </tr>
    <tr>
        <th colspan="9" align="center">
            <blockquote><strong>{{$data['subtitle1']}}</strong></blockquote>
        </th>
    </tr>
    <tr>
        <th colspan="9" align="center">
            <blockquote><strong>{{$data['subtitle2']}}</strong></blockquote>
        </th>
    </tr>
</table>
<table>
    @foreach ($data['room'] as $item)
    <tr>
        <th colspan="9">
            <blockquote><strong>{{'HOTEL '.$item->KOTA.' : '.$item->HOTEL.' | CHECK IN :'}}</strong></blockquote>
        </th>
    </tr>
    @endforeach
</table>
<table cellspacing='0'style="border: 1px solid black;">
    <tr >
        <th style="font-weight: bold;" align="center">NO</th>
        <th style="font-weight: bold;" align="center">NAME</th>
        <th style="font-weight: bold;" align="center">PRIOR</th>
        <th style="font-weight: bold;" align="center">ROOM TYPE</th>
        <th style="font-weight: bold;" align="center">M/F</th>
        <th style="font-weight: bold;" align="center">AGE</th>
        <th style="font-weight: bold;" align="center">FAMILY CODE</th>
        <th style="font-weight: bold;" align="center">FAMILY NAME</th>
        <th style="font-weight: bold;" align="center">ROOM NO.</th>
    </tr>
    @foreach ($data['data'] as $item)
        <tr>
            <td align="center">{{$data['no']++}}</td>
            <td>{{$item->NAME}}</td>
            <td  align="center">{{$item->PRIOR}}</td>
            <td  align="center">{{$item->ROOM}}</td>
            <td  align="center">{{$item->MF}}</td>
            <td  align="center">{{$item->AGE}}</td>
            <td  align="center">{{$item->FAMILY_CODE}}</td>
            <td >{{$item->FAMILY_NAME}}</td>
        </tr>
        @endforeach
</table>
<table border="2">
    @foreach ($data['count_room'] as $room => $jml)
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td style="font-weight: bold">{{ $gf->ShortRoom($room)}}</td>
        <td></td>
        <td style="font-weight: bold">{{$jml}}</td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2" align="center" style="font-weight: bold">Total</td><td style="font-weight: bold">{{$data['total_data']}}</td>
    </tr>
</table>
<table>
    @foreach ($data['count_mf'] as $mf => $jml)
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td style="font-weight: bold">{{ $mf }}</td>
        <td style="font-weight: bold">{{$jml}}</td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td align="center" style="font-weight: bold">Total</td><td style="font-weight: bold">{{$data['total_data']}}</td>
    </tr>
</table>
