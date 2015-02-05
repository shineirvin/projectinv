$(document).ready(function()
{
    $('#data').dataTable({
        "ajax": 'databases',
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
    });

});