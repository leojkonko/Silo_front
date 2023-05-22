<?php

namespace Ellite\Products\Services;

use Ellite\Products\Models\Product;
use Ellite\Products\Models\ProductCategory;
use Illuminate\Database\Eloquent\Builder;
use Ellite\Products\Models\PageProduct;

class ProductService
{
    private $page;

    public function __construct()
    {
        $this->page = PageProduct::withTranslation()->firstOrCreate();
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getProducts(
        int $quantity = 12,
        ?string $search = null,
        ?ProductCategory $category = null,

    ) {
        /** @var Builder */
        $products = Product::where('active', 1)
            ->withTranslation()
            ->with([
                'applications',
                'categories',
            ])
            ->orderByDesc('name');

        if($category){
            $products->whereRelation('categories', 'products_categories.id', $category->id);
        }

        if ($search) {
            $products
                ->where(
                    fn ($q) => $q
                        ->where('products.code', $search)
                        ->orWhereTranslationLike('title', '%' . $search . '%')
                );
        }

        $products = $products->paginate($quantity);

        return $products;
    }

    public function getProduct(string $slug)
    {
        $product = Product::where('active', 1)
            ->whereTranslation('slug', $slug)
            ->withTranslation()
            ->with([
                'applications',
                'applications.image',
                'categories'
            ]);

        return $product->firstOrFail();
    }

    public function getRelatedProducts($categories, Product $product)
    {
        $product = Product::where('active', 1)
            ->withTranslation()
            ->with([
                'applications',
                'applications.image',
                'categories',
            ])
            ->where('products.id', '!=', $product->id)
            ->whereRelation('categories', 'id', $categories->modelKeys());

        return $product->get();
    }

    public function getCategories()
    {
        $categories = ProductCategory::withTranslation()
            ->where('active', 1)
            ->whereRelation('products', 'active', 1)
            ->orderBy('order');
        
        return $categories;
    }

    public function getCategory($slug){
        
        $category = ProductCategory::withTranslation()
            ->whereTranslation('slug', $slug)
            ->where('active', 1);
        
        return $category->firstOrFail();
    }

}
