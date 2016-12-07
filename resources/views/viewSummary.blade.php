@extends('layouts.layout_sidebar')
@section('head')
@push('javascript')
<script type="text/javascript">
    $(document).ready(function () {
        $("#date_picker").jqxDateTimeInput({
            formatString: "MM/dd/yyyy",
            showTimeButton:false,
            showCalendarButton: false
        });
        $("#time_auto").jqxDateTimeInput({
            formatString: "hh:mm",
            showTimeButton:false,
            showCalendarButton: false
        });
    });
    var citaionNumber = Math.floor((Math.random() * 987654321) + 123456789);
    document.getElementById("citationNumber").value=citaionNumber;
</script>
@endpush
@stop
@section('title')
   Citation Summary
@endsection
@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label for="cittaionNumber" class="col-form-label">Citation Number<input style="pointer-events: none;" type="text" id="citationNumber"/></label>
                </div>
                <div class="panel-body">
                <div class="row">
                        <label for="date_picker" class="col-sm-3 col-form-label">Date<div style="pointer-events: none;" id="date_picker"></div></label>
                        <label for="time_auto" class="col-sm-3 col-form-label">Time<div style="pointer-events: none;" id="time_auto"></div></label>
            </div>
                <div class="row">
                        <label for="offender_ID" class="col-sm-6 col-form-label">Offender ID<input style="pointer-events: none;" id="offender_ID" value="TL099123FJ" type="text" class="form-control"/></label>
                </div>
                <div class="row">
                        <label for="offenderFirstName" class="col-sm-6 col-form-label">Offender First Name<input style="pointer-events: none;" value="John" id="offenderFirstName" type="text" class="form-control"/></label>
                </div>
                <div class="row">
                        <label for="offenderLastName" class="col-sm-6 col-form-label">Offender Last Name<input style="pointer-events: none;" value="Doe" id="offenderLastName" type="text" class="form-control"/></label>
                </div>
                <div class="row">
                        <label for="DOB" class="col-sm-6 col-form-label">Offender DOB<input style="pointer-events: none;" value="12/01/1993"/></label>
                </div>
                    </div>
                </div>
            <div class="row">
                <div class="pull-left col-md-5">
                    <a  href="\editCitationPoliceOfficer" class="btn btn-primary">Edit Citation</a>
                    <a  data-toggle="modal" data-target="#flagModal" class="btn btn-primary">Flag</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="flagModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="helpModalLabel">Dismissal Reason?</h3>
                </div>
                <div class="modal-body">
                    <p>Please provide a valid reason to flag this citation.</p>
                    <input type="text"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Flag</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection