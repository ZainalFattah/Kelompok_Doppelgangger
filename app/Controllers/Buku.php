<?php
namespace App\Controllers;
use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('index', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $model = new BukuModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/');
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('edit', $data);
    }

    public function update($id)
    {
        $model = new BukuModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/');
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/');
    }
}

