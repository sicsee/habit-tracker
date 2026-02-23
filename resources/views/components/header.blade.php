<header class="bg-white border-b-2">
  {{-- LOGO --}}
  <div class="max-w-7xl mx-auto flex items-center justify-between  p-4">
    <div class="flex items-center gap-2">
      <a href="{{ route('site.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
        <h1>HT</h1>
      </a>
      <p class="font-bold">
        Habit Tracker
      </p>
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

      <a class="habit-btn habit-shadow-lg p-2" href="https://github.com/combizera/habit-tracker-ytb">
        <x-icons.github />
      </a>
    </div>
</div>
</header>
