<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel Excel</title>
</head>
<body>

<div class="container p-5 align-items-center mx-auto w-50 ">

    <div class="card pb-5 bg-light">
        <div class="card-header text-center bg-primary text-white">
            Excel Import
        </div>
        <div class="card-body text-primary">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
            @endif

            @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
            @endif

            @if(session()->has('failures'))
                <table class="table table-danger">
                    <tr>
                        <th>Row</th>
                        <th>Attributes</th>
                        <th>Errors</th>
                        <th>Value</th>
                    </tr>
{{--                    @foreach(session()->get('failures') as $validation)--}}
{{--                        <tr>--}}
{{--                            <td>{{$validation->row()}}</td>--}}
{{--                            <td>{{$validation->attribute()}}</td>--}}
{{--                            <td>--}}
{{--                                <ul>--}}
{{--                                    @foreach($validation->errors() as $error)--}}
{{--                                        <li>{{$error}}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{$validation->values()[$validation->attribute()]}}--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                </table>
            @endif
            <div class="d-flex justify-content-center mt-5">
                <form action="inspection/import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">

                        <input class="border mr-5"
                               type="file"
                               name="file"
                               id="file"
                               required>
                        @error('Excel file')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <button type="submit"
                                class="btn btn-primary">
                            Import
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>

</div>
<div class="container p-5 align-items-center mx-auto w-50 ">

    <div class="card pb-5 bg-light">
        <div class="card-header text-center bg-primary text-white">
            Excel Export
        </div>
        <div class="card-body text-primary">

            <div class="d-flex justify-content-center mt-5">
                <form action="/inspection/export" method="GET" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">


                        <button type="submit"
                                class="btn btn-primary">
                            Export to Excel
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
