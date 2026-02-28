<body>
  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content w-full md:justify-around flex-col lg:flex-row">
      <div class="text-center lg:text-left">
        <p class="py-4">
          Bem vindo ao
        </p>
        <h1 class="text-5xl font-bold">LockBox</h1>
        <p class="py-2">
          onde você guarda <span class="italic">tudo</span> com segurança.
        </p>
      </div>
      <div class="card bg-gray-500 w-full max-w-sm shrink-0 shadow-2xl">
        <?php if ($validation = flash()->get("validation_{$view}")): ?>
          <div class="mx-2">
            <div role="alert" class="alert alert-error mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span><?= $validation[0] ?></span>
            </div>
          </div>

        <?php endif; ?>

        <?php if ($message = flash()->get('message')): ?>
          <div class="mx-2">
            <div role="alert" class="alert alert-success mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span> <?= $message ?></span>
            </div>
          </div>
        <?php endif; ?>

        <?php require base_path("views/{$view}.view.php"); ?>
      </div>
    </div>
  </div>
</body>