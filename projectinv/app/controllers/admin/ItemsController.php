<?php

namespace Admin;

class ItemsController extends \BaseController {

public function index() {

}

public function add() {
    return View::make('admin.items.add');
    if (Input::all()) {
$itemModel = new ItemModel();
$insert = $itemModel->insert(Input::all());

if ($insert === TRUE) {
return Redirect::to('admin/items')
->with('message', 'Item added');
} else {
return Redirect::to('admin/items/add')
->withErrors($insert)
->withInput();
}
}

}

public function edit() {

}

public function delete($id) {

}

}