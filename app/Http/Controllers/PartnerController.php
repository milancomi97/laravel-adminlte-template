<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('partneri.partneri_show_all');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partneri.create_partner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO Migracija i tabela
        $input = $request->all();
        $partner = Partner::create([
            'adress' => $input['adress'],
            'contact_employee' => $input['contact_employee'],
            'email' => $input['email'],
            'maticni_broj' => $input['maticni_broj'],
            'mesto' => intval($input['mesto']),
            'name' => $input['name'],
            'odgovorno_lice' => $input['odgovorno_lice'],
            'phone' => $input['phone'],
            'pib' => $input['pib'],
            'pripada_pdvu' => $input['pripada_pdvu'] == 'true',
            'registarski_broj' => $input['registarski_broj'],
            'short_name' => $input['short_name'],
            'sifra_delatnosti' => $input['sifra_delatnosti'],
            'web_site' => $input['web_site']
        ]);


        return 'super';
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
