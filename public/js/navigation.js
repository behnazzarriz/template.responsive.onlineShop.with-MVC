//tab
$('.dropdown-menu .nav-tabs .nav-link').on("click.bs.dropdown", function (e) {
    $(this).tab('show');

    e.stopPropagation();
});
