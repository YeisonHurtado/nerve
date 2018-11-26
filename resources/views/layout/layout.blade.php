<!DOCTYPE html>
<html lang="en">
<head>
    @include('head.head')
</head>
<body>

    <div class="content">
        @yield("content_page")
    </div>

    @include("layout.footer")
</body>
</html>