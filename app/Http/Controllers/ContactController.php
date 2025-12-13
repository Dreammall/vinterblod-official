<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // ① フォーム表示 専用
    public function index(){
        return view('dynamic.contact');
    }

    // ② フォーム送信処理 専用
    public function send(Request $request)
    {
        // バリデーション（最低限）
        $validated = $request->validate([
            'name'    => 'required|max:100',
            'email'   => 'nullable|email',
            'subject' => 'nullable|max:255',
            'message' => 'required|max:5000',
        ]);

        // メール送信
        Mail::send('emails.contact', $validated, function ($mail) use ($validated) {
            $mail->to('aimi6827@gmail.com') // ← 管理者用の受信メールアドレス
                 ->subject('Contact Form: ' . ($validated['subject'] ?? 'No Subject'));
        });

        return back()->with('success', 'Message sent successfully.');
    }
}
