<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>   أوتيل  لادارة الفنادق | العملاء </title>
    @include('admin/theme/css')
</head>
<body id="page-top" dir="rtl">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin\theme.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('admin/theme.topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Color System -->
                    <div class="row">
                        {{-- card-body --}}
                        <div class="col-lg-6 mb-4 ">
                            <div class="card bg-info text-white shadow">
                                <a data-toggle="modal" href="#exampleModal1"  data-target="#exampleModal1" >
                                    <div class="card-body text-center">
                                            أرسال الرسائل
                                        <div class="text-white-50 small">
                                            <i class="far fa-comment-alt  fa-5x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-success text-white shadow">
                                <a data-toggle="modal" href="#exampleModal2" data-target="#exampleModal2">
                                    <div class="card-body text-center">
                                        رسائل التنبية
                                        <div class="text-white-50 small">
                                            <i class="far fa-comments fa-5x "></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- card-body --}}
                    {{-- أرسل رسالة --}}
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" dir="rtl">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">أرسل رسالة</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-right">
                                <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">العملاء</label>
                                    <textarea class="form-control"></textarea>
                                    <table>
                                        <td>كل العملاء الذين تم أختيارهم من القائمة :عدد العملاء </td>
                                        <td> logic to count </td>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label" name="message_1"  id="message_1">نص الرسالة</label>
                                    <textarea class="form-control" ></textarea>
                                    <table>
                                        <tr>
                                            <td id="remaining_1">الحروف المتبقية 160 حرف</td>
                                            
                                        </tr>
                                        <tr>
                                            <td id="messages_1">رسالة</td>
                                        </tr>
                                    </table>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                                <button type="button" class="btn btn-primary">أرسال</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        {{-- أرسل رسالة --}}
                        {{-- رسائل التنبية --}}
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true" dir="rtl">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">رسائل التنبية</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-right">
                                    <form>
                                        @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label ">العملاء</label>
                                                <textarea class="form-control"></textarea>
                                                <table>
                                                    <td>كل العملاء الذين تم أختيارهم من القائمة :عدد العملاء </td>
                                                    <td> logic to count </td>
                                                </table>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text"  class="col-form-label ">نص الرسالة</label>
                                                <textarea class="form-control" name="message"  id="message"></textarea>
                                                <table>
                                                    <tr>
                                                        <td id="remaining">الحروف المتبقية 160 حرف</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td id="messages">رسالة</td>
                                                    </tr>
                                                </table>
                                            </div>
                                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                                                <button type="button" class="btn btn-primary">أرسال</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        
                        {{-- رسائل التنبية --}}
                    </div>
                    
                </div>
            </div>
            <!-- End of Main Content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>جميع الحقوق محفوظة &copy; أوتيل 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
@include('admin/theme/js')
<script> 
$(document).ready(function(){
    var $remaining = $('#remaining'),
        $messages = $remaining.next();

    $('#message').keyup(function(){
        var chars = this.value.length,
            messages = Math.ceil(chars / 160),
            remaining = messages * 160 - (chars % (messages * 160) || messages * 160);

        $remaining.text(remaining + 'الحروف المتبقية');
        $messages.text(messages + 'رسالة');
    });
});
</script>
</body>

</html>