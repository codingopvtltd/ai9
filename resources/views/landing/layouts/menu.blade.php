<div class="header-main">
         <div class="container-custom">
            <div class="row m-0">
               <div class="top-block-main w-100">
                  <div class="top-block">
                     <div class="logo">
                        <a href="{{route('home')}}"><img class="img-responsive" src="{{asset('images/logo/logo.png')}}"></a>
                     </div>
                     <div class="customMenu-block">
                        <div class="top-ul">
                           <ul class="list-inline m-0">
                              <li class="list-inline-item">
                                 <a href="">Login</a>
                              </li>
                              <li class="list-inline-item">
                                 <a href="">Sign up</a>
                              </li>
                              <li class="list-inline-item">
                                 <div class="cart-block-top">
                                 <a href="" class="mr-0 d-flex align-items-end" >
                                    <i class="fal fa-shopping-cart"></i>
                                 <div class="cart-box">
                                    <span>My Basket</span>
                                    <span>0 Items</span>
                                 </div>
                                 </a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 p-0">
                  <nav class="navbar navbar-expand-lg navbar-dark p-0">
                     <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                           <li class="nav-item dropdown has-megamenu">
                              <a class="nav-link dropdown-toggle megamenu-parent" href="#" data-toggle="dropdown">SHOP BY CATEGORY</a>
                              <div class="dropdown-menu megamenu">
                                 <ul class="dropdown-menu" aria-labelledby="dropdown1">
                                 @if(!empty($category_details))
                                    @foreach($category_details as $key => $category_data)
                                       @if($key < 10)
                                    <li class="dropdown-item dropdown-main dropdown @if($key==0) focused @endif">

                                   
                                       <a class="dropdown-toggle dropdown-toggle-main" href="{{route('category-page',$category_data['category_slug'])}}" id="dropdown1-1" aria-haspopup="true" aria-expanded="false">{{$category_data['category_name']}}</a>
                                       <div class="drop-mega">                                     
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                          @if(!empty($category_data->subcategory))
                                          @foreach($category_data->subcategory as $key_sub_category => $sub_category_data)
                                             <li class="dropdown-item dropdown-sub" >
                                                <a href="{{route('sub-category-page',[$category_data['category_slug'],$sub_category_data->sub_category_slug])}}">{{$sub_category_data->sub_category_name}}</a>
                                             </li>
                                          @endforeach
                                          @endif
                                          </ul>
                                          <div class="view-all-sub">
                                             <a href="{{route('sub-category-listing',$category_data['category_slug'])}}">view all</a>
                                          </div>
                                       </div>
                                    </li>
                                       @endif
                                    @endforeach
                                 @endif 
                                    <div class="view-all">
                                       <a href="{{route('category-all')}}">view all</a>
                                    </div>
                                    {{-- <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 2.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 3.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <li class="dropdown-item dropdown-main dropdown">
                                       <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                       <div class="drop-mega">
                                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                             <li class="dropdown-item dropdown-sub" href="#"><a>Action 1.1</a></li>
                                          </ul>
                                       </div>
                                    </li> --}}
                                 </ul>
                              </div>
                              <!-- dropdown-mega-menu.// -->
                           </li>
                           <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">In News</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">FAQs</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>                           
                        </ul>
                     </div>
                     <!-- navbar-collapse.// -->
                  </nav>
               </div>
            </div>
         </div>
      </div>