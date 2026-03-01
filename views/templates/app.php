<body class="h-screen flex flex-col overflow-hidden">
  <?php require base_path("views/components/header.php"); ?>

  <div class="flex py-6 flex-1 mx-auto w-full max-w-screen-lg min-h-0">
    <div class="bg-base-300 rounded-l-box w-56 overflow-y-auto">
      <div class="bg-base-200 p-4">+ Nova Nota</div>
    </div>
    <main class="bg-base-200 rounded-r-box w-full p-10 overflow-y-auto">

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
    </main>
  </div>
</body>