<?php include '../inc/header.php'; ?>

<div class="container">
    <div class="row"> 
        <div class="col-sm-4"> <!-- {{-- START OF LVL 1--}} -->
            <h2 class="text-primary text-center">Messages</h2>
            <hr>
            <!-- {{-- <div class="row">
                    {{-- lvl 1 
                <div class="col-sm">
                    {{-- lvl 1.1 
                    <h2 class="text-primary">Recent</h2>
                </div>  
                <div class="col-sm">
                    {{-- lvl 1.2 
                    <input type="text" placeholder="search">
                </div>
            </div> --}} -->
            <div class="inbox-chat">
                <div class="row">
                   <!--  {{-- lvl 1.2 --}} -->
                    <div class="col-sm-2">
                        <!-- {{-- lvl 1.2.1 --}} -->
                        <img src="../../assets/img/pp.png " alt="" class="avatar-img rounded-circle">
                    </div>
                    <div class="col-sm-10">
                       <!--  {{-- lvl 1.2.2 --}} -->
                        <div class="row">
                            <div class="col-sm-7 ">
                                <p class="text-primary">Nike Marti Caballes</p>
                            </div>
                            <div class="col-sm-5 ">
                                <p class="text-muted h6">11:01 PM</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-11">
                               <!--  {{-- lvl 1.2.2.1 --}} -->
                                <p class="text-secondary">You: Test, which is a new appr..ou: Test, which is a new appr..ou: Test, which is a new appr..ou: Test, which is a new appr..ou: Test, which is a new appr...</p>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>                    
                </div>

                <?php for($x=0; $x<10; $x++){ ?>
                    <div class="row">
                            <!-- {{-- lvl 1.2 --}} -->
                            <div class="col-sm-2">
                               <!--  {{-- lvl 1.2.1 --}} -->
                                <img src="../../assets/img/pp.png" alt="" class="avatar-img rounded-circle">
                            </div>
                            <div class="col-sm-10">
                                <!-- {{-- lvl 1.2.2 --}} -->
                                <div class="row">
                                    <div class="col-sm-7 ">
                                        <p class="text-primary">Nike Marti Caballes</p>
                                    </div>
                                    <div class="col-sm-5 ">
                                        <p class="text-muted h6">11:01 PM</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-11">
                                        <!-- {{-- lvl 1.2.2.1 --}} -->
                                        <p class="text-secondary">You: Test, which is a new appr...</p>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                            </div>                    
                        </div>
                    <?php } ?>

            </div>

        </div>  <!-- {{-- END OF lvl 1--}} -->

        <div class="col-sm-8">
            <p class="h2 text-primary d-flex justify-content-center">Nike Marti Caballes</p>
            <hr class="">
            <!-- {{-- Incoming Msg --}} -->
            <div class="inbox-convo">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="../../assets/img/okarin.png " class="msg-img rounded-circle" alt="">
                    </div>
                    <div class="col-sm-6">
                        <p class="inbox-padding inbox-bg-incoming float-left">Test work directly with our designers and suppliers, and sell direct to you, which means quality, exclusiv </p>
                        <p class="text-muted msg-time clear-left">5:56 PM</p>
                    </div>
                    <div class="col-sm-4 ">
                        <!-- {{-- 2.3 --}} -->
                    </div>
                </div>

                <!-- {{-- Outgoing Msg --}} -->
                <div class="row ">
                    <div class="col-sm-4 ">
                        <!-- {{-- 3.1 --}} -->
                    </div>
                    <div class="col-sm-6 ">
                        <p class="float-right inbox-padding bg-primary text-white">Test Test work directly with our designers and suppliers, and sell direct to you, which means quality, exclusiv </p>
                        <p class="d-flex msg-time text-muted justify-content-end clear-right">6:44 PM</p>
                    </div>
                    <div class="col-sm-1">
                        <img src="../../assets/img/okarin.png" class="msg-img rounded-circle align-items-center" alt="">
                    </div>
                </div>
                <!-- {{-- end of outgoing msg --}} -->

                    <?php for($x=0; $x<10; $x++){ ?>
                    <!-- {{-- Incoming Msg --}} -->
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="../../assets/img/okarin.png " class="msg-img rounded-circle" alt="">
                            </div>
                            <div class="col-sm-6">
                                <p class="inbox-padding inbox-bg-incoming float-left">Test work directly with our designers and suppliers, and sell direct to you, which means quality, exclusiv </p>
                                <p class="text-muted msg-time clear-left">5:56 PM</p>
                            </div>
                            <div class="col-sm-4 ">
                                <!-- {{-- 2.3 --}} -->
                            </div>
                        </div>
        
                        <!-- {{-- Outgoing Msg --}} -->
                        <div class="row ">
                            <div class="col-sm-4 ">
                                <!-- {{-- 3.1 --}} -->
                            </div>
                            <div class="col-sm-6 ">
                                <p class="float-right inbox-padding bg-primary text-white">Test Test work directly with our designers and suppliers, and sell direct to you, which means quality, exclusiv </p>
                                <p class="d-flex msg-time text-muted justify-content-end clear-right">6:44 PM</p>
                            </div>
                            <div class="col-sm-1">
                                <img src="../../assets/img/okarin.png  " class="msg-img rounded-circle align-items-center" alt="">
                            </div>
                        </div>
                        <!-- {{-- end of outgoing msg --}} -->
                    <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include '../inc/footer.php'; ?>