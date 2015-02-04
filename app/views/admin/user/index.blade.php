<div class="col-md-2">
    <a href="user/create" class="tile tile-danger tile-success"><span class="fa fa-users"></span></a>
</div>
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Kullanıcı Listesi</h3>
            </div>
            <div class="panel-body panel-body-table">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-actions">
                        <thead>
                        <tr>
                            <th width="50">Id</th>
                            <th>Email</th>
                            <th width="150">Durum</th>
                            <th width="150">Grup</th>
                            <th width="150">Hareketler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr id="trow_1">
                            <td class="text-center">{{ $user->id }}</td>
                            <td><strong>{{ $user->email }}</strong></td>
                            @if($user->activated == 1)<td><span class="label label-success">Aktif</span></td>@endif
                            @if($user->activated == 0)<td><span class="label label-warning">Pasif</span></td>@endif
                            <td>{{ $users }}</td>
                            <td>
                                <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- END RESPONSIVE TABLES -->