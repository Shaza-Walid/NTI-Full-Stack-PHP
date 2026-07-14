<!-- ========================================= -->
<!-- Login Form -->
<!-- ========================================= -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <!-- Card Header -->
                <div class="card-header bg-dark text-white">
                    <h2 class="text-center">Login</h2>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST">
                        <!-- ================================= -->
                        <!-- Email Input -->
                        <!-- ================================= -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= isset($email) ? $email : ""; ?>">
                            <?php
                            // Display email validation error
                            if(isset($errors['email'])){ ?>
                                <small class="text-danger"><?= $errors['email']; ?></small>
                            <?php }?>
                        </div>
                        <!-- ================================= -->
                        <!-- Password Input -->
                        <!-- ================================= -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            <?php
                            // Display password validation error
                            if(isset($errors['password'])){?>
                                <small class="text-danger"><?= $errors['password']; ?></small>
                            <?php }?>
                        </div>
                        <!-- ========================= -->
                        <!-- Login Button -->
                        <!-- ========================= -->
                        <div class="d-grid">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                       