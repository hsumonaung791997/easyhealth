<table class="table table-striped table-hover tbl_repeat" id="sortable">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th width="280px">Action</th>
    </thead>
    <tbody>
    <?php $index = 1; ?>
    @foreach ($data as $key => $user)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{!! route('users.edit', [$user->id]) !!}"
               class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
            <a href="#" type="button" data-id="{{ $user->id }}"
               class="btn btn-xs btn-danger" data-toggle="modal"
               data-url="{{ url('admin/users/'.$user->id) }}"
               data-target="#deleteFormModal"><i
                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
        </td>
      </tr>
     @endforeach
    </tbody>
</table>