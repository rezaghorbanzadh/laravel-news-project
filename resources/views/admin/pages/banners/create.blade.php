@extends("admin.layouts.master")





@section("main")



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 ">
        <section class="pt-3 pb-1 mb-2 border-bottom ">
            <h1 class="h5 ">Create Banner</h1>
        </section>

        <section class="row my-3">
            @if($errors->any())
                <div class="alert alert-warning" >
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <section class="col-12 ">

                <form method="post" action="{{route("admin.banner.store")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ... " required autofocus>
                    </div>


                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control-file" required autofocus>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">store</button>
                </form>
            </section>
        </section>


    </main>

@endsection
