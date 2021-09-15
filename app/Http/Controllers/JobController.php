<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Service;
use Symfony\Component\VarDumper\Cloner\Data;

class JobController extends Controller
{
    //

    public function addJob(){
        $data= Service::all();
        //return $data;
        return view('/layouts/jobs/add_job',['services'=>$data]);
        //return view('/layouts/jobs/add_job',compact($data));
    
    }

    function addData(Request $req){
        $job= new Job;
        $job->time = $req->time;
        $job->agent_email = $req->agent_email;
        $job->agent_id = $req->agent_id;
        $job->csp = $req->csp;
        $job->phone_num = $req->phone_number;
        $job->alt_phone_num = $req->alternate_phone_number;
        $job->email = $req->email_address;
        $job->f_name  = $req->customer_first_name;
        $job->l_name = $req->customer_last_name;
        $job->street_addrs = $req->street_address;
        $job->city = $req->city;
        $job->state = $req->state;
        $job->zip = $req->zip;
        $job->service_provider  = $req->service_provider;
        $job->account_num = $req->account_number;
        $job->account_info  = $req->account_info;
        $job->original_bill_price = $req->original_bill;
        $job->amount_to_charged = $req->amount_to_charged;
        $job->financial_client = $req->financial_client;
        $job->billing_info = $req->billing_info;
        $job->csr_comment = $req->csr_comments;
        
        $job-> save();

        return redirect('/add');
        


    }
}
