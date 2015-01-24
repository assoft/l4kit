{{ Form::open(['url' => 'admin/blog/update', 'class' => 'form-horizontal', 'files' => 'true']) }}
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Blog</strong> Makale Düzenleniyor... [title]</h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">{{Config::get('sites.conf1')}}</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input name= "title" type="text" class="form-control"/>
                </div>
                <span class="help-block">Blog başlığı temsil eder</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Slug</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-link"></span></span>
                    <input name="slug" type="text" class="form-control"/>
                </div>
                <span class="help-block">Makalenin adresini temsil eder. Benzersiz olmak zorundadır.</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Datepicker</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                    <input name="publish_date" type="text" class="form-control datepicker" value="{{date('Y-m-d')}}">
                </div>
                <span class="help-block">Click on input field to get datepicker</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Textarea</label>
            <div class="col-md-6 col-xs-12">
                {{--{{Form::textarea('body', '', ['class' => 'editor1'])}}--}}
                <textarea class="ckeditor" name="body"></textarea>
                <span class="help-block">Default textarea field</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Textarea</label>
            <div class="col-md-6 col-xs-12">
                {{ Form::file('images') }}
                <span class="help-block">Image field</span>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <button class="btn btn-default">Clear Form</button>
        <button class="btn btn-primary pull-right">Submit</button>
    </div>
</div>
{{Form::close()}}