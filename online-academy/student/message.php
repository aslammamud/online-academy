<?php
  $nav_page = "message";
  include ('student-panel-header.php');
?>

<section class="message-area">
    <div class="container">
        <div class="row no-gutters align-items-stretch">
            <div class="col-lg-5 my-4">
                <div class="message-sender-list-box">
                    <button class="btn compose-btn" type="button" id="NewMessage" onclick="NewMessage(event)">Compose</button>
                    <hr>
                    <ul class="message-sender-list">
                        <a href="###">
                            <!-- http://demo.academy-lms.com/default/home/my_messages/read_message/976be6820d4d309 -->
                            <li>
                                <div class="message-sender-wrap">
                                    <div class="message-sender-head clearfix">
                                        <div class="message-sender-info d-inline-block">
                                            <div class="sender-image d-inline-block">
                                                <img src="../images/alamin.jpg" alt="" class="img-fluid">
                                            </div>
                                            <div class="sender-name d-inline-block">
                                                Al-Amin Hossain
                                            </div>
                                        </div>
                                        <div class="message-time d-inline-block float-right">Mon, 01-Jul-2019</div>
                                    </div>
                                    <div class="message-sender-body">
                                        Hey are you there?
                                    </div>
                                </div>
                            </li>
                        </a>

                        <a href="###">
                            <!-- http://demo.academy-lms.com/default/home/my_messages/read_message/976be6820d4d309 -->
                            <li>
                                <div class="message-sender-wrap">
                                    <div class="message-sender-head clearfix">
                                        <div class="message-sender-info d-inline-block">
                                            <div class="sender-image d-inline-block">
                                                <img src="../images/ud.jpg" alt="" class="img-fluid">
                                            </div>
                                            <div class="sender-name d-inline-block">
                                                Shahriar Limon
                                            </div>
                                        </div>
                                        <div class="message-time d-inline-block float-right">Mon, 01-Jul-2019</div>
                                    </div>
                                    <div class="message-sender-body">
                                        Hey are you there?
                                    </div>
                                </div>
                            </li>
                        </a>

                        <a href="###">
                         <!-- http://demo.academy-lms.com/default/home/my_messages/read_message/859a13703b8b44b -->
                            <li>
                                <div class="message-sender-wrap">
                                    <div class="message-sender-head clearfix">
                                        <div class="message-sender-info d-inline-block">
                                            <div class="sender-image d-inline-block">
                                                <img src="../images/khalid.jpg" alt="" class="img-fluid">
                                            </div>
                                            <div class="sender-name d-inline-block">
                                                Khalid Mahmud
                                            </div>
                                        </div>
                                        <div class="message-time d-inline-block float-right">Mon, 01-Jul-2019</div>
                                    </div>
                                    <div class="message-sender-body">
                                        I need some help                                   
                                    </div>
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="message-details-box" id="toggle-1">
                <div class="message-details d-show">
                    <div class="message-header">
                        <a href="instructor-profile##">
                            <span class="sender-info">
                                <span class="d-inline-block">
                                    <img src="../images/khalid.jpg" alt="profile image">
                                </span>
                                <span class="d-inline-block">
                                    Sayeed Amin
                                </span>
                            </span>
                        </a>
                </div>
                <div class="message-content">
                    <div class="message-box-wrap me">
                        <div class="message-box">
                            <div class="time">Mon, 01-Jul-2019</div>
                            <div class="message">Hello There?</div>
                        </div>
                    </div>
                    <div class="message-box-wrap me">
                        <div class="message-box">
                            <div class="time">Mon, 01-Jul-2019</div>
                            <div class="message">I have bought your course. I must say, it is good.</div>
                        </div>
                    </div>
                    <div class="message-box-wrap me">
                        <div class="message-box">
                            <div class="time">Mon, 01-Jul-2019</div>
                            <div class="message">Thanks for tuning into</div>
                        </div>
                    </div>
                    <div class="message-box-wrap">
                        <div class="message-box">
                            <div class="time">Mon, 01-Jul-2019</div>
                            <div class="message">Good? Sounds pretty good to me.</div>
                        </div>
                    </div>
                    <div class="message-box-wrap">
                        <div class="message-box">
                            <div class="time">Mon, 01-Jul-2019</div>
                            <div class="message">Hey are you there?</div>
                        </div>
                    </div>
                </div>
                <div class="message-footer">
                    <form class="" action="#" method="post">
                        <textarea class="form-control" name="message" placeholder="Type your message..."></textarea>
                        <button class="btn send-btn" type="submit">Send</button>
                    </form>
                </div>
                </div>
                </div>
                <div class="message-details-box" id="toggle-2" style="display: none;">
                    <div class="new-message-details"><div class="message-header">
                        <div class="sender-info">
                            <span class="d-inline-block">
                                <i class="far fa-user"></i>
                            </span>
                            <span class="d-inline-block">New message</span>
                        </div>
                    </div>
                    <form class="" action="#" method="post">
                        <div class="message-body">
                            <div class="form-group">
                                <select class="form-control select2 select2-hidden-accessible" name="receiver" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="1" data-select2-id="3">John Doe</option>
                                    <option value="6">Jane Doe</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-receiver-r6-container"><span class="select2-selection__rendered" id="select2-receiver-r6-container" role="textbox" aria-readonly="true" title="John Doe">John Doe</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn send-btn">Send</button>
                            <button type="button" class="btn cancel-btn" onclick="CancelNewMessage(event)">Cancel</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php'; ?>

