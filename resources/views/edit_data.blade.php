<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel Curd</title>
  </head>
  <body>
      <div class="container">
        <a href="{{'/'}}" class="btn btn-primary">Show Data</a>
            <form action="{{'/update-data/'. $editData->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name"  value={{$editData->name}}class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value={{$editData->email}}class="form-control" placeholder="Enter your email">
                </div>
                <input type="submit" name="submit" class="form-control">
            </form>
      </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>