@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UASBK</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Kelas</a></li>
                    <li class="breadcrumb-item active">Tambah Kelas</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Kelas</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Basic Example</h4>
                <form-tambah-kelas></form-tambah-kelas>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <div class="col-md-6">
        <daftar-kelas></daftar-kelas>
    </div>
</div>

@endsection