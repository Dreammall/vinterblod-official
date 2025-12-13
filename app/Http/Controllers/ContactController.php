<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // フォーム表示
    public function index()
    {
        return view('contact');
    }

    // 送信処理
    public function send(Request $request)
    {
        // ① 入力チェック（受付ルール）
        $validated = $request->validate([
            'name'    => 'required|string|max:50',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // ② メール送信（伝言係）
        Mail::to(config('mail.from.address'))
            ->send(new ContactMail($validated));

        // ③ 完了メッセージ
        return back()->with('success', 'お問い合わせを送信しました');
    }
}