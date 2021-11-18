<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      public function FirstPage()
      {
          return view('Pages.FirstPage');
      }
      public function AboutPage()
      {
          return view('Pages.about');
      }
      public function WorkPage()
      {
          return view('Pages.work');
      }
      public function ContactPage()
      {
          return view('Pages.contact');
      }
      public function Gallery()
      {
          return view('Pages.gallery');
      }
      public function Music()
      {
          return view('Pages.music');
      }
}
