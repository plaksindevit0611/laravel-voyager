<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cars</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
<div class="wrapper-table">
    <table>
        <thead>
        <tr>
            <th scope="col"><b>Brand</b></th>
            <th scope="col"><b>Model</b></th>
            <th scope="col"><b>Year</b></th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td data-label="Brand">{{ $car->brand }}</td>
                <td data-label="Model">{{ $car->model }}</td>
                <td data-label="Year">{{ $car->production_year }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $cars->links() }}
</body>
</html>
