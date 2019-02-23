<ul>
@foreach($items as $item)
  <pre>
    {{$item}}
  </pre>
  <li>
  {{$item->count}}
  {{$item->genre}}
  {{$item->year}}
  {{$item->brand}}
  </li>
@endforeach
</ul>
