<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}

    <style>
        /* @media print {
            html, body {
                width: 48mm;
                height: 210mm;
            }
        } */
        * {
    font-size: 12px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.description,
th.description {
    width: 75px;
    max-width: 75px;
}

td.quantity,
th.quantity {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.price,
th.price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

.centered {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 155px;
    max-width: 155px;
}

img {
    max-width: inherit;
    width: inherit;
}

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
    </style>
</head>
<body>
    <div class="ticket">
        <img src="./logo.png" alt="Logo">
        <p class="centered">RECEIPT EXAMPLE
            <br>Address line 1
            <br>Address line 2</p>
        <table>
            <thead>
                <tr>
                    <th class="quantity">Q.</th>
                    <th class="description">Description</th>
                    <th class="price">$$</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG("$item->kode_barang", 'C128A', 2,93,array(1,1,1), true) }}" /></td>
                </tr>
                {{-- <tr>
                    <td class="quantity">1.00</td>
                    <td class="description">ARDUINO UNO R3</td>
                    <td class="price">$25.00</td>
                </tr>
                <tr>
                    <td class="quantity">2.00</td>
                    <td class="description">JAVASCRIPT BOOK</td>
                    <td class="price">$10.00</td>
                </tr>
                <tr>
                    <td class="quantity">1.00</td>
                    <td class="description">STICKER PACK</td>
                    <td class="price">$10.00</td>
                </tr>
                <tr>
                    <td class="quantity"></td>
                    <td class="description">TOTAL</td>
                    <td class="price">$55.00</td>
                </tr> --}}
            </tbody>
        </table>
        <p class="centered">Thanks for your purchase!
            <br>parzibyte.me/blog</p>
    </div>
    {{-- <div> --}}
        @for ($i = 0; $i < $jml; $i++)
            {{-- <div class="card">
                <div class="card-body">
                </div>
            </div> --}}
            {{-- <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG("$item->kode_barang", 'C128A', 2,93,array(1,1,1), true) }}" /> --}}
            {{-- <label>{{ $item->kode_barang }}</label> --}}
            {{-- <img class="barcode3" />
            <script>
                JsBarcode(".barcode3", 77162, {
                    format:"CODE39",
                    displayValue:true,
                    fontSize:20
                });
            </script> --}}
            @endfor
            {{-- @foreach ($item as $it)
                <label for="">{{ $it['kode_barang'] }}</label>
                @endforeach --}}
    {{-- </div> --}}
    <script src="{{ URL::asset('public/js/JsBarcode.all.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}
</body>
</html>