<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.shared-content', ['linkType' => 'direct'])

    <script>
        @include('partials.shared-scripts', ['pageType' => 'جوال'])
    </script>
</body>

</html>