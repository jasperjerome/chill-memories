<div class="dashboard-footer">
    <div class="copyright-area">
        <p>Copyright 2023 <a href="https://chillmemories.com">Chill Memmories</a> | Designed and Developed By <a
                href="https://bhuvaneshgroups.com">Bhuvanesh Groups</a></p>
    </div>
    <ul class="footer-menu-list">
        <li>
            <a href="#">Terms & Conditions</a>
        </li>
    </ul>
</div>


@if (\Session::has('create'))
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast bg-success text-light" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                {{ \Session::get('create') }}
            </div>
        </div>
    </div>
@elseif (\Session::has('update'))
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast bg-primary text-light" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            {{ \Session::get('update') }}
        </div>
    </div>
</div>
@elseif (\Session::has('delete'))
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast bg-danger text-light" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            {{ \Session::get('delete') }}
        </div>
    </div>
</div>
@endif
