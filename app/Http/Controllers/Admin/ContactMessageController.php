<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactMessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = ContactMessage::all();

        return view("Admin.Message.contact_messages", compact('messages'));
    }

    public function updateStatus($id)
    {
        $contactMessage = ContactMessage::find($id);

        $contactMessage->status = "replied";
        $contactMessage->update();

        Session::flash("message", "Contact Message Updated Successfully!");
        return redirect()->back();
    }

    public function destroy($id)
    {
        ContactMessage::find($id)->delete();

        Session::flash("message", "Contact Message Deleted Successfully!");
        return redirect("admin/contact-messages");
    }
}
