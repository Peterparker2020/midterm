<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function index() {
        $a = Account::orderBy('acct_name')->get();

        return view('account.account', ['accounts'=>$a]);
    }
}
