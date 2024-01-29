
<x-layout title="Cadastro de Usuario">

    <form action="/cadastrar/salvar" method="POST">
        @csrf <!-- Valida o Formulario -->
        <br>
        <label>
            Nome:
        </label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required/><br><br>

        <label> 
            Email:
        </label>
        <input type="text" id="email" name="email" placeholder="Informe seu email" required/><br><br>

        <label> 
            Senha:
        </label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua Senha" required /><br><br>

        <button type="submit"> Enviar </button>
    </form>

</x-layout>