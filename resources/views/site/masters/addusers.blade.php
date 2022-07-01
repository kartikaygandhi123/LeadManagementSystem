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

    <div id="newcustomerform" class="box box-solid box-primary">
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
                                    <select name="role" id="role" class="form-control  " tabindex="7" required>
                                        <option disabled value="">
                                            -Select Role-
                                        </option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->role_id }}">
                                                {{ $user->role_name }}
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
                                            <option value="{{ $lob->all_businesses }}">
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
                                            <option value="{{ $city->name }}">
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


            </form>
        </div>
    </div>
@endsection
