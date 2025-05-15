<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Engine</title>

  <!-- Favicon -->
  <link rel="icon" href="websites-assets/img/icon_logo.png" type="image/x-icon" />

  <!-- FontAwesome -->
  <link rel="stylesheet" href="websites-assets/css/all.min.css" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="websites-assets/css/bootstrap.min.css" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #e91e63, #9c27b0); /* Pink to Purple */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: #fff;
      position: relative;
      animation: backgroundMove 10s ease-in-out infinite;
    }

    @keyframes backgroundMove {
      0% {
        background: linear-gradient(135deg, #e91e63, #9c27b0);
      }
      50% {
        background: linear-gradient(135deg, #ff4081, #6200ea);
      }
      100% {
        background: linear-gradient(135deg, #e91e63, #9c27b0);
      }
    }

    .btn_sign_in {
      position: absolute;
      top: 25px;
      right: 40px;
    }

    .btn_sign_in a {
      padding: 10px 24px;
      border-radius: 30px;
      font-size: 1rem;
      background: rgba(255, 255, 255, 0.2);
      color: white;
      border: 1px solid #fff;
      text-decoration: none;
      backdrop-filter: blur(8px);
      transition: 0.3s;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.4);
    }

    .btn_sign_in a:hover {
      background: white;
      color: #9c27b0;
      font-weight: bold;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.8);
    }

    form {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .search-box {
      width: 75%;
      max-width: 700px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50px;
      display: flex;
      align-items: center;
      padding: 0 20px;
      backdrop-filter: blur(10px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      transition: 0.3s ease;
      animation: glow 2s ease-in-out infinite alternate;
    }

    @keyframes glow {
      0% {
        box-shadow: 0 0 20px rgba(233, 30, 99, 0.7), 0 0 30px rgba(156, 39, 176, 0.7);
      }
      100% {
        box-shadow: 0 0 40px rgba(233, 30, 99, 1), 0 0 60px rgba(156, 39, 176, 1);
      }
    }

    .search-box:hover {
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
    }

    .s_input {
      flex: 1;
      height: 60px;
      background: transparent;
      border: none;
      outline: none;
      color: #fff;
      font-size: 20px;
      padding-left: 15px;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
      transition: 0.3s;
    }

    .s_input::placeholder {
      color: #ffeb3b;
      text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
    }

    .b_button {
      background: none;
      border: none;
      color: #fff;
      font-size: 24px;
      cursor: pointer;
      transition: color 0.3s ease;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
    }

    .b_button:hover {
      color: #ffeb3b;
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.8);
    }

    @media (max-width: 768px) {
      .search-box {
        width: 90%;
      }

      .s_input {
        font-size: 18px;
      }

      .b_button {
        font-size: 20px;
      }

      .btn_sign_in a {
        font-size: 0.9rem;
        padding: 8px 18px;
      }
    }
  </style>
</head>
<body>

  <div class="btn_sign_in">
    <a href="dashboard.php">Sign In</a>
  </div>

  <form method="get" action="search.php">
    <div class="search-box">
      <input type="text" name="search" class="s_input" placeholder="Search anything..." required />
      <button type="submit" class="b_button">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </form>

  <!-- JS -->
  <script src="websites-assets/js/jquery-3.4.1.min.js"></script>
  <script src="websites-assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
