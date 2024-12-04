    @extends('admin.admin')

    @section('title', 'Danh Sách Dịch Vụ')

    @section('content')
    <div class="container my-5">
        <h1 class="mb-4">Danh Sách Dịch Vụ</h1>
    @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('services_admin.create') }}" class="btn btn-primary mb-3">Thêm Dịch Vụ</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>  
                        <th>Tên Dịch Vụ</th>
                        <th>hình ảnh</th>
                        <th>Mô Tả</th>
                        <th>Quy Trình</th>
                        <th>Thời Gian Hỗ Trợ</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($services as $service) 
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" width="100">
                        @endif
                    </td>
                    <td>{{ $service->description }}</td>
                    
                            <td>{{ $service->process }}</td>
                            <td>{{ $service->support_time }}</td>
                    <td>
                        <a href="{{ route('services_admin.edit', $service->id) }}" class="btn btn-warning">Chỉnh Sửa</a>
                        <form action="{{ route('services_admin.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa dịch vụ này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    @endsection