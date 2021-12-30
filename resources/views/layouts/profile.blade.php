@extends('welcome')

@section('content')
<section class="mx-44">
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
                    <h2 class="uppercase font-semibold text-blue-900"><i class="bi bi-credit-card"></i> My ads</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered add-manage-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Ad details</th>
                                <th>Price</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ads as $ad)
                            <tr>
                                <td class="add-img-td">
                                    <a href="{{route('ad.details',['category_slug'=>$ad->category->slug, 'slug'=>$ad->slug])}}">
                                        <img class="img-responsive" src="{{asset('storage/uploads')}}/{{$ad->Ad_image_0}}" alt="img">
                                    </a>
                                </td>
                                <td class="product-td">
                                    <h4 class="text-black font-bold text-4xl capitalize">{{$ad->name}}</h4>
                                    <p><span class="text-black font-medium text-3xl capitalize">category:</span><a href="{{route('category.name', ['category_slug' => $ad->category->name])}}"> {{$ad->category->name}}</a></p>
                                    <span><span class="text-black font-medium text-3xl capitalize">posted on:</span> {{$ad->created_at}}</span>
                                </td>
                                <td class="price-td">
                                    <span>Ksh. {{$ad->price}}</span>
                                </td>
                                <td class="action-td">
                                    <p class="my-8">
                                        <a class="action-btn btn-primary btn-xs" href="{{route('ad.edit', ['ad'=>$ad->id])}}"> <i class="bi bi-pencil-square"></i> Edit</a>
                                    </p>
                                    <p class="">
                                        <a class="action-btn btn-danger btn-xs" href="{{route('ad.destroy', ['ads'=>$ad->id])}}"> <i class=" bi bi-trash"></i> Delete</a>
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
</section>
@endsection