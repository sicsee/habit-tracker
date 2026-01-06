
<h1>
    Hello World
</h1>

<p>
    Olá, {{ $nome }}
</p>

<p>Seus hábitos são:</p>

@foreach ($habitos as $item)
    <li>
        {{ $item }}
    </li>
@endforeach

<p>Sua idade é: {{ $idade }}</p>

@auth
    <p>Você está autenticado</p>
@endauth

@guest
   <p>Você não está autenticado</p>
@endguest
