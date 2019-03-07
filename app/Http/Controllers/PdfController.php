<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf_controller()
    {
        $html = '<table>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>Category</th>
                        <th>Created On</th>
                    </tr>
                </table>';

        $pdf = \PDF::loadHTML($html);
        return $pdf->stream();
    }

    public function pdf_view()
    {
        $posts = Post::all();

        $pdf = \PDF::loadView('pdf.pdf_view', compact('posts'));
        return $pdf->stream();
    }

    public function test_mail()
    {
        \Mail::send('emails.test', [], function ($mailer){
            $mailer->to('ahmad.zulhilmi.89@gmail.com', 'Zulhilmi Rahman');
//            $mailer->cc('');
//            $mailer->bcc('');
            $mailer->subject('Test Send Mail');
        });
    }
}
