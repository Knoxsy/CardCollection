<ul>
@foreach($items as $item)

  <li>
  {{$item->user_id}}
  {{$item->card_id}}
  </li>
@endforeach
</ul>
