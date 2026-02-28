    <div class="bg-base-200 rounded-r-box w-full p-10">
      <form action="/notes/create" method="POST" class="flex flex-col space-y-6">
        <fieldset class="fieldset">
          <legend class="fieldset-legend">Título</legend>
          <input type="text" name="title" class="input w-full" />
        </fieldset>

        <fieldset class="fieldset">
          <legend class="fieldset-legend">Sua nota</legend>
          <textarea class="textarea h-24 w-full" name="note"></textarea>
        </fieldset>

        <div class="flex justify-end items-center">
          <button class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>