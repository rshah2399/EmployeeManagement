<?php
  $con = mysqli_connect('localhost','root','','zegoco');

  if(isset($_POST['addb'])){
    $bimage=$_FILES["blogimage"]["name"];
    move_uploaded_file($_FILES["blogimage"]["tmp_name"],"blogimages/".$_FILES["blogimage"]["name"]);
  
    $title= $_POST['title'];
    $category= $_POST['category'];
    $content= $_POST['editor1'];
    
    $sql = "INSERT INTO `blog`(`title`, `category`, `upload`, `blog`, `date`) VALUES ('$title','$category','$bimage','$content',CURDATE(),'')";
      if (mysqli_query($con, $sql)) {
        echo 'Blog uploaded successfully';
        echo '<script>window.location.assign(admin.php?added);</script>';
      } 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
  <link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="16x16">
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <title>Blog | Zegoco</title>
</head>

<body class="grey lighten-3">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="col-2">
      <a href="dashboard.html">
        <img src="assets/img/cmp-logo.png" class="nav-image" alt="Zegoco Logo">
        <img src="assets/img/logo-text.png" class="d-none d-lg-inline" alt="Zegoco Logo Text">
      </a>
    </div>
    <div class="col-10 text-muted clearfix">
      <a href="javascript:void(0)"><i class="fas fa-bars sideNavToggle"></i></a>
      <div class="float-right nav-item dropdown">
        <a class="dropdown-toggle text-white rounded-circle primary-color p-3" data-toggle="dropdown"
        href="#" aria-expanded="false" data-animation="scale-up" role="button"><i class="fas fa-user"></i></a>
        <div class="dropdown-menu" role="menu" style="right: 0; left: auto;">
          <a class="dropdown-item" href="#" role="menu-item"><i class="fas fa-edit"></i> Edit Profile</a>
          <a class="dropdown-item" href="#" role="menu-item"><i class="fas fa-key"></i> Change Password</a>
          <div class="dropdown-divider" role="presentation"></div>
          <a class="dropdown-item" href="#" role="menu-item"><i class="fas fa-lock"></i> Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="row m-0 d-flex">
    <div class="card col-lg-2 col-md-1 d-none d-lg-block d-md-block sidebar p-3 overflow-auto">
      <span class="text-muted d-md-none d-lg-inline"><br></span>
      <ul class="sidebar-links">
        <li><a href="dashboard.html"><i class="fas fa-tachometer-alt"></i><span class="d-md-none d-lg-inline">Dashboard</span></a></li>
        <li><a href="admin.php"><i class="fas fa-user"></i><span class="d-md-none d-lg-inline">Admin</span></a></li>
        <li><a href="#"><i class="fas fa-users"></i><span class="d-md-none d-lg-inline">Users</span></a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i><span class="d-md-none d-lg-inline">Orders</span></a></li>
        <li><a href="#"><i class="fas fa-briefcase"></i><span class="d-md-none d-lg-inline">Packages</span></a></li>
        <li><a href="#"><i class="fas fa-map-marker-alt"></i><span class="d-md-none d-lg-inline">Locations</span></a></li>
        <li><a href="#"><i class="fas fa-percent"></i><span class="d-md-none d-lg-inline">Profit Margins</span></a></li>
        <li><a href="blog.php"><i class="fas fa-rss"></i><span class="d-md-none d-lg-inline">Blog</span></a></li>
        <li><a href="#"><i class="fas fa-sitemap"></i><span class="d-md-none d-lg-inline">Blog Categories</span></a></li>
        <li><a href="#"><i class="fas fa-video"></i><span class="d-md-none d-lg-inline">Video Gallery</span></a></li>
        <li><a href="#"><i class="fas fa-sitemap"></i><span class="d-md-none d-lg-inline">Video Categories</span></a></li>
        <li><a href="#"><i class="fas fa-quote-left"></i><span class="d-md-none d-lg-inline">Testimonials</span></a></li>
        <li><a href="#"><i class="fas fa-handshake"></i><span class="d-md-none d-lg-inline">Partners</span></a></li>
      </ul>
    </div>

    <div class="col-lg-10 offset-lg-2 col-md-11 offset-md-1 col-sm-12 main-container">
      <div class="row card">
        <div class="p-3">
          <span class="h5 text-primary">Blog</span>
          <span class="float-right">
            <ul class="breadcrump">
              <li><a href="#">Home</a></li>
              <li class="active"><a href="#">Blog</a></li>
            </ul>
          </span>
        </div>
      </div>
      <div class="row page-container">

<div class="modal fade" id="modalAddBlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write A Blog</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
      <div class="modal-body mx-3">
        <div class="form-group mb-5">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Post Title</label>
          <input type="text" name="title" id="orangeForm-name" class="form-control validate">
        </div>
        <div class="form-group mb-5">
          <label for="orangeForm-upload">Choose file</label>
          <input type="file" name="blogimage" class="form-control validate" id="orangeForm-upload">
        </div>
        <div class="form-group mb-5">
          <label for="orangeForm-cat">Category</label>
          <select type="email" name="category" id="orangeForm-cat" class="form-control validate">
            <option value="-1">Select a Category</option>
            <option value="news">News</option>
            <option value="marketing">Marketing</option>
            <option value="advertising">Advertising</option>
            <option value="outdoor advertising">OutDoor Advertising</option>
          </select>  
        </div>

        <div class="form-group mb-5">
          <label for="orangeForm-write">Write Content</label>
          <textarea name="editor1" id="orangeForm-write" class="form-control validate" cols="30" rows="10"></textarea>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn" name="addb" style="background-color:rgb(66,133,244);color: white;">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="modalEditBlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Blog</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="form-group mb-5">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Post Title</label>
          <input type="text" id="orangeForm-name" class="form-control validate">
        </div>
        <div class="form-group mb-5">
          <label for="orangeForm-upload">Choose file</label>
          <input type="file" class="form-control validate" id="orangeForm-upload">
        </div>
        <div class="form-group mb-5">
          <label for="orangeForm-cat">Category</label>
          <select type="email" id="orangeForm-cat" class="form-control validate">
            <option value="-1">Select a Category</option>
            <option value="news">News</option>
            <option value="market">Marketing</option>
            <option value="advert">Advertising</option>
            <option value="outdoor">OutDoor Advertising</option>
          </select>  
        </div>

        <div class="form-group mb-5">
          <label for="orangeForm-write">Write Content</label>
          <textarea name="editor2" id="orangeForm-write" class="form-control validate" cols="30" rows="10"></textarea>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn" style="background-color:rgb(66,133,244);color: white;">Submit Changes</button>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-12 page-card-container">
  <div class="card page-card">
      <div class="media">
        <div class="media-left media-middle col-6">
          <p>Blogs</p>
          <p>List of blogs currently on the website</p>
        </div>
        <div class="media-right media-middle col-6">
          <button class="btn" style="float: right;background-color:rgb(66,133,244);color: white;" data-toggle="modal" data-target="#modalAddBlog"><i class="fas fa-plus-circle"></i> Add Blog</button>
        </div>
      </div>
      <div class="media">
        <div class="media-left media-middle col-6">
            <p>Show 
                <span>
                    <select name="num" id="num">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </span>
                enteries
            </p>  
        </div>
        <div class="media-right media-middle col-6">
            <p  style="float: right;">Search : <span><input type="Search" class="form-control"></span></p>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-lg-12">
        <div class="table-responsive">
          <table class="table" id="adminTable">
            <tr>
                <th>Sr. No.</th>
                <th>Title</th>
                <th>Category</th>
                <th>Views</th>
                <th>Date</th>
                <th>Operations</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>CAB/CAA</td>
                <td>News</td>
                <td>1000</td>
                <td>2019-12-17</td>
                <td>
                  <a data-toggle="modal" data-target="#modalEditBlog">
                    <i class="fas fa-edit" style="font-size: 15px;color:rgb(66,133,244); padding-right: 5px;"></i>
                  </a>
                  <span>
                    <a id="delete">
                      <i class="fas fa-trash-alt" style="font-size: 15px;color: red;"></i>
                    </a>
                  </span>
                </td>
            </tr>
        </table>
        </div>
      </div>
      <div class="row" style="padding-top: 15px;">
        <div class="col-6">
          <p>Showing 1 enteries out of 10</p>
        </div>
        <div class="col-6">
          <span style="float: right;">
            <ul class="pagination pg-blue pagination-circle">
              <li class="page-item ">
                <a class="page-link" tabindex="-1"><i style="font-size: 20px;color:rgb(66,133,244);padding-right: 5px;" class="fas fa-arrow-circle-left"></i></a>
              </li>
              <li class="page-item"><a class="page-link">1</a></li>
              <li class="page-item">
                <a class="page-link">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link">3</a></li>
              <li class="page-item ">
                <a class="page-link"><i style="font-size: 20px;color:rgb(66,133,244);padding-left: 5px;" class="fas fa-arrow-circle-right"></i></a>
              </li>
            </ul>
          </span>
        </div>
      </div>
  </div>
</div>


        <div class="col-12 page-card-container">
          <footer class="col-12 card page-card text-muted">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                &copy; 2019 Zegoco | All rights reserved.
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 float-right">
                <span class="poweredBy">Powered By: <a href="https://www.hertzsoft.com" target="_blank"><img
                      src="assets/img/logo.png" class="hertzsoft-image" alt=""></i></a>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>

  <script>
    CKEDITOR.replace('editor1');
  </script>
    <script>
      CKEDITOR.replace('editor2');
    </script>
  <!-- ------------JavaScript Begins------------ -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- ------------JavaScript Ends------------ -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    $('#delete').click(function(){
    
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this blog!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your blog has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your blog is safe!");
        }
      });
    
  })
</script>

</body>

</html>