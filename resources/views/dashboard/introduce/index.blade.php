@extends('dashboard.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Introduce Landing Page</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic Layout</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Judul</td>
                                        <td>Slogan</td>
                                        <td>Deskripsi Produk</td>
                                        <td>Foto</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->content }}</td>
                                            <td>{!! $data->about !!}</td>
                                            <td>
                                                <img src="{{ Storage::url('public/image/introduce/') . $data->image }}"
                                                    class="rounded" style="width: 150px">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add Introduce</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('introduce.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" name="title" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">Slogan</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"></span>
                                    <textarea name="content" cols="30" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">Tentang Produk</label>
                                <textarea name="about" cols="30" id="about" class="form-control"></textarea>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label" for="basic-default-name">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image" placeholder="Upload image"
                                        accept="image/*"
                                        onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" />
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <div class="mb-2"><img src="" id="image" alt="" width="200">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('about');
    </script>
@endpush
