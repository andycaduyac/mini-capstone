@extends('base')
@section('content')
<div class="container mt-5">
    <h1>
        WELCOME TO FEEDBOOK
    </h1>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Role</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>User</td>
                            <td>Can only view the contents. Can't add, edit, and delete data.</td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                            <td>Can view the contents. Can add, edit, and delete students data.</td>
                        </tr>
                        <tr>
                            <td>Super-Admin</td>
                            <td>Can view the contents. Can add, edit, and delete data and can manage users (edit, delete).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
