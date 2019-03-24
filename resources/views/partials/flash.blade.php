<style>
.flash_fadeout{
  color: #282E03;
  background-color:#95B067;
  font-size: 20px;
  text-align: center;
}
</style>

@if($message = session('message'))
    <div class="flash_fadeout">{!! $message !!}</div>
@endif

<script>
  $('.flash_fadeout').fadeIn(500,function(){
    window.setTimeout(function(){
      $('.flash_fadeout').fadeOut(2500, function(){
        // $('.flash_fadeout').remove();
      })
    }, 1000);
  });
</script>
