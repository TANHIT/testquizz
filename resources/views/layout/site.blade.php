<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Clone</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha384-oio5OBuHUVRHbYlW5XtGl3r5m6L5bKZpJs/Z9M5Cz4UHuh9dUc1aYWSOYT0TNAEx" crossorigin="anonymous">
  
  <style>
    /* Chủ đề sáng */
    body {
      background-color: #fff;
      color: #000;
    }

    .navbar-light .navbar-nav .nav-link {
      color: #000; /* Màu chữ của các liên kết trong navbar */
    }

    .navbar-light .navbar-toggler-icon {
      background-color: #fff; /* Màu biểu tượng toggle trong navbar */
    }

    .form-control {
      color: #000; /* Màu chữ của ô tìm kiếm */
    }

    .nav-dark-mode .nav-link {
      color: #fff; /* Màu chữ của các liên kết trong class nav khi chủ đề là tối */
    }

    .nav-dark-mode {
      background-color: #333 !important; /* Màu nền của class nav khi chủ đề là tối */
    }

  
    /* Chủ đề tối */
    body.dark-mode {
      background-color: #333;
      color: #fff;
    }

    body.dark-mode .navbar-light {
      background-color: #333; /* Màu nền của navbar trong chủ đề tối */
    }

    body.dark-mode .navbar-light .navbar-nav .nav-link {
      color: #fff;
    }

    body.dark-mode .navbar-light .navbar-toggler-icon {
      background-color: #333;
    }

    body.dark-mode .form-control {
      color: #fff;
    }

    /* Nút chuyển đổi chủ đề */
    #themeToggleBtn {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      margin-left: 10px;
    }
  </style>
</head>
<body id="themeMode">

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light flex-column">
  <a class="navbar-brand" href="#">YouTube Clone</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Trending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Subscriptions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Library</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">History</a>
      </li>
     
      <form class="form-inline ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
     <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('youtube')}}">youtube</a>
      </li>
      <button class="btn btn-outline-dark" id="themeToggleBtn">&#9899;</button>
    </ul>
  </div>
</nav>

<!-- Video Section -->
<div class="container">
  <!-- Content Goes Here -->
  @yield('content')
</div>

<!-- Link to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Kiểm tra nếu đã có trạng thái chủ đề trong localStorage
  if (localStorage.getItem('themeMode') === 'dark') {
    enableDarkMode();
  }

  // Lắng nghe sự kiện click trên nút chuyển đổi chủ đề
  document.getElementById('themeToggleBtn').addEventListener('click', function () {
    // Kiểm tra chủ đề hiện tại và thực hiện chuyển đổi
    if (document.body.classList.contains('dark-mode')) {
      disableDarkMode();
    } else {
      enableDarkMode();
    }
  });
});

// Hàm kích hoạt chủ đề sáng
function enableDarkMode() {
  document.body.classList.add('dark-mode');
  document.querySelector('.navbar').classList.add('navbar-dark', 'nav-dark-mode');
  localStorage.setItem('themeMode', 'dark');
}

// Hàm tắt chủ đề sáng
function disableDarkMode() {
  document.body.classList.remove('dark-mode');
  document.querySelector('.navbar').classList.remove('navbar-dark', 'nav-dark-mode');
  localStorage.setItem('themeMode', 'light');
}
</script>

</body>
</html>
