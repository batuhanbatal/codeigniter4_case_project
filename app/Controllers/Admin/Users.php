<?php namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Controllers\BaseController; 

class Users extends BaseController
{
	public function index()
	{
		$user = new UserModel();

		$data['users'] = $user->findAll();

		return view('admin/users/index', $data);
	}

	public function edit($id = NULL)
	{
		$user = new UserModel();

		$data['user'] = $user->where('id', $id)->first();

		if($data['user'])
		{
			return view('admin/users/edit', $data);
		}
		else
		{
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function update($id = NULL)
	{
		$user = new UserModel();

		$data['user'] = $user->where('id', $id)->first();

		if($data['user'])
		{
			$rules = 
			[
				'name'       	   => 'required|min_length[3]|max_length[30]',
				'email'      	   => "required|valid_email|is_unique[users.email,id,$id]",
				'password'   	   => 'permit_empty|min_length[7]|max_length[30]',
				'password_confirm' => 'permit_empty|matches[password]',
			];

			if($this->validate($rules))
			{
				$data = 
				[
					'name'       => $this->request->getPost('name'),
					'email'      => $this->request->getPost('email'),
					'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
					'updated_at' => date("Y-m-d H:i:s"),
				];
				$save = $user->update($id, $data);
				
				if($save)
				{
					$alert = 
					[
						'text' => 'Update Successful',
						'type' => 'success',
					];

					session()->setFlashdata('alert', $alert);
					return redirect()->back();
				}   
				else
				{
					$alert = 
					[
						'text' => 'Update Failed',
						'type' => 'danger',
					];

					session()->setFlashdata('alert', $alert);
					return redirect()->back();
				}
			}
			else
			{
				session()->setFlashdata('validation_errors', $this->validator);
				return redirect()->back();
			}
		}
		else
		{
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}
}
