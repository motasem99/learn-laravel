<form action="{{route('nal.update',$data->id)}}" method="post">
    @csrf
    @method('Put')
    <input type="text" name="title_name" placeholder="ادخل الجنسية" value="{{$data->title_name}}">
    <button type="submit">تعديل</button>
    <a href="/nal">home</a>
</form>
