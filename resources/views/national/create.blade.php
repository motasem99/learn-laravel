<form action="{{action("App\Http\Controllers\NationalController@store")}}" method="post">
    @csrf
    <input type="text" name="title_name" placeholder="ادخل الجنسية">
    <button type="submit">ادخال</button>
    <a href="/nal">home</a>
</form>
