<?php

namespace App\Http\Controllers;

use App\Models\LeadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lead = new LeadModel();

        $lead->first_name = $request->input("first_name");
        $lead->last_name = $request->input("last_name");
        $lead->phone = $request->input("phone_number");
        $lead->email = $request->input("email");
        $lead->save();
        $data = ["Name" => "John", "Data" => "Hello World"];
        Mail::send(
            'mail', $data, function ($msg) use ($lead) {
                $msg->to($lead->email);
                $msg->from('noreply@sixtydayscreditrepair.com');
                $msg->subject("Thank you");
        });

        $payload = [
            "first_name" => $lead->first_name,
            "last_name" => $lead->last_name,
            "phone_number" => $lead->phone,
            "email" => $lead->email
        ];

        $response = Http::asForm()->post('https://hooks.zapier.com/hooks/catch/13844305/bpl79yr/',$payload);
        echo $response->successful();
        return view('success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
