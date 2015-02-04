<div class="row">
    {{ Form::open(['url' => 'admin/user', 'files' => 'true']) }}
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">e-Mail</label>
            <div class="col-md-9">
                <div class="input-group">
                    {{--<span class="input-group-addon"><span class="fa fa-mail-forward"></span></span>--}}
                    <span class="input-group-addon">@</span>
                    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'e-Mail Adresi']) }}
                </div>
                <span class="help-block">Kullanılan adresin geçerli ve aktif olması gerekir.</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Şifre</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                    {{--<input type="password" class="form-control"/>--}}
                    {{ Form::password('password', ['class' => "form-control", 'placeholder' => 'Şifre']) }}
                </div>
                <span class="help-block">Şifreniz en az 6 karakterden oluşmak zorundadır!</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Kullanıcı Grubu</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-group"></span></span>
                    {{ Form::select('groups', $groups,'', ['class' => 'form-control select']) }}
                </div>
                <span class="help-block">Kullanıcı Grubu Belirleyiniz!</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Avatar</label>
            <div class="col-md-9">
                <input type="file" class="fileinput btn-primary" name="avatar" id="filename" title="Browse file"/>
                <span class="help-block">200x200</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Adı</label>
            <div class="col-md-9">
                {{ Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Kullanıcı Adı']) }}
                <span class="help-block">Kullanıcı adını belirtin</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Soyadı</label>
            <div class="col-md-9">
                {{ Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Kullanıcı Soyadı']) }}
                <span class="help-block">Kullanıcı soyadını belirtin</span>
            </div>
        </div>
        {{ Form::submit('Kaydet') }}
    </div>
    {{ Form::close() }}
</div>