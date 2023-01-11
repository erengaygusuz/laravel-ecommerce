<div>

    @include('livewire.admin.brand.model-form')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Brand List
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addBrandModal" class="btn btn-primary btn-sm float-end">Add Brands</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @forelse($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->slug}}</td>
                            <td>{{$brand->status == '1' ? 'hidden':'visible'}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Brands Found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div>
                    {{$brands->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
