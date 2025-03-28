// -------------------- 1. GENERAL -------------------- 
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$(".update").click(function() {
    var id = $(this).data('id');
    $("#dataID").val(id);
});

$(".delete").click(function() {
    var id = $(this).data('id');
    $("#dataID").val(id);
});

// -------------------- 2. SIDEBAR -------------------- 
var loc = window.location.pathname.replace(/^.*[\\\/]/, '');
$('.sidebar').find('a').each(function() {
    if($(this).attr('href') === loc) {
        $(this).toggleClass('active');
    }
});

$(".sideNavToggle").click(function() {
    $('.sidebar').find('span').each(function() {
        $(this).toggleClass('d-sm-inline d-md-none d-md-inline d-lg-inline d-lg-none');
    });
    $(".sidebar").toggleClass('pl-3 col-lg-2 col-lg-1 d-none col-sm-12');
    $(".main-container").toggleClass('col-lg-10 col-lg-11 offset-lg-2 offset-lg-1');
});

// -------------------- 3. DATATABLES -------------------- 
$(document).ready(function () {
    $('#admin').DataTable();
    $('.dataTables_length').addClass('bs-select');
});