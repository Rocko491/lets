@extends('admin.includes.header')

@section('content')

    <body class=""
          style="background: url({{ asset('backend/images/loginbanner.jpg') }}) no-repeat center center  !important;">
    <section>
        <div class="container-alt">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page p-t-30">

                        <div class="m-t-40 account-pages" style="background: #ddd !important;">
                            <div class="text-center account-logo-box">
                                <h2 class="text-uppercase text-white">
                                    ADMIN PANEL
                                </h2>
                            </div>
                            <div class="account-content">
                                <form method="POST" action="{{ route('admin_login') }}" class="form-horizontal">
                                    @csrf
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <center>
                                                {{--<div class="error_msg">
                                                    <?php if (isset($error_message)) {
                                                        echo $error_message;
                                                    } ?>
                                                </div>--}}
                                            </center>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" placeholder="Email"
                                                   name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="password" placeholder="Password"
                                                   name="password" required>
                                        </div>
                                    </div>

                                    {{--<div class="form-group">
                                        <div class="col-xs-12">
                                            <select class="form-control select2" name="financial_year" required
                                                    oninvalid="this.setCustomValidity('Select year from the list')"
                                                    oninput="setCustomValidity('')">
                                                <option value="">Select Year</option>
                                                <?php for ($i = 2016; $i <= date('Y'); $i++) { ?>
                                                <option
                                                    value="<?= $i ?>"
                                                    <?php if ($i == date('Y')) { ?>selected<?php } ?>><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>--}}


                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button type="submit" class="btn w-md btn-bordered btn-danger waves-effect waves-light">Log In</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="clearfix"></div>

                            </div>
                        </div>

                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    </body>

@endsection
