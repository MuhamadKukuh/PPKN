<!DOCTYPE html>
<html lang="en">
    @include('layouts.client.headLay')
<body>
    @include('layouts.client.navbar')
    <section class="myContent mt-20">
        @yield('clientContent')
    </section>

    @include('layouts.js')
</body>
</html>