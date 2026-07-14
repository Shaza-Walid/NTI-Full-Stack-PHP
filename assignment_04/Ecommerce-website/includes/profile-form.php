<!-- ========================================================= -->
<!-- Profile Form -->
<!-- This form appears only after the user logs in. -->
<!-- ========================================================= -->
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <!-- Card Header -->
                <div class="card-header bg-success text-white text-center">
                    <h2>Complete Your Profile</h2>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST">
                        <!-- ======================================= -->
                        <!-- Username -->
                        <!-- ======================================= -->
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter your name">
                            <?php
                            if(isset($errors['username']))
                                echo "<small class='text-danger'>{$errors['username']}</small>";
                            ?>
                        </div>
                        <!-- ======================================= -->
                        <!-- Password -->
                        <!-- ======================================= -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            <?php
                            if(isset($errors['password']))
                                echo "<small class='text-danger'>{$errors['password']}</small>";
                            ?>
                        </div>
                        <!-- ======================================= -->
                        <!-- Email -->
                        <!-- ======================================= -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $_SESSION['email']; ?>">
                            <?php
                            if(isset($errors['email']))
                                echo "<small class='text-danger'>{$errors['email']}</small>";
                            ?>
                        </div>
                        <!-- ======================================= -->
                        <!-- Phone Number -->
                        <!-- ======================================= -->
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
                            <?php
                            if(isset($errors['phone']))
                                echo "<small class='text-danger'>{$errors['phone']}</small>";
                            ?>
                        </div>
                        <!-- ======================================= -->
                        <!-- Facebook URL -->
                        <!-- ======================================= -->
                        <div class="mb-3">
                            <label class="form-label">Facebook URL</label>
                            <input type="url" name="facebook" class="form-control" placeholder="https://facebook.com/username">
                            <?php
                            if(isset($errors['facebook']))
                                echo "<small class='text-danger'>{$errors['facebook']}</small>";
                            ?>
                        </div>
                        <!-- ======================================= -->
                        <!-- Twitter URL -->
                        <!-- ======================================= -->
                        <div class="mb-3">
                            <label class="form-label">Twitter URL</label>
                            <input type="url" name="twitter" class="form-control" placeholder="https://twitter.com/username">
                            <?php
                            if(isset($errors['twitter']))
                                echo "<small class='text-danger'>{$errors['twitter']}</small>";
                            ?>
                        </div>
                        <!-- ======================================= -->
                        <!-- Instagram URL -->
                        <!-- ======================================= -->
                        <div class="mb-3">
                            <label class="form-label">Instagram URL</label>
                            <input type="url" name="instagram" class="form-control" placeholder="https://instagram.com/username">
                            <?php
                            if(isset($errors['instagram']))
                                echo "<small class='text-danger'>{$errors['instagram']}</small>";
                            ?>
                        </div>
                        <!-- ======================================= -->
                        <!-- Save Button -->
                        <!-- ======================================= -->
                        <div class="d-grid">
                            <button type="submit" name="save" class="btn btn-success">Save Information</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>