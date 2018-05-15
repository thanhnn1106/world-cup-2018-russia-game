<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $paramSearch['email'] = $request->get('email');
        $paramSearch['filter_status']   = $request->get('filter_status');
        $data = array(
            'users'         => User::getList($paramSearch),
            'status'        => config('site.user_status.label'),
            'email'         => $paramSearch['email'],
            'filter_status' => $paramSearch['filter_status']
        );

        return view('admin.users.list', $data);
    }

    public function add(Request $request)
    {
        $data = array(
            'actionForm' => route('admin.users.add'),
            'title'      => 'Add new'
        );

        if ($request->isMethod('POST')) {
            $rules = $this->_setRules($request);

            // run the validation rules on the inputs from the form
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->route('admin.users.add')
                            ->withErrors($validator)
                            ->withInput();
            }

            $userInfo = User::create([
                'email'      => $request->get('email'),
                'name'       => $request->get('name'),
                'password'   => bcrypt($request->get('password')),
                'status'     => (int)$request->get('status'),
                'created_at' => date('Y-m-d H:i:s')
            ]);

            $request->session()->flash('success', trans('common.msg_create_success'));
            return redirect()->route('admin.users');
        }

        return view('admin.users.form', $data);
    }

    public function edit(Request $request, $userId)
    {
        $user = User::find($userId);
        if ($user === NULL) {
            $request->session()->flash('error', trans('common.msg_data_not_found'));
            return redirect(route('admin.users'));
        }

        $data = array(
            'actionForm' => route('admin.users.edit', ['userId' => $userId]),
            'user'       => $user,
            'title'      => 'Update',
        );

        if ($request->isMethod('POST')) {

            $rules = $this->_setRules($request, $userId);

            // run the validation rules on the inputs from the form
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->route('admin.users.edit', ['user' => $user])
                            ->withErrors($validator)
                            ->withInput();
            }

            if (!empty($request->get('password'))) {
                $user->password = bcrypt($request->get('password'));
            }
            $user->name = $request->get('name');
            $user->status = $request->get('status');
            $user->save();

            $request->session()->flash('success', trans('common.msg_update_success'));
            return redirect()->route('admin.users');
        }

        return view('admin.users.form', $data);
    }

    public function delete(Request $request, $userId)
    {
        $user = User::find($userId);
        if ($user === NULL) {
            $request->session()->flash('error', trans('common.msg_data_not_found'));
            return redirect(route('admin.users'));
        }

        $user->delete();

        $request->session()->flash('success', trans('common.msg_delete_success'));
        return redirect()->route('admin.users');
    }

    private function _setRules($request, $id = null)
    {
        $status          = array_values(config('site.user_status.value'));
        $email           = '';
        $password        = '';
        $passwordConfirm = '';
        // Add
        if ($id === null) {
            $email = 'required|email|unique:users';
            $password = 'required|min:8';
            $passwordConfirm = 'required_with:password|same:password|min:8';
        } else {
            // Edit
            if (!empty($request->get('password'))) {
                $password = 'required|min:8';
                $passwordConfirm = 'required_with:password|same:password|min:8';
            }
        }
        $rules =  array(
            'name'                  => 'required|max:255',
            'email'                 => $email,
            'password'              => $password,
            'password_confirmation' => $passwordConfirm,
            'status'                => 'required|in:'. implode(',', $status),
        );

        return $rules;
    }

    public function predictions(Request $request)
    {
        $params = [
            'email' => $request->get('email')
        ];
        $userHistoryList = User::getUserPreHistory($params);
        $data = [
            'userHistoryList' => $userHistoryList,
            'email'           => $request->get('email')

        ];

        return view('admin.users.predictions', $data);
    }
}