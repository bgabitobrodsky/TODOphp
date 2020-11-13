<?php if(isset($_SESSION["message"])){?>
                <div class="alert alert-dismissible fade show alert-<?php echo $_SESSION["message-type"];?>" role="alert">
                    <?php echo $_SESSION["message"]; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();} 