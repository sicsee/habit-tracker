<x-layout>
  <main class="py-10 min-h-[calc(100vh-160px)] px-4">

    <x-navbar />

    @session('success')
    <div class="flex">
      <p class="bg-green-100 text-green-700 border-2 border-green-400 p-3 mb-4 text-xl">
        {{ session('success') }}
      </p>
    </div>
    @endsession

   <div>
    <h2 class="text-lg mt-8 mb-4">
      {{ date('d/m/Y') }}
    </h2>
   
      <ul class="flex flex-col gap-2">
        @forelse($habits as $item)
          <li class="habit-shadow-lg p-2 bg-habit-bg">
            <div class="flex gap-2 items-center">
              <input type="checkbox" class="h-5 w-5" {{ $item->is_completed ? 'checked' : '' }} disabled>
              <p class="font-bold text-xl">
                {{ $item->name }}
              </p> 
            </div>
          </li>
        @empty
          <li>Nenhum hábito encontrado</li>
        @endforelse
      </ul>
    </div>
  </main>
</x-layout>
