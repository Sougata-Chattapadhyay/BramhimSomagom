<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\booking;
use App\Models\customer;
use App\Models\priest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking_from');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // dd($r->puja);
        // Start Customers database
        $customer = new customer;
        $customer->Name = $r->name;
        $customer->Address  = $r->address;
        $customer->Phone_number = $r->phone;
        $customer->Email = $r->email;
        $customer->save();
        // ens customers db
        // Start booking table
        $book = new Booking;
        $book->Priest_id = $r->p_id;
        $book->Festival_id = $r->f_id;
        $book->User_id = $customer->id;
        // dd($book->User_id);
        $book->Date = $r->date;
        $book->Status = 'Hold';
        $book->save();
        
        // end booking table
        return view('home');
        // return Redirect::to('http://www.google.com');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking,$id)
    {
        $priest = DB::table('priests')->where('id',$id)->get();
        // dd($priest[0]->Name);
        $data = DB::table('festival')->get();
        return view('booking_from',['priest'=>$priest,'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
    public function getData(){
        $Master_data = DB::table('bookings')->get();
        $data = DB::table('bookings');
        $data = $data->leftJoin(
            'priests',
            'bookings.Priest_id',
            '=',
            'priests.id'
        )->leftjoin(
            'festival',
            'bookings.Festival_id',
            '=',
            'festival.id'
        )->leftjoin(
            'customers',
            'bookings.User_id',
            '=',
            'customers.id',
        )->select(
            'bookings.*',
            'priests.id as p_id',
            'priests.Name as p_name',
            'priests.Experience as p_ecperience',
            'priests.Charge as c_charge',
            'priests.Email as p_email',
            'festival.name as f_name',
            'customers.id as c_id',
            'customers.Name as c_name',
            'customers.Address as c_address',
            'customers.Phone_number as c_phn_num',
            'customers.Email as c_email',
            
        )->get();
        // dd($data);
        return view('booked_view',['data'=>$data]);
        
    }

    // admin data
    public function adminData(){
        $Master_data = DB::table('bookings')->get();
        $data = DB::table('bookings');
        $data = $data->leftJoin(
            'priests',
            'bookings.Priest_id',
            '=',
            'priests.id'
        )->leftjoin(
            'festival',
            'bookings.Festival_id',
            '=',
            'festival.id'
        )->leftjoin(
            'customers',
            'bookings.User_id',
            '=',
            'customers.id',
        )->select(
            'bookings.*',
            'priests.id as p_id',
            'priests.Name as p_name',
            'priests.Experience as p_ecperience',
            'priests.Charge as c_charge',
            'priests.Email as p_email',
            'festival.name as f_name',
            'customers.id as c_id',
            'customers.Name as c_name',
            'customers.Address as c_address',
            'customers.Phone_number as c_phn_num',
            'customers.Email as c_email',
            
        )->get();
        // dd($data);
        return view('admin_booked',['data'=>$data]);
    }
    
    public function adminApproval($id){
        // dd('Hey');
        DB::table('bookings')->where('id',$id)->update(['Status'=>'Confirm']);
        return redirect('/admin_booked');
    }
    public function adminCancel($id){
        DB::table('bookings')->where('id',$id)->update(['Status'=>'Cancel']);
        return redirect('/admin_booked');
    }
    public function adminDelete($id){
        DB::table('bookings')->where('id',$id)->delete();
        return redirect('/admin_booked');
    }
}
