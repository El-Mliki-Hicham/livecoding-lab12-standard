
<!DOCTYPE html>
<html lang="en">
    {{-- head --}}
    @include("layouts.head")
    {{-- end head --}}


    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
  {{-- navbar --}}
  @include("layouts.navbar")
  {{-- end navbar --}}

            {{-- sidebar --}}
            @include("layouts.sidebar")
            {{-- end sidebar --}}

             {{-- content --}}
             @yield("content")
             {{--  end content --}}



    </div>
    <!-- ./wrapper -->

</body>
    {{-- scripts --}}
    @include("layouts.scripts")
    {{-- end scripts --}}
    {{-- footer --}}
    @include("layouts.footer")
    {{-- end footer --}}
</html>
