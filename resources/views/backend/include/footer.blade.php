<!-- footer content -->
<script>
    var url='{{URL::to('/')}}';
    var token='{{csrf_token()}}'

</script>
<footer>
    <div class="copyright-info">
        <p class="pull-right">World Travel - powered by <a href="https://colorlib.com">grafiastech</a>
        </p>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
<!-- /page content -->

</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{{URL::to('backend/js/bootstrap.min.js')}}"></script>

<!-- gauge js -->
<script type="text/javascript" src="{{URL::to('backend/js/gauge/gauge.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/gauge/gauge_demo.js')}}"></script>
<!-- bootstrap progress js -->
<script src="{{URL::to('backend/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{URL::to('backend/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<!-- icheck -->
<script src="{{URL::to('backend/js/icheck/icheck.min.js')}}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{URL::to('backend/js/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/datepicker/daterangepicker.js')}}"></script>
<!-- chart js -->
<script src="{{URL::to('backend/js/chartjs/chart.min.js')}}"></script>

<script src="{{URL::to('backend/js/custom.js')}}"></script>
{{--
<script src="{{URL::to('backend/js/hello/hello.js')}}"></script>
--}}
<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="{{URL::to('backend/js/excanvas.min.js')}}"></script><![endif]-->
<script type="text/javascript" src="{{URL::to('backend/js/flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/jquery.flot.orderBars.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/jquery.flot.time.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/date.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/jquery.flot.spline.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/jquery.flot.stack.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/curvedLines.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/flot/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/notification/scripts.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/notification/ajax.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/notification/alertify.js')}}"></script>
<script type="text/javascript" src="{{URL::to('backend/js/notification/sweetalert.js')}}"></script>

</body>
</html>