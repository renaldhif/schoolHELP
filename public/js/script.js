$(document).ready(function () {
    // Initialize
    var dt = $('#dataTable').DataTable();
    // Filter Select School
    $('select#selectschool').on('change', function () {
        dt.column(4).search(this.value).draw();
    });
    // Filter Select School City
    $('select#selectcity').on('change', function () {
        dt.column(5).search(this.value).draw();
    });
    // Filter Select Request Date
    $('select#selectdate').on('change', function () {
        dt.column(2).search(this.value).draw();
    });
});
