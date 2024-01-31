
<x-layout title="">

    <div class="container text-center" style="background-color: rgb(0, 0, 0, 0.452); border-radius: 12px; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;">
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
    </div>
</x-layout>