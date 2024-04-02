<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Title</title>
  <style>
    /* CSS styles here */
    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    html {
      font-size: 100%;
    }

    body {
      font-family: acumin-pro, system-ui, sans-serif;
      margin: 0;
      display: grid;
      grid-template-rows: auto 1fr auto;
      font-size: 14px;
      background-color: #f4f4f4;
      align-items: start;
      min-height: 100vh;
    }

    .footer {
      display: flex;
      flex-flow: row wrap;
      padding: 20px 30px;
      color: #2f2f2f;
      background-color: #fff;
      border-top: 1px solid #e5e5e5;
    }

    .footer>* {
      flex: 1 100%;
    }

    .footer__addr {
      margin-bottom: 1em;
    }

    .footer__logo {
      font-family: "Pacifico", cursive;
      font-weight: 400;
      text-transform: lowercase;
      font-size: 1rem;
      margin-bottom: 0.5em;
    }

    .footer__addr h2 {
      margin-top: 0.5em;
      font-size: 0.9rem;
      font-weight: 400;
    }

    .nav__title {
      font-weight: 400;
      font-size: 0.9rem;
      margin-bottom: 0.5em;
    }

    .footer address {
      font-style: normal;
      color: #999;
      font-size: 0.9rem;
      margin-bottom: 1em;
    }

    .footer__btn {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 36px;
      max-width: max-content;
      background-color: rgb(33, 33, 33, 0.07);
      border-radius: 100px;
      color: #2f2f2f;
      line-height: 0;
      margin: 0.6em 0;
      font-size: 1rem;
      padding: 0 1.3em;
    }

    .footer ul {
      list-style: none;
      padding-left: 0;
    }

    .footer li {
      line-height: 1.5em;
      font-size: 0.9rem;
    }

    .footer a {
      text-decoration: none;
      color: #2f2f2f;
    }

    .footer__nav {
      display: flex;
      flex-flow: row wrap;
    }

    .footer__nav>* {
      flex: 1 50%;
      margin-bottom: 1em;
    }

    .nav__ul a {
      color: #999;
    }

    .nav__ul--extra {
      column-count: 2;
      column-gap: 1.25em;
    }

    .legal {
      display: flex;
      flex-wrap: wrap;
      color: #999;
      font-size: 0.9rem;
    }

    .legal__links {
      display: flex;
      align-items: center;
    }

    .heart {
      color: #2f2f2f;
    }

    @media screen and (min-width: 24.375em) {
      .legal .legal__links {
        margin-left: auto;
      }
    }

    @media screen and (min-width: 40.375em) {
      .footer__nav>* {
        flex: 1;
      }

      .nav__item--extra {
        flex-grow: 2;
      }

      .footer__addr {
        flex: 1 0px;
      }

      .footer__nav {
        flex: 2 0px;
      }
    }

    .centered-box {
      margin: 0 auto;
      padding: 20px;
      background-color: #cc9933;
      color: white;
      border: 5px solid #ccc;
      text-align: start;
    }
  </style>
</head>

<body>
  <!-- Page content here -->

  <footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo">Something</h1>

      <h2>Contact</h2>

      <address>
        <i class="bi bi-house-door-fill"></i> 97 99 Wong Sawang 11 Alley, <br>Khwaeng Wong Sawang, Bang Sue, Bangkok 10800
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Tel</h2>

        <ul class="nav__ul">
          <li>
            <a href="#"><i class="bi bi-telephone-fill"></i></i> : 0842795631</a>
          </li>
        </ul>
      </li>

      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Email</h2>

        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#"><i class="bi bi-envelope-fill"></i></i> : Butler@gmail.com</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">เวลาทำการ</h2>

        <ul class="nav__ul">
          <li>
            <a href="#"><i class="bi bi-clock-history"></i></i> : 9:30 - 17:30 น. นอกเหนือเวลากรุณาติดต่อ Line (id : @thebutler)</a>
          </li>
        </ul>
      </li>
    </ul>

  </footer>
</body>

</html>