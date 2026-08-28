@include('admin.layout.meta-tag')

@include('admin.layout.header')

<main>
    <section class="justify-content-center">
        <x-manual.alert>

        </x-manual.alert>


    </section>

    

    @yield('content')

</main>



@include('admin.layout.footr')
@include('admin.layout.script')


    



   

  