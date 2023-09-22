<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;
use App\Models\CategoryModel;

class MainController extends BaseController
{
    private $product;
    private $tablecategory;

    public function __construct()
    {
        $this->product = new MainModel();
        $this->tablecategory = new CategoryModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $productModel = new MainModel();
        $categoryModel = new CategoryModel(); 

        $data = [
            'product' => $productModel->findAll(),
            'pro' => $productModel->find($id),
            'categories' => $categoryModel->distinct('ProductCategory')->findColumn('ProductCategory'),
        ];

        if (!$data['pro']) {
            echo 'ERROR';
        }

        return view('products', $data);
    }


    public function save()
    {
        $id = $this->request->getVar('id');
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];

        if ($id != null) {
            $this->product->set($data)->where('id', $id)->update();
        } else {
            $this->product->save($data);
        }
        return redirect()->to('/product');
        
        // Save data to the TableCategoryModel as well
        $sectionData = 
        [
            'ProductCategory' => $this->request->getVar('ProductCategory'),
        ];

        $this->tablecategory->save($sectionData);

        return redirect()->to('/product');
    }

    public function product($product)
    {
        echo $product;
    }

    public function index()
    {
        $productModel = new MainModel(); // Create an instance of the ProductModel
        $categoryModel = new CategoryModel(); // Create an instance of the CategoryModel

        // Fetch products and distinct categories from their respective models
        $data['product'] = $productModel->findAll();
        $data['categories'] = $categoryModel->distinct('ProductCategory')->findColumn('ProductCategory');

        return view('products', $data);
    }

}