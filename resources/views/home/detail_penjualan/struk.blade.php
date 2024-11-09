<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Square with Bootstrap</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom square styling */
        .square {
            width: 300px;   /* Width of the square */
            height: 300px;  /* Height of the square */
            background-color: #fff; /* White background */
            border: 1px solid #000;  /* Optional border */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional shadow */
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <!-- The centered square -->
    <div class="square">
        <center><p style="margin-top: 8px;">Struk</p></center>
        @foreach($detail_penjualan as $detail)
        <p style="margin-left: 10px; font-size: 20px">{{$detail->id_barang}}</p>
        @endforeach
    </div>

    <!-- Bootstrap JS and Popper (Optional, for Bootstrap components that need JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
