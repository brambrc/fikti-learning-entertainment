<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body>
    <div class="adminx-container">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')
            <div class="adminx-content">
                <div class="adminx-main-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>

    </div>
    @include('admin.partials.script')
    @yield('script')
</body>
</html>