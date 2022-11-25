@extends('layouts.app')

@section('contents')

<div id="main-content">
  <div class="container-fluid">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2>Form Validation</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Form Validation</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex flex-row-reverse">
            <div class="page_action">
              <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
              <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
            </div>
            <div class="p-2 d-flex">

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h2>Basic Validation</h2>
          </div>
          <div class="body">

            {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <p><strong>Opps Something went wrong</strong></p>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
          @endif --}}


          <form method="post" action="{{route('masteros.storeosname', $id)}}">
            @csrf

            <div class="form-group">
              <label>Tipe Sistem Operasi</label>
              <input type="text" value="{{$masteros->type_os}}" disabled class="form-control @error('osname') is-invalid @enderror">
              @error('osname')
              <div class="invalid-feedback">{{ $message }}
              </div>
              @enderror


            </div>

            <div class="form-group">
              <label>Nama Sistem Operasi</label>
              <input type="text" name="osname" id="osname" class="form-control @error('osname') is-invalid @enderror">

              @error('osname')
              <span class="text-danger">{{ $message }}</span>
              @enderror

            </div>


            <div class="form-group">
              <label>Icon</label>
              <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror">

              @error('icon')
              <span class="text-danger">{{ $message }}</span>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>

  </div>

</div>
</div>


</div>



@endsection
