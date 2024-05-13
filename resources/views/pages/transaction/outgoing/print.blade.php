<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
        }

        h4 {
            margin-top: 0;
            font-weight: normal;
        }

        table {
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
        }

        td {
            text-align: start;
            font-size: 9pt;
        }

        th {
            font-size: 9pt;
        }

        #filter-section {
            margin: 30px 0;
            text-align: start;
        }
    </style>
</head>

@php
$bulan = ['JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER']
@endphp

<body onload="window.print()">

    <h6 style="margin: 0px; font-size:9pt;font-family:Tahoma;">DAFTAR PENERIMAAN PELAYANAN KELURAHAN NAMBANGAN LOR</h6>
    <h6 style="margin: 0px; font-size:9pt;font-family:Tahoma;">KECAMATAN MANGUHARJO KOTA MADIUN</h6>
    @if($since && $until && $filter)
    @php
        $bulanNum = explode('-', $since)[1];
        $bulanString = $bulan[(int)$bulanNum-1];
    @endphp
    <h6 style="margin: 0px; font-size:9pt;font-family:Tahoma;">BULAN {{$bulanString}} TAHUN {{date('Y')}}</h6>
    @else
    @php
        $bulanNum = '';
        $bulanString = $bulan[0];

        if(sizeof($data)>0){
            $bulanNum = $data_raw[0]->letter_date->format('m');
            $bulanString = $bulan[(int)$bulanNum - 1];
        }
    @endphp
    <h6 style="margin: 0px; font-size:9pt;font-family:Tahoma;">BULAN {{$bulanString}} TAHUN 2023</h6>
    @endif
    <hr>

    @php
    $no = 1;
    @endphp

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>JENIS PELAYANAN</th>
                <th>TANGGAL PELAYANAN</th>
                <th>PETUGAS PELAYANAN</th>
                <th>PENERIMA PELAYANAN</th>
                <th>ALAMAT</th>
                <th>NO HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $type => $item)
            @foreach($item as $letter)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $type }}</td>
                <td>{{ $letter->letter_date->format('d/m/Y') }}</td>
                <td>{{ $letter->petugas_name }}</td>
                <td>{{ $letter->explain_name }}{!! $letter->note!=null?'<br>('.$letter->note.')':'' !!}</td>
                <td>{{ $letter->explain_address }}</td>
                <td>{{ $letter->explain_phone }}</td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>

</body>

</html>