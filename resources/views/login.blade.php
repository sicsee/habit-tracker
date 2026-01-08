<x-layout>
  <main class="py-10">
    <h1>Login Page</h1>

    <section>
      <form action="/login" method="POST">
        @csrf

        @error('email')
          <p class="text-xl text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="email" name="email" placeholder="you@email.com">
        <input type="password" name="password" placeholder="**********">
        <button type="submit">Entrar</button>
      </form>
    </section>
  </main>
</x-layout>
