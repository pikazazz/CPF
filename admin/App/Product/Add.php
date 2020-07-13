<div class="modal fade show" id="addthesis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">

                        <!-- form start -->
                        <div class='modal-header'>
                            <h5 class='modal-title' id='addthesis'>Add Product</h5>
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
                                    <input type="text" class="form-control" name="name" placeholder="name" required>
                                </div>
                                <div class='input-group mb-3'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="description" placeholder="description" required>
                                </div>
                                <div class='input-group mb-3'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                                    </div>
                                    <input type="text" class="form-control"   name="price" placeholder="price" required>
                                </div>
                                <div class='input-group mb-3'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text' id=''><i class='fas fa-user'></i></span>
                                    </div>          
                                    <input type="text" class="form-control" name="path"  placeholder="path" required>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="AddProduct" name="AddProduct">เพิ่มสินค้า</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
