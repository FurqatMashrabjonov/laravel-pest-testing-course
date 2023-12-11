<form action="{{url('/post')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Save</button>
</form>
