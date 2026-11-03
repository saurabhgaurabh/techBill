<div class="page-body">

    <div class="container-xl">

        <div class="row">

            <div class="col-md-4">

                <div class="card">

                    <div class="card-header">
                        <h3>User List</h3>
                    </div>

                    <div class="card-body">

                        @foreach($users as $user)

                            <div class="border rounded p-2 mb-2">

                                {{ $user->name }}

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>