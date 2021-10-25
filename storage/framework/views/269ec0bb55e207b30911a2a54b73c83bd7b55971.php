
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Blog</h2>
        <form action="<?php echo url('/save'); ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value = <?php echo csrf_token()?>>

            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" name="title" class="form-control" id="exampleInputName" aria-describedby=""
                    placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea name="content" id="" cols="80" rows="4"></textarea>
            </div>

       




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>











    
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\resources\views/blog.blade.php ENDPATH**/ ?>