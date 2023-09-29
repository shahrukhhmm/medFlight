<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            {{-- Do not delete me :) I'm used for auto-generation menu items --}}



            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
          

            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i
                        class="nav-icon fas fa-cogs" style="color:white;"></i> {{ __('Manage access') }}</a>
                    </li>

            <li class="nav-item"><a class="nav-link" href="{{ url('admin/med-flight') }}"><i
                        class="nav-icon fas fa-file" style="color:white;"></i> Med flight</a>
                    </li>
            <!-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li> -->
        
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
