<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\Products\Services\ProductService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(SiteService $alternates, ProductService $products, Request $request)
    {
        $categories = $products->getCategories();

        $alternates
            ->setAlternates('products')
            ->pushBreadCrumb('Produtos', route_lang('products'))
            ->setBreadTitle('Produtos')
            ->setTitle('Produtos')
            ->setDescriptionIfNotEmpty($products->getPage()->description)
            ->setKeywordsIfNotEmpty($products->getPage()->keywords);

        $category = request('category');
        
        if($category){
            $category = $products->getCategory($category);
            
            $alternates
                ->setAlternates('products.category', $category)
                ->pushBreadCrumb($category->title)
                ->setBreadTitle($category->title)
                ->setTitle($category->title)
                ->setDescriptionIfNotEmpty($category->description)
                ->setKeywordsIfNotEmpty($category->keywords);
        }
        else {
            $category = null;
        }

        $search = request('busca');

        $view = $products->getProducts(20, $search, $category);

        return view('front.pages.products', [
            'products' => $view,
            'categories' => $categories,
        ]);
    }

    public function details(SiteService $alternates, ProductService $products)
    {
        $alternates
            ->pushBreadCrumb('Produtos', route_lang('products'))
            ->setDescriptionIfNotEmpty($products->getPage()->description)
            ->setKeywordsIfNotEmpty($products->getPage()->keywords);

        $slug = request('slug');
        $product = $products->getProduct($slug);

        $alternates
            ->setAlternates('blog.details', $product)
            ->setTitle($product->title)
            ->pushBreadCrumb($product->short_title ?: $product->title)
            ->setBreadTitle($product->short_title ?: $product->title)
            ->setDescriptionIfNotEmpty($product->description)
            ->setKeywordsIfNotEmpty($product->keywords)
            ->setMetasSocials($product, $product->image, 'article');

        $relatedProducts = $products->getRelatedProducts($product->categories, $product);

        return view('front.pages.products-details', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
    public function detalhe(SiteService $alternates, ProductService $products)
    {
        $categories = $products->getCategories();

        $alternates
            ->setAlternates('products')
            ->pushBreadCrumb('Produtos', route_lang('products'))
            ->setBreadTitle('Produtos')
            ->setTitle('Produtos')
            ->setDescriptionIfNotEmpty($products->getPage()->description)
            ->setKeywordsIfNotEmpty($products->getPage()->keywords);

        $category = request('category');
        
        if($category){
            $category = $products->getCategory($category);
            
            $alternates
                ->setAlternates('products.category', $category)
                ->pushBreadCrumb($category->title)
                ->setBreadTitle($category->title)
                ->setTitle($category->title)
                ->setDescriptionIfNotEmpty($category->description)
                ->setKeywordsIfNotEmpty($category->keywords);
        }
        else {
            $category = null;
        }

        $search = request('busca');

        $view = $products->getProducts(20, $search, $category);

        return view('front.pages.products-details', [
            'products' => $view,
            'categories' => $categories,
        ]);
    }

}
