<!-- Body Design -->

    <div class="col-10">

                <!-- Navbar Design -->
                <div class="navbar-design shadow">
                    <div class="d-flex justify-content-between">
                        <div class="col-6">
                            <div class="input-group search-layout">
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn-search btn btn-warning" type="button" id="button-addon2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end profile-layout">
                                <p>Admin</p>
                                <i class="fa-solid fa-circle-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Navbar Design -->

                <!-- Users Card Design -->
                <div class="user-card-design">
                    <div class="row row-cols-1 row-cols-md-2 g-4">

                        <?php foreach( $data['UserName'] as $usr ) : ?>
                        <div class="col">
                            <div class="card mb-3 shadow card-user">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?= BASEURL ?>/img/user_icon.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><?= $usr['username']; ?> </h5>
                                            <hr>    
                                            <div class="d-flex card-btn justify-content-center mt-4">
                                                <a class="btn btn-warning me-2 text-center" href="<?= BASEURL ?>/multipage/useredit/<?= $usr['id_user'] ?>" role="button">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger ms-2 text-center" href="<?= BASEURL ?>/multipage/deleteUser/<?= $usr['id_user'] ?>" role="button"  onclick="return confirm('Yakin Ingin Menghapus User?')">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                    Hapus
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
                <!-- End Users Card Design -->

                <!-- Paginations Design -->
                <div class="paginations-design d-flex justify-content-center mt-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                          <li class="page-item">
                            <?php if ($data['activepage'] > 1) : ?>
                                <a class="page-link" href="/inventaria-project/public/multipage/pages/" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                            <?php endif; ?>
                          </li>
                            <?php for( $i = 1; $i <= $data['jumlahHalaman']; $i++ ) : ?>
	                            <?php if( $i == $data['activepage'] ) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="/inventaria-project/public/multipage/pages/<?= $i; ?>"><?= $i; ?></a>
                                    <li class="page-item">
                                </li>
	                            <?php else : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="/inventaria-project/public/multipage/pages/<?= $i; ?>"><?= $i; ?></a>
                                        <li class="page-item">
                                    </li>
	                            <?php endif; ?>
                            <?php endfor; ?>
                            <?php if ($data['activepage'] < $data['jumlahHalaman']) : ?>
                                <a class="page-link" href="/inventaria-project/public/multipage/pages/" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                            <?php endif; ?>
                          </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Paginations Design -->

                <!-- Button Add Users Design -->
                <!-- Button Trigger Modal -->
                <div class="d-flex justify-content-end position-absolute bottom-0 end-0">
                    <button type="button" class="user-add-btn btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                 <!-- End Button Trigger Modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                            <button type="button" class="btn close-btn" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=BASEURL ?>/multipage/adduser" method="post">
                                <div class="mb-3 row">
                                    <label for="Username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Username" name="username">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="Email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="No. Telp" class="col-sm-2 col-form-label">No. Telp</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="No. Telp" name="no_telp">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="Password" name="password">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn save-btn btn-warning">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <!-- End Button Add Users Design -->


            </div>
        </div>
    </div>
<!-- End Body Design -->