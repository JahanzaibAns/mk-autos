{{-- @php
$favicon = App\Models\BackendModels\Logo::where("type", "Logo")->first();
@endphp --}}
<style>
    .fa-lg {
    width: 20px;
    height: 20px;
    font-size: 16px;
    margin-right: 6px;
}
.bg_orange {
            background-color: #FF581B !important;
        }

</style>m
<div class="sidebar-wrapper noPrint">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                {{-- <h2 class="text-light">Logo Here</h2> --}}
                <img class="img-fluid for-light" src="{{asset('assets/admin/images/logo.png')}}"
                    alt="Logo" width="180px">
                </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            {{-- <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div> --}}
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('assets/admin/images/logo/logo-icon.png') }}" alt=""></a></div>


        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                                src="{{asset('assets/admin/images/logo/logo-white.png')}}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title"
                            href="{{ route('index') }}" target="_blank"><span class="lan-3
                            "><i class="fa fa-globe fa-lg" aria-hidden="true"></i> Go To Website</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a
                            class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == 'admin.dashboard'? 'active': '' }}
                            {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}"><span class="lan-3
                            "><i class="fa fa-home fa-lg" aria-hidden="true"></i> Dashboard</span>
                        </a>
                    </li>
             
                    @php
                        $is_active = in_array(Route::currentRouteName(),[
                            'admin.brands.index', 'admin.brand.create', 'admin.brand.edit',
                            'admin.models.index', 'admin.model.create', 'admin.model.edit',
                            'admin.categories.index', 'admin.category.create', 'admin.category.edit' // added categories
                        ]);
                        @endphp 
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label>
                        <a class="sidebar-link sidebar-title {{ $is_active ? 'active': '' }}" href="javascript:void(0);">
                            <span class="lan-3"><i class="fa fa-car fa-lg" aria-hidden="true"></i> Car Management</span>
                            <div class="according-menu">
                                <i class="fa fa-angle-{{ $is_active ? 'down' : 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="sidebar-submenu" style="display:{{ $is_active ? 'block;' : 'none;' }}">
                            <li>
                                <a class="lan-4 {{ Route::currentRouteName() == 'admin.brands.index' ? 'active' : '' }} 
                                                   {{ Route::currentRouteName() == 'admin.brand.edit' ? 'active' : '' }} 
                                                   {{ Route::currentRouteName() == 'admin.brand.create' ? 'active' : '' }}"
                                   href="{{ route('admin.brands.index') }}">Brand Management</a>
                            </li>
                            <li>
                                <a class="lan-4 {{ Route::currentRouteName() == 'admin.models.index' ? 'active' : '' }} 
                                                   {{ Route::currentRouteName() == 'admin.model.create' ? 'active' : '' }} 
                                                   {{ Route::currentRouteName() == 'admin.model.edit' ? 'active' : '' }}"
                                   href="{{ route('admin.models.index') }}">Car Brands/Models</a>
                            </li>
                            <li>
                                <a class="lan-4 {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }} 
                                                   {{ Route::currentRouteName() == 'admin.category.create' ? 'active' : '' }} 
                                                   {{ Route::currentRouteName() == 'admin.category.edit' ? 'active' : '' }}"
                                   href="{{ route('admin.categories.index') }}">Category Management</a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-list">
                        <label class="badge badge-success"></label><a class="sidebar-link sidebar-title
                        {{ Route::currentRouteName() == 'admin.cars.index' ? 'active' : '' }} {{ Route::currentRouteName() == 'rent-car.edit' ? 'active' : '' }} {{ Route::currentRouteName() == 'car-listing.create' ? 'active' : '' }}
                        {{ Route::currentRouteName() == 'car-listing.edit' ? 'active' : '' }} {{ Route::currentRouteName() == 'add.product_variation' ? 'active' : '' }} {{ Route::currentRouteName() == 'edit.product_variation' ? 'active' : '' }}
                        {{Route::currentRouteName() == 'product-setting' ? 'active' : '' }}
                        {{Route::currentRouteName() == 'edit.product_attributes' ? 'active' : '' }}"
                            href="{{ route('admin.cars.index') }}"><span
                                class="lan-3"><i class="fa fa-car fa-lg" aria-hidden="true"></i> Cars </span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label>
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'admin.cardiscount.index' ? 'active' : '' }}"
                          href="{{ route('admin.cardiscount.index') }}">
                          <span class="lan-3"><i class="fa fa-car fa-lg" aria-hidden="true"></i> Manage Car Discount </span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label>
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'admin.blogs.index' ? 'active' : '' }} {{ Route::currentRouteName() == 'admin.blog.create' ? 'active' : '' }} {{ Route::currentRouteName() == 'admin.blog.edit' ? 'active' : '' }}"
                          href="{{ route('admin.blogs.index') }}">
                          <span class="lan-3"><i class="fa fa-rss fa-lg" aria-hidden="true"></i> Blogs </span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label>
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'admin.inquiries.index' ? 'active' : '' }} {{ Route::currentRouteName() == 'admin.inquiry.detail' ? 'active' : '' }}"
                          href="{{ route('admin.inquiries.index') }}">
                          <span class="lan-3"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i> Inquiries </span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success"></label>
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'admin.leads.index' ? 'active' : '' }}"
                          href="{{ route('admin.leads.index') }}">
                          <span class="lan-3"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i> Leads </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
