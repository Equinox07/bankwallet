<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Data Wallet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Data Wallet" name="description" />
    <meta content="Data Wallet" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    
    @include('layouts.shared.head')
    <style>
        .danger {
            color: red;
        }
    </style>
</head>

<body>
    @yield('content')
    @include('layouts.shared.footer-script')
</body>

</html>