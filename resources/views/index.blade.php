

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Basket Brigade</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Optional custom styles */
    body {
      padding-top: 0px;
      margin: 0;
      font-family: sans-serif;
      background-image: url(./assets_oldcode/img/background-2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    object-fit: cover;
    width: 100%;
    height: 100vh;
    }
   
    .col-md-12.top-text {
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
}
.row {
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
        margin-top: 30px;
}
.container {
    padding-top: 12rem;
}
h2.basket {
        font-size: 55px;
        font-weight: 600;
        color: #fff;
        text-shadow: 3px 3px 5px #0000007d;
}
p.bskt {
        font-size: 38px;
        font-weight: 500;
        color: #fff;
        margin-bottom: 6rem;
        text-shadow: 3px 3px 5px #0000007d;
}

a.ragister {
    text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #b70000;
        text-decoration: none;
        background-color: transparent;
        font-size: 19px;
        font-weight: 700;

        border: 1px solid #fff;
      padding: 20px;
      margin: 20px;
      border-radius: 5px;
      background-color: #f9f9f9;
      box-shadow: 8px 8px 5px #1616167a;
}
a.ragister:hover {
    background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
        /* color: #fff; */
        transition: 1.3s;
}
  </style>
</head>
<body>

<div class="container">
    <div class="col-md-12 top-text"><h2 class="basket">Basket Brigade UK 2023 -</h2><p class="bskt">ABLY Volunteer Sign Up</p></div>
    <div class="col-md-12">
  <div class="row">
    <div class="col-md-4">
      <div class="column">
        <a  class="ragister" href="/volunteer-registration">Volunteer Registration</a>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="column">
        <a  class="ragister" href="/driver-registration">Driver Only Registration</a>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="column">
        <a  class="ragister" href="/organization-registration">Organization Registration</a>
       
      </div>
    </div>
  </div>
</div></div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
