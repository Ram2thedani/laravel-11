<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="table-responsive">
        <table border="1" class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <caption>
                    Table Name
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($penjualan as $penjualan)
                    <tr class="table-primary">
                        <td>{{ $penjualan->id }}</td>
                        <td>{{ $penjualan->tanggal }}</td>
                        <td><a href="/struk/{{ $penjualan->id }}">Struk</a> | <a href="/detail/{{ $penjualan->id }}">Detail</a></td>

                    </tr>
                @endforeach

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

</body>

</html>
