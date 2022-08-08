<div id="edituserdiv" class="box box-solid box-light">


    <div>



        <form method="post" id="edituser" name="edituserform" action="edituser" class="form-horizontal form-element">
            @csrf



            <div class="box-body">
                <input type="hidden" name="id" value="{{ $user->id }}">
                {{-- first two --}}
                <div class="row mt-2">



                    <div class="form-group col-md-6 ">

                        <label for="name">Name<span class="danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror"
                            name="name" value="{{ $user->name }}" required>
                        <span class="invalid-feedback" role="alert"><strong> @error('name')
                                    {{ $message }}
                                @enderror </strong></span>

                    </div>


                </div>

                <div class="row mt-2">


                    <div class="form-group col-md-6">

                        <label for="Email">Email<span class="danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            name="email" value="{{ $user->email }}" autocomplete="email" required>

                        <span class="invalid-feedback" role="alert"><strong>
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </strong></span>

                    </div>


                </div>

                {{-- first two upto here --}}



                {{-- 2nd row --}}

                <div class="row mt-2">



                    <div class="form-group col-md-6">
                        <label for="Password">Password<span class="danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input id="password" type="password" value="{{ $user->password }}"
                            class="form-control mb-2 @error('password') is-invalid @enderror" name="password"
                            autocomplete="new-password" required>

                        <span class="invalid-feedback" role="alert"><strong>
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </strong></span>
                    </div>


                </div>


                <div class="row mt-2">


                    <div class="form-group col-md-6">
                        <label for="role">Role<span class="danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="role" id="role" class="form-control  " tabindex="7" required>

                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>
                                    {{ $role->role_name }}
                                </option>
                            @endforeach
                        </select>

                    </div>


                </div>
                {{-- 2nd upto here --}}



                {{-- 3rd row --}}
                <div class="row mt-2">


                    <div class="form-group col-md-6">
                        <label for="role">LOB<span class="danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="lob" id="role" class="form-control  " tabindex="7" required>
                            <option disabled value="">
                                -Select Lob-
                            </option>
                            @foreach ($lobs as $lob)
                                <option value="{{ $lob->id }}" {{ $lob->id == $user->lob_id ? 'selected' : '' }}>
                                    {{ $lob->all_businesses }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                </div>

                <div class="row mt-2">


                    <div class="form-group col-md-6">
                        <label for="role">City<span class="danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="city" id="role" class="form-control  " tabindex="7" required>
                            <option disabled value="">
                                -Select City-
                            </option>
                            @foreach ($cities as $city)
                                <option
                                    value="{{ $city->id }} {{ $city->id == $user->city_id ? 'selected' : '' }}">
                                    {{ $city->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                </div>

                <div class="text-center mt-2">

                    <button type="submit" class="btn btn-success btn-sm " id="adduserbtn" tabindex="9">
                        Update User
                    </button>
                </div>

            </div>

            <br>
            <br>






    </div>


    </form>
</div>
