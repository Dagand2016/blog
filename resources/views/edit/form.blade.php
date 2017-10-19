<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Изменить Таблицу</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('../css/mine.css') }}">

</head>
<body class="row">
    <div class="container center-block">
      <form class="table-form" role="form" method="post">
      <div class="form-row col-5 ">
        <div>
            <div> <label for="name" class="col-form-label">Имя</label> </div>
            <div> <input type="text" class="form-control" id="name" placeholder="Напишите имя" name="_method"> </div>
            <br/>
        </div>
        <div>
            <div> <label for="surname" class="col-form-label"></label> Фамилия</div>
            <div> <input type="text" class="form-control" id="surname" placeholder="Напишите фамилию" name="_method"> </div>
            <br/>
        </div>  
        <div>
            <label for="InputEmail" class="col-form-label">Email адрес</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Напишите Емайл" name="_method">
            <br/>
        </div>
        <div>
            <div> <label for="years" class="col-form-label"></label> Возраст</div>
            <div> <input type="text" class="form-control" id="years" placeholder="Напишите возраст" name="_method"> </div>
            <br/>
        </div class="edit">
            <br/>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>
      </form>
    </div>
    
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
</body>
</html>
