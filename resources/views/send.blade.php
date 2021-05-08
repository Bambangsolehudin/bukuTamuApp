<!DOCTYPE html>
<html>
<head>
    <title>Pemberitahuan</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pemberitahuan Tamu</div>

                <div class="panel-body">
                        {{-- <p>Silahkan Klik <a href="{{ url('verfikasi/register/'.$remember_token) }}">Klik</a></p> --}}
                        <p>nama : {{ $tamu->nama }}</p>
                        <p>status : {{ $tamu->status }}</p>
                        @if ($tamu->status == 'disetujui')
                        <p>bertemu jam : {{ $tamu->jam }}</p>
                        <p>tanggal : {{ $tamu->tanggal }}</p>
                        @endif      

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>