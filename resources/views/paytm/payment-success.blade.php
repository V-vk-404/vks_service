<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Document</title>
    <style type="text/css">
        body {
            background: #f2f2f2;
        }

        .payment {
            border: 1px solid #f2f2f2;
            min-height: 450px;
            width: 450px;
            border-radius: 20px;
            background: #fff;
            text-align: center;
            display: block;
        }

        h6 {
            margin: 20px;
        }

        .payment_header {
            background: rgb(66, 186, 150);
            padding: 20px;
            border-radius: 20px 20px 0px 0px;

        }

        .check {
            margin: 0px auto;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #fff;
            text-align: center;
        }

        .check i {
            vertical-align: middle;
            line-height: 50px;
            font-size: 30px;
            color: rgb(66, 186, 150);
        }

        .content {
            text-align: center;
        }

        .content h1 {
            font-size: 25px;
            padding-top: 25px;
            color: rgb(66, 186, 150);
        }

        .content a {
            width: 200px;
            height: 35px;
            color: #000;
            font-weight: 700;
            /* border-radius: 30px; */
            text-decoration: none;
            /* padding: 5px 10px; */
            /* background: rgb(66, 186, 150); */
            transition: all ease-in-out 0.3s;
        }

        .table td,
        .table th {
            padding: 0.65rem;
            vertical-align: top;
            border: none;
        }

        .content a:hover {
            text-decoration: none;
        }
        .panel-footer{
            /* background: rgb(66, 186, 150); */
            border-radius: 0px 0px 20px 20px;
            padding: 20px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-4">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content">
                        <h1>Payment Success !</h1>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td style="text-align:left">User Name </td>
                                        <td style="text-align:right;">{{ $paytm->user_name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left">User Number </td>
                                        <td style="text-align:right;">{{ $paytm->user_phone }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left">Payment ID </td>
                                        <td style="text-align:right;">{{ $paytm->order_id }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left">Paid Amount</td>
                                        <td style="text-align:right;">{{ $paytm->price }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left">Payment Status</td>
                                        <td style="text-align:right;">{{$paytm->status}}
                                            {{-- @if ($paytm->status === '1')
                                                Completed
                                            @endif --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left">Transaction ID</td>
                                        <td style="text-align:right; word-wrap: break-word;">
                                            {{ $paytm->transaction_id }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary" onclick="window.print()"
                                    style="padding:5px 30px;  margin-bottom:15px; font-weight:bold">
                                    Print
                                </button>
                                <button class="btn btn-outline-primary" style="padding:4px 30px; border:2px solid #007bff;; margin-bottom:15px;">
                                    <a href="/">Home</a>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
