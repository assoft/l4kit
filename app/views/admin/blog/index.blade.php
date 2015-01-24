{{-- */$num=1;/* --}}
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            @endif
            <div class="panel-heading">
                <h3 class="panel-title">Blog Kayıtları</h3>
            </div>
            <div class="panel-body panel-body-table">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-actions">
                        <thead>
                        <tr>
                            <th width="50">id</th>
                            <th>title</th>
                            <th width="100">date</th>
                            <th width="100">Category</th>
                            <th width="150">actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                        <tr id="trow_{{$num}}">
                            <td class="text-center">{{$row->id}}</td>
                            <td><strong>{{$row->title}}</strong></td>
                            <td><span class="label label-success">{{$row->created_at}}</span></td>
                            <td>{{$row->category_title}}</td>
                            <td>
                                {{ link_to('admin/blog/'. $row->id. '/edit', 'Düzenle', ['class' => 'btn btn-default btn-rounded btn-sm']) }}
                                {{Form::open(['url' => 'admin/blog/'.$row->id, 'method' => 'DELETE'])}}
                                {{Form::submit('Sil', ['class' => 'btn btn-danger btn-rounded btn-sm'])}}
                                {{Form::close()}}
                                {{--<button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{$num}}');"><span class="fa fa-times"></span></button>--}}
                            </td>
                        </tr>
                        {{-- */$num=$num+1;/* --}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>