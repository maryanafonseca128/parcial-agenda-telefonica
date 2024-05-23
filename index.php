<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Agenda Telefônica</h1>
        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Imagem</th>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nome</th>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                         <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="https://via.placeholder.com/150" alt="João Silva"></td>
                        <td class="py-2 px-4 text-sm text-gray-700">João Silva</td>
                        <td class="py-2 px-4 text-sm text-gray-700">joao.silva@example.com</td>
                        <td class="py-2 px-4 text-sm text-gray-700">(11) 1234-5678</td>
                    </tr>
                    <tr class="border-b bg-gray-50">
                        <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="https://via.placeholder.com/150" alt="Maria Oliveira"></td>
                        <td class="py-2 px-4 text-sm text-gray-700">Maria Oliveira</td>
                        <td class="py-2 px-4 text-sm text-gray-700">maria.oliveira@example.com</td>
                        <td class="py-2 px-4 text-sm text-gray-700">(21) 9876-5432</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="https://via.placeholder.com/150" alt="Carlos Souza"></td>
                        <td class="py-2 px-4 text-sm text-gray-700">Carlos Souza</td>
                        <td class="py-2 px-4 text-sm text-gray-700">carlos.souza@example.com</td>
                        <td class="py-2 px-4 text-sm text-gray-700">(31) 2468-1357</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
