<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #f8f9fa);
            color: #333;
            padding: 40px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #007bff;
            font-weight: 600;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
        }

        .table-container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }

        thead {
            background: linear-gradient(90deg, #007bff, #00b4d8);
            color: #fff;
        }

        th {
            padding: 16px 20px;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            font-weight: 600;
            font-size: 0.9em;
        }

        tbody td {
            padding: 14px 20px;
            border-bottom: 1px solid #e9ecef;
        }

        tbody tr:nth-child(even) {
            background-color: #f9fbfd;
        }

        tbody tr:hover {
            background-color: #eef6ff;
            transition: 0.25s ease;
            cursor: pointer;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 30px;
            font-size: 0.85em;
            font-weight: 500;
            color: #fff;
        }

        .badge-primary {
            background-color: #007bff;
        }

        .badge-success {
            background-color: #28a745;
        }

        .badge-warning {
            background-color: #ffc107;
            color: #222;
        }

        .price {
            font-weight: 600;
            color: #28a745;
        }

        .table-responsive::-webkit-scrollbar {
            height: 8px;
        }

        .table-responsive::-webkit-scrollbar-thumb {
            background-color: rgba(0, 123, 255, 0.5);
            border-radius: 4px;
        }

        .table-responsive::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <h1>Daftar Produk</h1>

    <div class="table-container">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td class="price">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                            <td>{{ $item->stock }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
