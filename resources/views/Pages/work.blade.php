@extends('layouts.app')


    @section('content')

    <div>

            <div style="padding-top:10px" ></div>

                <div class="flex-center">
                    <div class= "content" >
                        <div class=" title m-b-md midhead_about ">
                                My <span class="text-secondary">Works</span>
                        </div>
                    </div>
                </div>

                <div class="text">
                        Let me show you some of my projects ...
                </div>
    
                <div class="projects">

                    <div class="item">

                        <picture>
                                <source 
                                   media="(min-width: 650px)"
                                   srcset="https://i.imgur.com/EWhmPHF.jpg?1">
                                <source 
                                   media="(max-width: 500px)"
                                   srcset="https://i.imgur.com/f0mwr35.jpg?1">
                                <img src="https://i.imgur.com/EWhmPHF.jpg?1" alt="Project">
                        </picture>

                        <div class="elements">
                                <a href="#" class="btn-light">
                                    <i class="fas fa-eye"></i> Project
                                </a>
                                <a href="#" class="btn-dark">
                                        <i class="fab fa-github"></i> Github
                                </a>
                        </div>

                    </div>
                    <div class="item">

                        <picture>
                                        <source 
                                           media="(min-width: 650px)"
                                           srcset="https://i.imgur.com/EWhmPHF.jpg?1">
                                        <source 
                                           media="(max-width: 500px)"
                                           srcset="https://i.imgur.com/f0mwr35.jpg?1">
                                        <img src="https://i.imgur.com/EWhmPHF.jpg?1" alt="Project">
                        </picture>

                        <div class="elements">
                                <a href="#" class="btn-light">
                                    <i class="fas fa-eye"></i> Project
                                </a>
                                <a href="#" class="btn-dark">
                                        <i class="fab fa-github"></i> Github
                                </a>
                        </div>

                    </div>

                    <div class="item">

                        <picture>
                                        <source 
                                           media="(min-width: 650px)"
                                           srcset="https://i.imgur.com/EWhmPHF.jpg?1">
                                        <source 
                                           media="(max-width: 500px)"
                                           srcset="https://i.imgur.com/f0mwr35.jpg?1">
                                        <img src="https://i.imgur.com/EWhmPHF.jpg?1" alt="Project">
                        </picture>

                        <div class="elements">
                                <a href="#" class="btn-light">
                                    <i class="fas fa-eye"></i> Project
                                </a>
                                <a href="#" class="btn-dark">
                                        <i class="fab fa-github"></i> Github
                                </a>
                        </div>

                    </div>

                    <div class="item">

                        <picture>
                                        <source 
                                           media="(min-width: 650px)"
                                           srcset="https://i.imgur.com/EWhmPHF.jpg?1">
                                        <source 
                                           media="(max-width: 500px)"
                                           srcset="https://i.imgur.com/f0mwr35.jpg?1">
                                        <img src="https://i.imgur.com/EWhmPHF.jpg?1" alt="Project">
                        </picture>

                        <div class="elements">
                                <a href="#" class="btn-light">
                                    <i class="fas fa-eye"></i> Project
                                </a>
                                <a href="#" class="btn-dark">
                                        <i class="fab fa-github"></i> Github
                                </a>
                        </div>

                    </div>

                    <div class="item">

                        <picture>
                                        <source 
                                           media="(min-width: 650px)"
                                           srcset="https://i.imgur.com/EWhmPHF.jpg?1">
                                        <source 
                                           media="(max-width: 500px)"
                                           srcset="https://i.imgur.com/f0mwr35.jpg?1">
                                        <img src="https://i.imgur.com/EWhmPHF.jpg?1" alt="Project">
                        </picture>

                        <div class="elements">
                                <a href="#" class="btn-light">
                                    <i class="fas fa-eye"></i> Project
                                </a>
                                <a href="#" class="btn-dark">
                                        <i class="fab fa-github"></i> Github
                                </a>
                        </div>

                    </div>

                </div>


         </div>

         {{-- For Sign Logo  --}}
                {{-- <footer  id="footer aboutfooter">

                        <div class="flex-container">
                            <div class="text1">Copyright &copy; <span class="text-secondary">2019</div>
                            <div  class='logo' ></div>
                        </div>

                </footer> --}}
        {{-- End of Sign Logo --}}

    @endsection

    
    @section('title','WorkPage')