@extends('layouts.app')


    @section('content')
        <div>

            <div style="padding-top:10px" ></div>

                <div class="flex-center">
                    <div class= "content" >
                        <div class=" title m-b-md midhead_about ">
                                About <span class="text-secondary">Me</span>
                        </div>
                    </div>
                </div>

                <div class="text">
                        Let me tell you a few things about me ...
                </div>
    
                <div class="about-info">

                    <img class="bio-image">

                    <div class="bio">
                            <h3 class="text-secondary">BIO</h3>
                            
                            <p class="intro">A fresher, committed, friendly and enthusiastic 
                            individual looking to build a long-term career 
                            in the field of Web Developeing  to contribute in
                            creating extraordinary experience with knowledge 
                            of programming, design, and media, as well as 
                            ability to communicate effectively in a team setting, 
                            and possessing a strong willingness to learn about 
                            entrepreneurship. Very detail-oriented and analytical.
                            </p>
                    </div>

                    <div class="job job-1">
                            <h3>Shahjalal University of Science & Technology,Sylhet</h3>
                            <h6>Student</h6>
                            <p>
                                Studing Computer Science & Engineering( Bsc 2016-2017 session )
                            </p>
                    </div>

                    <div class="job job-2">
                            <h3>Govt. Sayed Hatem Ali College,Barishal</h3>
                            <h6>Student</h6>
                            <p>
                                Studied  at Science group( Hsc 2015-2016 session )
                            </p>
                    </div>

                    <div class="job job-3">
                            <h3>Barishal Zilla School,Barishal</h3>
                            <h6>Student</h6>
                            <p>
                                Studied at Science group( Ssc 2014-2015 session )
                            </p>
                    </div>

                </div>


         </div>

         {{-- Home Button --}}
                <div  style="padding-top:20px" > </div>
                <div id="my_centered_buttons"> 
                    <div class="btn btn-outline-light btn-lg" >
                        <a href="http://shimanto.me/">Home</a>
                    </div>
                </div>

         {{-- End of Home Button --}}

         {{-- For Sign Logo  --}}
                <footer  id="footer aboutfooter">

                        <div class="flex-container">
                            <div class="text1">Copyright &copy; <span class="text-secondary">2019</div>
                            <div  class='logo' ></div>
                        </div>

                </footer>
        {{-- End of Sign Logo --}}

    @endsection

    
    @section('title','AboutPage')