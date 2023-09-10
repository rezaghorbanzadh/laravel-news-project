<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <link rel="stylesheet" href="{{asset("assets/admin/css/bootstrap.min.css")}}" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

    <link href="{{asset("assets/admin/css/style.css")}}" rel="stylesheet" type="text/css">

</head>

<body>

    {{--navbar--}}
    @include("admin.layouts.navbar")

<div class="container-fluid">
    <div class="row">

        {{--navbar--}}
        @include("admin.layouts.slidebar")


        {{--main--}}
        @yield("main")

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js "></script>
<script src="{{asset("assets/admin/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/admin/js/mdb.min.js")}}"></script>

</body>

</html>
