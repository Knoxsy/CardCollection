<!-- <pre>
  {{$items}}
</pre> -->

<ul>
@foreach($items as $item)

  <li>
  {{$item->user->name}}
  {{$item->card->set->genre}}
  </li>
@endforeach
</ul>
