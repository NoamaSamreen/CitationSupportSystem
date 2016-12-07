@push('javascript')
<!-- add the jQuery and jQWidgets script -->

<!-- Add JQuery script -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxcore.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdatatable.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdata.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdata.export.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxbuttons.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxscrollbar.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdropdownlist.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxlistbox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxmenu.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxlayout.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdockinglayout.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxribbon.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxgrid.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxgrid.export.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxgrid.filter.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxgrid.pager.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxpanel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxgrid.sort.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxgrid.selection.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxgrid.columnsresize.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdate.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxscheduler.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxscheduler.api.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdatetimeinput.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxcalendar.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxtooltip.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxwindow.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxtabs.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxcombobox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxcheckbox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxnumberinput.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxradiobutton.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxinput.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/globalization/globalize.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/globalization/globalize.culture.de-DE.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxsortable.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxchart.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxdatetimeinput.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxfileupload.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxmaskedinput.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jqwidgets/jqxvalidator.js') }}"></script>

<!-- javascript dependencies for bootstrap datatable -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>


<!--- javscript dependencies for bootstrap dashboard -->
<script type="text/javascript" src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/metisMenu.min.js') }}"></script>

<!-- Javascript dependency for bootstrap -->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>

<!-- for the sidebar -->
<script type="text/javascript" src="{{ URL::asset('js/sidebar.js') }}"></script>

<!-- add custom js -->
{{--<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>--}}
@endpush


@stack('javascript')
