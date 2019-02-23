<ul>
@foreach($items as $item)
  <pre>
    {{$item}}
  </pre>
  <li>
  {{$item->name}}
  {{$item->card_number}}
  {{$item->set_id}}
  </li>
@endforeach
</ul>
