<?php

class ViewRegistration
{
    public function output($message = null)
    {
        require_once 'partials/head.php';
        ?>
        <div class="container mt-5">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <div class="card custom-card mt-5">
                        <div class="card-header">
                            <h4>Registration</h4>
                        </div>
                        <div class="card-body">
                            <?php if ($message) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $message ?? '' ?>
                                </div>
                            <?php endif ?>

                            <form action="registratin.php" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control form-control-sm" id="username" name="username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-sm" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="your_choice" class="form-label">Your Choice</label>
                                    <textarea class="form-control form-control-sm" id="your_choice" name="your_choice"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control form-control-sm" id="description" name="description"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary pull-end">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <?php
        require_once 'partials/footer.php';
    }
}

?>