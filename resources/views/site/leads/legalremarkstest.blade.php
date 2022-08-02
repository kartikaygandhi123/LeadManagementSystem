@if (!empty($viewlead->legalRemarks))
    {{-- $loop->last --}}
    <hr>

    @foreach ($viewlead->legalRemarks as $p)
        {{-- @if ($loop->last) --}}
        @if (!empty($p->document_type))
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <b> Document Type</b>
                        </div>
                        <div class="col-md-6">
                            {{ isset($p->document_type) ? $p->document_type : 'Not Found' }}

                        </div>


                    </div>
                </div>
            </div>
        @endif



        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <b> Document Link: </b>
                    </div>
                    <div class="col-md-6">


                        <?php
                                           //$data->sla_document_link
                                            $ar = explode(".", $p->document_link);

                                            $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
                                            if (in_array($ar[1], $extensions)) {
                                                     ?>
                        <img style="width:40px;height:25px" src="/uploads/{{ $p->document_link }}"
                            alt='Legal Remarks Document'>

                        <?php
                                                 } else {
                                                     ?>
                        <a href="/uploads/{{ $p->document_link }}" target="_blank">

                            <img style="width:40px;height:25px" src="/assets/doc.svg" alt='Legal Remarks Document'>

                        </a>
                        <?php
                                                 }
                                                 ?>



                    </div>


                </div>
            </div>
        </div>

        @if (!empty($p->bd_submitted_time))
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Remarks For Legal</b>
                        </div>
                        <div class="col-md-6">
                            {{ isset($p->remarks_for_legal) ? $p->remarks_for_legal : 'Not Found' }}

                        </div>


                    </div>
                </div>
            </div>
        @endif






        {{-- Legal Remarks By Legal Team --}}



        @if (!empty($p->legal_submitted_time))
            <hr>

            <?php            
                                         //$data->sla_document_link
$ar = explode(".", $p->legal_document_link);

$extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
if (in_array($ar[1], $extensions)) {
    ?>
            <img style="width:40px;height:25px" src="/uploads/{{ $p->legal_document_link }}"
                alt='Legal Remarks Document'>

            <?php
} else {
    ?>
            <a href="/uploads/{{ $p->legal_document_link }}" target="_blank">

                <img style="width:40px;height:25px" src="/assets/doc.svg" alt='Legal Remarks Document'>

            </a>
            <?php
}
?>




            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Remarks By Legal</b>
                        </div>
                        <div class="col-md-6">
                            {{ isset($p->$p->remarks_by_legal) ? $p->$p->remarks_by_legal : 'Not Found' }}

                        </div>


                    </div>
                </div>
            </div>
        @endif



        {{-- Legal Remarks By Legal Team --}}
    @endforeach
@endif
