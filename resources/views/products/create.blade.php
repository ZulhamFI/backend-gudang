<h1>Create product</h1>

<form action="/products" method="POST">
    @csrf
    Name: <input type="text" name="name"><br><br>
    Description: <input type="text" name="description"><br><br>
    Price:  <input type="number" name="price"><br><br>
    Image URL: <input type="text" name="image_url"><br>

    <input type="submit" value="Save">
</form>