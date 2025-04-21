<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Front\InquiryRequest;
use App\Http\Requests\Front\ModalFormRequest;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Log;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function saveInquiry(InquiryRequest $request)
    {
        try {
            if (!empty($request['page_url'])) {
                $request['page_url'] = $request->input('page_url');
            }
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $request['ip'] = $_SERVER['HTTP_CLIENT_IP'];
                //Is it a proxy address
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $request['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $request['ip'] = $_SERVER['REMOTE_ADDR'];
            }

            $userrequest = $request->all();

            $request->input('page_url');

            $inquiry = Inquiry::create($userrequest);
            $mail = config('settings.email');
           /*  $data = $inquiry;
            return view('email.inquiryMail', compact('data')); */
            Mail::to($mail)->send(new InquiryMail($inquiry));
            $data['meta_title'] = 'We appreciate you getting in touch with us!';
            $data['meta_description'] = 'A member of our staff will get in touch with you as soon as possible.';
            return view('front.thank-you', compact('data'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            // echo 'Error: ' . $e->getMessage();
            return redirect()->back()->with('error', trans('label.something_went_wrong_error_msg'));
        }
    }
    public function saveModalInquiry(ModalFormRequest $request)
    {

        try {
            $userRequest = $request->all();
            $userRequest['page_url'] = $request->input('page_url');

            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $userRequest['ip'] = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $userRequest['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $userRequest['ip'] = $_SERVER['REMOTE_ADDR'];
            }

            $inquiry = Inquiry::create($userRequest);

            $mail = config('settings.email'); 
            Mail::to($mail)->send(new InquiryMail($inquiry));
            return redirect(url()->previous())->with('success', 'Your inquiry has been successfully submitted. We will contact you soon!');
        } catch (\Exception $e) {
          
            Log::error($e->getMessage());
            return redirect(url()->previous())->with('error', trans('label.something_went_wrong_error_msg'));
        }
    }
}
