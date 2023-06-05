<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pelanggan</title>

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
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Pelanggan</h1>
    <table align="center">
        <thead>
            <tr>
                <!-- <th class="center">ID</th> -->
                <th>Nama Pelanggan</th>
                <th>Email Pelanggan</th>
                <th>Telepon Pelanggan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <!-- <td class="center">{{ $row->id }}</td> -->
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->telp }}</td>
                    <td>{{ $row->jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>