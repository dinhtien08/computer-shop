<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $keyword = trim($request->string('q')->toString());

        $query = Product::with('category');

        if ($keyword !== '') {
            $pattern = '%' . $keyword . '%';
            $query->where(function ($products) use ($pattern) {
                $products->where('name', 'like', $pattern)
                    ->orWhereHas('category', function ($categories) use ($pattern) {
                        $categories->where('name', 'like', $pattern);
                    });
            });
        }

        $products = $query->orderByDesc('id')
            ->paginate(5)
            ->withQueryString();

        return view('admin.products.index', compact('products', 'keyword'));
    }

    public function create(): View
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateProduct($request);

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Đã thêm sản phẩm.');
    }

    public function show(Product $product): View
    {
        $product->load('category');

        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product): View
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $data = $this->validateProduct($request);

        $product->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Đã cập nhật sản phẩm.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        if ($product->stock > 0) {
            return redirect()
                ->route('admin.products.index')
                ->with('error', "Không thể xóa {$product->name} vì vẫn còn {$product->stock} chiếc trong kho.");
        }

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Đã xóa sản phẩm.');
    }

    private function validateProduct(Request $request): array
    {
        return $request->validate([
            'name' => ['bail', 'required', 'string', 'max:255'],
            'category_id' => ['bail', 'required', 'integer', 'exists:categories,id'],
            'price' => ['bail', 'required', 'integer', 'min:0', 'max:4294967295'],
            'stock' => ['bail', 'required', 'integer', 'min:0', 'max:4294967295'],
            'description' => ['nullable', 'string', 'max:10000'],
            'image' => ['bail', 'nullable', 'url:http,https', 'max:255'],
        ], [
            'required' => 'Vui lòng nhập :attribute.',
            'integer' => ':attribute phải là số nguyên.',
            'min' => ':attribute phải từ :min trở lên.',
            'category_id.required' => 'Vui lòng chọn hãng laptop.',
            'category_id.exists' => 'Hãng laptop đã chọn không tồn tại.',
            'name.max' => 'Tên sản phẩm tối đa 255 ký tự.',
            'price.max' => 'Giá bán vượt quá giới hạn cho phép.',
            'stock.max' => 'Số lượng tồn kho vượt quá giới hạn cho phép.',
            'description.max' => 'Mô tả tối đa 10.000 ký tự.',
            'image.url' => 'Vui lòng nhập URL ảnh hợp lệ bắt đầu bằng http:// hoặc https://.',
            'image.max' => 'URL ảnh tối đa 255 ký tự.',
        ], [
            'name' => 'tên sản phẩm',
            'category_id' => 'hãng laptop',
            'price' => 'giá bán',
            'stock' => 'số lượng tồn kho',
        ]);
    }
}
