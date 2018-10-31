<section class="tabs-section">
    <div class="tabs-section-nav">
        <div class="tbl">
            <ul class="nav" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#account_info" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            @lang('admin_dashboard.account_info')
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#change_password" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            @lang('admin_dashboard.change_password')
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="account_info">
            @include('admin.auth.account.account_info_tab')
        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="change_password">
            @include('admin.auth.account.change_password_tab')
        </div><!--.tab-pane-->

    </div><!--.tab-content-->

</section>
