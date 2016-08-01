<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="iFangfang">

    <title>FORUM CASCAP | Design V.1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style-forum.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Version 1</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">FORUM CASCAP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="forumlist.php">FORUM</a>  </li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
      <h2>Main Forum</h2>
      <hr>
<p>Home > <a href="index.php"> Forums </a> > <a href="forumlist.php"> Main Forum </a>
  > <span class="breadcrumb"> New Post</span>  </p>

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputtitle" class="col-sm-2 control-label">หัวข้อ :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputtext" placeholder="Post title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputdescrition" class="col-sm-2 control-label">รายอะเลียด :</label>
    <div class="col-sm-10">
    <textarea class="form-control" rows="6" placeholder="ใส่รายละเอียดข้อความ"> </textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <label for="exampleInputFile">Upload</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">อัพโหลดโฟล์ภาพประกอบ</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <a href="viewpost.php"><button type="submit" class="btn btn-primary">Submit</button></a>
      <button type="submit" class="btn btn-warning">Cancel</button>
    </div>
  </div>
</form>





<!-- End Container-->
    </div>
    <!-- /.container -->
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; DAMASAC | 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


</body>

</html>
