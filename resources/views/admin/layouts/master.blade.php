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
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 ">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
                <h1 class="h5 "><i class="fas fa-newspaper "></i> Articles</h1>
                <div class="btn-toolbar mb-2 mb-md-0 ">
                    <a role="button" href=" " class="btn btn-sm btn-success ">create</a>
                </div>
            </div>
            <div class="table-responsive ">
                <table class="table table-striped table-sm ">
                    <caption>List of posts</caption>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>summary</th>
                        <th>view</th>
                        <th>status</th>
                        <th>user ID</th>
                        <th>cat ID</th>
                        <th>image</th>
                        <th>setting</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>
                            <a class="text-primary" href=" ">
                                ss
                            </a>
                        </td>
                        <td>
                            ss
                        <td>
                            ss </td>
                        <td>
                            ss
                        </td>
                        <td>
                            <span class="badge badge-success">#breaking_news</span>
                            <span class="badge badge-dark">#editor_selected</span>
                        </td>
                        <td>
                            ss
                        </td>
                        <td>
                            ss
                        </td>
                        <td><img style="width: 80px; " src=" " alt=" "></td>
                        <td style="width: 25rem; ">
                            <a role="button" class="btn btn-sm btn-warning btn-dark text-white " href=" ">
                                remove breaking news add breaking news
                            </a>
                            <a role="button" class="btn btn-sm btn-warning btn-dark text-white " href=" ">
                                remove selcted add selected
                            </a>
                            <hr class="my-1 " />
                            <a role="button" class="btn btn-sm btn-primary text-white " href=" ">edit</a>
                            <a role="button" class="btn btn-sm btn-danger text-white " href=" ">delete</a>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>




        </main>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js "></script>
<script src="{{asset("assets/admin/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/admin/js/mdb.min.js")}}"></script>

</body>

</html>
