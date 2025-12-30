<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$invoice->invoice_number}}</title>
</head>
<body>
    <h2>Invoice #{{ $invoice->invoice_number }}</h2>
    <p>Date: {{ $invoice->created_at }}</p>

    <h3>Customer:</h3>
    <p>
        {{ $invoice->order->receiver_name }}<br>
        {{ $invoice->order->receiver_email }}<br>
        {{ $invoice->order->receiver_phone }}
    </p>

    <h3>Line Items</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="6">
        <thead>
            <tr>
                <th>Description</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoice->lineItems as $item)
            <tr>
                <td>{{ $item->description }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->unit_price, 2) }}</td>
                <td>{{ number_format($item->quantity * $item->unit_price, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h3>Total Amount: UGX {{ number_format($invoice->lineItems->sum(fn($i) => $i->quantity * $i->unit_price), 2) }}</h3>

</body>
</html>