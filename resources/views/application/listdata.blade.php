@extends('layout.main')
@section('content')

<div class="content">`
        <h5 class="fw-bold">
                <i class="fas fa-arrow-left me-2"></i>
            DAFTAR LOWONGAN PEKERJAAN
        </h5>
        <div class="row">
            <div class="col-4">
                <div class="form-group mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Pekerjaan">
                        <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                test2
            </div>
        </div>
            <div class="w-100 me-4">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama Aset</th>
                            <th scope="col">Jenis aset</th>
                            <th scope="col">Harga Satuan (IDR.)</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><input class="form-check-input mt-0" type="checkbox"></th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>5000</td>
                            <td><span class="btn btn-sm btn-outline-success">AKtif</span></td>
                            <td>
                                <a href="http://" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i> </a>
                                <a href="http://" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><input class="form-check-input mt-0" type="checkbox"></th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>10000</td>
                            <td><span class="btn btn-sm btn-outline-success">AKtif</span></td>
                            <td>
                                <a href="http://" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i> </a>
                                <a href="http://" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><input class="form-check-input mt-0" type="checkbox"></th>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                            <td>20000</td>
                            <td><span class="btn btn-sm btn-outline-success">AKtif</span></td>
                            <td>
                                <a href="http://" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i> </a>
                                <a href="http://" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>

@endsection