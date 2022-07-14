<div class="row">
    <div class="form-group col-md-6">

        <div class="row">
            <div class="col-2">
                <input type="hidden" value="{{ $data->id }}" name="id">
                <label for="example-text-input">Remarks:</label>
            </div>
            <div class="col-10">
                <textarea class="form-control" type="text" value="" name="remarks" id="Remarks"></textarea>

            </div>
        </div>
    </div>


    <div class="form-group col-md-6">
        <div class="row">
            <div class="col-2">

                <label for="example-date-input">Follow-Up Date</label>
            </div>
            <div class="col-10">
                <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" name="date"
                    id="Follow_Up_Date">

            </div>
        </div>
    </div>
</div>
