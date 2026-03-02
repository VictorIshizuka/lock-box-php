    <div class="bg-base-200 rounded-r-box w-full p-10 flex flex-col space-y-6">
      <form action="/notes" method="POST" id="form-update">
        <input type="hidden" name="__method" value="PUT" />
        <input type="hidden" name="id" value="<?= $noteSelected->id ?>" />
        <fieldset class="fieldset">
          <legend class="fieldset-legend">Título</legend>
          <input type="text" name="title" class="input w-full" value="<?= $noteSelected->title ?? '' ?> " />
          <?php if (isset($validations['title'])) { ?>
            <div class="mt-1 text-xs text-error"><?= $validations['title'] ?></div>
          <?php } ?>
        </fieldset>

        <fieldset class="fieldset">
          <legend class="fieldset-legend">Sua nota</legend>
          <textarea
            <?php if (! session()->get('show')) { ?>
            disabled
            <?php } ?>
            class="textarea h-24 w-full" name="note"><?= $noteSelected->note() ?? ''  ?></textarea>
          <?php if (isset($validations['note'])) { ?>
            <div class="mt-1 text-xs text-error"><?= $validations['note'] ?></div>
          <?php } ?>
        </fieldset>
      </form>
      <div class="flex justify-between items-center">
        <form action="/notes" method="POST">
          <input type="hidden" name="__method" value="DELETE" />
          <input type="hidden" name="id" value="<?= $noteSelected->id ?>" />
          <button class="btn btn-error" type="submit">Deletar</button>
        </form>
        <button class="btn btn-primary" type="submit" form="form-update">Atualizar</button>
      </div>
    </div>