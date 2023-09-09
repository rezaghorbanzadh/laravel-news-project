@extends("admin.layouts.master")





@section("main")

    <main role="main " class="col-md-9 ml-sm-auto col-lg-10 px-4 ">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
            <h1 class="h5 "><i class="fas fa-newspaper "></i> Users</h1>
            <div class="btn-toolbar mb-2 mb-md-0 ">
                <a role="button " href="# " class="btn btn-sm btn-success disabled ">create</a>
            </div>
        </div>
        <section class="table-responsive ">
            <table class="table table-striped table-sm ">
                <caption>List of users</caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>permission</th>
                    <th>created at</th>
                    <th>setting</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>s</td>
                    <td>s</td>
                    <td>ss</td>
                    <td>s</td>
                    <td>ss</td>
                    <td>ss</td>
                    <td>


                        <a role="button " class="btn btn-sm btn-success text-white " href=" ">click to be admin</a>
                        <a role="button " class="btn btn-sm btn-warning text-white " href=" ">click not to be admin</a>


                        <a role="button " class="btn btn-sm btn-primary text-white " href=" ">edit</a>
                        <a role="button " class="btn btn-sm btn-danger text-white " href=" ">delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </section>


    </main>

@endsection
