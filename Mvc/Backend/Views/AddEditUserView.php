<?php 
	//load file layout.php vao view nay
	$this->layout = "Mvc/Backend/Views/layout.php";
 ?>
 <div class="col-md-12">  
    <?php if(isset($_GET["email"])): ?>
        <div class="alert alert-danger">Email đã tồn tại!</div>
    <?php endif; ?>
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit user</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record)?$record->fullname:''; ?>" name="fullname" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="email" <?php if(isset($record->email)): ?> disabled <?php endif; ?> value="<?php echo isset($record)?$record->email:''; ?>" name="email" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10">
                    <input type="password" name="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>