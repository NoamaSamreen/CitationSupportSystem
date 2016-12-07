$(document).ready(function(){
    // $(".clickable-row").click(function() {
    //     window.document.location = $(this).data("href");
    // });
    $('[data-toggle="popover"]').popover();
    $('.template-table').DataTable({
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
