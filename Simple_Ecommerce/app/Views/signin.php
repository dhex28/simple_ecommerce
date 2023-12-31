<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CodeIgniter Login with Username/Password Example</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Login</h2>
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url(); ?>/signin/loginAuth" method="post">
                  <div class="form-group mb-3">
                      <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" class="form-control" required>
                  </div>
                  <div class="form-group mb-3">
                      <input type="password" name="password" placeholder="Password" class="form-control" required>
                  </div>
                  <div class="d-grid">
                      <button type="submit" class="btn btn-success">Login</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>
