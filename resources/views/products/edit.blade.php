<h1>Edit product</h1>

<form action="/products/{{$product->id}}" method="POST">
    @method ("PUT")
    @csrf
    Name: <input type="text" name="name" value="{{$product->name}}"><br><br>
    Description: <input type="text" name="description" value="{{$product->description}}"><br><br>
    Price:  <input type="number" name="price" value="{{$product->price}}"><br><br>
    Image URL: <input type="text" name="image_url" value="{{$product->image_url}}"><br>

    <input type="submit" value="Save">
</form>