<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Assisted shopping</title>
    </head>
    <body>
        <p>Hello Admin,</p>
        <p>{{ $assisted_shopping->user->full_name }} has placed an assisted shoping request.</p>
        <h2>Details</h2>
        <p>Name: {{ $assisted_shopping->name }}</p>
        <p>Quantity: {{ $assisted_shopping->quantity }}</p>
        <p>
            <a href="{{ $assisted_shopping->url }}">{{ $assisted_shopping->url }}</a>
        </p>
        <p> {!! $assisted_shopping->notes !!}</p>    
    </body>
</html>