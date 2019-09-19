<div id="header">
    <div class="topbar">
        <div class="main clearfix">
            <ul class="toplink pull-right">
                <li style="cursor:pointer;width:130px;">
                    <input type="hidden" name="name" id="hdUserId" value="0" class="hddUserId"/>
                </li>
                @if(Auth::check())
                    <li style="width:100px; margin-left:920px !important;">
                        <h6 style="width: 300px">Xin chào: {{Auth::user()->name}}  |<a href="{{route('dashboard')}}" >Dashborad </a> |<a rel="nofollow" id="BtnRegister" href="{{route('logout')}}" class="fancybox.ajax"><i class="fafa-plus-circle"></i>Thoát</a></h6>
                    </li>
                @else
                    <li style="width:100px; margin-left:920px !important;">
                        <a rel="nofollow" id="BtnRegister" href="{{route('sign-up')}}"
                           class="fancybox.ajax"><i class="fafa-plus-circle"></i>Đăng ký
                        </a>
                    </li>
                    <li style="width:110px;">
                        <a rel="nofollow" id="BtnLogin" href="{{route('sign-in')}}"
                           class="fancybox.ajax"><i class="fafa-unlock"></i>Đăng nhập
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="main-head">
        <div class="main clearfix">
            <ul class="main-nav pull-right">
                <li style="margin-right:990px; width:200px !important;" class="active"><a href="{{route('listBockHouse')}}" title="Nhà đất cho thuê">Nhà đất cho thuê</a></li>
            </ul>
        </div>
    </div>

</div>


