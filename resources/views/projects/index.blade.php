@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('projects.create') }}">
                        Add New
                    </a>
                </div>
                <div class="col-sm-12 d-flex justify-content-between p-0">

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">

                            <input type="text" class="form-control" name="serach" id="serach" placeholder="Search&hellip;">
                        </div>
                    </form>

                </div>
                {{-- detected number of page --}}
                <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">

            @include('projects.table')
        </div>

    </div>
    <script>
        $(document).ready(function(){
        function fetch_data(page,query)
        {
        $.ajax({
         url:"/projects?page="+page+"&query="+query,
         success:function(data)
         {
            $('.card').html('');
            $('.card').html(data);
        }
        })
        }

        $(document).on('keyup', '#serach', function(){
        var query = $('#serach').val();
        var page = $('#hidden_page').val();
        fetch_data(page,query);

        });


        $(document).on('click', '.pagination a', function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        var query = $('#serach').val();
        console.log(page);
        console.log(query);
        fetch_data(page,query);

        });
        });

        </script>

@endsection
