@extends('layouts.app')


    @section('content')
        <div>

            <div style="padding-top:10px" ></div>
                           
                <div class="card">

                        <div class="apple-stuff">
                            
                                <i class="fa fa-wifi">    
                                    <div class="date">12:00 AM</div>
                                </i>
                                
                                <i class="fa fa-battery-3 battery"></i>

                        </div>

                        <div class="picture-section">

                                <h3>Now Playing</h3>

                                <div class="band">
                                    <div class="overlay"></div>
                                </div>
                        </div>

                        <div class="slider"></div>

                        <div class="time"></div>

                        <div class="song-title">
                                <div class="artist">Phish</div>
                                <div class="song">Suzy Greenberg</div>
                        </div>

                        <div class="playlist-controls">
                                <div class="circle"></div>
                                <div class="play-song"><i class="fa fa-play" id="play"></i></div>
                        </div>

                        <div class="song-list">

                                    <div class="line"></div>
                                    <div class="line two"></div>
                                    <div class="line three"></div>
                                    <div class="line four"></div>

                                    <table>
                                        <tr id="billy" data-title="billyBreathes">
                                        <td class="num">1</td>
                                        <td class="title">Billy Breathes</td>
                                        <td class="length">3:00</td>
                                        </tr>
                                        <tr id="hood" data-title="harryHood">
                                        <td class="num">2</td>
                                        <td class="title">Harry Hood</td>
                                        <td class="length">2:54</td>
                                        </tr>
                                        <tr id="suzy" data-title="suzyGreenberg">
                                        <td class="num">3</td>
                                        <td class="title">Suzy Greenberg</td>
                                        <td class="length">2:54</td>
                                        </tr>
                                        <tr id="divided" data-title="themeFromTheBottom">
                                        <td class="num">4</td>
                                        <td class="title">Theme From The Bottom</td>
                                        <td class="length">2:54</td>
                                        </tr>
                                    </table>

                                    <div class="social">

                                                {{-- twitter --}}
                                                <a href="https://twitter.com/McGreenBeats" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>

                                                {{-- Linkedin --}}
                                                <a href="https://www.linkedin.com/in/mattcgreenberg" target="_blank">
                                                    <i class="fa fa-linkedin"></i>
                                                {{-- codepen --}}

                                                </a><a href="https://codepen.io/mattgreenberg/" target="_blank">
                                                    <i class="fa fa-codepen">  </i>
                                                </a>

                                    </div>

                        </div>

                        <div class="volume">
                            <i class="fa fa-volume-off" id="volume-off"></i>
                            <i class="fa fa-volume-up" id="volume-up"></i>
                            <div class="slider-volume"></div>
                        </div>

                        <div class="slide-up">
                            <i class="fa fa-chevron-up"></i>
                        </div>

                </div>

         </div>

    @endsection

    
    @section('title','Music Page')