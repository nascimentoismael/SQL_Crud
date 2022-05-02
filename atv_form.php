<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="clearDefaultCss.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="clearDefaultCSS.css" rel="stylesheet" type="text/css"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>CRUD SQL em PHP</title>
</head>
<body class="container mx-auto">
<header class="pt-6">
    <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Preencha o Formulário</h3>
        <p class="mt-2 max-w-4xl text-sm text-gray-500">Conte-nos mais sobre você nas perguntas abaixo</p>
        <div class="mt-3 flex sm:mt-0 sm:ml-4">
            <button type="button" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <a href="lista_aluno.php">
                    Ver respostas
                </a>
            </button>
        </div>
    </div>
</header>
<br>
<form action="faced.php" method="post">

    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="nome" class="block text-xs font-medium text-gray-900">Nome</label>
        <input type="text" name="nome" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="José Silva" value="Ismael Nascimento" >
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
            </div>
            <input type="email" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com" value="ismaelnascimento@gmail.com">
        </div>
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="endereco" class="block text-xs font-medium text-gray-900">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Rua exemplo, número 1" value="Rua A, número 1">
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="profissao" class="block text-sm font-medium text-gray-700">Profissão: </label>
        <select name="profissao" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-200 focus:border-indigo-200 sm:text-sm rounded-md">
            <option value="Engenheiro de Software">Engenheiro de Software</option>
            <option value="Analista de Segurança de Informação" checked>Analista de Segurança de Informação</option>
            <option value="Analista de Sistemas">Analista de Sistemas</option>
            <option value="Administrador de Sistemas">Administrador de Sistemas</option>
            <option value="Administrador do banco de dados (DBA)">Administrador do banco de dados (DBA)</option>
            <option value="Gestor de tecnologias da informação">Gestor de tecnologias da informação</option>
            <option value="Arquiteto de redes">Arquiteto de redes</option>
            <option value="Desenvolvedor">Desenvolvedor</option>
        </select>
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="genero" class="text-base font-medium text-gray-900">Gênero</label>
        <fieldset class="mt-4">
            <div class="space-y-4">
                <div class="flex items-center">
                    <input  type="radio" name="genero" value="Feminino" class="focus:ring-indigo-200 h-4 w-4 text-indigo-600 border-gray-300 pl-2"> Feminino
                </div>
                <div class="flex items-center">
                    <input  type="radio" name="genero" value="Masculino" class="focus:ring-indigo-200 h-4 w-4 text-indigo-600 border-gray-300" checked>Masculino
                </div>
                <div class="flex items-center">
                    <input  type="radio" name="genero" value="Não informado" class="focus:ring-indigo-200 h-4 w-4 text-indigo-600 border-gray-300">Prefiro não informar
                </div>
                <div class="flex items-center">
                    <input  type="radio" name="genero" value="Outro" class="focus:ring-indigo-200 h-4 w-4 text-indigo-600 border-gray-300">Outro
                    <input  type="text" name="outroGenero" placeholder="Qual gênero você se identifica?">
                </div>
            </div>
        </fieldset>
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <fieldset class="space-y-5">
            <label for="areaInteresse">Áreas de Interesse</label><br>
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input type="checkbox" name="areas[]" value="Banco de dados" class="focus:ring-indigo-200 h-4 w-4 text-indigo-200 border-gray-300 rounded" checked> Banco de dados
                </div>
            </div>
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input type="checkbox" name="areas[]" value="Engenharia de software" class="focus:ring-indigo-200 h-4 w-4 text-indigo-200 border-gray-300 rounded"> Engenharia de software
                </div>
            </div>
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input type="checkbox" name="areas[]" value="Redes de computadores" class="focus:ring-indigo-200 h-4 w-4 text-indigo-200 border-gray-300 rounded"> Redes de computadores
                </div>
            </div>
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input type="checkbox" name="areas[]" value="Desenvolvimento de jogos" class="focus:ring-indigo-200 h-4 w-4 text-indigo-200 border-gray-300 rounded"> Desenvolvimento de jogos
                </div>
            </div>
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input type="checkbox" name="areas[]" value="Programação back-end" class="focus:ring-indigo-200 h-4 w-4 text-indigo-200 border-gray-300 rounded" checked> Programação back-end
                </div>
            </div>
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input type="checkbox" name="areas[]" value="Programação front-end" class="focus:ring-indigo-200 h-4 w-4 text-indigo-200 border-gray-300 rounded"  checked> Programação front-end
                </div>
            </div>
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input type="checkbox" name="areas[]" value="Mineração de dados" class="focus:ring-indigo-200 h-4 w-4 text-indigo-200 border-gray-300 rounded"> Mineração de dados
                </div>
            </div>
        </fieldset>
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="faleConosco" class="block text-sm font-medium text-gray-700">Fale Conosco: </label><br>
        <textarea name="mensagem" rows="4" cols="50" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="subscricao" class="block text-sm font-medium text-gray-700">Deseja receber nossas promoções?</label>
        <select name="subscricao" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-200 focus:border-indigo-200 sm:text-sm rounded-md">
            <option value="Sim" checked>Sim</option>
            <option value="Não">Não</option>
        </select>
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <div>
            <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
            <div class="mt-1">
                <input type="password" name="senha" id="senha" minlength=6 class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com" aria-describedby="email-description">
            </div>
            <p class="mt-2 text-sm text-gray-500" id="password-description">Sua senha precisa ter no mínimo 6 caracteres.</p>
        </div>
    </div>
    <br>

    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="password" name="senha" id="senha" minlength=6 class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" placeholder="you@example.com" value="adamwathan" aria-invalid="true" aria-describedby="email-error">
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <p class="mt-2 text-sm text-red-600 hidden" id="password-error">Sua senha precisa ter no mínimo 6 caracteres.</p>
    </div>
    <br>
    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
            <label for="senhaCheck" class="block text-sm font-medium text-gray-700">Confirme sua Senha</label>
            <div class="mt-1">
                <input type="password" name="senhaCheck" id="senha" minlength=6 class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com" aria-describedby="email-description">
            </div>
            <p class="mt-2 text-sm text-gray-500 hidden" id="password-description">As senhas indicadas não são iguais.</p>
        </div>
    </div>
    <br>

    <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-200 focus-within:border-indigo-200">
        <label for="senha" class="block text-sm font-medium text-gray-700">Confirme sua Senha</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="password" name="senha" id="senha" minlength=6 class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" placeholder="you@example.com" value="adamwathan" aria-invalid="true" aria-describedby="email-error">
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <p class="mt-2 text-sm text-red-600 hidden" id="password-error">As senhas indicadas não são iguais.</p>
    </div>
    <br>

    <div class="mt-3 flex sm:mt-0">
        <button type="submit" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Enviar
        </button>
    </div>
    <br><br>
    </form>
    <script src="script.js"></script>
</body>
</html>