<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><div><!DOCTYPE html>
                        <html>
                            <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <style>
                                        .alert {
                                        padding: 20px;
                                        background-color: #f44336;
                                        color: white;
                                        opacity: 1;
                                        transition: opacity 0.6s;
                                        margin-bottom: 15px;
                                        }
                                        .alert.success {background-color: #4CAF50;}
                                        .alert.info {background-color: #2196F3;}
                                        .alert.warning {background-color: #ff9800;}
                                        .closebtn {
                                        margin-left: 15px;
                                        color: white;
                                        font-weight: bold;
                                        float: right;
                                        font-size: 22px;
                                        line-height: 20px;
                                        cursor: pointer;
                                        transition: 0.3s;
                                        }
                                        .closebtn:hover {
                                        color: black;
                                        }
                                    </style>
                                </head>
                                <body>
                                    <div class="alert success">
                                        <span class="closebtn">&times;</span>  
                                        <strong>Success!</strong> Wishing you and yours some well-deserved downtime and a very happy new year to come. Cheers to health, happiness, and prosperity in 2021! Wishing you and yours a safe, healthy, and prosperous new year! Wishing you and yours a happy, healthy, and abundant 2021!.
                                    </div>
                                    <script>
                                        var close = document.getElementsByClassName("closebtn");
                                        var i;
                                        for (i = 0; i < close.length; i++) {
                                        close[i].onclick = function(){
                                        var div = this.parentElement;
                                        div.style.opacity = "0";
                                        setTimeout(function(){ div.style.display = "none"; }, 600);
                                        }
                                        }
                                    </script>
                                </body>
                                </html></div><br>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_users();  ?>
                            <a class="animated tada record-count card bg-success text-white"  href="<?php print_link("users/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-arrow-circle-o-up fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Users</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_newcase();  ?>
                            <a class="animated rubberBand record-count alert alert-info"  href="<?php print_link("newcase/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-briefcase fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Newcase</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                            <div class=""><div></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_appointment();  ?>
                            <a class="animated rubberBand record-count card bg-success text-white"  href="<?php print_link("appointment/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-ra fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Appointment</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_casestudy();  ?>
                            <a class="animated rubberBand record-count card bg-light text-dark"  href="<?php print_link("casestudy/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-reddit-alien fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Casestudy</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <div class=""><div>
                            </div>
                        </div>
                        <?php $rec_count = $comp_model->getcount_document();  ?>
                        <a class="animated slideInLeft record-count card bg-light text-dark"  href="<?php print_link("document/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-file fa-4x"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Document</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 comp-grid">
                        <?php $rec_count = $comp_model->getcount_todolist();  ?>
                        <a class="animated rubberBand record-count alert alert-primary"  href="<?php print_link("todolist/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-filter fa-4x"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Todolist</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 comp-grid">
                        <?php $rec_count = $comp_model->getcount_client();  ?>
                        <a class="animated rubberBand record-count alert alert-primary"  href="<?php print_link("client/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-align-justify "></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Client</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 comp-grid">
                        <?php $rec_count = $comp_model->getcount_staff();  ?>
                        <a class="animated rubberBand record-count card bg-warning text-white"  href="<?php print_link("staff/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-empire fa-3x"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Staff</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 comp-grid">
                        <h5 ><!DOCTYPE html>
                            <html>
                                <head>
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <style>
                                            .alert {
                                            padding: 20px;
                                            background-color: #f44336;
                                            color: white;
                                            opacity: 1;
                                            transition: opacity 0.6s;
                                            margin-bottom: 15px;
                                            }
                                            .alert.success {background-color: #4CAF50;}
                                            .alert.info {background-color: #2196F3;}
                                            .alert.warning {background-color: #ff9800;}
                                            .closebtn {
                                            margin-left: 15px;
                                            color: white;
                                            font-weight: bold;
                                            float: right;
                                            font-size: 22px;
                                            line-height: 20px;
                                            cursor: pointer;
                                            transition: 0.3s;
                                            }
                                            .closebtn:hover {
                                            color: black;
                                            }
                                        </style>
                                    </head>
                                    <body>
                                        <div class="alert success">
                                            <span class="closebtn">&times;</span>  
                                            <strong>Info!</strong> 
                                            After payment, please forward Both MPESA and KCB Text message received separately to 0707- -
                                            For Direct Deposits to the KCB Bank or KCB-Mtaani, Forward each of the the payment details separately in the following order :
                                            Payment reference Number, Transaction Number, Date of Payment, Payee Name, Depositor, amount to 0707- -
                                        </div>
                                        <script>
                                            var close = document.getElementsByClassName("closebtn");
                                            var i;
                                            for (i = 0; i < close.length; i++) {
                                            close[i].onclick = function(){
                                            var div = this.parentElement;
                                            div.style.opacity = "0";
                                            setTimeout(function(){ div.style.display = "none"; }, 600);
                                            }
                                            }
                                        </script>
                                    </body>
                                </html></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
