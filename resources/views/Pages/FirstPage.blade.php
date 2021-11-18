@extends('layouts.app')


    @section('content')
        
        <div style="padding-top:200px" ></div>
        <div class="flex-center">
            
            <div style= "padding-top:200px" ></div>

            {{-- Start of Contents --}}
                        <div class= "content" >
                            <div class=" title m-b-md midhead ">
                                    Shimanto <span class="text-secondary">Rahman</span>
                            </div>
                            <div class="icons">
                                <a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=DmwnWrRnZMwTpBQNbWXjLxRjVrhXhFGxBsRKVjFlJWsRflZcVxWcmFFlxpCNJSjFGlfkmhZbllPv" ><i class="fas fa-envelope fa-2x icon"></i></a>
                                <a style="padding:10px" href="https://twitter.com/shimanto_rehman" ><i class="fab fa-twitter fa-2x icon"></i></a>
                                <a style="padding:10px" href="https://www.facebook.com/s.m.shimanto.rehman" ><i class="fab fa-facebook-square fa-2x icon"></i></a>
                                <a style="padding:10px" href="https://www.instagram.com/shimanto_rehman/" ><i class="fab fa-instagram fa-2x icon"></i></a>
                                <a style="padding:10px" href="https://github.com/shimanto-rehman" ><i class="fab fa-github fa-2x icon"></i></a>
                                <a style="padding:10px" href="https://www.linkedin.com/in/shimanto-rahman-aa347a148/" ><i class="fab fa-linkedin fa-2x icon"></i></a>
                            </div>
                            <div  style="padding-top:50px" > </div>
                            <div class="btn btn-outline-light btn-lg">
                                <a href="http://shimanto.me/about">About Me</a>
                            </div>

                        </div>
            {{-- End content         --}}

        </div>
        
        {{-- For Sign Logo  --}}
        <div class="FirstPagefooter">
            <footer  id="footer">

                    <div class="flex-container">
                        <div class="text1">Copyright &copy; <span class="text-secondary">2019</div>
                        <div  class='logo' ></div>
                    </div>

            </footer>
        </div>
        {{-- End of Sign Logo --}}


    @endsection
    
    @section('title','Homepage')
