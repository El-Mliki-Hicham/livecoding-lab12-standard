


@extends("master")

@section("content")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th style="width: 100px">Id</th>
                    <th style="width: 400px">Type handicap</th>
                    <th>Description</th>
                  <th style="width: 105px">Action</th>
                </tr>
              </thead>
              <tbody>
                  {{-- @foreach ($users as $value ) --}}

                  <tr>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge bg-danger">+++</span></td>
                  <td>
                      <a href="" class=""><i style="color: green" class="fa-sharp fa-solid fa-eye"></i></a>
                      <a href="" class=""><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                      <form class style="display: contents" action="" method="post">
                          @csrf
                          @method("DELETE")
                          <button class="Btn-no-style" ><i style="color: red" class="fa-sharp fa-solid fa-trash"></i></button>
                      </form>
                  </td>
              </tr>
              {{-- @endforeach --}}

              </tbody>
            </table>
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->


@endsection
