<div class="login-container">
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Yönetim Paneli</strong>, Lütfen giriş yapınız</div>
            {{ Form::open(['url' => 'admin/login', 'class' => 'form-horizontal']) }}
            {{--<form action="index.html" class="form-horizontal" method="post">--}}
            <div class="form-group">
                <div class="col-md-12">
                    <!--<input type="text" class="form-control" placeholder="Username"/>-->
                    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email', 'required', 'autofocus']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    {{--<input type="password" class="form-control" placeholder="Password"/>--}}
                    {{ Form::password('password',  ['class' => 'form-control', 'placeholder' => 'Password', 'required']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    {{ Form::submit('Login', ['class' => 'btn btn-info btn-block']) }}
                    {{--<button class="btn btn-info btn-block">Log In</button>--}}
                </div>
            </div>
            {{ Form::close() }}
            {{--</form>--}}
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2015 Tavz-Der
            </div>
            <div class="pull-right">
                {{--<a href="#">About</a> |--}}
                {{--<a href="#">Privacy</a> |--}}
                <a href="#">İletişim</a>
            </div>
        </div>
    </div>
</div>