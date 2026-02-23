<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">
     <x-title>Cadastrar novo hábito</x-title>

     <section class="habit-shadow-lg bg-white max-w-150 mx-auto mt-4 p-10 pb-6">
      <form action="{{ route('habits.store') }}" method="POST">
        @csrf

        <div class="flex flex-col gap-2 mb-4">
            <label for="name" class="text-xl font-bold">Nome do Hábito</label>
            <input type="text" name="name" placeholder="Ex: Ler 10 páginas" class="bg-white habit-shadow p-2 @error('email') border-red-500 @enderror">
            @error('name')
              <p class="text-red-500 text-sm">
                {{ $message }}
              </p>
            @enderror
          </div>
          <button type="submit" class="p-2 habit-btn habit-shadow-lg bg-habit-orange w-full">Cadastrar Hábito</button>
      </form>
    </section>
    </main>
  </x-layout>
  