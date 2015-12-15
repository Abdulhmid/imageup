<script type="text/javascript">
$(document).ready(function(){
  $('#send-btn').click(function(){
    $.ajax({
      url: 'post/status',
      // url: {!! url(GLobalHelpers::indexUrl().'/post/status') !!},
      type: "get",
      data: {'article':$('#article').val(),
             'tags':$('input[name=tags]').val(),
             'link':$('input[name=link]').val(),
             '_token': $('input[name=_token]').val()},
      success: function(data){
        alert(data);
      }
    });
  });

  // Link Action In Post
  $('a.hastag').click(function (event)
  {$("#hastag").show();$("#link").hide();$("#imagePost").hide();});
  $('a.link').click(function (event)
  {$("#hastag").hide();$("#link").show();$("#imagePost").hide();});
  $('a.imageLink').click(function (event)
  { $("#hastag").hide();$("#link").hide(); $("#imagePost").show(); });

});
</script>
