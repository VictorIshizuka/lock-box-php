    <div class="bg-base-200 rounded-r-box w-full p-10">
      <form action="/notes/create" method="POST" class="flex flex-col space-y-6">
        <fieldset class="fieldset">
          <legend class="fieldset-legend">Título</legend>
          <input type="text" name="title" class="input w-full" />
          <?php if (isset($validations['title'])): ?>
            <div class="mt-1 text-xs text-error"><?= $validations['title'] ?></div>
          <?php endif; ?>
        </fieldset>

        <fieldset class="fieldset">
          <legend class="fieldset-legend">Sua nota</legend>
          <textarea class="textarea h-24 w-full" name="note"></textarea>
          <?php if (isset($validations['note'])): ?>
            <div class="mt-1 text-xs text-error"><?= $validations['note'] ?></div>
          <?php endif; ?>
        </fieldset>

        <div class="flex justify-end items-center">
          <button class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>