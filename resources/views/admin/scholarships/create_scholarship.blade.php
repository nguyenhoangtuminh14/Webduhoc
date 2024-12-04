@extends('admin.main')
@section('title', 'Thêm Học Bổng')
@section('content')
    <div class="container mt-5">
        <h1>Thêm Học Bổng</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('scholarships.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên Học Bổng</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên học bổng" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="amount">Giá Trị (USD)</label>
                <div class="input-group">
                    <input type="text" id="amount" name="amount" class="form-control" placeholder="Nhập số tiền" required>
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
                    <option value="Trình Độ Học Vấn: Đại Học">Trình Độ Học Vấn: Đại Học</option>
                    <option value="Trình Độ Học Vấn: Cao Đẳng">Trình Độ Học Vấn: Cao Đẳng</option>
                    <option value="Trình Độ Học Vấn: Trung Cấp">Trình Độ Học Vấn: Trung Cấp</option>
                    <option value="Trình Độ Học Vấn: Trung Học Phổ Thông">Trình Độ Học Vấn: Trung Học Phổ Thông</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Anh">Biết Ngoại Ngữ: Tiếng Anh</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Trung">Biết Ngoại Ngữ: Tiếng Trung</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Tây Ban Nha">Biết Ngoại Ngữ: Tiếng Tây Ban Nha</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Nhật">Biết Ngoại Ngữ: Tiếng Nhật</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Đức">Biết Ngoại Ngữ: Tiếng Đức</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Hà Lan">Biết Ngoại Ngữ: Tiếng Hà Lan</option>
                    <option value="Biết Ngoại Ngữ: Tiếng Pháp">Biết Ngoại Ngữ: Tiếng Pháp</option>
                </select>
                @error('requirements')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Loại Học Bổng</label>
                <select name="type" class="form-control" id="scholarshipType" required>
                    <option value="">Chọn loại học bổng</option>
                    <option value="Toàn Phần">Học Bổng Toàn Phần</option>
                    <option value="Bán Phần">Học Bổng Bán Phần</option>
                    <option value="Theo Ngành">Học Bổng Theo Ngành</option>
                </select>
                @error('type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group" id="fieldSelectDiv" style="display: none;">
                <label for="field_id">Ngành Học</label>
                <select name="field_id" class="form-control">
                    <option value="0">Chọn ngành học</option>
                    @foreach($fields as $field)
                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                    @endforeach
                </select>
                @error('field_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="deadline">Hạn Nộp Đơn</label>
                <input type="date" name="deadline" class="form-control" required>
                @error('deadline')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="application_guidelines">Hướng Dẫn Đăng Ký</label>
                <textarea name="application_guidelines" class="form-control" placeholder="Nhập hướng dẫn đăng ký" required></textarea>
                @error('application_guidelines')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="country_id">Quốc Gia</label>
                <select name="country_id" class="form-control" required>
                    <option value="">Chọn quốc gia</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Thêm Học Bổng</button>
            <a href="{{ route('scholarships.index') }}" class="btn btn-secondary">Quay lại</a>
                    </form>
                </div>
                <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scholarshipType = document.getElementById('scholarshipType');
            const fieldSelectDiv = document.getElementById('fieldSelectDiv');

            scholarshipType.addEventListener('change', function() {
                if (this.value === 'Theo Ngành') {
                    fieldSelectDiv.style.display = 'block';
                } else {
                    fieldSelectDiv.style.display = 'none'; 
                    document.querySelector('select[name="field_id"]').value = 0;
                }
            });
        });
    </script>
            @endsection