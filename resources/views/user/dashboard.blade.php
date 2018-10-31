@extends('user.layouts.layout')

@section('content')
    <section class="card mb-3">
				<header class="card-header card-header-lg">
                    @lang('user_dashboard.login_status')
				</header>
				<div class="card-block">
					<p class="card-text">@lang('user_dashboard.welcome_message')</p>
				</div>
			</section>
@endsection
