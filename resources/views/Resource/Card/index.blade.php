
  <h3>ALL CARD VIEW PAGE</h3>
  <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" border>
    <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">Card Number</th>
        <th>Name</th>
      </tr>
    </thead>
    //TODO need to paginate the page.
    <tbody>
      @foreach($items as $item)
        <tr>
          <td>{{$item->set_id}}-{{$item->card_number}}</td>
          <td>
            <a href="/CardCollection/public/card/{{$item->id}}">{{$item->name}}</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
