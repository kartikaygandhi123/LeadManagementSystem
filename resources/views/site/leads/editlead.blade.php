<div class="box box-default">
    <div class="box-body">
        <form method="POST" id="myLeadform" name="myform" action="{{ route('update_lead', $editlead->id) }}"
            class="form-horizontal form-element">
            @csrf
            @method('put')



            <input type="hidden" name="flag_id" id="flag" />
            <input type="hidden" name="id" value=" {{ $editlead->id }}" />
            <div class="box-body">

                {{-- 1st row --}}

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Customer_Name" class="col-sm-2 control-label">Customer Name<span
                                        style="color: red">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <input name="Customer_Name" type="text" class="form-control" id="Customer_Name"
                                    value="{{ $editlead->Customer_Name }}" tabindex="1"
                                    pattern="[a-zA-Z\s\[1-9]{1}[0-9]{6}[0-9]{3}]+" required />
                                <span class="error" style="color: red;">
                                    <p id="customer_Name"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="POC_Name" class="col-sm-2 control-label">POC Name<span
                                        style="color: red;">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <input name="POC_Name" type="text" class="form-control" id="POC_Name" tabindex="3"
                                    value="{{ $editlead->POC_Name }}" pattern="[a-zA-Z\s]+" required /><span
                                    class="error" style="color: red;">
                                    <p id="poc_Name"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 1st row upto here --}}


                {{-- 2nd row --}}

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Contact_Number" class="col-sm-2 control-label">Contact Number<span
                                        style="color: red;">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="Contact_Number" class="form-control" id="Contact_Number"
                                    value="{{ $editlead->Contact_Number }}" tabindex="5" required />
                                <span class="error" style="color: red;">
                                    <p id="contact_Number"> </p>
                                </span>

                                @if ($errors->first('Contact_Number'))
                                    <span class="error"
                                        style="color: red;">{{ $errors->first('Contact_Number') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Email" class="col-sm-2 control-label">Email<span
                                        style="color: red;">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="Email" class="form-control" id="Email" tabindex="7"
                                    value="{{ $editlead->Email }}" required /><span class="error"
                                    style="color: red;">
                                    <p id="email"></p>
                                </span>
                                @if ($errors->first('email'))
                                    <span class="error" style="color: red;">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2nd row upto here --}}



                {{-- 3rd row --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Industry" class="col-sm-2 control-label">Industry<span
                                        style="color: red;">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <select name="Industry" id="Industry" class="form-control  " tabindex="7" required>
                                    <option disabled value="">
                                        -select Industry-
                                    </option>
                                    @foreach ($industries as $industry)
                                        <option value="{{ $industry->name }}">
                                            {{ $industry->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Lead_Source_name" class="col-sm-2 control-label">Lead Source<span
                                        style="color: red;">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <select name="Lead_Source_name" id="Lead_Source_name" class="form-control  "
                                    required>
                                    <option disabled>
                                        -Select Lead Source-
                                    </option>
                                    @foreach ($leadsource as $lead)
                                        <option value="{{ $lead->lead_source }}">{{ $lead->lead_source }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3rd row upto here --}}




                {{-- 4th row --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="First_Contact_Date" class="col-sm-2 control-label">First Contact Date<span
                                        style="color: red;">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <input name="First_Contact_Date" type="date" class="form-control"
                                    id="First_Contact_Date" tabindex="3" required
                                    value="{{ $editlead->First_Contact_Date }}" />
                                <span class="error" style="color: red;">
                                    <p id="first_Contact_Date"></p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Lead_Status" class="col-sm-2 control-label">Lead Status<span
                                        style="color: red;">*</span></label>
                            </div>
                            <div class="col-md-6">
                                <select name="Lead_Status" id="Lead_Status" class="form-control select2"
                                    tabindex="4" required>
                                    <option disabled>
                                        Select Lead Status
                                    </option>
                                    <option value="Prospect">
                                        Prospect
                                    </option>

                                    <option value="Qualified">
                                        Qualified
                                    </option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4th row upto here --}}

                <div class="text-right box-footer" id="hidelead">
                    {{-- <a href="#" class="btn btn-default btn-md" tabindex="8">Cancel</a> --}}
                    <button type="submit" class="btn btn-primary btn-sm">
                        Update
                    </button>
                </div>


            </div>
        </form>
    </div>
</div>
