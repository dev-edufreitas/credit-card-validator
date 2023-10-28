<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Validação de Cartão de Crédito</title>

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-xl font-semibold text-gray-900 mb-6 text-center">Validação de Cartão de Crédito</h1>

        <form action="/validate-credit-card" method="POST" id="creditCardForm">
            @csrf
            <div class="mb-4">
                <label for="credit_card_number" class="block text-gray-700">Número do Cartão de Crédito:</label>
                <input type="text" id="credit_card_number" name="credit_card_number" class="w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-500" placeholder="Insira o número do cartão de crédito" required>
            </div>
            
            <button type="submit" class="w-full px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition-all duration-300">Validar</button>
    </div>

    <div class="mt-4 text-center">
        <p>Conecte-se comigo no LinkedIn:</p>
        <a href="https://www.linkedin.com/in/eduardohfreitas/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
            <i class="fab fa-linkedin fa-lg"></i> LinkedIn
        </a>
    </div>
</body>
</html>
