<?php
class AdminController extends BaseController {

public function callAction($method, $parameters)
  {
    $this->setupLayout();
    $response = call_user_func_array(array($this, $method), $parameters);
    // If no response is returned from the controller action and a layout is being
    // used we will assume we want to just return the layout view as any nested
    // views were probably bound on this view during this controller actions.
    if (is_null($response) && ! is_null($this->layout))
    {
      $response = $this->layout;
    }
    return $response;
  }

   protected $layout = 'layout1';

public function users(){

    $table = Datatable::table()
      ->addColumn('username', 'roles', 'View')
      ->setUrl(route('api.users'))
      ->noScript();

    $this->layout->content = View::make('database', array('table' => $table));

}


public function getUsersDataTable(){

    $query = UserModel::select('username', 'roles', 'id')->get();

    return Datatable::collection($query)

        ->addColumn('id', function($model){
            return '<a href="/users/' . $model->id . '">view</a>';
        })
        ->searchColumns('username', 'roles')
        ->orderColumns('username', 'roles')
        ->make();
}

}

?>