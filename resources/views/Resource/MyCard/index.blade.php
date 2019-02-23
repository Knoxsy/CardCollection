<ul>
@foreach($mycards as $mycard)

  <li>
  {{$mycard->user_id}}
  {{$mycard->card_id}}
  </li>
@endforeach
</ul>
