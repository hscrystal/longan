@extends('template.master')
@section('title','Product')
@section('header-title')
<!-- Search form -->
<form action="{{ route('product.search') }}" method="POST" class="navbar-search navbar-search-light form-inline mr-sm-3">
  {{csrf_field()}}
  <div class="form-group mb-0">
    <div class="input-group input-group-alternative input-group-merge">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input class="form-control" placeholder="Search" type="text" name="search">
    </div>
  </div>
  <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</form>
@endsection
@section('header')
  <!-- Header -->
  <div class="header bg-primary">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tables</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Products list</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="code">รหัส</th>
                    <th scope="col" class="sort" data-sort="category">ประเภท</th>
                    <th scope="col" class="sort" data-sort="category">สินค้า</th>
                    <th scope="col" class="sort" data-sort="category">สต๊อก</th>
                    <th scope="col" class="sort" data-sort="price">ราคา</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach ($products as $p)
                  <tr>
                    <td class="budget">
                      {{$p->code}}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">{{$p->category->name}}</span>
                      </span>
                    </td>
                    <td>
                      {{$p->name}}
                    </td>
                    <td>
                      {{$p->stock_qty}}
                    </td>
                    <td>
                      {{number_format($p->price,2)}}
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="3" class="text-right">รวม</th>
                    <th>{{number_format($products->sum('stock_qty'),0)}}</th>
                    <th>{{number_format($products->sum('price'),2)}}</th>
                    <th></th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <ul class="pagination justify-content-end mb-0">
                {{$products->links()}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection