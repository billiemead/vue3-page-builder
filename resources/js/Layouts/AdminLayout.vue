<script>
import '../../css/style.css';
export default (await import('vue')).defineComponent({

    })
</script>
<template>
    <section id="container">
        <!-- header start -->
        <header class="header fixed-top clearfix">
            <!-- logo start -->
            <div class="brand">
                <a href="index.html" class="logo">Vue Page Builder</a>
                    <div class="sidebar-toggle-box">
                        <font-awesome-icon icon="fa-bars" />
                    </div>
            </div>
            <!-- / logo end -->
            <div class="nav notify-row" id="top_menu">
                <!-- notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="notification">
                        <a data-toggle="dropdown" href="#" >
                            <font-awesome-icon icon="fa-list-check" />
                        </a>
                    </li> <!-- / settings end --><!-- inbox dropdown start -->
                    <li  id="header_inbox_bar" class="notification">
                        <a  data-toggle="dropdown" class="" href="#">
                            <font-awesome-icon icon="fa-envelope"/>
                        </a>
                    </li>
                    <!-- / inbox dropdown end --><!-- notification dropdown start -->
                    <li  id="header_notification_bar" class="notification">
                        <a  data-toggle="dropdown" class="" href="#">
                            <font-awesome-icon icon="fa-bell" />
                        </a>
                     </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix" >
                <!--search &amp; user info start-->
                <ul class="nav pull-right top-menu" >
                    <li ><input type="text" class="form-control search" placeholder=" Search" ></li>
                    <!-- user login dropdown start-->
                    <li class="dropdown" >
                        <a data-toggle="dropdown" class="dropdown-toggle d-block" href="#" >
                            <img alt="" src="images/2.png" > &nbsp; <span class="username" >John Doe</span><b class="caret" ></b></a>
                        <ul class="dropdown-menu extended logout" >
                            <li ><a href="#" ><i class="fa fa-suitcase" ></i>Profile</a></li>
                            <li ><a href="#" ><i class="fa fa-cog" ></i> Settings</a></li>
                            <li ><a href="login.html" ><i class="fa fa-key" ></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search &amp; user info end-->
            </div>
        </header>
        <!-- header end --> <!-- sidebar start -->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start -->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion" >
                        <li>
                            <a href="login.html">
                               &nbsp; <span>Pages</span><span class="dcjq-icon"></span>
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                              &nbsp; <span>Log Out</span><span class="dcjq-icon"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end -->
            </div>
        </aside>
        <!-- sidebar end --> <!-- main content start -->
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <slot />
                    </div>
                </div>
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                <p>© 2024 All Rights Reserved | Design by <a href="https://billiemead.com">Billie Mead</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!-- main content end -->
    </section>
</template>

<style scoped>
    .pull-right {
        float: right;
    }
    .notification a {
        display: flex;
        width: 30px;
        height: 30px;
        justify-content: center;
        align-items: center;
    }
    .top-nav ul.top-menu > li > a {
            display: flex !important;
        justify-content: center;
        align-items: center;
    }
    .section-footer {
        display: flex;
        justify-content: flex-end;
    }
    .btn-success {
        background-color: #FF6C60;
        color: #fff;
        border-color: #FF6C60;
    }
    .table-agile-info {
        background: #efefef !important;
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,0.125);
        border-radius: 0.25rem;
    }
    .card-header {
        border-bottom: 1px solid rgba(0,0,0,0.125);
        padding: 0.75rem 0.75rem;
        padding-top: 1.3rem;
        position: relative;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        color: #000 !important;
        background-color: #DDEDE0 !important;
        border-color: #DDEDE0 !important;
        font-size: 20px;
    }
    .card-body {
        flex: 1 1 auto;
    }
</style>