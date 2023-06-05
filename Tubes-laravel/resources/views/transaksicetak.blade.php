<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Transaksi</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }

        h1 {
            text-align: center;
        }

        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        thead {
            background-color: #0d47a1;
            color: white;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        .center {
            text-align: center;
        }

    </style>
</head>

<body>
    <h1>Data Transaksi</h1>
    <table align="center">
        <thead>
            <tr>
                <!-- <th class="center">No.</th> -->
                <th>Nama</th>
                <th>Total Pembayaran</th>
                <th>Jumlah Transaksi</th>
                <th>Tanggal</th>
                <th>Jenis Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $kon)
            <tr>
                <!-- <td class="center">{{ $kon->id }}</td> -->
                <td>{{$kon->nama}}</td>
                <td>{{$kon->total}}</td>
                <td>{{$kon->jumlah}}</td>
                <td>{{$kon->tanggal}}</td>
                <td>{{$kon->jenis}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
