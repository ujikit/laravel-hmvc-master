<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script defer src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  // ketika navbar responsive ke mobile
  $(".navbar-burger").click(function() {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });
  // tabs pada index
  $('#tabs li').on('click', function() {
    var tab = $(this).data('tab');
    $('#tabs li').removeClass('is-active');
    $(this).addClass('is-active');
    $('#tab-content p').removeClass('is-active');
    $('p[data-content="' + tab + '"]').addClass('is-active');
  });
});
</script>
