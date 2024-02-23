<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('backend_agence/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo" />
            <img
                src="{{ asset('backend_agence/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li class="dropdown">
                    <a href="{{ route ('agency.dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span
                        ><span class="mtext">Home</span>
                    </a>
                </li>
             
                <li>
                    <a href="{{ route('agence.calendar') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span
                        ><span class="mtext">Calendar</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('agence.plan') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar2-plus"></span
                        ><span class="mtext">Plan a Trip</span>
                    </a>
                </li>
           
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-pie-chart"></span
                        ><span class="mtext">Charts</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="highchart.html">Highchart</a></li>
                        <li><a href="knob-chart.html">jQuery Knob</a></li>
                        <li><a href="jvectormap.html">jvectormap</a></li>
                        <li><a href="apexcharts.html">Apexcharts</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-earmark-text"></span
                        ><span class="mtext">Additional Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="video-player.html">Video Player</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="reset-password.html">Reset Password</a></li>
                    </ul>
                </li>
             

           
                
                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-diagram-3"></span
                        ><span class="mtext">Sitemap</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-chat-right-dots"></span
                        ><span class="mtext">Chat</span>
                    </a>
                </li>
              
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-pdf"></span
                        ><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
            
            </ul>
        </div>
    </div>
</div>