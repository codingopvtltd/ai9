@include('console.layouts.header')


            <div class="row m-0">
                <div class="sidebar-block">
                    @include('console.layouts.menu')

                </div>
                <div class="content-block">
                    <div class="content-inner w-100">
                        <div class="header-page d-flex align-items-center justify-content-between w-100">
                            <div class="page-title">
                                {{-- <h5 class="theme-text m-0">Dashboard</h5> --}}
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Listing</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="search-block">
                                <div class="action-search">
                                    <input class="search-input box-out-none" placeholder="Search" type="text" autocomplete="off">
                                    <svg class="search-icon" focusable="false" viewBox="0 0 32 32">
                                    <path d="M29.707,28.293l-8.256-8.256C23.042,18.13,24,15.677,24,13c0-6.075-4.925-11-11-11S2,6.925,2,13s4.925,11,11,11c2.677,0,5.13-0.958,7.037-2.549l8.256,8.256L29.707,28.293z M4,13c0-4.963,4.037-9,9-9c4.963,0,9,4.037,9,9s-4.037,9-9,9C8.037,22,4,17.963,4,13z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="window-custom">
                            <div class="window-custom-inner d-flex align-items-start">
                                <div class="window-left">
                                    <div class="header-actions w-100">
                                        <div class="page-action d-flex align-items-center justify-content-between">
                                            <div class="action-seperated">
                                                {{-- <button class="btn btn-common add-btn add-button"><i class="fal fa-plus mr-1"></i> Add</button> --}}
                                            </div>

                                            <div class="action-content">
                                                <div class=" d-flex align-items-center justify-content-between">
                                                    <button class="action-dropdown box-out-none" action-ul="filter">
                                                        <span class="icon-svg mr-2">
                                                            <svg class="theme-text" viewBox="0 0 24 24">
                                                                <path d="M20,8H4C3.4,8,3,7.6,3,7s0.4-1,1-1h16c0.6,0,1,0.4,1,1S20.6,8,20,8z M18,13c0-0.6-0.4-1-1-1H7c-0.6,0-1,0.4-1,1s0.4,1,1,1h10C17.6,14,18,13.6,18,13z M15,19c0-0.6-0.4-1-1-1h-4c-0.6,0-1,0.4-1,1s0.4,1,1,1h4C14.6,20,15,19.6,15,19z"></path>
                                                            </svg>
                                                        </span>
                                                        <span>Filter</span>
                                                    </button>
                                                    <button class="action-dropdown box-out-none" action-ul="sort">
                                                        <span class="icon-svg mr-2">
                                                            <svg class="MiniIcon SortMiniIcon" viewBox="0 0 24 24">
                                                                <path d="M11.7,9.7c-0.2,0.2-0.4,0.3-0.6,0.3H8v9c0,0.6-0.4,1-1,1s-1-0.4-1-1v-9H2.9C2.4,10,2,9.6,2,9.1c0-0.2,0.1-0.5,0.3-0.6l4.1-4.1C6.7,4,7.3,4,7.6,4.3l0,0l4.1,4.1C12.1,8.8,12.1,9.4,11.7,9.7z M21.7,14.3c-0.2-0.2-0.4-0.3-0.6-0.3H18V5c0-0.6-0.4-1-1-1s-1,0.4-1,1v9h-3.1c-0.5,0-0.9,0.4-0.9,0.9c0,0.2,0.1,0.5,0.3,0.6l4.1,4.1c0.4,0.4,0.9,0.4,1.3,0l0,0l4.1-4.1C22.1,15.2,22.1,14.6,21.7,14.3z"></path>
                                                            </svg>
                                                        </span>
                                                        <span>Sort</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-table">
                                        <div class="item-table">
                                            <div class="table-responsive custom-responsive">
                                                <table class="table table-bordered custom-table data-customTable" id="category-list-table">
                                                    <thead>
                                                        <tr role="row">
                                                            <th><strong>Id</strong>
                                                            </th>
                                                            <th><strong>First Name</strong>
                                                            </th>
                                                            <th><strong>Last Name</strong>
                                                            </th>
                                                            <th><strong>Email</strong>
                                                            </th>
                                                            <th><strong>Company</strong>
                                                            </th>
                                                            <th><strong>City</strong>
                                                            </th>
                                                            <th><strong>Phone Number</strong>
                                                            </th>
                                                    </thead>
                                                    <tbody class="t-tbody">
                                                        @if(!empty($leads))
                                                        @foreach($leads as $key => $leads_data)
                                                        <tr>
                                                            <td>{{$leads_data->id}}</td>
                                                            <td>{{$leads_data->first_name}}</td>
                                                            <td>{{$leads_data->last_name}}</td>
                                                            <td>{{$leads_data->email}}</td>
                                                            <td>{{$leads_data->company}}</td>
                                                            <td>{{$leads_data->city}}</td>
                                                            <td>{{$leads_data->phone_number}}</td>

                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="window-right">
                                    <div class="window-right-action">
                                        <div class="window-right-action-inner">
                                            <div class="title">
                                                <h5><span class="action-text-span"></span> Category</h5>
                                            </div>
                                            <div class="content-action-button d-flex align-items-center justify-content-end">
                                                <button class="btn-common edit-button">
                                                    <span class="icon-svg"><i class="fal fa-pen"></i></span>
                                                    <span>Edit</span>
                                                </button>
                                                <button class="btn-common save-button">
                                                    <span class="icon-svg"><i class="fal fa-save"></i></span>
                                                    <span>Save</span>
                                                </button>
                                                <button class="btn-common update-button">
                                                    <span class="icon-svg"><i class="fal fa-save"></i></span>
                                                    <span>Save</span>
                                                </button>
                                                <button class="btn-common close-window">
                                                    <span class="icon-svg"><i class="fal fa-times"></i></span>
                                                    <span>Cancel</span>
                                                </button>
                                                <span class="close-window">
                                                    <svg class="icon-svg" focusable="false" viewBox="0 0 32 32">
                                                        <path d="M2,14.5h18.4l-7.4-7.4c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0l10,10c0.6,0.6,0.6,1.5,0,2.1l-10,10c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.1-1.1-0.4c-0.6-0.6-0.6-1.5,0-2.1l7.4-7.4H2c-0.8,0-1.5-0.7-1.5-1.5C0.5,15.3,1.2,14.5,2,14.5z M28,3.5C28,2.7,28.7,2,29.5,2S31,2.7,31,3.5v25c0,0.8-0.7,1.5-1.5,1.5S28,29.3,28,28.5V3.5z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='lazyloader'></div>
                                    <div class="window-over">
                                        <div class="window-form">
                                            <!-- <div class="form-block">
                                                <div class="subtitle-block">
                                                    <h3>View Block</h3>
                                                </div>
                                                <form>
                                                    <div class="col-12 p-0">
                                                        <div class="form-group">
                                                            <label>Email address</label>
                                                            <input type="email" class="form-control view-form" id="exampleFormControlInput1" placeholder="name@example.com">
                                                        </div>
                                                    </div>


                                                </form>
                                            </div> -->
                                            <div class="form-block">
                                                <!-- <div class="subtitle-block">
                                                    <h3>Category</h3>
                                                </div> -->
                                                <form id="form-view" enctype="multipart/form-data" role="form" method="POST" data-controller="category-actions">
                                                @csrf
                                               <!--  <input type="hidden" id="category_id" name="category_id"> -->
                                                    <div class="col-12 p-0">
                                                        <div class="form-group">
                                                            <label>Category Name *</label>
                                                            <input type="text" class="form-control view-form form-element category_name" id="category_name" name="category_name" placeholder="Category Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="form-group">
                                                        <label>Category Image *</label>
                                                        <div class="image-upload-placeholder"><img src="" width="150" height="150" class="category_image" style="display: none;"></div>
                                                        <div class="image-upload-element">

                                                            <input type="file" class="form-control view-form form-element category_image" id="category_image" name="category_image">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </form>
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
    <script>
        var csrf_token = "{{ csrf_token() }}";
    </script>
    @include('console.layouts.footer')
