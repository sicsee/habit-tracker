<x-layout>
  <main class="py-10">
    <h1>Dashboard</h1>
    <h2 class="text-violet-500 text-4xl text-center font-bold">
      Bem-Vindo {{ auth()->user()->name }}
    </p>


    <div class="grid grid-cols-3 gap-4">
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
