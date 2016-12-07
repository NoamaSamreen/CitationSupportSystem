@extends('layouts.layout_no_sidebar')

@section('page')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       Please <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/login">Login</a>
                        (OR)
                        <br>
                        Search for a citation by entering details below,
                    </div>
                    <div class="panel-body">
                        <label for="enterCitation" class="col-form-label">Citation Number<input type="text" id="enterCitation"/></label>
                        <label for="OffenderID" class="col-form-label">Your ID Number<input type="text" id="enterCitation"/></label>
                            <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/viewSummaryOffender">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection

