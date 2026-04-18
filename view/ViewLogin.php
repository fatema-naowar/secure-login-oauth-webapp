<?php

class ViewLogin
{
    public function output($message = null)
    {
        require_once 'partials/head.php'; // Assuming this sets up your HTML head
        ?>
        <div class="container mt-5">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <div class="card custom-card mt-5">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <?php if ($message) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $message ?? '' ?>
                                </div>
                            <?php endif ?>

                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control form-control-sm" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary pull-end">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require_once 'partials/footer.php'; // Assuming this sets up your footer
    }
}

?>
