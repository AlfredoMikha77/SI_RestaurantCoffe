<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penilaian</title>

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
            background-color: #4B49AC;
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
    <h1>Data Penilaian</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Nama Menu</th>
                <th>Rating</th>
                <th>Komentar</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->menu->nama_menu}}</td>
                                    <td>{{ $row->rating}}</td>
                                    <td>{{ $row->komentar}}</td>            
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>