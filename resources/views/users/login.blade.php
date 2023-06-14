@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">LOG IN</h6>
                </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="/trangchu">Home</a> / <span>LOG IN</span>
                    </div>
                </div>
            <div class="clearfix"></div>
            </div>
    </div>

    <div class="container">
        <div id="content">

            <form action="login" method="post" class="beta-form-checkout">
                <div class="row">
                    @csrf
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <h4>LOG IN</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="email">Email address*</label>
                            <input type="email" id="email" name="email" required>
                            </div>
                        <div class="form-block">
                            <label for="pw">Password*</label>
                            <input type="password" id="pw" name="pw" required>
                            </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    <div class="col-sm-3"></div>
                    </div>
                </form>
            <p class="text-center">Nếu chưa có tài khoản vui lòng <a href="/register">Đăng ký</a>!</p>
            </div> <!-- #content -->
    </div>
@endsection
