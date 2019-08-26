<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
            <li>
                <a href="{{route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Bảng điều khiển</a>
            </li>
            <h3 class="menu-title">Các yếu tố</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Thành phần</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{route('button')}}">Nút</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{route('badges')}}">Badges</a></li>
                    <li><i class="fa fa-bars"></i><a href="{{route('tabs')}}">Tab</a></li>
                    <li><i class="fa fa-share-square-o"></i><a href="{{route('socialButton')}}">Nút xã hội</a></li>
                    <li><i class="fa fa-id-card-o"></i><a href="{{route('cards')}}">Thẻ</a></li>
                    <li><i class="fa fa-bell"></i><a href="{{route('notifications')}}">Thông báo</a></li>
                    <li><i class="fa fa-exclamation-triangle"></i><a href="{{route('alerts')}}">Cảnh báo</a></li>
                    <li><i class="fa fa-spinner"></i><a href="{{route('bars')}}">Thanh tiến độ</a></li>
                    <li><i class="fa fa-fire"></i><a href="{{route('modals')}}">Modals</a></li>
                    <li><i class="fa fa-book"></i><a href="{{route('switches')}}">Công tắc</a></li>
                    <li><i class="fa fa-th"></i><a href="{{route('grids')}}">Lưới</a></li>
                    <li><i class="fa fa-file-word-o"></i><a href="{{route('typography')}}">Kiểu chữ</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="{{route('basictables')}}">Tables cơ bản</a></li>
                    <li><i class="fa fa-table"></i><a href="{{route('datatables')}}">Tables dữ liệu</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-th"></i><a href="{{route('basicform')}}">Form cơ bản</a></li>
                <li><i class="menu-icon fa fa-th"></i><a href="{{route('advancedform')}}">Form nâng cao</a></li>
            </ul>
        </li>

        <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('fontAwesome')}}">Font Awesome</a></li>
                <li><i class="menu-icon ti-themify-logo"></i><a href="{{route('themefy')}}">Themefy Icons</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('Widgets')}}"> <i class="menu-icon ti-email"></i>Widgets </a>
        </li>
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Biểu đồ</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-line-chart"></i><a href="{{route('Chartjs')}}">Biểu đồ JS</a></li>
                <li><i class="menu-icon fa fa-area-chart"></i><a href="{{route('floatChart')}}">Biểu đồ nổi</a></li>
                <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{route('peitychart')}}">Biểu đồ ngang hàng</a></li>
            </ul>
        </li>

        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Bản đồ</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-map-o"></i><a href="{{route('gmap')}}">Bản đồ Google</a></li>
                <li><i class="menu-icon fa fa-street-view"></i><a href="{{route('vectormap')}}">Bản đồ Vector</a></li>
            </ul>
        </li>
        <h3 class="menu-title">Ngoài ra</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Trang</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('login')}}">Đăng nhập</a></li>
                <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('register')}}">Đăng ký</a></li>
                <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{route('password.request')}}">Quên mật khẩu</a></li>
            </ul>
        </li>
        <h3 class="menu-title">Hệ thống</h3>
        <li>
            <a href="{{route('QuanTriHeThong.Menu.Menu.index')}}"> <i class="menu-icon fa fa-bars"></i>Quản lý menu</a>
        </li>
        <li>
            <a href="{{route('QuanTriHeThong.Module.Modules.index')}}"> <i class="menu-icon fa fa-bars"></i>Quản lý modules</a>
        </li>
        <li>
            <a href="{{route('QuanTriHeThong.Controller.Controllers.index')}}"> <i class="menu-icon fa fa-bars"></i>Quản lý controllers</a>
        </li>
        <li>
            <a href="{{route('QuanTriHeThong.Action.Actions.index')}}"> <i class="menu-icon fa fa-bars"></i>Quản lý actions</a>
        </li>
        <li>
            <a href="{{route('QuanTriHeThong.Nhom.Nhoms.index')}}"> <i class="menu-icon fa fa-bars"></i>Quản lý nhóm</a>
        </li>
        <li>
            <a href="{{route('QuanTriHeThong.Nguoidung.User.index')}}"> <i class="menu-icon fa fa-bars"></i>Quản lý người dùng</a>
        </li>
        @foreach($menu as $val)
            @if($val->level == 0)
                <h3 class="menu-title">{{$val->ten}}</h3>
            @endif
            @if($val->link != '' && $val->level==1)
                <li>
                    <a href="{{$val->link}}"><i class="menu-icon {{$val->icon}}"></i>{{$val->ten}}</a>
                </li>
            @else
                @if($val->level == 1)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon {{$val->icon}}"></i>{{$val->ten}}</a>
                        <ul class="sub-menu children dropdown-menu">
                            @foreach($menu as $valc2)
                                @if($valc2->level ==2 )
                                    <li><i class="menu-icon {{$valc2->icon}}"></i><a href="{{$valc2->link}}">{{$valc2->ten}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endif
        @endforeach
    </ul>
</div>