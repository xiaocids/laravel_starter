<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>{{ config('app.name', 'Laravel')}} | {{$page_title or ''}}</title>

    <meta name="description" content="{{ $page_descripton or '' }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ mix('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ mix('css/font-awesome/font-awesome.min.css') }}"/>

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ mix('css/fonts.googleapis.com.css') }}"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ mix('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ mix('css/ace-part2.min.css') }}" class="ace-main-stylesheet"/>
    <![endif]-->
    <link rel="stylesheet" href="{{ mix('css/ace-skins.min.css') }}"/>
    <link rel="stylesheet" href="{{ mix('css/ace-rtl.min.css') }}"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ mix('css/ace-ie.min.css') }}"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ mix('js/ace-extra.min.js') }}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{ mix('js/html5shiv.min.js') }}"></script>
    <script src="{{ mix('js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="skin-1">
@include('layouts.fragments._navbar')

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    @include('layouts.fragments._sidebar')

    <div class="main-content">
        <div class="main-content-inner">
            @include('layouts.fragments._breadcrumb')

            <div class="page-content">
                @include('layouts.fragments._settings')

                <div class="page-header">
                    <h1>
                        {{ $page_title or 'Home' }}
                        @if(isset($page_description))
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                {{ $page_description }}
                            </small>
                        @endif
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        @yield('content')
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    @include('layouts.fragments._footer')

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ mix('js/jquery-2.1.4.min.js') }}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{ mix('js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='{{ mix('js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");
</script>
<script src="{{ mix('js/bootstrap.min.js') }}"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="{{ mix('js/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ mix('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ mix('js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ mix('js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ mix('js/jquery.sparkline.index.min.js') }}"></script>
<script src="{{ mix('js/jquery.flot.min.js') }}"></script>
<script src="{{ mix('js/jquery.flot.pie.min.js') }}"></script>
<script src="{{ mix('js/jquery.flot.resize.min.js') }}"></script>

<!-- ace scripts -->
<script src="{{ mix('js/ace-elements.min.js') }}"></script>
<script src="{{ mix('js/ace.min.js') }}"></script>

<!-- inline scripts related to this page -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>