<form class="card-body" action="/register" method="POST">
  <h3 class="text-3xl">Faça o seu registro</h3>

  <div class="form-control">
    <label class="label">
      <span class="label-text">Nome</span>
    </label>
    <input type="text" name="name" class="input input-bordered" value="<?= old('name') ?>"/>
    <?php if (isset($validations['name'])): ?>
      <div class="mt-1 text-xs text-error"><?= $validations['name'] ?></div>
    <?php endif; ?>
  </div>

  <div class="form-control">
    <label class="label">
      <span class="label-text">E-mail</span>
    </label>
    <input type="email" name="email" class="input input-bordered" value="<?= old('email') ?>" />
    <?php if (isset($validations['email'])): ?>
      <div class="mt-1 text-xs text-error"><?= $validations['email'] ?></div>
    <?php endif; ?>
  </div>

  <div class="form-control">
    <label class="label">
      <span class="label-text">Confirme o seu e-mail</span>
    </label>
    <input type="email" name="email_confirmed" class="input input-bordered"  value="<?= old('email_confirmed') ?>"/>
  </div>


  <div class="form-control">
    <label class="label">
      <span class="label-text">Senha</span>
    </label>
    <input type="password" name="password" class="input input-bordered" />
    <?php if (isset($validations['password'])): ?>
      <div class="mt-1 text-xs text-error"><?= $validations['password'] ?></div>
    <?php endif; ?>
  </div>

  <div class="form-control mt-6">
    <button class="btn btn-primary">Registrar</button>
  </div>
  <label class="label">
    <a href="/login" class="label-text-alt link link-hover">Voltar para o login!</a>
  </label>
</form>