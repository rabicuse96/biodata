<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <title></title>
</style>
  </head>
  <body>

<form class="pure-form pure-form-aligned" action="/form" method="post">
  <div class="pure-control-group">
    <label for="name">Nama</label>
    <input type="text" name="nama" placeholder="Nama" value="{{$array[0]}}">
    <?php if ($errors->has('nama')): ?>
    <p>{{$errors->first('nama')}}</p>
    <?php endif; ?>
  </div>

  <div class="pure-control-group">
    <label for="name">Email</label>
    <input type="text" name="email" placeholder="Email" value="{{$array[1]}}">
    <?php if ($errors->has('email')): ?>
    <p>{{$errors->first('email')}}</p>
    <?php endif; ?>
  </div>

  <div class="pure-control-group">
    <label for="name">Birth</label>
    <input type="date" name="birth" value="{{$array[2]}}">
    <?php if ($errors->has('birth')): ?>
    <p>{{$errors->first('birth')}}</p>
    <?php endif; ?>
  </div>

  <div class="pure-control-group">
    <label for="name">Telepon</label>
    <input type="text" name="telepon"placeholder="Telepon" value="{{$array[3]}}">
    <?php if ($errors->has('telepon')): ?>
    <p>{{$errors->first('telepon')}}</p>
    <?php endif; ?>

  </div>

  <div class="pure-control-group">
      <label for="gender" class="pure-checkbox">Gender</label>
      <input type="text" name="gender"placeholder="Telepon" value="{{$array[4]}}">
      <?php if ($errors->has('gender')): ?>
      <p>{{$errors->first('gender')}}</p>
      <?php endif; ?>
  </div>

  <div class="pure-control-group">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" class="pure-input-1-2" placeholder="Alamat" rows="8" cols="80">{{$array[5]}}</textarea>
    <?php if ($errors->has('alamat')): ?>
    <p>{{$errors->first('alamat')}}</p>
    <?php endif; ?>
    <!-- <button type="submit" class="pure-button pure-button-primary" name="submit" value="submit">Submit</button>
    <button type="reset" class="pure-button pure-button-primary" value="Reset">Reset</button> -->
  </div>
  {{csrf_field()}}
</form>

  </body>
</html>
