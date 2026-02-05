<x-layout>
    <main class="py-10">
     <h1>Editar hábito</h1>

     <section class="bg-white max-w-150 mx-auto mt-4 p-10 pb-6 border-2">
      <form action="{{ route('habit.update', $habit->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="flex flex-col gap-2 mb-4">
            <label for="name">Nome do Hábito</label>
            <input type="text" name="name" value="{{ $habit->name }}" class="bg-white border-2 p-2 @error('email') border-red-500 @enderror">
            @error('name')
              <p class="text-red-500 text-sm">
                {{ $message }}
              </p>
            @enderror
          </div>
          <button type="submit" class="bg-white p-2 border-2">Editar Hábito</button>
      </form>
    </section>
    </main>
  </x-layout>
  