<div>
    @include('livewire.user.edit')
    @include('livewire.user.delete')
    <div class="container mt-3 mb-3">
        <h3>List of Students</h3>
        {{-- <button type="button" class="btn btn-success btn-md d-flex float-right mb-2" data-toggle="modal" data-target="#addModalCenter">
            Add
        </button> --}}
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if ($user->name !=  Auth::user()->name)

                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModalCenter" wire:click="edit({{$user->id}})">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModalCenter" wire:click="deleteStudent({{$user->id}})">Delete</button>
                                    @endif
                                </td>

                            </tr>


                    @endforeach

                </tbody>
            </table>
    </div>
</div>
