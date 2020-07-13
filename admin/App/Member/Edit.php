<?php for ($i = 0; $i < sizeof($Memberdata['data']); $i++) { ?>
    <div class="modal fade show" id="Editthesis<?php echo $Memberdata['data'][$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <!-- form start -->
                <div class='modal-header'>
                    <h5 class='modal-title' id='Editthesis'>Edit Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="db/query.php" method="POST" enctype="multipart/form-data">

                    <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>

                            <input type="text" class="form-control" name="firstname" value="<?php echo $Memberdata['data'][$i]['firstname'] ?>" required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="lastname" value="<?php echo $Memberdata['data'][$i]['lastname'] ?>" required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control" name="date_of_birth" value="<?php echo $Memberdata['data'][$i]['date_of_birth'] ?>" required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="gender"  value="<?php echo $Memberdata['data'][$i]['gender'] ?>"required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="phone"  value="<?php echo $Memberdata['data'][$i]['phone'] ?>"required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="career"  value="<?php echo $Memberdata['data'][$i]['career'] ?>"required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="province"  value="<?php echo $Memberdata['data'][$i]['province'] ?>"required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="username"  value="<?php echo $Memberdata['data'][$i]['username'] ?>"required>
                        </div>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                            </div>
                            <input type="text" class="form-control"name="password"  value="<?php echo $Memberdata['data'][$i]['password'] ?>"required>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" id="EditMember" name="EditMember" value="<?php echo $Memberdata['data'][$i]['id'] ?>">แก้ไขสิ้นค้า</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php  } ?>