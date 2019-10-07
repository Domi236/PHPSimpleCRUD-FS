<?php
include_once __DIR__ . '/assets/js/generate_password.php';

?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update user <b><?php echo $user['name'] ?></b>
                <?php else: ?>
                    Create new User
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>"
                           class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" value="<?php echo $user['password'] ?>"
                           class="form-control input_password <?php echo $errors['password'] ? 'is-invalid' : '' ?>">
                    <br/><button type="button" class="generate_one">Generate Password</button>
                    <label for="uppercase"><input id="uppercase" type="checkbox" name="checkbox" checked>Großbuchstaben (A-Z)</label>
                    <label for="lowercase"><input id="lowercase" type="checkbox" name="checkbox" checked>Kleinbuchstaben (a-z)</label>
                    <label for="numbers"><input id="numbers" type="checkbox" name="checkbox" checked>Zahlen (1-9)</label>
                    <label for="specialCharacter"><input id="specialCharacter" type="checkbox" name="checkbox" checked>Sonderzeichen (@({[/=...)</label>
                    <select name="selector" class="password_length">
                        <?php for($i = 8; $i <= 20; $i++) {
                            if($i == 15) {
                                echo "<option value='$i' selected>$i</option>";
                            } else {
                                echo "<option value='$i'>$i</option>";
                            }
                        }  ?>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo  $errors['password'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>"
                           class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>"
                           class="form-control  <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['phone'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input name="website" value="<?php echo $user['website'] ?>"
                           class="form-control  <?php echo $errors['website'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['website'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input name="picture" type="file" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
