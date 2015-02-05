<?php
class UserController extends BaseController {

	public $restful = true;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return Response
	 */

public function login(){

	 $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        if (Auth::attempt($user)) {
            return Redirect::route('home')
                ->with('message', 'You are successfully logged in.')
            	->with('roles', 'value');
        }
        

        // authentication failure! lets go back to the login page
        return Redirect::route('login')
            ->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
} // End function login

public function register(){

	 	$reguser = array(
    		'regfirst' => Input::get('regfirst'),
            'reglast' => Input::get('reglast'),
            'reguser' => Input::get('reguser'),
            'password' => Input::get('password'),
            'cpassword' => Input::get('cpassword')

        );

       	$rules = array(
       		'regfirst' => 'alpha_num|max:50',
       		'reglast' => 'alpha_num|max:50',
       		'reguser' => 'required|unique:users,username|alpha_num|min:5',
       		'password' => 'required|alpha_num|between:6,100',
       		'cpassword' => 'required|alpha_num|between:6,100|same:password'
       		);

       	$validator = Validator::make(Input::all(), $rules);

       	if($validator->fails())
       	{

       		return Redirect::Back()
       		->withInput()
       		->withErrors($validator);

       	}

       	else{
       		$user = new UserModel;
       		$user->firstname = Input::get('regfirst');
            $user->lastname = Input::get('reglast');
            $user->username = Input::get('reguser');
            $user->password = Hash::make(Input::get('password'));
            $user->roles = Input::get('roles');
            $user->save();
	        }
            return Redirect::route('login')
                ->with('flash_notice','You are successfully Register.');
        
	} // End function register


    /**
     * @return bool
     */
    public function getUsersDataTable()
	{
		$query = UserModel::select('username', 'roles','id')->get();

        return Datatable::collection($query)
            ->searchColumns('username','roles')
            ->orderColumns('username','roles')
            ->addColumn('username', function ($model) {
                return $model->username;   
            })
            ->addColumn('roles', function ($model) {

                return $model->roles;
            })
            ->addColumn('Actions', function ($model) {
                return  "<a href='/projectinv/public/resource/" . $model->id . "' class='btn btn-success'>View</a>";
            })

->make();

    }


  public function resource($id)
    {
        $user=UserModel::find($id);
        return View::make('resource')->with('user',$user);
    }



} // End UserController Class