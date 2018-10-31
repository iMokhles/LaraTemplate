{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 20/10/2018--}}
 {{--* Time: 13:26--}}
 {{--*/--}}
<section class="card">
    <div class="card-block">
        <form class="" method="POST" action="{{ route('admin.account.password') }}">

            @if (session('success'))
                <div class="alert alert-success alert-no-border alert-close alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{session('success')}}
                </div>

            @endif

            @if ($errors->count())
                <div class="alert alert-danger alert-no-border alert-close alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @php
                $field = 'old_password';
            @endphp

            <div class="form-group">
                <label class="form-label semibold" for="{{$field}}">@lang('admin_dashboard.old_password')</label>
                <input type="password" class="form-control" id="{{$field}}" name="{{$field}}" placeholder="@lang('admin_dashboard.old_password_plh')">
            </div>

            @php
                $field = 'new_password';
            @endphp

            <div class="form-group">
                <label class="form-label semibold" for="{{$field}}">@lang('admin_dashboard.new_password')</label>
                <input type="password" class="form-control" id="{{$field}}" name="{{$field}}" placeholder="@lang('admin_dashboard.new_password_plh')">
            </div>

            @php
                $field = 'confirm_password';
            @endphp

            <div class="form-group">
                <label class="form-label semibold" for="{{$field}}">@lang('admin_dashboard.new_passwordConfirmation')</label>
                <input type="password" class="form-control" id="{{$field}}" name="{{$field}}" placeholder="@lang('admin_dashboard.new_passwordConfirmation_plh')">
            </div>

            <div class="form-group">
                <a href="{{route('admin.dashboard')}}" class="btn btn-rounded btn-grey float-left">@lang('admin_dashboard.cancel_changes')</a>
                <button type="submit" class="btn btn-rounded float-right">@lang('admin_dashboard.apply_change')</button>
            </div>
        </form>
    </div>
</section>
