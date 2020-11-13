<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="assets/images/">
      <!-- Favicon -->
      <title>Codingo Theme</title>
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/mCustomScrollbar.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/fontawsome/css/fontawesome-all.css" />
      <script type="text/javascript">
         window.addEventListener('load', (event) => {
             //jQuery('#preloader').hide();
             jQuery(".se-pre-con").fadeOut("slow");
             jQuery('.boxed-wrapper').fadeIn("slow");
         });
      </script>
   </head>
   <body>
      <div class="se-pre-con">
         <div class="lds-ripple">
            <div></div>
            <div></div>
         </div>
      </div>
      <div class="wrapper boxed-wrapper">
         <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo blue-bg">
               <!-- mini logo for sidebar mini 50x50 pixels --> 
               <span class="logo-mini">
                  <!-- <img src="images/logo-n-blue.png" alt=""> --> Codingo Theme
               </span>
               <!-- logo for regular state and mobile devices --> 
               <span class="logo-lg">
                  <!-- <img src="images/logo.png" alt=""> --> Codingo Theme
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar blue-bg navbar-static-top">
               <!-- Sidebar toggle button-->
               <ul class="nav navbar-nav pull-left">
                  <li>
                     <a class="sidebar-toggle" data-toggle="push-menu" href="#!"></a>
                  </li>
               </ul>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- User Account  -->
                     <li class="dropdown user user-menu p-ph-res">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="images/user/default.png" class="user-image" alt="User Image"> <span class="hidden-xs">graffiti</span>
                        <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                           <li> <a class="dropdown-item" href="assets/logout">Logout
                              </a>
                           </li>
                           <li> <a class="dropdown-item" href="device-management.html">Device Management 
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu sidebar-arrow" data-widget="tree">
                  <li class="active">
                     <a href="index.html"> <i class="fal fa-file-alt" aria-hidden="true"></i>  <span>Home</span>
                     </a>
                  </li>
                  <!-- <li>
                     <a href="order-tracking.html"> <i class="fal fa-info"></i>  <span>Order Status Report</span>
                     </a>
                     </li> -->
                  <li>
                     <a href="typography.html"> <i class="fal fa-warehouse"></i>  <span>Typography</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <main>
               <!-- Main content -->
               <div class="loaderjs">
                  <!--this is supposed to be on the HTML element but codepen won't let me do it-->
                  <div id="preload-div">
                     <!-- <div id="preloader"></div>   -->
                     <div id="planloader"></div>
                  </div>
               </div>
               <div class="content design-content">
                  <div class="content-box">
                     <div class="header-page">
                        <div class="title-block">
                           <input type="hidden" value="1" id="company_id">
                           <div class="title">
                              <h3>Order Request</h3>
                           </div>
                           <div class="search-block text-right">
                              <div class="right-action-block">
                                 <div class="action-search">
                                    <input id="topbar_search_input" class="search-input textInput textInput--medium TopbarSearchTypeahead-input" placeholder="Search" type="text" aria-expanded="false" aria-owns="lui_30" autocomplete="off" aria-autocomplete="list" role="combobox" value="">
                                    <svg class="Icon MagnifyerIcon TopbarSearchTypeahead-icon" focusable="false" viewBox="0 0 32 32">
                                       <path d="M29.707,28.293l-8.256-8.256C23.042,18.13,24,15.677,24,13c0-6.075-4.925-11-11-11S2,6.925,2,13s4.925,11,11,11c2.677,0,5.13-0.958,7.037-2.549l8.256,8.256L29.707,28.293z M4,13c0-4.963,4.037-9,9-9c4.963,0,9,4.037,9,9s-4.037,9-9,9C8.037,22,4,17.963,4,13z"></path>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="common-window">
                        <div class="window-custom">
                           <div class="window-left">
                              <div class="custom-action-block">
                                 <div class="action-block">
                                    <div class="action-button">
                                       <button class="btn-common">
                                          <span class="icon-svg awesome"><i class="fal fa-plus"></i></span>
                                          <p>Add Form</p>
                                       </button>
                                    </div>
                                    <div class="action-content">
                                       <button class="action-dropdown" action-ul="filter">
                                          <span class="list-icon-svg">
                                             <svg class="MiniIcon FilterMiniIcon" viewBox="0 0 24 24">
                                                <path d="M20,8H4C3.4,8,3,7.6,3,7s0.4-1,1-1h16c0.6,0,1,0.4,1,1S20.6,8,20,8z M18,13c0-0.6-0.4-1-1-1H7c-0.6,0-1,0.4-1,1s0.4,1,1,1h10C17.6,14,18,13.6,18,13z M15,19c0-0.6-0.4-1-1-1h-4c-0.6,0-1,0.4-1,1s0.4,1,1,1h4C14.6,20,15,19.6,15,19z"></path>
                                             </svg>
                                          </span>
                                          <span>Filter</span>
                                       </button>
                                       <div class="option-dropdown" link-ul="filter">
                                          <ul class="option-ul">
                                             <li>Name</li>
                                             <li>Device Type</li>
                                          </ul>
                                       </div>
                                       <button class="action-dropdown" action-ul="sort">
                                          <span class="list-icon-svg">
                                             <svg class="MiniIcon SortMiniIcon" viewBox="0 0 24 24">
                                                <path d="M11.7,9.7c-0.2,0.2-0.4,0.3-0.6,0.3H8v9c0,0.6-0.4,1-1,1s-1-0.4-1-1v-9H2.9C2.4,10,2,9.6,2,9.1c0-0.2,0.1-0.5,0.3-0.6l4.1-4.1C6.7,4,7.3,4,7.6,4.3l0,0l4.1,4.1C12.1,8.8,12.1,9.4,11.7,9.7z M21.7,14.3c-0.2-0.2-0.4-0.3-0.6-0.3H18V5c0-0.6-0.4-1-1-1s-1,0.4-1,1v9h-3.1c-0.5,0-0.9,0.4-0.9,0.9c0,0.2,0.1,0.5,0.3,0.6l4.1,4.1c0.4,0.4,0.9,0.4,1.3,0l0,0l4.1-4.1C22.1,15.2,22.1,14.6,21.7,14.3z"></path>
                                             </svg>
                                          </span>
                                          <span>Sort</span>
                                       </button>
                                       <div class="option-dropdown" link-ul="sort">
                                          <ul class="option-ul">
                                             <li>Latest</li>
                                             <li>Equipment Cost</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 content-block">
                                 <div class="row">
                                    <div class="content-main-block">
                                       <div class="content-section mt-minus-1">
                                          <div class="form-block">
                                             <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                   <div class="form-group">
                                                      <label class="form-label" for="">Name</label>
                                                      <input type="text" class="form-control error-border" placeholder="Name" id="" >
                                                      <small class="error">Name is required</small>
                                                   </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
<pre>
   &lt;div class="form-block"&gt;
      &lt;div class="row"&gt;
         &lt;div class="col-xl-4 col-lg-4 col-md-6 col-sm-6"&gt;
            &lt;div class="form-group"&gt;
               &lt;label class="form-label" for=""&gt;Name&lt;/label&gt;
               &lt;input type="text" class="form-control error-border" placeholder="Name" id="" &gt;
               &lt;small class="error"&gt;Name is required&lt;/small&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
</pre>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                   <div class="form-group">
                                                      <label class="form-label" for="">Email</label>
                                                      <input type="Email" class="form-control" placeholder="Email" id="" >
                                                      <small class="error d-none">Email is required</small>
                                                   </div>
                                                </div>
<pre>
   &lt;div class="form-block"&gt;
      &lt;div class="row"&gt;
         &lt;div class="col-xl-4 col-lg-4 col-md-6 col-sm-6"&gt;
            &lt;div class="form-group"&gt;
               &lt;label class="form-label" for=""&gt;Email&lt;/label&gt;
               &lt;input type="Email" class="form-control" placeholder="Email" id="" &gt;
               &lt;small class="error d-none"&gt;Email is required&lt;/small&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
</pre>
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                   <div class="form-group">
                                                      <label class="form-label" for="">Password</label>
                                                      <input type="password" class="form-control" placeholder="Password" id="" >
                                                      <small class="error d-none">Password is required</small>
                                                   </div>
                                                </div>
<pre>
   &lt;div class="form-block"&gt;
      &lt;div class="row"&gt;
         &lt;div class="col-xl-4 col-lg-4 col-md-6 col-sm-6"&gt;
            &lt;div class="form-group"&gt;
               &lt;label class="form-label" for=""&gt;Password&lt;/label&gt;
               &lt;input type="password" class="form-control" placeholder="Password" id="" &gt;
               &lt;small class="error d-none"&gt;Password is required&lt;/small&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
</pre>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                   <div class="form-group">
                                                      <label class="form-label" for="">Address</label>
                                                      <textarea class="form-control" id="" placeholder="Address" ></textarea>
                                                      <small class="error d-none">Password is required</small>
                                                   </div>
                                                </div>
<pre>
   &lt;div class="form-block"&gt;
      &lt;div class="row"&gt;
         &lt;div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"&gt;
            &lt;div class="form-group"&gt;
               &lt;label class="form-label" for=""&gt;Address&lt;/label&gt;
               &lt;textarea class="form-control" id="" placeholder="Address" &gt;&lt;/textarea&gt;
               &lt;small class="error d-none"&gt;Password is required&lt;/small&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
</pre>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                   <div class="form-group">
                                                      <label class="form-label" for="">Option</label>
                                                      <select class="form-control" id="" placeholder="Address" >
                                                         <option value="">option - 1</option>
                                                         <option value="">option - 2</option>
                                                         <option value="">option - 3</option>
                                                      </select>
                                                      <small class="error d-none">Option is required</small>
                                                   </div>
                                                </div>
<pre>
   &lt;div class="form-block"&gt;
      &lt;div class="row"&gt;
         &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"&gt;
            &lt;div class="form-group"&gt;
               &lt;label class="form-label" for=""&gt;Option&lt;/label&gt;
               &lt;select class="form-control" id="" placeholder="Address" &gt;
                  &lt;option value=""&gt;option - 1&lt;/option&gt;
                  &lt;option value=""&gt;option - 2&lt;/option&gt;
                  &lt;option value=""&gt;option - 3&lt;/option&gt;
               &lt;/select&gt;
               &lt;small class="error d-none"&gt;Option is required&lt;/small&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
</pre>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                   <div class="form-group">
                                                      <label class="form-label" for="">File Upload</label>
                                                      <div class="custom-file">
                                                         <input type="file" class="form-control custom-file-input" name="" placeholder="Upload Logo">
                                                         <label class="custom-file-label">Upload File</label>
                                                      </div>
                                                      <small class="error d-none">File is required</small>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
<pre>
   &lt;div class="form-block"&gt;
      &lt;div class="row"&gt;
         &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"&gt;
            &lt;div class="form-group"&gt;
               &lt;label class="form-label" for=""&gt;File Upload&lt;/label&gt;
               &lt;div class="custom-file"&gt;
                  &lt;input type="file" class="form-control custom-file-input" name="plan_logo" placeholder="Upload Logo"&gt;
                  &lt;label class="custom-file-label"&gt;Upload File&lt;/label&gt;
               &lt;/div&gt;
               &lt;small class="error d-none"&gt;File is required&lt;/small&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
</pre>
                                          <div class="item-table">
                                             <div class="table-responsive custom-responsive">
                                                <table class="table table-bordered custom-table">
                                                   <thead>
                                                      <tr role="row">
                                                         <th><strong>Name</strong>
                                                         </th>
                                                         <th><strong>Requested Type</strong>
                                                         </th>
                                                         <th><strong>Device Type</strong>
                                                         </th>
                                                         <th><strong>Model</strong>
                                                         </th>
                                                         <th><strong>Vendor</strong>
                                                         </th>
                                                         <th><strong>Plan</strong>
                                                         </th>
                                                         <th><strong>Equipment Cost</strong>
                                                         </th>
                                                         <th><strong>Equipment Credit</strong>
                                                         </th>
                                                      </tr>
                                                   </thead>
                                                   <tbody class="t-tbody">
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                      <tr>
                                                         <td>User Name</td>
                                                         <td>Add new line</td>
                                                         <td>Smart Phone</td>
                                                         <td>iPhone XR</td>
                                                         <td>Verizon</td>
                                                         <td>Unlimited</td>
                                                         <td>$299.00</td>
                                                         <td>$100.00</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="window-right">
                              <div class="right-main-block">
                                 <div class="right-block">
                                    <div class="right-content-open">
                                       <div class="action-block">
                                          <div class="content-right-action">
                                             <div class="content-title">
                                                <h5>Order</h5>
                                             </div>
                                             <div class="content-action-button">
                                                <button class="btn-common">
                                                   <span class="icon-svg awesome"><i class="fal fa-pen"></i></span>
                                                   <p>Edit</p>
                                                </button>
                                                <button class="btn-common">
                                                   <span class="icon-svg awesome"><i class="fal fa-save"></i></span>
                                                   <p>Save</p>
                                                </button>
                                                <button class="btn-common">
                                                   <span class="icon-svg awesome"><i class="fal fa-times"></i></span>
                                                   <p>Cancel</p>
                                                </button>
                                                <span class="close-window">
                                                   <a>
                                                      <svg class="Icon CloseIcon" focusable="false" viewBox="0 0 32 32">
                                                         <path d="M2,14.5h18.4l-7.4-7.4c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0l10,10c0.6,0.6,0.6,1.5,0,2.1l-10,10c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.1-1.1-0.4c-0.6-0.6-0.6-1.5,0-2.1l7.4-7.4H2c-0.8,0-1.5-0.7-1.5-1.5C0.5,15.3,1.2,14.5,2,14.5z M28,3.5C28,2.7,28.7,2,29.5,2S31,2.7,31,3.5v25c0,0.8-0.7,1.5-1.5,1.5S28,29.3,28,28.5V3.5z"></path>
                                                      </svg>
                                                   </a>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="common-over-block-main">
                                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 common-inner">
                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 view-block p-0">
                                                <div class="form-block">
                                                   <div class="row">
                                                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="">Name</label>
                                                            <input type="text" class="form-control error-border" placeholder="Name" id="" >
                                                            <small class="error">Name is required</small>
                                                         </div>
                                                      </div>
                                                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="">Email</label>
                                                            <input type="Email" class="form-control" placeholder="Email" id="" >
                                                            <small class="error d-none">Email is required</small>
                                                         </div>
                                                      </div>
                                                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="">Password</label>
                                                            <input type="password" class="form-control" placeholder="Password" id="" >
                                                            <small class="error d-none">Password is required</small>
                                                         </div>
                                                      </div>
                                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                         <div class="form-group">
                                                            <label class="form-label" for="">Address</label>
                                                            <textarea class="form-control" id="" placeholder="Address" ></textarea>
                                                            <small class="error d-none">Password is required</small>
                                                         </div>
                                                      </div>
                                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="">Option</label>
                                                            <select class="form-control" id="" placeholder="Address" >
                                                               <option value="">option - 1</option>
                                                               <option value="">option - 2</option>
                                                               <option value="">option - 3</option>
                                                            </select>
                                                            <small class="error d-none">Option is required</small>
                                                         </div>
                                                      </div>
                                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="">File Upload</label>
                                                            <div class="custom-file">
                                                               <input type="file" class="form-control custom-file-input" name="" placeholder="Upload Logo">
                                                               <label class="custom-file-label">Upload File</label>
                                                            </div>
                                                            <small class="error d-none">File is required</small>
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
                        </div>
                     </div>
                  </div>
               </div>
            </main>
         </div>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
   </body>
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/mCustomScrollbar.min.js"></script>
   <script src="assets/js/themekit.js"></script>
   <script src="assets/js/custom.js"></script>
</html>