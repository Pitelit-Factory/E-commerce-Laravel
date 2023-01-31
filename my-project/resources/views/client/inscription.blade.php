@extends('base')
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

@section('content')
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action= "/inscription" method="post">

    {{ csrf_field() }}

    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Inscrivez-vous</h1>
    <div class="form-floating">
        <label for="floatingPassword">Nom</label>
      <input type="text" class="form-control" placeholder="Name" name="nom">
    </div>
    <div class="form-floating">
        <label for="floatingPassword">Prenom</label>
      <input type="text" class="form-control" placeholder="Name" name="prenom">
    </div>
    <div class="form-floating">
        <label for="floatingInput">Email address</label>
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="Email">
    </div>
    <div class="form-floating">
        <label for="floatingPassword">Password</label>
      <input type="password" class="form-control" placeholder="Password" name ="mdp">
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">S'inscrire</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>



<style>


    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
    html,


body {
 
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
  </style>
@endsection