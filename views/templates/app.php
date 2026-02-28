<body class="h-screen flex flex-col overflow-hidden">
  <?php require "../views/components/header.php" ?>

  <div class="flex py-6 flex-1 mx-auto w-full max-w-screen-lg min-h-0">
    <ul class="menu bg-base-200 rounded-l-box w-56 overflow-y-auto">
      <li><a>Item 1</a></li>
      <li><a>Item 2</a></li>
      <li><a>Item 3</a></li>
    </ul>
    <main class="bg-base-200 rounded-r-box w-full p-10 overflow-y-auto">
      <?php require "../views/{$view}.view.php" ?>
    </main>
  </div>
</body>