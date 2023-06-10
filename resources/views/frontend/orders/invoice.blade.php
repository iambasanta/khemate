<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Invoice</title>
        <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        .logo {
            text-align: center;
            margin-bottom: 10px;
            font-size: 36px;
            font-weight: 700;
        }

        h1 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #customer {
            float: left;
        }

        #customer span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #customer div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .id,
        table .name {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: right;
        }

        table td.id,
        table td.name {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }

        </style>
    </head>
    <body>
        <header class="clearfix">
            <div class="logo">
                Khemate
            </div>
            <h1>INVOICE {{ $order->id }}</h1>
            <div id="company" class="clearfix">
                <div>Khemate</div>
                <div>069 Foggy Heights,<br /> AZ 85004, US</div>
                <div>(602) 519-0450</div>
                <div><a href="mailto:info@khemate.com">info@khemate.com</a></div>
            </div>
            <div id="customer">
                <div><span>ORDER NO</span> {{ $order->number }}</div>
                <div><span>CLIENT</span> {{ $order->user->name }}</div>
                <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
                <div><span>EMAIL</span> <a href="mailto:{{ $order->user->email }}">{{ $order->user->email }}</a></div>
                <div><span>DATE</span> {{ $order->formatted_created_at }}</div>
                <div><span>PAYMENT </span> {{ $order->payment->method }}</div>
            </div>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th class="id">ID</th>
                        <th class="name">PRODUCT NAME</th>
                        <th>PRICE</th>
                        <th>QTY</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach($order->orderItems as $orderItem)
                    <tr>
                        <td class="id">{{ $orderItem->id }}</td>
                        <td class="name">{{ $orderItem->product->name }}</td>
                        <td class="unit">${{ $orderItem->unit_price }}</td>
                        <td class="qty">{{ $orderItem->quantity }}</td>
                        <td class="total">${{ $orderItem->unit_price * $orderItem->quantity }}</td>
                        @php
                            $totalPrice += $orderItem->unit_price * $orderItem->quantity ;
                        @endphp
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">SUBTOTAL</td>
                        <td class="total">${{ $totalPrice }}</td>
                    </tr>
                    <tr>
                        <td colspan="4">TAX 0%</td>
                        <td class="total">$0.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="grand total">GRAND TOTAL</td>
                        <td class="grand total">${{ $totalPrice }}</td>
                    </tr>
                </tbody>
            </table>
            <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>
        </main>
        <footer>
            Invoice was created on a computer and is valid without the signature and seal.
        </footer>
    </body>
</html>
