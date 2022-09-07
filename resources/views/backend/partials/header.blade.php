<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center border_bottom_1px">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area d-flex align-items-center">

                </div>
                <div class="header_right d-flex justify-content-between align-items-center">

                    <div class="profile_info">
                        <img src="{{ asset('assets/backend/img/client_img.png') }}" alt="#">
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <p>Admin</p>
                                <h5>{{ Auth::user()->name }}</h5>
                            </div>
                            <div class="profile_info_details">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn">Log Out </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
