      <!--start sidebar -->
      <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
          </div>
          <div>
            <img src="{{asset('shop/img/core-img/c.png')}}" style="width:130px" alt="">
          </div>
          <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="">
              <div class="parent-icon"><i class="bi bi-house-door"></i>
              </div>
              <div class="menu-title">Trang chủ</div>
            </a>

          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-list-ul"></i>
              </div>
              <div class="menu-title">Quản lí thể loại</div>
            </a>
            <ul>
              <li> <a href="{{route('category.index')}}"><i class="bi bi-arrow-right-short"></i>Thể loại</a>
              </li>

            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-grid"></i>
              </div>
              <div class="menu-title">Quản lí bài viết</div>
            </a>
            <ul>
              <li> <a href="{{route('post.index')}}"><i class="bi bi-arrow-right-short"></i>Bài viết</a>
              </li>

            </ul>   
          </li>


          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-person-circle"></i>
              </div>
              <div class="menu-title">Quản lí nhân sự</div>
            </a>
            <ul>
              <li> <a href=""><i class="bi bi-arrow-right-short"></i>Nhân viên</a>
              </li>
            </ul>
          </li>

        <!--end navigation-->
     </aside>
     <!--end sidebar -->
