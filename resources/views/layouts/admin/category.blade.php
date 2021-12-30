@extends('welcome')

@section('content')
<section>
    <div class="mx-44">
        <div class="row">
            <div class="col-sm-12 page-content">
                <div class="inner-box">
                    @if($message = Session::get('success'))
                    <div class="container">
                        <div class="alert alert-success alert-block">
                            <strong>{{$message}}</strong>
                        </div>
                    </div>
                    @endif
                    <div class="flex justify-between my-4">
                        <h2 class="uppercase font-semibold text-blue-900"><i class="bi bi-credit-card"></i> My categories</h2>
                        <a href="{{route('admin_category.create')}}" class="btn btn-success bi bi-plus-circle action-btn"> Add</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered add-manage-table">
                            <thead>
                                <tr>
                                    <th>Categories</th>
                                    <th>Products</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td class="ads-details-td">
                                        <h4><a href="{{route('category.name', ['category_slug'=>$category->slug])}}">{{$category->name}}</a></h4>
                                    </td>

                                    <td class="price-td">
                                        <span>{{$category->ads->count()}}</span>
                                    </td>
                                    <td class="action-td flex justify-around">
                                        <p class="pr-2">
                                            <a class="action-btn btn-primary btn-xs" href="{{route('admin_category.edit', ['admin_category'=>$category->id])}}"> <i class="bi bi-pencil-square"></i></a>
                                        </p>
                                        <p class="">
                                            <a class="action-btn btn-danger btn-xs" href="{{route('admin_category.destroy', ['admin_category'=>$category->id])}}"> <i class=" bi bi-trash"></i></a>
                                        </p>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection