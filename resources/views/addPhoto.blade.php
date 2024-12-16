<form action="/addPhoto" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$id}}" />
    <input type="hidden" name="tipe" value="{{$tipe}}" />
    <label>Foto</label>
    <input type="file" name="foto[]" accept="image/*" multiple/><br />
    <button type="submit">Submit</button>
</form>