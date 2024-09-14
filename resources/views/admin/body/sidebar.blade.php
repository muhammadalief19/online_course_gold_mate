{{-- <div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="nav-text">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">UI Elements</li>
        @if (Auth::user()->can('category.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="nav-text">Manage Category</div>
            </a>
            <ul>
                @if (Auth::user()->can('category.all'))
                <li> <a href="{{ route('all.category') }}">All Category </a>
                </li>
                @endif
                @if (Auth::user()->can('subcategory.all'))
                <li> <a href="{{ route('all.subcategory') }}">All SubCategory  </a>
                </li>
                @endif

            </ul>
        </li>
        @endif


        @if(Auth::user()->can('instructor.menu'))
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Instructor</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.instructor') }}">All Instructor</a>
                </li>
            </ul>
        </li>
        @endif

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Courses</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.all.course') }}">All Courses</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Coupon</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.all.coupon') }}">All Coupon</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Setting</div>
            </a>
            <ul>
                <li> <a href="{{ route('smtp.setting') }}">Manage SMPT</a>
                </li>
                <li> <a href="{{ route('site.setting') }}">Site Setting </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Orders</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.pending.order') }}">Pending Orders </a>
                </li>
                <li> <a href="{{ route('admin.confirm.order') }}">Confirm Orders </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Report</div>
            </a>
            <ul>
                <li> <a href="{{ route('report.view') }}">Report View </a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Review</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.pending.review') }}">Pending Review </a>
                </li>
                <li> <a href="{{ route('admin.active.review') }}">Active Review </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage All User </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.user') }}">All User </a>
                </li>
                <li> <a href="{{ route('all.instructor') }}">All Instructor</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="nav-text">Manage Blog </div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.category') }}">Blog Category </a>
                </li>
                <li> <a href="{{ route('blog.post') }}">Blog Post</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Role & Permission</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="nav-text">Role & Permission</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.permission') }}">All Permission</a>
                </li>
                <li> <a href="{{ route('all.roles') }}">All Roles</a>
                </li>
                <li> <a href="{{ route('add.roles.permission') }}">Role In Permission</a>
                </li>
                <li> <a href="{{ route('all.roles.permission') }}">All Role In Permission</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="nav-text">Manage Admin</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.admin') }}">All Admin</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-map-alt"></i>
                </div>
                <div class="nav-text">Maps</div>
            </a>
            <ul>
                <li> <a href="map-google-maps.html">Google Maps</a>
                </li>
                <li> <a href="map-vector-maps.html">Vector Maps</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="nav-text">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div> --}}
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="" href="{{ route('dashboard') }}" aria-expanded="false">
                <i class="material-symbols-outlined">home</i>
                <span class="nav-text">Home</span>
            </a>
            </li>
            @if (Auth::user()->can('category.menu'))
            <li>
                <a href="javascript:;" class="has-arrow">
                    <i class="material-icons">category</i>
                    <span class="nav-text">Manage Category</span>
                </a>
                <ul>
                    @if (Auth::user()->can('category.all'))
                    <li> <a href="{{ route('all.category') }}">All Category</a></li>
                    @endif
                    @if (Auth::user()->can('subcategory.all'))
                    <li> <a href="{{ route('all.subcategory') }}">All SubCategory</a></li>
                    @endif
                </ul>
            </li>
            @endif
            <li>
                <a class="has-arrow" href="javascript:void(0);">
                    <i class="material-icons">school</i>
                    <span class="nav-text">Manage Courses</span>
                </a>
                <ul>
                    <li> <a href="{{ route('admin.all.course') }}">All Courses</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);">
                    <i class="material-icons">local_offer</i>
                    <span class="nav-text">Manage Coupon</span>
                </a>
                <ul>
                    <li> <a href="{{ route('admin.all.coupon') }}">All Coupon</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);">
                    <i class="material-icons">settings</i>
                    <span class="nav-text">Manage Setting</span>
                </a>
                <ul>
                    <li> <a href="{{ route('smtp.setting') }}">Manage SMTP</a></li>
                    <li> <a href="{{ route('site.setting') }}">Site Setting </a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);">
                    <i class="material-icons">shopping_cart</i>
                    <span class="nav-text">Manage Orders</span>
                </a>
                <ul>
                    <li> <a href="{{ route('admin.pending.order') }}">Pending Orders </a></li>
                    <li> <a href="{{ route('admin.confirm.order') }}">Confirm Orders </a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">assessment</i>
                    <span class="nav-text">Manage Report</span>
                </a>
                <ul aria-expanded="false">
                    <li> <a href="{{ route('report.view') }}">Report View </a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">rate_review</i>
                    <span class="nav-text">Manage Review</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.pending.review') }}">Pending Review </a></li>
                    <li><a href="{{ route('admin.active.review') }}">Active Review </a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <span class="nav-text">Manage All User</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.user') }}">All User</a></li>
                    @if(Auth::user()->can('instructor.menu'))
                        <li><a href="{{ route('all.instructor') }}">All Instructor</a></li>
                    @endif
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">edit</i>
                    <span class="nav-text">Manage Blog</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('blog.category') }}">Blog Category</a></li>
                    <li><a href="{{ route('blog.post') }}">Blog Post</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">lock</i>
                    <span class="nav-text">Role & Permission</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.permission') }}">All Permission</a></li>
                    <li><a href="{{ route('all.roles') }}">All Roles</a></li>
                    <li><a href="{{ route('add.roles.permission') }}">Role In Permission</a></li>
                    <li><a href="{{ route('all.roles.permission') }}">All Role in Permission</a></li>
                </ul>
            </li>
            <li>
                <a class="" href="{{ route('all.admin') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">
                        person
                    </i>
                    <span class="nav-text">Manage Admin</span>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('admin.logout') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">
                        logout
                    </i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
