<?php

namespace App\Http\Controllers;

use App\Ticket;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Session::put('nom', $request['nom']);
        Session::put('email', $request['email']);
        Session::put('theme', $request['theme']);
        Session::put('objet', $request['objet']);
        function postData($params, $url)
            {
             try {
             $curl = curl_init();
             $postfield = '';
             foreach ($params as $index => $value) {
             $postfield .= $index . '=' . $value . "&";
             }
             $postfield = substr($postfield, 0, -1);
             curl_setopt_array($curl, array(
             CURLOPT_URL => $url,
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => "",
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 45,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => "POST",
             CURLOPT_POSTFIELDS => $postfield,
             CURLOPT_SSL_VERIFYPEER => false,
             CURLOPT_HTTPHEADER => array(
             "cache-control: no-cache",
             "content-type: application/x-www-form-urlencoded",
             ),
             ));
             $response = curl_exec($curl);
             $err = curl_error($curl);
             curl_close($curl);
             if ($err) {
             throw new Exception("cURL Error #:" . $err);
             return $err;
             } else {
             return $response;
             }
             } catch (Exception $e) {
             throw new Exception($e);
             }
            }
            $time = Carbon::now();
            $temps = date("YmdHis");
          $params = array('cpm_amount' => '15000',
                          'cpm_currency' => 'CFA',
                          'cpm_site_id' => '113043',
                          'cpm_trans_id' => $temps,
                          'cpm_trans_date' => $time,
                          'cpm_payment_config' => 'SINGLE',
                          'cpm_page_action' => 'PAYMENT',
                          'cpm_version' => 'V1',
                          'cpm_language' => 'fr',
                          'cpm_designation' => 'Ticket',
                          'apikey' => '134714631658c289ed716950.86091611',
                          );
          $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
          //Appel de fonction postData()
          $resultat = postData($params, $url) ;
          $signature = json_decode($resultat, true);

          return view('tickets.create',['signature' => str_replace('"',"",$resultat),
                                       'temps' => $temps,
                                       'time' => $time,
                                     ]);
    }

    /**
     * Si l'achat du ticket est validé, mettre statu à 1
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */

     public function achat()
     {
       $ticket=Ticket::create([
                         'nom' => Session::get('nom'),
                         'email' => Session::get('email'),
                         'theme' => Session::get('theme'),
                         'objet' => Session::get('objet')
                       ]);

                       //envoi mail user
       Mail::send('mails.mail', ['ticket' => $ticket], function($message) use ($ticket){
         $message->to($ticket->email, 'Cher participant')->subject('Votre ticket pour '.$ticket->objet);
         $message->from('eventsoschool@gmail.com', 'Oschool');
       });

       //envoi mail admin
       Mail::send('mails.mail-admin', ['ticket' => $ticket], function($message) use ($ticket){
         $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouvel achat de ticket Oschool');
         $message->from('eventsoschool@gmail.com', 'Oschool');
       });
       return redirect('ticket')->with('status', 'Achat validé ! Votre ticket a été envoyé dans votre boîte de réception. Merci de la consulter.');

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
