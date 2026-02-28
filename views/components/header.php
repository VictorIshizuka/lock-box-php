<header class="mx-auto max-w-screen-lg w-full">
  <div class="navbar bg-base-100 shadow-sm">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">LockBox</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <li><a href="/show">ver</a></li>
        <li>
          <details>
            <summary><?= auth()->name ?></summary>
            <ul class="bg-base-100 rounded-t-none p-2">
              <li><a href="/logout">Sair</a></li>
            </ul>
          </details>
        </li>
      </ul>
    </div>
  </div>

  <div class="flex space-x-4 w-full">
    <form action="" class="w-full">
      <label class="input input-bordered w-full flex items-center gap-2 w-full">
        <input type="text" name="search" placeholder="Pesquisar" class="grow" />
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </label>
    </form>
    <a href="/notes/create" class="btn btn-primary">+ Item</a>
  </div>
</header>