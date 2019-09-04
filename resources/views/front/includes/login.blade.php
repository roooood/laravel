<div class="modal fade" id="login" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title js-title-step"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="modal-body login-form text-center">
            <div class=" d-none" data-step="1" data-title="شماره موبایل خود را وارد کنید">
               <input type="text" style="display:none" value="09" id="number">
               <div id="number-msg" style="display:none" class="alert alert-danger" role="alert">
                    شماره وارد شده اشتباه است
                </div>
            </div>
            <div class="d-none m-1" data-step="2" data-title="کد فعال سازی را وارد کنید">
                <div class="d-flex align-items-center justify-content-around">
                    <input type="text" style="display:none" value="" id="active">
                    <button type="button" id="resent" class="btn btn-primary btn-normal">ارسال دوباره</button>
                </div>
                <div id="active-msg" style="display:none" class="alert alert-danger" role="alert">
                    کد فعال سازی وارد شده اشتباه است
                </div>
            </div>
            <div class="text-success d-none" data-step="3" data-title="ورود با موفقیت">
                <div class="d-flex align-items-center justify-content-center">
                    <i class="fa fa-check fa-3x success-icon" ></i>
                    <h3>ورود با موفقیت</h3>
                </div>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-lg btn-dark js-btn-step" data-orientation="previous" >قبلی</button>
            <button type="button" id="reg-next" class="btn btn-lg btn-success js-btn-step" data-orientation="next" >ادامه</button>
        </div>
        </div>
    </div>
</div>