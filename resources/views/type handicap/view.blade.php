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


        <div class="col-md-12 d-flex justify-content-center" >
            <!-- general form elements -->
            <div class="card card-secondary card-create">
              <div class="card-header">
                <h3 class="card-title">Afficher type Handicap</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post"  enctype="multipart/form-data">

                <div class="card-body">

                  <div class="card card-secondary card-outline">
                    <div class="card-header">
                      <h5 class="card-title m-0">type handicap</h5>
                    </div>
                    <div class="card-body">


                      <p class="card-text">{{$type_handicap->nom}}</p>

                    </div>
                  </div>
                  <div class="card card-secondary card-outline">
                    <div class="card-header">
                      <h5 class="card-title m-0">Description</h5>
                    </div>
                    <div class="card-body">


                      <p class="card-text">{{$type_handicap->description}}</p>

                    </div>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <div class="d-flex">
                        <div class="p-2">
                            <a href="{{route('typeHandicap.edit',$type_handicap->id)}}" type="submit" class="btn btn-warning">Editer</a>
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
