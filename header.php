<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Tags Input -->
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
    <!-- Jodit -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/4.2.27/jodit.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg main-navbar">

        <div class="logo_area_wraper">
            <div class="logo_area">
                <a href="#"><img alt="image" src="img/logo_2.jpg" class="header_logo" /></a>
            </div>
        </div>

        <div class="main_header_area">
            <div class="main_header_top">
                <div class="header_left">
                    <div class="notification_area">
                        <div class="notifications">
                            <button type="button" class="btn btn-primary position-relative custom_notification_icon notification_drop_controller">
                                <span class="material-symbols-outlined">
                                    notifications
                                </span>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger custom_notifications_badge">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                            <div class="notification_dropdown_section">
                                Activity Notification
                            </div>
                        </div>
                        <div class="comment">
                            <button type="button" class="btn btn-primary position-relative custom_notification_icon notification_drop_controller">
                                <span class="material-symbols-outlined">
                                    comment
                                </span>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger custom_comment_badge">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                            <div class="notification_dropdown_section">
                                Recent message
                            </div>
                        </div>
                        <div class="person">
                            <button type="button" class="btn btn-primary position-relative custom_notification_icon notification_drop_controller">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger custom_person_badge">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                            <div class="notification_dropdown_section">
                                My account Notification
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_right">
                    <div class="search_area">
                        <form class="d-flex" role="search">
                            <button class="btn" type="submit">
                                <span class="material-symbols-outlined">
                                    search
                                </span>
                            </button>
                            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                        </form>
                    </div>
                    <div class="info_area">
                        <div class="info_image">
                            <img src="img/user_image.jpg" alt="">
                        </div>
                        <div class="info_text">
                            <h3>John Doe</h3>
                            <p>Super Admin</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_header_bottom">
                <div class="menu_title">
                    <h5>Data Table</h5>
                </div>
                <div class="breadcrumb_area">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Library</li>
                            <li class="breadcrumb-item">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    </nav>


    <div class="content_with_sidebar">

        <div class="content_with_sidebar_left">
            <div class="main_sidebar">
                <aside id="sidebar_wrapper">

                    <div class="sidebar_button">
                        <a href="#" class="btn">Start Action</a>
                    </div>

                    <ul class="sidebar_menu">
                        <li>
                            <a href="#"><span class="material-symbols-outlined">desktop_windows</span><span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href=""><span class="material-symbols-outlined">format_list_bulleted</span><span>UI Kit</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">mail</span><span>Emails</span><span class="material-symbols-outlined arrow_down">keyboard_arrow_down</span><span class="material-symbols-outlined arrow_right">keyboard_arrow_right</span></a>
                            <uL>
                                <li><a href="#" class="current">Inbox</a></li>
                                <li><a href="#">View Email</a></li>
                                <li><a href="#">Composer</a></li>
                            </uL>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">monitoring</span><span>Charts</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">table_chart</span><span>Table</span><span class="material-symbols-outlined arrow_down">keyboard_arrow_down</span><span class="material-symbols-outlined arrow_right">keyboard_arrow_right</span></a>
                            <uL>
                                <li><a href="#" class="current">Basic Table</a></li>
                                <li><a href="#">Data Table</a></li>
                                <li><a href="#">Pricing Table</a></li>
                            </uL>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">edit_square</span><span>Forms</span><span class="material-symbols-outlined arrow_down">keyboard_arrow_down</span><span class="material-symbols-outlined arrow_right">keyboard_arrow_right</span></a>
                            <uL>
                                <li><a href="#" class="current">Basic Form</a></li>
                                <li><a href="#">Demo Forms</a></li>
                                <li><a href="#">Product Form</a></li>
                            </uL>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">app_registration</span><span>Components</span><span class="material-symbols-outlined arrow_down">keyboard_arrow_down</span><span class="material-symbols-outlined arrow_right">keyboard_arrow_right</span></a>
                            <uL>
                                <li><a href="#" class="current">Accordion</a></li>
                                <li><a href="#">Alerts</a></li>
                                <li><a href="#">Badges</a></li>
                                <li><a href="#">Breadcrumb</a></li>
                                <li><a href="#">Buttons</a></li>
                                <li><a href="#">Button Group</a></li>
                                <li><a href="#">Cards</a></li>
                            </uL>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">calendar_month</span><span>Calender</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">stack</span><span>Pages</span><span class="material-symbols-outlined arrow_down">keyboard_arrow_down</span><span class="material-symbols-outlined arrow_right">keyboard_arrow_right</span></a>
                            <uL>
                                <li><a href="#" class="current">Gallery</a></li>
                                <li><a href="#">Invoices</a></li>
                                <li><a href="#">404</a></li>
                            </uL>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">pin_drop</span><span>Maps</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">person</span><span>My Profile</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="material-symbols-outlined">move_item</span><span>Logout</span></a>
                        </li>
                    </ul>

                </aside>
            </div>
        </div>

        <div class="content_with_sidebar_right">
            <div class="main_content_section">