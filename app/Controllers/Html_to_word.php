<?php namespace App\Controllers;

use CodeIgniter\Controller;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\Writer\PowerPoint2007;
use PhpOffice\PhpPresentation\Style\Alignment;
class Html_to_word extends Controller
{
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('username');
        return view('html_to_word');
    }
    public function download()
    {
      header('Content-type: application/vnd.ms-word');
      header("Content-disposition: attachment; filename=example.doc");
      return view('html_to_word');
    }
}
