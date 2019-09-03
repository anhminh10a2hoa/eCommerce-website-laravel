<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    const PER_PAGE = 15;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->with('category')->paginate(self::PER_PAGE);
        // print_r($products);die;
        return view('admin.products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function getSubCategories($parent_id, $ignore_id=null)
    {
        $categories = Category::where('parent_id', $parent_id)
            ->where('id', '<>', $ignore_id)
            ->get()
            ->map(function($query) use($ignore_id){
                $query->sub = $this->getSubCategories($query->id, $ignore_id);
                return $query;
            });
        return $categories;
    }

    /**
     * Get the sub categories.
     * 
     * @param int $parent_id
     * @return mix
     */
    
    public function create()
    {
        $categories = $this->getSubCategories(0);
        return view('admin.products.create', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'avatar' => 'nullable|sometimes|image'
        ]);
        $attributes = $request->only([
            'category_id', 
            'name',
            'product_code', 
            'price', 
            'is_highlight',
            'detail',
            'description',
            'quantity'
        ]);
        if ($request->hasFile('avatar')) {
            $destinationDir = public_path('media/product');
            $fileName = uniqid('vietpro').'.'.$request->avatar->extension();
            $request->avatar->move($destinationDir, $fileName);
            $attributes['avatar'] = '/media/product/'.$fileName;
        }
        $products = Product::create($attributes);
        return redirect()->route('admin.products.edit', $products->id)->with('success', 'Tạo mới thành công');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->getSubCategories(0);
        $products = Product::findOrFail($id);
        return view('admin.products.edit', compact('products', 'categories'));
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
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'avatar' => 'nullable|sometimes|image'
        ]);

        $products = Product::findOrFail($id);

        $attributes = $request->only([
            'category_id', 
            'name', 
            'product_code', 
            'price', 
            'is_highlight',
            'detail',
            'description',
            'quantity'
        ]);
        if ($request->hasFile('avatar')) {
            $destinationDir = public_path('media/product');
            $fileName = uniqid('vietpro').'.'.$request->avatar->extension();
            $request->avatar->move($destinationDir, $fileName);
            $attributes['avatar'] = '/media/product/'.$fileName;
        }
        
        $products = $products->fill($attributes);
        $products->save();
        
        return redirect()->route('admin.products.edit', $products->id)
            ->with('success', 'Cập nhật thành công');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete($id);
    }
}