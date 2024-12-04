@extends('scholarships.scholarship')

@section('title', 'Tất cả Học Bổng')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Tất cả Học Bổng</h1>

    <div class="row mb-4">
        <div class="col-md-8 offset-md-2">
            {{-- <form id="searchForm" class="input-group">
                <input type="text" id="searchQuery" class="form-control" placeholder="Nhập tên học bổng, quốc gia, giá trị, ngành học" aria-label="Search">
                <button style="color: red" type="submit" class="btn ">Tìm kiếm</button>
            </form> --}}
            <form id="searchForm" class="input-group">
                <input type="text" id="searchQuery" class="form-control" placeholder="Nhập tên học bổng, quốc gia, giá trị, ngành học" aria-label="Search">
                <button type="submit" class="btn" style="background-color: red; color: white;">Tìm kiếm</button>
            </form>
            <div id="autocomplete-list" class="autocomplete-items position-absolute w-100"></div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Danh Sách Học Bổng</h2>
    
        <h3 class="mb-3">Học Bổng Toàn Phần</h3>
        <table class="table table-bordered mb-4">
            <thead class="thead-light">
                <tr>
                    <th>Tên Học Bổng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($fullScholarships as $scholarship)
                    <tr>
                        <td>{{ $scholarship->name }}</td>
                        <td>
                            <a href="{{ route('scholarships.showScholarship', $scholarship->id) }}" class="btn btn-custom btn-sm">Xem Chi Tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <h3 class="mb-3">Học Bổng Bán Phần</h3>
        <table class="table table-bordered mb-4">
            <thead class="thead-light">
                <tr>
                    <th>Tên Học Bổng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($partialScholarships as $scholarship)
                    <tr>
                        <td>{{ $scholarship->name }}</td>
                        <td>
                            <a href="{{ route('scholarships.showScholarship', $scholarship->id) }}" class="btn btn-custom btn-sm">Xem Chi Tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <h3 class="mb-3">Học Bổng Theo Ngành</h3>
        <table class="table table-bordered mb-4">
            <thead class="thead-light">
                <tr>
                    <th>Tên Học Bổng</th>
                    <th>Tên Ngành</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($fieldScholarships as $scholarship)
                    <tr>
                        <td>{{ $scholarship->name }}</td>
                        <td>{{ $scholarship->field->name }}</td>
                        <td>
                            <a href="{{ route('scholarships.showScholarship', $scholarship->id) }}" class="btn btn-custom btn-sm">Xem Chi Tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchQuery');
        const autocompleteList = document.getElementById('autocomplete-list');

        searchInput.addEventListener('input', function() {
            const query = this.value;

            if (!query) {
                autocompleteList.innerHTML = '';
                return;
            }

            fetch(`{{ route('scholarships.autocomplete') }}?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    autocompleteList.innerHTML = '';
                    data.forEach(scholarship => {
                        const item = document.createElement('div');
                        item.innerHTML = scholarship.name; 
                        item.classList.add('autocomplete-item');
                        item.addEventListener('click', function() {
                            window.location.href = `/scholarshipss/${scholarship.id}`; 
                        });
                        autocompleteList.appendChild(item);
                    });
                });
        });
    });
</script>

<style>
    .btn-custom {
        background-color: red;
        color: white;
    }
    .btn-custom {
        background-color: red;
        color: white;
    }
    .autocomplete-items {
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        top: 100%;
        left: 0;
        right: 0;
    }
    .autocomplete-item {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
    }
    .autocomplete-item:hover {
        background-color: #e9e9e9;
    }
</style>
@endsection