<x-layout-dashboard>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="pb-1 mb-5 d-flex align-items-center">
            <i class="menu-icon tf-icons bx bxs-user"></i>
            <span>Blog</span>
        </h5>
        <div class="row">
            <div class="card text-start">
                <div class="card-header">
                    <h4>Member</h4>
                    <a class="btn btn-primary" href="/Tambah_jrs" role="button">add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Judul Blog</th>
                                    <th scope="col">Authors</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href=""
                                                class="badge bg-secondary text-light">Edit</a>
                                            <a onclick="return confirm('Hapus Data')"
                                                href=""
                                                class="badge bg-danger text-light">Hapus</a>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-dashboard>