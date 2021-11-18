@extends('layouts.app')


    @section('content')
        <div>

            <div style="padding-top:10px" ></div>

                <div class="flex-center">
                    <div class= "content" >
                        <div class=" title m-b-md midhead_about ">
                                My <span class="text-secondary">Gallary</span>
                        </div>
                    </div>
                </div>

                <div class="text">
                        Here are some of my best photos ...
                </div>
    
                    <div class="accordion1">
                        <ul>
                            <li tabindex="1">
                            <div>
                                <a data-fslightbox="example-gallery1" href="/images/1.jpg">
                                <h2>Facebook Profile</h2>
                                <p>Shimanto Rehman</p>
                                </a>
                            </div>
                            </li>
                            <li tabindex="2">
                            <div>
                                <a data-fslightbox="example-gallery1" href="/images/8.jpg">
                                <h2>Facebook Profile</h2>
                                <p>Shimanto Rehman</p>
                                </a>
                            </div>
                            </li>
                            <li  tabindex="3">
                            <div>
                                <a data-fslightbox="example-gallery1" href="/images/3.jpg">
                                <h2>Facebook Profile</h2>
                                <p>Shimanto Rehman</p>
                                </a>
                            </div>
                            </li>
                            <li tabindex="4">
                            <div>
                                <a data-fslightbox="example-gallery1" href="/images/6.jpg">
                                <h2>Facebook Profile</h2>
                                <p>Shimanto Rehman</p>
                                </a>
                            </div>
                            </li>
                            <li tabindex="5">
                            <div>
                                <a data-fslightbox="example-gallery1" href="/images/5.jpg">
                                <h2>Facebook Profile</h2>
                                <p>Shimanto Rehman</p>
                                </a>
                            </div>
                            </li>
                            <li tabindex="6">
                            <div>
                                <a data-fslightbox="example-gallery1" href="/images/7.jpg">
                                <h2>Facebook Profile</h2>
                                <p>Shimanto Rehman</p>
                                </a>
                            </div>
                            </li>
                        </ul>
                    </div>

                    <div class="text">
                        Cover Photos...
                    </div>

                    <div class="accordion2">
                            <ul>
                                <li tabindex="1">
                                <div>
                                    <a data-fslightbox="example-gallery2" href="/images/cover/1.jpg">
                                    <h2>Cover Photo</h2>
                                    <p>Shimanto Rehman</p>
                                    </a>
                                </div>
                                </li>
                                <li tabindex="2">
                                <div>
                                    <a data-fslightbox="example-gallery2" href="/images/cover/2.jpg">
                                    <h2>Cover Photo</h2>
                                    <p>Shimanto Rehman</p>
                                    </a>
                                </div>
                                </li>
                                <li tabindex="3">
                                <div>
                                    <a data-fslightbox="example-gallery2" href="/images/cover/3.jpg">
                                    <h2>Cover Photo</h2>
                                    <p>Shimanto Rehman</p>
                                    </a>
                                </div>
                                </li>
                                <li tabindex="4">
                                <div>
                                    <a data-fslightbox="example-gallery2" href="/images/cover/4.jpg">
                                    <h2>Cover Photo</h2>
                                    <p>Shimanto Rehman</p>
                                    </a>
                                </div>
                                </li>
                                <li tabindex="5">
                                <div>
                                    <a data-fslightbox="example-gallery2" href="/images/cover/5.jpg">
                                    <h2>Cover Photo</h2>
                                    <p>Shimanto Rehman</p>
                                    </a>
                                </div>
                                </li>
                                <li tabindex="6">
                                <div>
                                    <a data-fslightbox="example-gallery2" href="/images/cover/6.jpg">
                                    <h2>Cover Photo</h2>
                                    <p>Shimanto Rehman</p>
                                    </a>
                                </div>
                                </li>
                            </ul>
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
                <div  style="padding-top:50px" > </div>

         {{-- End of Home Button --}}

         {{-- For Sign Logo  --}}
                {{-- <footer  id="footer aboutfooter">

                        <div class="flex-container">
                            <div class="text1">Copyright &copy; <span class="text-secondary">2019</div>
                            <div  class='logo' ></div>
                        </div>

                </footer> --}}
        {{-- End of Sign Logo --}}

    @endsection

    
    @section('title','Gallery')