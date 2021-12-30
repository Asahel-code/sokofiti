<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ads;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CategoryController extends Controller
{
    public $slug;
    public $category_slug;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use WithPagination;
    public function index($category_slug)
    {
        $this->category_slug = $category_slug;
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        $categories = $category->with('ads')->inRandomOrder()->get();

        $ads = Ads::where('category_id', $category_id)->paginate(10);

        return view('layouts/category-ads', ['categories' => $categories, 'category_name' => $category_name, 'ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('layouts.post-ads', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        //Validation rules
        $request->validate([
            'adname' => 'required',
            'addescription' => 'required',
            'cat' => 'required',
            'image0' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'location' => 'required'
        ]);

        $name = $request->input('adname');
        $slug = $name;
        $description = $request->input('addescription');
        $category_id = $request->input('cat');
        $price = $request->input('price');
        $price_negotiation = $request->input('negotiable');
        $sell_option = $request->input('Ad_sell_options');
        $image_0 = $request->image0;
        $image_1 = $request->image1;
        $image_2 = $request->image2;
        $image_3 = $request->image3;

        $contact_name = $request->input('username');
        $contact_email = $request->input('email');
        $contact_number = $request->input('number');
        $hide_number = $request->input('hidenumber');
        $location = $request->input('location');

        //Image storage
        if ($image_1 == "" && $image_2 == "" && $image_3 == "") {
            //Image storage
            $imageName_0 = $image_0->getClientOriginalName();

            //First image
            $newImage_0 = time() . $imageName_0;
            $path = "storage/uploads";
            $image_0->move($path, $newImage_0);

            //Storage of input values
            $product = new Ads();
            $product->name = $name;
            $product->slug = $slug;
            $product->description = $description;
            $product->price = $price;
            $product->price_negotiable = $price_negotiation;
            $product->sell_options = $sell_option;
            $product->Ad_image_0 = $newImage_0;
            $product->contactname = $contact_name;
            $product->contactemail = $contact_email;
            $product->contactnumber = $contact_number;
            $product->hide_number = $hide_number;
            $product->location = $location;
            $product->category_id = $category_id;
            $product->user_id = $user_id;
            $product->save();

            return redirect()->route('account.index')->with('success', 'Your advertisement has been posted successfully, it will be shortly available on the mail website');
        } elseif ($image_2 == "" && $image_3 == "") {
            //Image storage
            $imageName_0 = $image_0->getClientOriginalName();
            $imageName_1 = $image_1->getClientOriginalName();

            //First image
            $newImage_0 = time() . $imageName_0;
            $path = "storage/uploads";
            $image_0->move($path, $newImage_0);

            //Second Image
            $newImage_1 = time() . $imageName_1;
            $path = "storage/uploads";
            $image_1->move($path, $newImage_1);

            //Storage of input values
            $product = new Ads();
            $product->name = $name;
            $product->slug = $slug;
            $product->description = $description;
            $product->price = $price;
            $product->price_negotiable = $price_negotiation;
            $product->sell_options = $sell_option;
            $product->Ad_image_0 = $newImage_0;
            $product->Ad_image_1 = $newImage_1;
            $product->contactname = $contact_name;
            $product->contactemail = $contact_email;
            $product->contactnumber = $contact_number;
            $product->hide_number = $hide_number;
            $product->location = $location;
            $product->category_id = $category_id;
            $product->user_id = $user_id;
            $product->save();

            return redirect()->route('account.index')->with('success', 'Your advertisement has been posted successfully, it will be shortly available on the mail website');
        } elseif ($image_3 == "") {
            //Image storage
            $imageName_0 = $image_0->getClientOriginalName();
            $imageName_1 = $image_1->getClientOriginalName();
            $imageName_2 = $image_2->getClientOriginalName();

            //First image
            $newImage_0 = time() . $imageName_0;
            $path = "storage/uploads";
            $image_0->move($path, $newImage_0);

            //Second Image
            $newImage_1 = time() . $imageName_1;
            $path = "storage/uploads";
            $image_1->move($path, $newImage_1);

            //Third image
            $newImage_2 = time() . $imageName_2;
            $path = "storage/uploads";
            $image_2->move($path, $newImage_2);

            //Storage of input values
            $product = new Ads();
            $product->name = $name;
            $product->slug = $slug;
            $product->description = $description;
            $product->price = $price;
            $product->price_negotiable = $price_negotiation;
            $product->sell_options = $sell_option;
            $product->Ad_image_0 = $newImage_0;
            $product->Ad_image_1 = $newImage_1;
            $product->contactname = $contact_name;
            $product->contactemail = $contact_email;
            $product->contactnumber = $contact_number;
            $product->hide_number = $hide_number;
            $product->location = $location;
            $product->category_id = $category_id;
            $product->user_id = $user_id;
            $product->save();

            return redirect()->route('account.index')->with('success', 'Your advertisement has been posted successfully, it will be shortly available on the mail website');
        } elseif ($image_2 == "") {
            $imageName_0 = $image_0->getClientOriginalName();
            $imageName_1 = $image_1->getClientOriginalName();
            $imageName_3 = $image_3->getClientOriginalName();

            //First image
            $newImage_0 = time() . $imageName_0;
            $path = "storage/uploads";
            $image_0->move($path, $newImage_0);

            //Second Image
            $newImage_1 = time() . $imageName_1;
            $path = "storage/uploads";
            $image_1->move($path, $newImage_1);
            //Fourth image
            $newImage_3 = time() . $imageName_3;
            $path = "storage/uploads";
            $image_3->move($path, $newImage_3);

            //Storage of input values
            $product = new Ads();
            $product->name = $name;
            $product->slug = $slug;
            $product->description = $description;
            $product->price = $price;
            $product->price_negotiable = $price_negotiation;
            $product->sell_options = $sell_option;
            $product->Ad_image_0 = $newImage_0;
            $product->Ad_image_1 = $newImage_1;
            $product->Ad_image_3 = $newImage_3;
            $product->contactname = $contact_name;
            $product->contactemail = $contact_email;
            $product->contactnumber = $contact_number;
            $product->hide_number = $hide_number;
            $product->location = $location;
            $product->category_id = $category_id;
            $product->user_id = $user_id;
            $product->save();

            return redirect()->route('account.index')->with('success', 'Your advertisement has been posted successfully, it will be shortly available on the mail website');
        } elseif ($image_1 == "") {
            $imageName_0 = $image_0->getClientOriginalName();
            $imageName_2 = $image_2->getClientOriginalName();
            $imageName_3 = $image_3->getClientOriginalName();

            //First image
            $newImage_0 = time() . $imageName_0;
            $path = "storage/uploads";
            $image_0->move($path, $newImage_0);

            //Third image
            $newImage_2 = time() . $imageName_2;
            $path = "storage/uploads";
            $image_2->move($path, $newImage_2);

            //Fourth image
            $newImage_3 = time() . $imageName_3;
            $path = "storage/uploads";
            $image_3->move($path, $newImage_3);
            //Storage of input values
            $product = new Ads();
            $product->name = $name;
            $product->slug = $slug;
            $product->description = $description;
            $product->price = $price;
            $product->price_negotiable = $price_negotiation;
            $product->sell_options = $sell_option;
            $product->Ad_image_0 = $newImage_0;
            $product->Ad_image_2 = $newImage_2;
            $product->Ad_image_3 = $newImage_3;
            $product->contactname = $contact_name;
            $product->contactemail = $contact_email;
            $product->contactnumber = $contact_number;
            $product->hide_number = $hide_number;
            $product->location = $location;
            $product->category_id = $category_id;
            $product->user_id = $user_id;
            $product->save();

            return redirect()->route('account.index')->with('success', 'Your advertisement has been posted successfully, it will be shortly available on the mail website');
        } else {
            $imageName_0 = $image_0->getClientOriginalName();
            $imageName_1 = $image_1->getClientOriginalName();
            $imageName_2 = $image_2->getClientOriginalName();
            $imageName_3 = $image_3->getClientOriginalName();

            //First image
            $newImage_0 = time() . $imageName_0;
            $path = "storage/uploads";
            $image_0->move($path, $newImage_0);

            //Second Image
            $newImage_1 = time() . $imageName_1;
            $path = "storage/uploads";
            $image_1->move($path, $newImage_1);

            //Third image
            $newImage_2 = time() . $imageName_2;
            $path = "storage/uploads";
            $image_2->move($path, $newImage_2);

            //Fourth image
            $newImage_3 = time() . $imageName_3;
            $path = "storage/uploads";
            $image_3->move($path, $newImage_3);

            //Storage of input values
            $product = new Ads();
            $product->name = $name;
            $product->slug = $slug;
            $product->description = $description;
            $product->price = $price;
            $product->price_negotiable = $price_negotiation;
            $product->sell_options = $sell_option;
            $product->Ad_image_0 = $newImage_0;
            $product->Ad_image_1 = $newImage_1;
            $product->Ad_image_2 = $newImage_2;
            $product->Ad_image_3 = $newImage_3;
            $product->contactname = $contact_name;
            $product->contactemail = $contact_email;
            $product->contactnumber = $contact_number;
            $product->hide_number = $hide_number;
            $product->location = $location;
            $product->category_id = $category_id;
            $product->user_id = $user_id;
            $product->save();

            return redirect()->route('account.index')->with('success', 'Your advertisement has been posted successfully, it will be shortly available on the mail website');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $category_slug)
    {
        $this->category_slug = $category_slug;
        $this->slug = $slug;
        $category = Category::where('slug', $this->slug)->first();
        $category_name = $category->name;

        $ad = Ads::where('slug', $this->category_slug)->first();
        $related_ads = Ads::where('category_id', $ad->category_id)->inRandomOrder()->limit(5)->get();
        return view('layouts.ads-details', ['ad' => $ad, 'category_name' => $category_name, 'related_ads' => $related_ads]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ads::where('id', $id)->with('category')->firstOrFail();

        return view('layouts.edit-ads', ['ad' => $ad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function paginationView()
    {
        return view('layouts.custom-pagination');
    }
}
