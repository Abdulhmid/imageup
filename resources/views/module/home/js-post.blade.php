<script>
$(document).ready(function(){
  console.log("Ini Js Home Post");
  $.get("{!! url('data-posting') !!}", function (data) {
              console.log(data);
              $("#thisData").html(data);
          })
          .always(function () {
              $('#loading-stream').show();
          })
          .done(function () {
              $('#loading-stream').hide();
          });
});
</script>
