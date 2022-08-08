@extends('layouts.mainLayout')

@section('content')
    <style>
        form {

            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .form-control {

            width: 80%;
            border: 1px solid grey
        }
    </style>




    {{-- select2 --}}
    <link href="/assets/vendor_components/select2/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Form --}}

    <div id="newcustomerform" class="box box-solid box-light">
        <div class="box-header with-border">
            <h3 id="form_heading" class="box-title">Add User</h3>
        </div>

        <div>
            <!-- /.card-header -->
            <!-- form start -->



            <form method="post" id="adduserform" name="adduserform" action="saveuser" class="form-horizontal form-element">
                @csrf



                <div class="box-body">

                    {{-- first two --}}
                    <div class="row">
                        <div class="form-group col-md-6">

                            <div class="row">
                                <div class="col-2">

                                    <label for="name">Name<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <input id="name" type="text"
                                        class="form-control  @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="name" autofocus required>
                                    <span class="invalid-feedback" role="alert"><strong> @error('name')
                                                {{ $message }}
                                            @enderror </strong></span>

                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">

                                    <label for="Email">Email<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <input id="email" type="email"
                                        class="form-control  @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email" required>

                                    <span class="invalid-feedback" role="alert"><strong>
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- first two upto here --}}



                    {{-- 2nd row --}}

                    <div class="row">

                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">
                                    <label for="Password">Password<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <input id="password" type="password"
                                        class="form-control mb-2 @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password" required>

                                    <span class="invalid-feedback" role="alert"><strong>
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">
                                    <label for="role">Role<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <select name="role" id="role" class="form-control  " tabindex="7" required
                                        value="{{ old('role') }}">

                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">
                                                {{ $role->role_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2nd upto here --}}



                    {{-- 3rd row --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">
                                    <label for="role">LOB<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <select name="lob" id="role" class="form-control  " tabindex="7" required>
                                        <option disabled value="">
                                            -Select Lob-
                                        </option>
                                        @foreach ($lobs as $lob)
                                            <option value="{{ $lob->id }}">
                                                {{ $lob->all_businesses }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">
                                    <label for="role">City<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <select name="city" id="role" class="form-control  " tabindex="7" required>
                                        <option disabled value="">
                                            -Select City-
                                        </option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">
                                                {{ $city->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">

                        <button type="submit" class="btn btn-success btn-md " id="adduserbtn" tabindex="9">
                            Add User
                        </button>
                    </div>

                </div>

                <br>
                <br>
            </form>
        </div>
    </div>


    {{-- Leads --}}
    <div class="box box-solid ">
        <div class="box-header with-border">
            <h4 class="box-title">Users</h4>
            <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>

                            <th>Action</th>
                            <th>Role_Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role Name</th>
                            <th>LOB</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php //dd($users[3]->lobs->all_businesses );
                        ?>
                        @foreach ($users as $user)
                            <tr>
                                <td><a onclick="view_data('{{ $user->id }}')" data-toggle="modal"
                                        data-target="#modal-center"><span class="ti-write"
                                            style="font-size:19px;color:#17a2b8;display:flex;justify-content:center"></span></a>
                                </td>
                                <td>{{ $user['role_id'] }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user->roles->role_name ?? '' }}</td>
                                <td>{{ $user->lobs->all_businesses ?? '' }}</td>
                            </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>




    {{-- </form> --}}
    {{-- </div> --}}


    <div class="modal center-modal fade" id="modal-center" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="mymodalbody" class="modal-body">
                    {{-- Appending through Ajax --}}
                </div>
                <div class="modal-footer modal-footer-uniform">
                    {{-- <button type="button" class="btn btn-bold btn-pure btn-secondary pull-right"
                        data-dismiss="modal">Close</button> --}}

                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}






    <script>
        function view_data(id) {


            $.ajax({
                type: "GET",
                url: "view_user?id=" + id,

                success: function(msg) {

                    $("#mymodalbody").html(msg);
                }
            });

        }
    </script>
@endsection
