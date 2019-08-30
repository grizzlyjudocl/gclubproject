<?php

namespace App\Http\Controllers;


use App\Location;
use App\Helpers\MyTCPDF;
use App\LocationData;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mail;
use Log;

class LocationController extends Controller
{
    public function storeLocation(Request $request) {
        $this->validate($request, [
            'name'          => 'required'
        ]);

        $location = new Location();
        $location->name = $request->get('name');
        $location->save();

        return redirect()->back()->with('success', 'Sukces');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'location'      => 'required|numeric',
            'name'          => 'required',
            'surname'       => 'required',
            'parent_name'   => 'required',
            'parent_surname'=> 'required',
            'birth_year'    => 'required|numeric',
            'weight'        => 'required|numeric',
            'height'        => 'required|numeric',
            'phone'         => 'required|numeric',
            'email'         => 'required|email',
            'rodo'          => 'required'
        ]);

        $location = LocationData::create(array_merge(
            $request->all(),
            [
                'newsletter'    => $request->get('newsletter') === "on"
            ]
        ));

        return redirect()->back()->withInput(['showToastr' => 1]);
    }

    public function toggleNewsletter(LocationData $locationData) {
        $locationData->newsletter = !$locationData->newsletter;
        $locationData->save();

        return redirect()->back()->with('success', 'Sukces');
    }

    public function togglePaid(LocationData $locationData) {
        $locationData->paid = !$locationData->paid;
        $locationData->save();

        return redirect()->back()->with('success', 'Sukces');
    }

    public function sendEmails() {
        $locations = LocationData::orderBy('id', 'desc')->where('newsletter', true)->get();
        foreach($locations as $location) {
            $email = $location->email;

            Mail::to($email)->send(new class extends Mailable {
                use Queueable, SerializesModels;
                public $from    = [
                    [
                        "address"   => "no-reply@protean.pl",
                        "name"      => "Newsletter 123cvb"
                    ]
                ];
                public $subject = "Newsletter";

                public function build()
                {
                    return $this->view('mail', [ 'content' => request('content') ]);
                }
            });

            Log::info("SENT TO: ".$email);
        }

        return redirect()->back()->with('success', 'Sukces');
    }

    public function printAllLocations() {
        $pdf = new MyTCPDF('l', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetFont('dejavusans', '', 12, '', true);
        $pdf->AddPage();
        $pdf->writeHTML(view('pdf.locations', [
            'locations' => LocationData::join('locations', 'location_data.location', '=', 'locations.id')
                ->orderBy('locations.name', 'desc')
                ->orderBy('paid', 'desc')
                ->select('location_data.*')
                ->get()
        ])->render());
        $pdf->Output();
    }

    public function removeLocation(LocationData $locationData) {
        $locationData->delete();
        return redirect()->back()->with('success', 'Sukces');
    }
}
