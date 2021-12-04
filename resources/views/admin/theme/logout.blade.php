<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">هل تريد الخروج فعلا ؟</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">{{__('radix.Select "Logout" below if you are ready to end your current session.')}}</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">الغاء</button>
            <form action="{{ route('logout')}}"  method="POST">
                @csrf
                <button class="btn btn-primary" type="submit" >خروج</button>
            </form>
        </div>
    </div>
</div>
</div>



