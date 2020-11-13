@include('console.layouts.header')


            <div class="row m-0">
                <div class="sidebar-block">
                    @include('console.layouts.menu')
                    
                </div>
                <div class="content-block">
                    <div class="content-inner w-100">
                        <div class="header-page d-flex align-items-center justify-content-between w-100">
                            <div class="page-title d-flex align-items-center">
                                {{-- <h5 class="theme-text m-0">Settings</h5> --}}
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                    </ol>
                                  </nav>
                            </div>
                            {{-- <div class="search-block">
                                <div class="action-search">
                                    <input class="search-input box-out-none" placeholder="Search" type="text" autocomplete="off">
                               <svg class="search-icon" focusable="false" viewBox="0 0 32 32">
                                    <path d="M29.707,28.293l-8.256-8.256C23.042,18.13,24,15.677,24,13c0-6.075-4.925-11-11-11S2,6.925,2,13s4.925,11,11,11c2.677,0,5.13-0.958,7.037-2.549l8.256,8.256L29.707,28.293z M4,13c0-4.963,4.037-9,9-9c4.963,0,9,4.037,9,9s-4.037,9-9,9C8.037,22,4,17.963,4,13z"></path>
                                    </svg>
                                </div>
                            </div> --}}
                        </div>
                        <div class="window-custom">
                            <div class="window-custom-inner d-flex align-items-start">
                                <div class="full-window col-12">
                                    <div class="mt-4">
                                    <div class="profile-window d-flex w-100">
                                    <!-- Nav tabs -->
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Change Password</a>
                                      </div>
                                      <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <div class="form-block">
                                                <div class="subtitle-CustomBlock">
                                                    <h3>Profile</h3>
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="col-12 p-0">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 p-0">
                                                                <div class="form-group">
                                                                    <label>Public email</label>
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 p-0">
                                                                <div class="form-group">
                                                                    <label>Bio</label>
                                                                    <textarea class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 p-0">
                                                                <div class="form-group">
                                                                    <label for="">URL</label>
                                                                    <input type="text" class="form-control" id="" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 p-0">
                                                                <div class="form-group">
                                                                    <label for="">Twitter username</label>
                                                                    <input type="text" class="form-control" id="" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 p-0">
                                                                <div class="form-group">
                                                                    <label for="">Company</label>
                                                                    <input type="text" class="form-control" id="" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 p-0">
                                                                <div class="form-group">
                                                                    <label for="">Location</label>
                                                                    <input type="text" class="form-control" id="" placeholder="">
                                                                </div>
                                                            </div>
                                                            <p class="common-para">All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears. Please see our privacy statement to learn more about how we use this information.</p>
                                                            <div class="col-12 p-0">
                                                                <button class="btn-common btn-success m-0">Update profile</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="" class="label-custom">Profile Picture</label>
                                                            <div class="profile-photo">
                                                                <div class="photo-big">
                                                                    <img class="img-fluid" src="{{asset("images/logo/logo.png") }}" alt="">
                                                                </div>
                                                                <span class="edit-Spanphoto"><i class="fal fa-pen mr-1"></i> Edit</span>
                                                                <div class="userupload-block">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="custom-file">
                                                                                <input type="file" id="customFile" class="custom-file-input form-control-sm">
                                                                                <label class="custom-file-label col-form-label-sm" for="custmFile">Upload a photo...</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="li-content">Remove photo</div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>                                                                                                        
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            21
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('console.layouts.footer')
