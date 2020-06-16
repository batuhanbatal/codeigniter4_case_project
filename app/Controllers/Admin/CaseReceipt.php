<?php namespace App\Controllers\Admin;

use App\Models\CaseReceiptModel;
use App\Models\UserModel;
use App\Controllers\BaseController; 

class CaseReceipt extends BaseController
{
	public function index()
	{
		$case = new CaseReceiptModel();

		$data['case'] = $case->join('users', 'users.id = case_receipt.customer_id')->select('users.name,case_receipt.*')->findAll();

		return view('admin/case-receipt/index', $data);
	}

	public function create()
	{
		$users = new UserModel();
		$data['users'] = $users->findAll();

		return view('admin/case-receipt/create', $data);
	}

	public function store()
	{
		$case  = new CaseReceiptModel();
		$users = new UserModel();

		$rules = 
		[
			'customer_id'      => 'required',
			'action_type'      => "required|in_list[nakit tahsilat,bloke hesap]",
			'amount'   	       => 'required|numeric',
		];

		if($this->validate($rules))
		{
			$case_data = $case->where('customer_id', $this->request->getPost('customer_id'))->findAll();
			$user      = $users->where('id',         $this->request->getPost('customer_id'))->first();

			if($this->request->getPost('action_type') == 'nakit tahsilat')
			{
				if(delimitation($case_data, $this->request->getPost('amount'), $user['money_limit']))
				{
					$data = 
					[
						'customer_id' => $this->request->getPost('customer_id'),
						'action_type' => $this->request->getPost('action_type'),
						'debt'        => $this->request->getPost('amount'),
						'created_at'  => date("Y-m-d H:i:s"),
						'updated_at'  => date("Y-m-d H:i:s"),
					];
				}
				else
				{
					$alert = 
					[
						'text' => 'You have exceeded your withdrawal limit',
						'type' => 'danger',
					];

					session()->setFlashdata('alert', $alert);
					return redirect()->to('/admin/case-receipt/create');
				}
			}
			else if($this->request->getPost('action_type') == 'bloke hesap')
			{
				$data = 
				[
					'customer_id' => $this->request->getPost('customer_id'),
					'action_type' => $this->request->getPost('action_type'),
					'credit'      => $this->request->getPost('amount'),
					'created_at'  => date("Y-m-d H:i:s"),
					'updated_at'  => date("Y-m-d H:i:s"),
				];
			}
		
			$save = $case->save($data);
			
			if($save)
			{
				$alert = 
				[
					'text' => 'Case Receipt Create Successful',
					'type' => 'success',
				];

				session()->setFlashdata('alert', $alert);
				return redirect()->to('/admin/case-receipt/create');
			}   
			else
			{
				$alert = 
				[
					'text' => 'Case Receipt Create Failed',
					'type' => 'danger',
				];

				session()->setFlashdata('alert', $alert);
				return redirect()->to('/admin/case-receipt/create');
			}
		}
		else
		{
			session()->setFlashdata('validation_errors', $this->validator);
			return redirect()->to('/admin/case-receipt/create');
		}
	}
}
