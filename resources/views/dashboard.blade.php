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
      <ul class="bg-white">
        @forelse($habits as $item)
          <li >
            <div class="flex items-center w-fit p-2 rounded-lg shadow-md text-center text-black text-xl gap-10 ">
              <p>
                - {{ $item->name }}
              </p>
              <a href="{{ route('habit.edit', $item) }}">
                <x-icon.edit />
              </a>
              <form action="{{ route('habit.destroy', $item) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="bg-red-500 p-2 rounded hover:opacity-80 cursor-pointer">
                  <x-icon.trash />
                </button>
              </form>
            </div
        </li>
        @empty
          <li>Nenhum hábito encontrado</li>
        @endforelse
      </ul>
      
    </div>
  </main>
</x-layout>
