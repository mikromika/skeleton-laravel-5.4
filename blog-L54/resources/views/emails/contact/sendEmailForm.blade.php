
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

 <div class="container">


<div class="panel panel-default">
<!-- Default panel contents -->

<div class=" panel-heading">Panel heading</div>
<br>
  <div class="panel-body">


  <div class="row col-md-8 col-md-8-offset-3">


<form action="{{ route('contact.store') }}" method="POST">
{!! csrf_field() !!}

<div class="form-group">
  <label> Your Name </label>
  <input type="text" class="form-control" name="name">
</div>

<div class="form-group">
  <label> Your Message </label>
  <textarea class="form-control" rows="10" name="message"></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-block btn-success"> Submit </button>
  </div>
<br><br>
</form>

</div>
</div>



</div>

<div class="panel-footer">Panel footer</div>
</div></div>
</body>
</html>
