<script src="js/jquery/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>

<script>
    $('.button-collapse').sideNav({
        menuWidth: 250, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
    });
</script>

@yield("scripts")