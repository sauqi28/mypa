@extends('layouts.app')

@section('contents')

<div id="main-content">
  <div class="container-fluid">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2>Tipe Sistem Operasi</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('masteros.index') }}"><i class="fa fa-dashboard"></i></a>

            </li>
            <li class="breadcrumb-item">Tipe OS</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex flex-row-reverse">
            <div class="page_action">
              <a href="{{ route('masteros.create') }}"> <button type="button" class="btn btn-primary">Tambah</button></a>
            </div>
            <div class="p-2 d-flex">

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix row-deck">

      <div class="col-lg-12 col-md-12">

        <div class="body table-responsive social_media_table">
          <table class="table table-hover">
            <thead>
              <tr>
                <th></th>
                <th>Sistem Operasi</th>
                <th>Jml Server</th>
                <th>Comments</th>
                <th>Share</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($masteros as $masteros)

              <tr>
                <td><span class="social_icon linkedin"><i class="fa fa-linkedin"></i></span>
                </td>
                <td><span class="list-name">{{ $masteros->type_os }}</span>

                  <span class="text-muted">Operating System</span>
                </td>
                <td>{{ \Carbon\Carbon::parse($masteros->created_at)->format('d F, Y') }}</td>


                <td>14K</td>
                <td>10K</td>
                <td>
                  <p class="demo-button ">
                    <a href="{{ route('masteros.show', $masteros->id) }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> <span>Detail</span></button></a>

                    <a href="{{ route('masteros.edit', $masteros->id) }}""><button type=" button" class="btn btn-warning btn-sm"><i class="fa fa-warning"></i> <span>Ubah</span></button></a>


                    <a href="{{ route('masteros.destroy', $masteros->id) }}"> <button type="button" onClick="return confirm('Are you absolutely sure you want to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> <span>Hapus</span></button></a>

                  </p>

                  </form>




                </td>
              </tr>

              @empty
              <div class="alert alert-info">Tidak ada data</div>
              @endforelse


            </tbody>


          </table>
        </div>
      </div>
    </div>


  </div>

</div>
</div>



@endsection
