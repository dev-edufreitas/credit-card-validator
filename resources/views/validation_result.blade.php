<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado da Validação</title>
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full text-center">
        <h1 class="text-xl font-semibold text-gray-900 mb-6">Resultado da Validação</h1>

        @if($result['valid'])
            <p class="text-green-500 text-lg mb-4">O número do cartão de crédito é válido.</p>
        @else
            <p class="text-red-500 text-lg mb-4">O número do cartão de crédito é inválido.</p>
        @endif

        <p class="text-gray-700">Bandeira do cartão: {{ $result['brand'] }}</p>

        <button onclick="window.history.back()" class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300">
            <i class="fas fa-arrow-left mr-2"></i>Voltar
        </button>
    </div>
    <div class="mt-4 text-center">
        <p>Conecte-se comigo no LinkedIn:</p>
        <a href="https://www.linkedin.com/in/eduardohfreitas/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
            <i class="fab fa-linkedin fa-lg"></i> LinkedIn
        </a>
    </div>
</body>
</html>
