<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultural Engineering</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body {
  color: #1a1a1a;
  font-family: "Poppins", sans-serif;
  background: hsla(141, 54%, 86%, 1);

  background: linear-gradient(
    to right,
    hsla(141, 54%, 86%, 1) 0%,
    hsla(333, 73%, 85%, 1) 50%,
    hsla(211, 58%, 79%, 1) 100%
  );

  background: -moz-linear-gradient(
    to right,
    hsla(141, 54%, 86%, 1) 0%,
    hsla(333, 73%, 85%, 1) 50%,
    hsla(211, 58%, 79%, 1) 100%
  );

  background: -webkit-linear-gradient(
    to right,
    hsla(141, 54%, 86%, 1) 0%,
    hsla(333, 73%, 85%, 1) 50%,
    hsla(211, 58%, 79%, 1) 100%
  );
}
.flex-container {
  display: flex;
  column-gap: 15px;
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
  margin-top: 60px;
}
.space-between {
  justify-content: space-between;
}
.col {
  width: 50%;
}
.card {
  border: 1px solid #eee;
  border-radius: 15px;
  padding: 20px;
  background-color: #fff;
  display: flex;
  column-gap: 20px;
  box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.5);
}
.card img {
  max-width: 250px;
  transform: translateY(-15%);
}
.img-placeholder {
  position: relative;
  max-height: 200px;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.75);
  -webkit-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.75);
}
h3 {
  font-weight: 400;
}
p {
  font-weight: 300;
}
a {
  color: #888;
  text-decoration: none;
}
a:hover {
  color: inherit;
}

    </style>
</head>
<body>
  <h1 style="text-align:center;">Faculty Member</h1>
<form style="text-align:right; height:30px;">
 <input type="button" value="Go back!" onclick="history.back()">
</form>
<div class="flex-container space-between">
  <div class="col card">
    <div class="img-placeholder">
      <img src="faculty_img/abhisekh.jpg">
    </div>
    <div>
      <h3>Abhishek Saxena</h3>
      <p><i class="fa-solid fa-user"></i>B.Tech, M.Tech,Ph.d(Parsuing)</p>
      <p><i class="fa-solid fa-paper-plane"></i> Designation: HOD</a></p>
      <p><i class="fa-solid fa-location-dot"></i> Lucknow</p>
    </div>
  </div>
  <div class="col card">
    <div class="img-placeholder">
      <img src="faculty_img/jainab.jpeg">
    </div>
    <div>
      <h3>Jainab Khan </h3>
      <p><i class="fa-solid fa-user"></i>B.Tech, M.Tech</p>
      <p><i class="fa-solid fa-paper-plane"></i> Designation: Faculty</a></p>
      <p><i class="fa-solid fa-location-dot"></i></p>
    </div>
  </div>
</div>
<div class="flex-container space-between">
  <div class="col card">
    <div class="img-placeholder">
      <img src="faculty_img/jitendra.jpeg">
    </div>
    <div>
      <h3>Yogendra Tripathi</h3>
      <p><i class="fa-solid fa-user"></i>B.Tech, M.Tech</p>
      <p><i class="fa-solid fa-paper-plane"></i> Designation: Faculty</a></p>
      <p><i class="fa-solid fa-location-dot"></i> Lucknow</p>
    </div>
  </div>
  <div class="col card">
    <div class="img-placeholder">
      <img src="faculty_img/pragya.jpeg">
    </div>
    <div>
      <h3>Pragya Deep</h3>
      <p><i class="fa-solid fa-user"></i> B.Tech. M.Tech</p>
      <p><i class="fa-solid fa-paper-plane"></i> Designation: Faculty</a></p>
      <p><i class="fa-solid fa-location-dot"></i> Lucknow</p>
    </div>
  </div>
</div>
<div class="flex-container space-between">
  <div class="col card">
    <div class="img-placeholder">
      <img src="faculty_img/reshu.jpeg">
    </div>
    <div>
      <h3>Vivek Singh</h3>
      <p><i class="fa-solid fa-user"></i>B.com , M.Tech</p>
      <p><i class="fa-solid fa-paper-plane"></i>  Designation: Faculty</a></p>
      <p><i class="fa-solid fa-location-dot"></i> Lucknow</p>
    </div>
  </div>
  <div class="col card">
    <div class="img-placeholder">
      <img src="faculty_img/roshani.jpeg">
    </div>
    <div>
      <h3> Reshami  </h3>
      <p><i class="fa-solid fa-user">B.Tech,M.Tech</i></p>
      <p><i class="fa-solid fa-paper-plane"></i> Designation: Faculty</a></p>
      <p><i class="fa-solid fa-location-dot">Lucknow</i></p>
    </div>
  </div>
</div>
<div class="flex-container space-between">
  <div class="col card">
    <div class="img-placeholder">
      <img src="faculty_img/reshu.jpeg">
    </div>
    <div>
      <h3>Reshu Singh</h3>
      <p><i class="fa-solid fa-user"></i>B.com , MBA</p>
      <p><i class="fa-solid fa-paper-plane"></i>  Designation: Faculty</a></p>
      <p><i class="fa-solid fa-location-dot"></i> Lucknow</p>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>