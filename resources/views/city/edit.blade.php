<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>ادخال مدينة جديدة</h2>
  <form action="{{route('citys.update',$data->id)}}" method="post">
    @csrf
    @method('Put')
    <div class="form-group">
      <label for="city_name">اسم المدينة:</label>
      <input type="text" class="form-control @error('city_name') is-invalid @enderror" id="city_name" placeholder="ادخل اسم المدينة" name="city_name" @if($errors->has('city_name')) value="{{ old ('city_name') }}" @else value="{{ $data->city_name }}" @endif>
        @error('city_name')
      <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-default">تعديل</button>
  </form>
</div>

</body>
</html>
