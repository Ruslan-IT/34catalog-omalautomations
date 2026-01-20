<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\SiteSetting;

class ContactController extends Controller
{
    public function send(Request $request)

    {
        // Honeypot
        if ($request->filled('website')) {
            return response()->json(['message' => 'Spam detected'], 422);
        }

        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'phone'   => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $siteName = config('app.name');

        // IP
        $ip = $request->ip();

        // (опционально) регион — можно добавить позже
        $region = null;

        // 💾 СОХРАНЯЕМ В БД
        $contact = ContactRequest::create([
            'name'       => $data['name'],
            'email'      => $data['email'],
            'subject'    => $data['subject'],
            'phone'      => $data['phone'],
            'site'       => $siteName,
            'message'    => $data['message'],
            'ip_address' => $ip,
            'region'     => $region,
        ]);

        // Email администратора
        $adminEmail = SiteSetting::first()?->email ?? config('mail.from.address');

        // Письмо
        Mail::send('emails.contact', [
            'name'        => $contact->name,
            'email'       => $contact->email,
            'subject'     => $contact->subject,
            'phone'       => $contact->phone,
            'site'        => $contact->site,
            'userMessage' => $contact->message,
        ], function ($mail) use ($adminEmail, $data) {
            $mail->to($adminEmail)
                ->replyTo($data['email'])
                ->subject($data['subject']);
        });

        return response()->json([
            'message' => 'Thank you! We will contact you soon.',
        ]);
    }
}
