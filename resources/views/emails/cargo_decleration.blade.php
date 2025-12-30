<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$cargo->tracking_number}}</title>
</head>
<body>

    <p>Hello Admin,</p>
    <p>There is a new cargo decleration from {{ $cargo->user->name }}</p>
    <p>Tracking Number: {{ $cargo->tracking_number }}</p>
    <p>Internal Currier: {{ $cargo->internal_curier }}</p>
    <p>{!! $cargo->cargo_details !!}</p>
    <p>Thank you,<br>
    Constell & Co</p>
    
</body>
</html>