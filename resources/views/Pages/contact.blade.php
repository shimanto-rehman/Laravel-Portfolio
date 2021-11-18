@extends('layouts.app')


    @section('content')
        <div>

            <div style="padding-top:10px" ></div>

                <div class="flex-center">
                    <div class= "content" >
                        <div class=" title m-b-md midhead_about ">
                                Contact <span class="text-secondary">Me</span>
                        </div>
                    </div>
                </div>

                <div class="text">
                        This is how you can reach me ...
                </div>
    
                <div class="boxes">

                    <div>
                        <span class="text-secondary">
                            Email:
                        </span>
                        smshimantorahman47@gmail.com
                    </div>

                    <div>
                        <span class="text-secondary">
                            Phone:
                        </span>
                        (+880) 1782412446 &
                        (+880) 1521402802
                    </div>
                    
                    <div>
                        <span class="text-secondary">
                            Address:
                        </span>
                        Shurma R/A, Road No:6, Block:A, House No:73
                    </div>

                </div>
                <div class="text">
                        You can send me text below...                       
                </div>
                <div class="contactus">
                        <div class="contactform flex-center">
                        <form method="POST" id="reused_form" action="{{url('send/email')}}">
                            @csrf
                            
                            @if(Session::has("success"))
                            <div class="alert alert-success">
                                <b>Successfully</b>, your email sent.
                            </div>
                            @endif

                                <input id="first-name" type="text" name="" class="inputtext" placeholder="First Name" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" value="{{old('first-name')}}" required maxlength="50" autofocus>
                                <input id="last-name" type="text" name="" class="inputtext" placeholder="Last Name" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" value="{{old('last-name')}}" required maxlength="50" autofocus>
                                <input id="subject" type="text" name="" class="inputtext" placeholder="Subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : ''}}" value="{{old('subject')}}" required maxlength="50" autofocus>
                                <input id="email" type="email" name="email" class='inputtext' placeholder="@ Your Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" value="{{old('email')}}" required maxlength="50" autofocus>
                                <textarea id="message" type="message" name="message" class="inputmessage" placeholder="Your Message..." class="form-control{{ $errors->has('message') ? ' is-invalid' : ''}}" cols="30" rows="10"></textarea>

                                <button class="submitbutton" type='submit'>Submit</button>
                            </form>

                            <div  id="success_message" style="display:none">
                                <h3>Submitted the form successfully!</h3>
                                <p>
                                We will get back to you soon.
                                </p>
                            </div>

                            <div id="error_message"
                                  style="width:100%; height:100%; display:none; ">
                                      <h3>Error</h3>
                                      Sorry there was an error sending your form.
                          
                            </div>


                        </div>
                     
                        
                        <button class="submitbutton" type='submit'>Submit</button>
                        
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

    
    @section('title','Contact Page')

