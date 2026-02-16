<header class="bg-white border-b-2 flex items-center justify-between p-4">
  {{-- LOGO --}}
  <a href="{{ route('site.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
    <h1>HT</h1>
  </a>

  {{-- GITHUB --}}
  <div>
    github
  </div>

  <div class="flex gap-5">
  @auth
    <form class="inline" action="{{ route('auth.logout') }}" method="POST">
      @csrf
      <button type="submit" class="bg-white p-2 habit-shadow-lg habit-btn">
        Sair
      </button>
    </form>
  @endauth

  @guest
    <a href="{{ route('auth.login') }}" class="bg-habit-orange p-2 habit-shadow-lg habit-btn">
      Logar
    </a>
    <a href="{{ route('auth.register') }}" class="bg-white p-2 habit-shadow-lg habit-btn">
      Cadastrar
    </a>
  @endguest
</div>
</header>
