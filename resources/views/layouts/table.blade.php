<table class="{{$table_classes or 'table table-striped table-bordered custab layouts-table'}}">
    <thead>
        @yield('table_headers')
    </thead>
    <tbody>
        @yield('table_rows')
    </tbody>
</table>

@push('javascript')
    <script type="text/javascript">
        $(document).ready(function(){
            // $(".clickable-row").click(function() {
            //     window.document.location = $(this).data("href");
            // });
            $('[data-toggle="popover"]').popover();
            $('.layouts-table').DataTable({
                // "dom": 'frtilp'
                // "dom": "<'row'<'pull-left'f>><'row'<'col-sm-12'tr>>" +
                // "<'row'<'col-sm-4'l><'col-sm-4'i><'col-sm-4'p>>"
                dom: "<'row'<'pull-left'f><'pull-right'l><'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-offset-3'<'col-md-6'p>>>>",
                "order": [],
                "columnDefs": [ {
                    "targets"  : 'no-sort',
                    "orderable": false,
                }]

            });
        });

    </script>
@endpush


{{--<!-- Sample usage

@section('table_headers')
    <tr>
        <th>Button#1</th>
    </tr>
@stop
@section('table_rows')
    <tr>
        <td>@include('template.table_button', array('button_css' => 'btn btn-danger', 'button_link' => '#', 'button_text' => 'Dismiss'))</td>
    </tr>
@stop
@include('template.table')

-->--}}