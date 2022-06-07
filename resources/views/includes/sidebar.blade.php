  <header class="main-nav">
            <div class="sidebar-user text-center"><img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}"
                    alt="">
                <a class="setting-primary" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg></a>
                <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
                <a href="">
                    @if(Auth::user())
                    <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
                    @endif
                </a>
                <p class="mb-0 mt-2 font-roboto">Quality & Development Manager</p>
            </div>
            <nav>
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                        aria-hidden="true"></i></div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>General </h6>
                                </div>
                            </li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="index.html"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg><span>Dashboard</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#!"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-bell">
                                        <path
                                            d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0">
                                        </path>
                                    </svg><span>Notifications</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#!"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-play">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg><span>Video Tutorial</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('company') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                        </path>
                                        <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                    </svg><span>Assign Forms</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="monitor.html"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-monitor">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="8" y1="21" x2="16" y2="21"></line>
                                        <line x1="12" y1="17" x2="12" y2="21"></line>
                                    </svg><span>Monitor</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#!"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-monitor">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="8" y1="21" x2="16" y2="21"></line>
                                        <line x1="12" y1="17" x2="12" y2="21"></line>
                                    </svg><span>Manager Monitor</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#!"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg><span>Rota</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#!"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg><span>Referral Management</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#!"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg><span>Policy and Procedure</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#!"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg><span>Library</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('location') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg><span>Locations</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('staff') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user-check">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <polyline points="17 11 19 13 23 9"></polyline>
                                    </svg><span>Staff</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('child') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg><span>Child</span></a></li>





                            <li class="dropdown" id="dropdownElement">
                                <a class="nav-link menu-title" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-box">
                                        <path
                                            d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z">
                                        </path>
                                        <polyline points="2.32 6.16 12 11 21.68 6.16"></polyline>
                                        <line x1="12" y1="22.76" x2="12" y2="11"></line>
                                    </svg>
                                    <span>Companies</span>
                                    <div class="according-menu">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </a>

                                <ul class="nav-submenu menu-content">

                                    <li>
                                        <a class="text-dark" href="#!">

                                            <span>Assign Child Forms</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">

                                            <span>Assign Staff Forms</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">

                                            <span>Assign Location Forms</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Policy to Child Forms</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Policy to Location Forms</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Policy to Staff Forms</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Policy to Functionality Forms</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Mandatory Child Documents</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Mandatory Staff Documents</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Mandatory Staff Qualification</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Mandatory Location Documents</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Qualification Types</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Aim’s Template</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Body Map Notification</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Functionality Switch</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Functionality forms to Location</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Off-site Access</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Assign Appraisal Form</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Dynamic Permissions</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Video Tutorials</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-dark" href="#!">
                                            <span>Send Notifications</span>
                                        </a>
                                    </li>



                                </ul>
                            </li>


                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('owner')}}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg><span>Owners/Directors</span></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav" href="contacts.html"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-list">
                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                        <line x1="3" y1="6" x2="3" y2="6"></line>
                                        <line x1="3" y1="12" x2="3" y2="12"></line>
                                        <line x1="3" y1="18" x2="3" y2="18"></line>
                                    </svg><span>Logout</span></a></li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            </nav>
        </header>
