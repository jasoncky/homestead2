@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
	
	<div class="row">
		@foreach ($number_blocks as $block)
		<div class="col-md-4 ">
			<div class="info-box">
					<span class="info-box-icon bg-red"
						  style="display:flex; flex-direction: column; justify-content: center;">
						<i class="fa fa-chart-line"></i>
					</span>

				<div class="info-box-content">
					<span class="info-box-text">{{ $block['title'] }}</span>
					<span class="info-box-number">{{ $block['number'] }}</span>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	
	<div class="row">
		@foreach ($list_blocks as $block)
			<div class="col-md-6">
				<div class="box box-info">
					<div class="box-header with-border">
					  <h3 class="box-title">{{ $block['title'] }}</h3>
					</div>
					<div class="box-body">
						<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Last login at</th>
							</tr>
							</thead>
							<tbody>
							@forelse($block['entries'] as $entry)
								<tr>
									<td>{{ $entry->name }}</td>
									<td>{{ $entry->email }}</td>
									<td>{{ $entry->last_login_at }}</td>
								</tr>
							@empty
								<tr>
									<td colspan="3">{{ __('No entries found') }}</td>
								</tr>
							@endforelse
							</tbody>
						</table>
						</div>
					</div>
				</div>		
			</div>
		@endforeach
	</div>
	<!---
	<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa-fw fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa-fw fas fa-heart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa-fw fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa-fw fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
          </div>
        </div>
      </div>
	  --->

		<div class="row">
        <div class="col-lg-12">
            <div class="card-deck">
			<div class="card">
                <div class="card-header">{{ $chart->options['chart_title'] }}</div>
				
					<div class="card-body">
						{!! $chart->renderHtml() !!}
					</div>
			</div>
			<div class="card">
                <div class="card-header">{{ $chart1->options['chart_title'] }}</div>
				
					<div class="card-body">
						{!! $chart1->renderHtml() !!}
					</div>
			</div>
			</div>
		</div>
		</div>
</div>
@endsection
@section('scripts')
@parent
	{!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}
	{!! $chart1->renderJs() !!}
@endsection