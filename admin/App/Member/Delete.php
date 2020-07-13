<?php for ($i = 0; $i < sizeof($Memberdata['data']); $i++) { ?>
    <div class="modal fade show" id="Delthesis<?php echo $Memberdata['data'][$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <!-- form start -->
                <div class='modal-header'>
                    <h5 class='modal-title' id='Delthesis'>Delete Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form action="db/query.php" method="POST" enctype="multipart/form-data">

                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>

                            <input type="text" class="form-control" name="firstname" value="<?php echo $Memberdata['data'][$i]['firstname'] ?>" readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="lastname" value="<?php echo $Memberdata['data'][$i]['lastname'] ?>" readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="date_of_birth" value="<?php echo $Memberdata['data'][$i]['date_of_birth'] ?>" readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="gender"  value="<?php echo $Memberdata['data'][$i]['gender'] ?>"readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="phone"  value="<?php echo $Memberdata['data'][$i]['phone'] ?>"readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="career"  value="<?php echo $Memberdata['data'][$i]['career'] ?>"readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="province"  value="<?php echo $Memberdata['data'][$i]['province'] ?>"readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="username"  value="<?php echo $Memberdata['data'][$i]['username'] ?>"readonly>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="password"  value="<?php echo $Memberdata['data'][$i]['password'] ?>"readonly>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger" name="DelMember" value="<?php echo $Memberdata['data'][$i]['id'] ?>">ลบสินค้า</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php } ?>