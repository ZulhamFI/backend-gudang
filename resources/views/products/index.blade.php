<h1>list products</h1>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $products)
        <tr>
            <td>{{$products->name}}</td>
            <td>{{$products->description}}</td>
            <td>{{$products->price}}</td>
            <td>
                <a href="/products/{{$products->id}}/edit">Edit</a>
                <form action="/products/{{$products->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="DELETE">
                </form>
                
            </td>
        </tr>
        @endforeach

    </tbody>
    <a href="/products/create">Create</a>
</table>