<ul>
@foreach($items as $item)
  <pre>
    {{$item}}
  </pre>
  <li>
  {{$item->id}}
  {{$item->name}}
  </li>
@endforeach
</ul>
