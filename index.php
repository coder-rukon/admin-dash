<?php include "header.php"; ?>


<section class="cards_section">

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pr-0 pt-2">
                        <div class="card-body">
                            <span class="material-symbols-outlined groups card_icon">
                                groups
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 pl-0">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text">2,542</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pr-0 pt-2">
                        <div class="card-body">
                            <span class="material-symbols-outlined shopping_cart card_icon">
                                shopping_cart
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="card-body">
                            <h5 class="card-title">New Orders</h5>
                            <p class="card-text">15,020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pr-0 pt-2">
                        <div class="card-body">
                            <span class="material-symbols-outlined attach_money card_icon">
                                attach_money
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="card-body">
                            <h5 class="card-title">Last Week Earnings</h5>
                            <p class="card-text">$ 42,348</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pr-0 pt-2">
                        <div class="card-body">
                            <span class="material-symbols-outlined local_shipping card_icon">
                                local_shipping
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="card-body">
                            <h5 class="card-title">Product Delivered</h5>
                            <p class="card-text">2,348</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-sm-12 col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div id="chart2"></div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div id="chart4"></div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
            <div class="card mb-3 comment_section">
                <div class="card-body">
                    <h5>Comments</h5>
                </div>
                <div class="row g-0">
                    <div class="col-md-2">
                        <div class="card-body comment_image">
                            <img src="img/user_image_1.jpg" class="img-fluid " alt="...">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="comment_approval">
                                <button type="button" class="btn btn-info">Pending</button>
                                <a href="#">
                                    <span class="material-symbols-outlined check">
                                        check
                                    </span>
                                </a>
                                <a href="#">
                                    <span class="material-symbols-outlined close">
                                        close
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-0">
                    <div class="col-md-2">
                        <div class="card-body comment_image">
                            <img src="img/user_image_2.jpg" class="img-fluid " alt="...">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="comment_approval">
                                <button type="button" class="btn btn-success">Approval</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-0">
                    <div class="col-md-2">
                        <div class="card-body comment_image">
                            <img src="img/user_image_3.jpg" class="img-fluid " alt="...">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="comment_approval">
                                <button type="button" class="btn btn-danger">Rejected</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-0">
                    <div class="col-md-2">
                        <div class="card-body comment_image">
                            <img src="img/user_image_4.jpg" class="img-fluid " alt="...">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="comment_approval">
                                <button type="button" class="btn btn-success">Approval</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6">
            <div class="card mb-3 chat_section">
                <div class="card-body">
                    <h5 class="widget_title">Chats</h5>
                    <div class="chat_widget_section">
                        <form class="d-flex" role="search">
                            <button class="btn" type="submit">
                                <span class="material-symbols-outlined">
                                    search
                                </span>
                            </button>
                            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                        </form>
                        <div class="chat_widget_row">
                            <div class="chat_user_left">
                                <div class="chat_widget_history">
                                    <ul>
                                        <li>
                                            <img src="img/user_image_1.jpg" alt="">
                                            <div>
                                                <h3>Chat name</h3>
                                                <p>Last seen 12:28pm</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="img/user_image_2.jpg" alt="">
                                            <div>
                                                <h3>Chat name</h3>
                                                <p>Last seen 12:28pm</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="img/user_image_3.jpg" alt="">
                                            <div>
                                                <h3>Chat name</h3>
                                                <p>Last seen 12:28pm</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="img/user_image_4.jpg" alt="">
                                            <div>
                                                <h3>Chat name</h3>
                                                <p>Last seen 12:28pm</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat_widget_right">
                                <div class="chat_box_contetns">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>














</section>



<?php include "footer.php"; ?>