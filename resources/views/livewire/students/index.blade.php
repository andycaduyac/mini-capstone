<div>

    @include('livewire.students.create')
    @include('livewire.students.edit')
    @include('livewire.students.delete')
    <div class="container mt-3 mb-3">
        <h3>List of Students</h3>

        @role('admin|Super-Admin')
        <button type="button" class="btn btn-success btn-md d-flex float-right mb-2" data-toggle="modal" data-target="#addModalCenter">
            Add
        </button>
        @endrole
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Course</th>
                    <th>Year</th>
                    @role('admin|Super-Admin')
                    <th>Action</th>
                    @endrole
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->course}}</td>
                            <td>{{$student->year}}</td>
                            @role('admin|Super-Admin')
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModalCenter" wire:click="edit({{$student->id}})">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModalCenter" wire:click="deleteStudent({{$student->id}})">Delete</button>
                            </td>
                            @endrole
                        </tr>
                    @endforeach

                </tbody>
            </table>
    </div>

</div>
@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addModalCenter').modal('hide');
            $('#editModalCenter').modal('hide');
            $('#deleteModalCenter').modal('hide');
        });
    </script>

    {{-- <script>
        setTimeout(function() {
            var ms = document.getElementById("msg");
            ms.parentNode.removeChild(msg);
        }, 1500);
    </script> --}}
@endpush
