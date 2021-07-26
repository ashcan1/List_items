<h1>Edit fruit list</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $data ['id'] }}">
    
    <input placeholder="Name" type="text" name="name" value="{{  $data['menu_items_label'] }}"> <br>
    <input placeholder="Origin" type="text" name="children" value="{{  $data['menu_items_children_label'] }}"> <br>
    <input placeholder="Type1" type="text" name="children_children" value="{{  $data['menu_items_children_children_label'] }}"> <br>
    <input placeholder="Type2"  type="text" name="children_children_children" value="{{  $data['menu_items_children_children_children_label'] }}"> <br>

   
    <button type="submit"> Update </button>


</form>