@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dataset
        @endslot
        @slot('li_1')
            Dataset
        @endslot
        @slot('li_2')
            Dataset
        @endslot
    @endcomponent
    <div class="content">
        <div class="container">
            <div class="row">
                {{--  @component('components.customermenu')
                @endcomponent  --}}
                <div class="col-md-8 col-lg-9"> 
                    <!-- Reviews Sort -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-title">
                                <h4>Dataset</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 text-sm-end">
                            <div class="review-sort">
                                <p>Sort</p>
                                <select class="select">
                                    <option>Most helful</option>
                                    <option>Recent Items</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews Sort -->
                    {{--    --}}
                    {{--  @component('components.pagination')
                    @endcomponent  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
