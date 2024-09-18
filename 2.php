<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Twitter</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/57efc2f9b4.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="output.css">
  <style>
    .row{
      display: flex;
    }
  </style>

</head>

<body>
  <div class="row">
    <!--First column-->
    <div class="col-md-3">
      <div style="display:flex;justify-content: end;">
        <div class="row" style="font-size: larger;width: 200px;">
          <button class="logo-btn" href="#">helperdotcom</button>
          <button class="icon-btn" href="#"><i class="fa-solid fa-house mr-2"></i><a href="index.php?home"> Home
            </a></button>
          <button class="icon-btn" href="#"><i class="fa-solid fa-magnifying-glass"></i> Explore</button>
          <button class="icon-btn" href="#"><i class="fa-solid fa-bell pr-2"></i></i> Notifications</button>
          <button class="icon-btn" href="#"><i class="fa-solid fa-envelope pr-2"></i> <a href="message.html"> Messages
            </a></button>
          <button class="icon-btn" href="#"><i class="fa-solid fa-bookmark pr-2"></i> <a href="bookmark.html"> Bookmarks
            </a></button>
          <button class="icon-btn" href="#"><i class="fa-solid fa-list pr-2"></i> Lists</button>
          <button class="icon-btn" href="profile.html"><i class="fa-solid fa-user pr-2"></i> <a href="profile.html">
              Profile </a></button>
          <button class="icon-btn" href="#"><i class="fa-solid fa-ellipsis-h more-icon pr-2"></i> More</button>
          <button class="bg-blue-500 text-center px-5 text-white font-bold"
            style="margin-top: 1rem; border-radius: 10em; padding: 1rem;">Post</button>
        </div>
      </div>
    </div>
    <!--Second column-->
    <div class="container">
      <?php
      if (isset($_GET['home'])) {
        include('profile.php');
      }
      else{
        include('profile.php');
      }
      ?>
    </div>
    <!--Third column-->
    <div class="col-md-4 col-sm-4">
      <div class="text-start p-3">
        <input
          class=" placeholder:block bg-blue-100 w-75 py-2 pl-9 pr-3 focus:outline-none focus:border-white focus:ring-blue-500 focus:ring-1 sm:text-sm px-10 "
          style="border-radius: 10em;background-color: rgba(228, 228, 228, 0.594);" placeholder="Search Problem"
          type="text">
        <div class="rounded-md bg-light w-75 mt-3">
          <h1 class="font-bold p-3" style="font-size: larger;">
            What’s happening
          </h1>
          <div>
            <a href="#" style="color: rgb(84,100,116);">
              <div class="p-3">
                <p>News · Trending</p>
                <p class="font-bold text-black">#BreakingNews</p>
                <p>36K Problem</p>
              </div>
            </a>
          </div>
          <div>
            <a href="#" style="color: rgb(84,100,116);">
              <div class="p-3">
                <p>News · Trending</p>
                <p class="font-bold text-black">#BreakingNews</p>
                <p>36K Problem</p>
              </div>
            </a>
          </div>
          <div>
            <a href="#" style="color: rgb(84,100,116);">
              <div class="p-3">
                <p>News · Trending</p>
                <p class="font-bold text-black">#BreakingNews</p>
                <p>36K Problem</p>
              </div>
            </a>
          </div>
          <div>
            <a href="#" style="color: rgb(84,100,116);">
              <div class="p-3">
                <p>News · Trending</p>
                <p class="font-bold text-black">#BreakingNews</p>
                <p>36K Problem</p>
              </div>
            </a>
          </div>
          <div class="text-blue-500 p-3">
            <a href="#">Show more</a>
          </div>
        </div>
        <div>
          <div class="w-75" style="font-size: small;">
            <a class="pr-3" href="#">Terms of Service</a>
            <a class="pr-3" href="#">Privacy Policy</a>
            <a class="pr-3" href="#">Cookie Policy</a>
            <a class="pr-3" href="#">Accessibility</a>
            <a class="pr-3" href="#">Ads Info</a>
            <a class="pr-3" href="#">More</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>

</body>

</html>