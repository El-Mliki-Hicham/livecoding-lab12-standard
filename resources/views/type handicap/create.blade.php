@extends("master")
@section("content")


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->


        <div class="col-md-12 d-flex justify-content-center">
            <!-- general form elements -->
            <div class="card card-primary  card-create">
              <div class="card-header">
                <h3 class="card-title">Ajouter Type handicap </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('typeHandicap.store')}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">type handicap</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{old("type_handicap")}}" name="type_handicap">
                      <div style="color:red">
                      @error("type_handicap")
                      {{$message}}
                      @enderror
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{old("description")}}" name="description" placeholder="Enter discription">
                      <div style="color:red">
                      @error("description")
                      {{$message}}
                      @enderror
                    </div>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                    <div class="d-flex">
                        <div class="p-2">
                            <button type="submit" class="btn btn-primary">ajouter</button>
                        </div>

                        <div class="ml-auto p-2">
                            <a href="{{route('typeHandicap.index')}}" type="submit" class="btn btn-secondary">Anuler</a>
                        </div>
                      </div>
                </div>
              </form>
            </div>
            <!-- /.card -->



          </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->

@endsection
