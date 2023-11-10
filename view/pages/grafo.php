<!DOCTYPE html>
<html lang="pt-br" class="h-full overflow-x-hidden">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Avaliação</title>
  <script type="module" src="../../controller/script/responsive.js"></script>
  <!-- TailwindCss -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script type="module" src="../../controller/tailwincss/tailwind.config.js"></script>
  <link rel="stylesheet" href="../styles/tailwindcss.css" />
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- Datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <script src="../../controller/script/datatables.js"></script>
</head>

<body class="h-full m-0">
  <!-- Navbar -->
  <nav class="bg-gray-800 flex justify-between">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start"></div>
        <div class="relative inline-block text-left">
          <div>
            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="MenuButton" aria-expanded="true" aria-haspopup="true">
              Opções
              <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="menuOpcoes">
            <div class="py-1" role="none">
              <a href="./array" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Array</a>
              <a href="./vetor" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Vetor</a>
              <a href="./matrix" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Matrix</a>
              <a href="./fila" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Fila</a>
              <a href="./pilha" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Pilha</a>
              <a href="./arvore" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Arvore</a>
              <a href="./grafo" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Grafo</a>
              <a href="../../index" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Pagina inicial</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Conteudo -->
  <div class="flex justify-center items-center h-full w-screen ">
    <div class="flex flex-col justify-items-center bg-gray-800 h-screen w-3/6 p-12">
      <h1 class="text-white flex justify-center">
        Bem-vindo a explicação sobre grafo!
      </h1>
      <br />
      <h2 class="text-white flex justify-center">O que é um grafo:</h2>
      <p class="text-white mt-4">
        Em programação, um grafo é uma estrutura que representa conexões entre diferentes elementos. Esses elementos são chamados de "vértices" e as conexões entre eles são chamadas de "arestas". Os grafos são usados para modelar uma variedade de situações, como redes sociais, rotas de mapas ou dependências entre tarefas. </p>
      <br />
      <h2 class="text-white flex justify-center">Como criar um grafo:</h2>
      <p class="text-white flex justify-center mt-4">
        Você pode representar um grafo usando estruturas de dados. Por exemplo, você pode ter um array de vértices e uma lista de adjacência que indica quais vértices estão conectados entre si. Cada vértice pode ter uma lista dos seus vizinhos.
      </p>


      <!-- Conteudo -->

</body>

</html>