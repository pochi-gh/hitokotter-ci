
<nav class="navbar navbar-expand navbar-dark blue-gradient">

    <a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>hitokotter</a>

    <ul class="navbar-nav ml-auto">

      @guest
        <li class="nav-item">
          <form method="POST" action="{{ route('login') }}" >
              @csrf
              <input class="form-control" type="hidden" id="email" name="email" required value="gest@login">
              <input class="form-control" type="hidden" id="password" name="password" required value="gestlogin">
              <input type="hidden" name="remember" id="remember" value="on">
              <button class="btn p-1 nav-link border-0 shadow-none bg-danger text-white" type="submit">ゲストログイン</button>
          </form>
        </li>
      @endguest
      @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">ユーザー登録</a>
        </li>
      @endguest

      @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">ログイン</a>
        </li>
      @endguest

      @auth
        <li class="nav-item">
        <a class="nav-link" href="{{route('articles.create')}}"><i class="fas fa-pen mr-1"></i>投稿する</a>
        </li>
      @endauth

      @auth
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle mr-1"></i>
            {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <button class="dropdown-item" type="button"
                    onclick="location.href='{{ route("users.show", ["name" => Auth::user()->name]) }}'">
                マイページ
            </button>
            <div class="dropdown-divider"></div>
            <button form="logout-button" class="dropdown-item" type="submit">
                ログアウト
            </button>
            </div>
        </li>
        <form id="logout-button" method="POST" action="{{route('logout')}}">
          @csrf
        </form>
        <!-- Dropdown -->
      @endauth

    </ul>

  </nav>
