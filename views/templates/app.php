<body class="h-screen flex flex-col overflow-hidden">
  <?php require base_path("views/components/header.php"); ?>

  <div class="flex py-6 flex-1 mx-auto w-full max-w-screen-lg min-h-0">
    <div class="bg-base-300 rounded-l-box w-56 overflow-y-auto">
      <div class="bg-base-200 p-4">+ Nova Nota</div>
    </div>
    <main class="bg-base-200 rounded-r-box w-full p-10 overflow-y-auto">
      <?php require base_path("views/{$view}.view.php"); ?>
    </main>
  </div>
</body>