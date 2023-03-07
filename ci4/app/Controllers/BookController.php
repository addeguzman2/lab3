<?php namespace App\Controllers;

use App\Models\BookModel;

class BookController extends BaseController
{
    public function booking()
    {
        $book = new BookModel();
        $data['gigs'] = $book->findAll();
        return view('pages/booking.php', $data);
    }

    public function create()
    {
        return view('pages/booking.php');
    }

    public function store()
    {
        $shows = new BookModel();
        $data = [
            'fname' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'venue' => $this->request->getPost('venue'),
            'edate' => $this->request->getPost('edate'),
            'details' => $this->request->getPost('details'),
        ];

        $shows->save($data);
        return redirect()->to('/upcoming');

    }
}