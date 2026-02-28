<form class="card-body" action="/login" method="POST">
  <h3>Faça o seu login</h3>

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
      <span class="label-text">Senha</span>
    </label>
    <input type="password" name="password" class="input input-bordered" />
    <?php if (isset($validations['password'])): ?>
      <div class="mt-1 text-xs text-error"><?= $validations['password'] ?></div>
    <?php endif; ?>
  </div>

  <div class="form-control mt-6">
    <button class="btn btn-primary">Login</button>
  </div>
  <label class="label">
    <a href="/register" class="label-text-alt link link-hover">Quero me registrar!</a>
  </label>
</form>