

    @foreach ($fruit as $item)

    <ul>   
       <li> {{$item['menu_items_label']}}  </li>
        <ol> {{$item['menu_items_children_label']}}  </ol>
        <ol>  {{$item['menu_items_children_children_label']}}  </ol>
        <ol>    {{$item['menu_items_children_children_children_label']}}  </ol>
    

</ul>

<a href={{ "edit/" .$item['id']}}>edit</a>


     @endforeach
