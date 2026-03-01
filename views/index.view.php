    <div class="bg-base-200 rounded-r-box w-full p-10 flex flex-col space-y-6">
      <form action="/notes/update?<?= request()->get('id') ?>" method="POST">
        <fieldset class="fieldset">
          <legend class="fieldset-legend">Título</legend>
          <input type="text" name="title" class="input w-full" value="<?= $noteSelected->title ?? '' ?> " />
        </fieldset>

        <fieldset class="fieldset">
          <legend class="fieldset-legend">Sua nota</legend>
          <textarea class="textarea h-24 w-full" name="note"><?= $noteSelected->note ?? ''  ?></textarea>
        </fieldset>

        <div class="flex justify-between items-center">
          <button class="btn btn-error">Deletar</button>
          <button class="btn btn-primary">Atualizar</button>
        </div>
      </form>
    </div>