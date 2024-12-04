@extends('admin.main')

@section('title', 'Chỉnh Sửa Học Bổng')

@section('content')
    <div class="container mt-5">
        <h1>Chỉnh Sửa Học Bổng</h1>

        <form action="{{ route('scholarships.update', $scholarship->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên Học Bổng</label>
                <input type="text" name="name" class="form-control" value="{{ $scholarship->name }}" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="amount">Số Tiền (USD)</label>
                <div class="input-group">
                    <input type="text" id="amount" name="amount" class="form-control" value="{{ number_format($scholarship->amount, 2, '.', '') }}" required>
                    <div class="input-group-append">
                        <span class="input-group-text">$</span>
                    </div>
                </div>
                @error('amount')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="requirements">Yêu Cầu</label>
                <select name="requirements" class="form-control" id="scholarshiprequirements" required>
                    <option value="">Điều Kiện</option>
                    <option value="Trình Độ Học Vấn: Đại Học"{{ $scholarship->requirements == 'Trình Độ Học Vấn: Đại Học' ? 'selected' : '' }}>Trình Độ Học Vấn: Đại Học</option>
                    <option value="Trình Độ Học Vấn: Cao Đẳng"{{ $scholarship->requirements == 'Trình Độ Học Vấn: Cao Đẳng' ? 'selected' : '' }}>Trình Độ Học Vấn: Cao Đẳng</option>
                    <option value="Trình Độ Học Vấn: Trung Cấp"{{ $scholarship->requirements == 'Trình Độ Học Vấn: Trung Cấp' ? 'selected' : '' }}>Trình Độ Học Vấn: Trung Cấp</option>
                    <option value="Trình Độ Học Vấn: Trung Học Phổ Thông"{{ $scholarship->requirements == 'Trình Độ Học Vấn: Trung Học Phổ Thông' ? 'selected' : '' }}>Trình Độ Học Vấn: Trung Học Phổ Thông</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Anh"{{ $scholarship->requirements == 'Biết Ngoại Ngữ: Tiếng Anh' ? 'selected' : '' }}>Biết Ngoại Ngữ: Tiếng Anh</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Trung"{{ $scholarship->requirements == 'Biết Ngoại Ngữ: Tiếng Trung' ? 'selected' : '' }}>Biết Ngoại Ngữ: Tiếng Trung</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Tây Ban Nha"{{ $scholarship->requirements == 'Biết Ngoại Ngữ: Tiếng Tây Ban Nha' ? 'selected' : '' }}>Biết Ngoại Ngữ: Tiếng Tây Ban Nha</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Nhật"{{ $scholarship->requirements == 'Biết Ngoại Ngữ: Tiếng Nhật' ? 'selected' : '' }}>Biết Ngoại Ngữ: Tiếng Nhật</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Đức"{{ $scholarship->requirements == 'Biết Ngoại Ngữ: Tiếng Đức' ? 'selected' : '' }}>Biết Ngoại Ngữ: Tiếng Đức</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Hà Lan"{{ $scholarship->requirements == 'Biết Ngoại Ngữ: Tiếng Hà Lan' ? 'selected' : '' }}>Biết Ngoại Ngữ: Tiếng Hà Lan</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Pháp"{{ $scholarship->requirements == 'Biết Ngoại Ngữ: Tiếng Pháp' ? 'selected' : '' }}>Biết Ngoại Ngữ: Tiếng Pháp</option>
                </select>
                @error('requirements')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Loại Học Bổng</label>
                <select name="type" class="form-control" id="scholarshipType" required>
                    <option value="">Chọn loại học bổng</option>
                    <option value="Toàn Phần" {{ $scholarship->type == 'Toàn Phần' ? 'selected' : '' }}>Học Bổng Toàn Phần</option>
                    <option value="Bán Phần" {{ $scholarship->type == 'Bán Phần' ? 'selected' : '' }}>Học Bổng Bán Phần</option>
                    <option value="Theo Ngành" {{ $scholarship->type == 'Theo Ngành' ? 'selected' : '' }}>Học Bổng Theo Ngành</option>
                </select>
                @error('type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group" id="fieldSelectDiv" style="display: {{ $scholarship->type == 'Theo Ngành' ? 'block' : 'none' }};">
                <label for="field_id">Ngành Học</label>
                <select name="field_id" class="form-control" required>
                    <option value="0">Chọn ngành học</option>
                    @foreach($fields as $field)
                        <option value="{{ $field->id }}" {{ $scholarship->field_id == $field->id ? 'selected' : '' }}>{{ $field->name }}</option>
                    @endforeach
                </select>
                @error('field_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="deadline">Hạn Nộp Đơn</label>
                <input type="date" name="deadline" class="form-control" value="{{ $scholarship->deadline }}" required>
                @error('deadline')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="application_guidelines">Hướng Dẫn Đăng Ký</label>
                <textarea name="application_guidelines" class="form-control" required>{{ $scholarship->application_guidelines }}</textarea>
                @error('application_guidelines')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="country_id">Quốc Gia</label>
                <select name="country_id" class="form-control" required>
                    <option value="">Chọn quốc gia</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ $scholarship->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Cập Nhật Học Bổng</button>
            <a href="{{ route('scholarships.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection