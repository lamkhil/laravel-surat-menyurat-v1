<link rel="stylesheet" type="text/css" href="https://filkom.ub.ac.id/legacy/assets/css/v4/style-print.min.css" />
<style>
    @media print {

        html,
        body {
            width: 100%;
            height: 98%;
            margin: 0;
            padding: 0;
            font-family:Tahoma;
        }

        #footer {
            position: absolute;
            bottom: 0;
        }

        .page-break {
            page-break-before: auto;
        }
    }

    html {
        font-size: 100% !important
    }

    p {
        margin: 0 0 5px !important
    }

    body {
        font-size: 14px !important
    }

    .table>caption+thead>tr:first-child>th,
    .table>colgroup+thead>tr:first-child>th,
    .table>thead:first-child>tr:first-child>th,
    .table>caption+thead {
        border-top: solid 1px #444;
    }

    .table-bordered>thead>tr>th,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
        font-size: 14px;
        border: solid 1px #444;
        padding: 5px;
    }

    table {
        font-size: 14px;
        border: solid 0px #fff;
    }

    td{
        vertical-align: top;
    }

    #footer {
        position: absolute;
        bottom: 0;
    }

    .tr-bordered tr {
        font-size: 14px;
        border: solid 1px #444;
    }

    .tr-bordered td,
    .table-no-border td {
        padding: 5px;
    }

    thead th,
    table .num {
        text-align: center;
    }

    .catatan {
        min-height: 100px;
        padding: 0 5px 10px;
    }

    .catatan p {
        line-height: 1.5;
        border-bottom: 1px solid #999;
    }
</style>
<html>

<head>

    <title>Print {{$data->explain_name}}</title>
</head>

<body onload="window.print()">
    <!-- Generate Surat Keterangan -->
    <!-- =================================== -->

    <div id="header-report" class="col-md-12">
        <br><br><br>
        <table style="width: 100%; margin-bottom:4px">
            <tr>
                <td width="100px">
                    <img src="{{url('logo_kota_2.png')}}">
                </td>
                <td>
                    <center>
                        <h4 style="margin: 0px; font-family:Tahoma;font-size:14pt;color:#000"><b>PEMERINTAH&nbsp;KOTA&nbsp;MADIUN</b></h4>
                        <h5 style="margin: 0px;font-family:Tahoma;font-size:18pt;">
                            <b>KECAMATAN&nbsp;MANGUHARJO</b> <br />
                            <b>KELURAHAN&nbsp;NAMBANGAN&nbsp;LOR</b>
                        </h5>
                        <div style="width:90%">
                            <h6 style="margin: 0px; font-size:12pt;font-family:Tahoma;">Jl.&nbsp;Merpati&nbsp;No.&nbsp;75,&nbsp;Kota Madiun,&nbsp;63129,&nbsp;Indonesia</h6>
                            <h6 style="margin: 0px; font-size:12pt;font-family:Tahoma;">Telepon:&nbsp;493137</h6>
                            <h6 style="margin: 0px; font-size:12pt;font-family:Tahoma;">Laman:&nbsp;https://madiunkota.go.id</h6>
                        </div>
                    </center>
                </td>
            </tr>
        </table>
        <hr style="margin:0px;color:#000;border-style:solid none none;border-width:4px 0 0;" /><br>
    </div>
    <div class="content-print">
        <div class="col-md-12">
            <center><u><b><span style="font-size:16pt; margin:14px">SURAT&nbsp;KETERANGAN</span></b></u></center>
            <div style="margin:6px">

            </div>
            <center><span style="font-size:12pt; margin:14px"><b>NOMOR</b>&nbsp;:&nbsp;{{$data->reference_number}}</span></center><br><br>

            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">1. Yang bertanda tangan di bawah ini:</p>
            <div style="margin-left: 20px; font-family:Tahoma;font-size:12pt;color:#000">
                <table style="margin-top: 12px; font-size:14px">
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">a.&nbsp;Nama </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->sign_name}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">b.&nbsp;Jabatan </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->sign_position}}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            @php
            $a = 'a';
            @endphp
            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">2. Dengan ini menerangkan :</p>
            <div style="margin-left: 20px; font-family:Tahoma;font-size:12pt;color:#000">
                <table style="margin-top: 12px; font-size:14px">
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$a++}}.&nbsp;Nama </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->explain_name}}</p>
                        </td>
                    </tr>
                    @if($data->explain_place_and_date_of_birth!=null)
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$a++}}.&nbsp;Tempat,&nbsp;Tgl&nbsp;Lahir</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->explain_place_and_date_of_birth}}</p>
                        </td>
                    </tr>
                    @endif

                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$a++}}.&nbsp;Kebangsaan</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->explain_country}}</p>
                        </td>
                    </tr>

                    

                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$a++}}.&nbsp;Status&nbsp;Perkawinan</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->explain_martial_status}}</p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$a++}}.&nbsp;Agama </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->explain_religion}}</p>
                        </td>
                    </tr>

                    @if($data->explain_job!=null)
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$a++}}.&nbsp;Pekerjaan </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->explain_job}}</p>
                        </td>
                    </tr>
                    @endif
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$a++}}.&nbsp;Alamat </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Tahoma;font-size:12pt;color:#000">{{$data->explain_address}}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <br><br>


            @foreach($description as $desc)
            <dd style="margin: 12px; font-family:Tahoma;font-size:12pt;color:#000;text-indent: 0.5in;text-align: justify;
  text-justify: inter-word;">
                {{$desc}}
            </dd>
            @endforeach

        </div>
        <div class="col-md-12">
            <table class="pull-right" style="margin-top: 20px; font-size:12pt; font-family:Tahoma; text-align:center;">
                <tr>
                    <td>
                        Madiun, {{$data->formatted_letter_date2}}<br>
                        @if($data->sign == 1)
                        <b>LURAH NAMBANGAN LOR</b>
                        @else
                        <b>a.n. LURAH NAMBANGAN LOR</b><br>Sekretaris
                        @endif<br /><br /><br /><br /><br /><br />
                        <b><u>{{$data->sign_name}}</u></b> <br> {{$data->sign_rank}}<br />NIP {{trim($data->sign_id, " ")}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="hide-from-print" style="border-top:solid 1px #ddd;padding:5px;"></div>
    <div class="page-break"></div>


</body>

</html>
