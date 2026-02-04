<x-layout>
  <main class="py-10">
    <h1>Dashboard</h1>
    <h2 class="text-4xl text-center font-bold">
      Bem-Vindo {{ auth()->user()->name }}
    </p>

    <a href="{{ route('habit.create') }}" class="bg-white border-2 flex font-bold w-fit p-2 text-xl">
      Crie um novo hábito
    </a>

    

    @session('success')
    <div class="flex">
      <p class="bg-green-100 text-green-700 border-2 border-green-400 p-3 mb-4 text-xl">
        {{ session('success') }}
      </p>
    </div>
    @endsession

    <div class="grid grid-cols-3 gap-4 mt-10">
      <ul>
        @forelse($habits as $item)
          <li class="bg-white p-2 border-2 rounded-lg shadow-md text-center text-black text-xl ">- {{ $item->name }}</li>
        @empty
          <li>Nenhum hábito encontrado</li>
        @endforelse
      </ul>
      
    </div>
  </main>
</x-layout>
