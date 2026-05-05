<div class="app-content-header">
     <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                @hasSection('page-title')
                    
                <h3 class="mb-0">@yield('page-title')</h3>
                    @endif

                    @isset($breadcrumbs)
                        
                 <ol class="breadcrumb">

                    @foreach ($breadcrumbs as $breadcrumb)
                        @if ($loop->last)
                            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb['label'] }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="{{ $breadcrumb['route'] }}">{{ $breadcrumb['label'] }}</a></li>
                        @endif
                    @endforeach
                </ol>
                    @endisset
              </div>
              <div class="col-sm-6 text-end">
                @yield('page-actions')
              </div>
            </div>
          </div>
        </div>