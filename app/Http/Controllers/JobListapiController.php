<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

use Illuminate\Http\Request;

class JobListapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $deskrip = ($request->description == '' || $request->description == null) ? '' : $request->description;
        $loca   = ($request->location == '' || $request->location == null) ? '' : $request->location;
        $f = ($request->full_time == '' || $request->full_time == null) ? '' : $request->full_time;
        $page = ($request->page == '' || $request->page == null) ? '' : $request->page;
        $pagea = ($request->pagea == '' || $request->pagea == null) ? 1 : $request->pagea+1;

        if($deskrip != null or $loca != null){
            $client = new Client([
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
                ]);
                $response = $client->request('GET', 'https://jobs.github.com/positions.json?&description='.$deskrip.'&location='.$loca.'&full_time='.$f.'');
    
                $responseJSON = json_decode($response->getBody(), true);
                //dd($responseJSON);
                return view('joblist.index',['data' => $responseJSON]);

        }else{
            $client = new Client([
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
                ]);
                $response = $client->request('GET', 'https://jobs.github.com/positions.json?page='.$pagea.'');

                $responseJSON = json_decode($response->getBody(), true);
                // dd($responseJSON);
                return view('joblist.index',['data' => $responseJSON, 'page' => $pagea]);
        }

    }
    public function detail($id)
    {
        // $idi = $request->id;
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json',
            ]
            ]);
            $response = $client->request('GET', 'https://jobs.github.com/positions/'.$id.'.json');

            $responseJSON = json_decode($response->getBody(), true);
            // $howto = $responseJSON['how_to_apply']
          //dd($responseJSON);
            return view('joblist.detail',['data' => $responseJSON]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
