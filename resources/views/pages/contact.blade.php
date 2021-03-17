@extends('layouts.app')

@section('content')
<Section class ="first-section">
<div class="background">
    <div class="header"><h3> {{$title}}</h3></div>
    <div class="summary"><h3>Contact us today to learn more about what we can offer! </h3></div> 

    <div class="contact-form">
    <div class="jss136">
        <div class="jss137 jss176 jss190 jss198 jss212"></div>
        
        <div class="jss137 jss176 jss190 jss198 jss212">
    <form class ="jss57" action="contact" method="POST">
        <div class="jss269 jss58">
                <div class="jss286 jss273 jss287 jss290 jss276">
                    <fieldset class = "jss303 jss280" aria-hidden="true" style="padding-left: 8px;"> 
                    <legend class="jss304" style="width: 0px;">
                        <span>​</span>
                    </legend>
                </fieldset>
                <div class="jss305 jss307">
                <span class="material-icons jss310" aria-hidden="true" style="color:  #cc9433 ;">person</span>
            </div>
            <input aria-invalid="false" class="jss296 jss281 jss301 jss284" name="name" 
            placeholder="Your name" type="name"autocomplete="name" value=""> 
                <div>{{$errors->first('name')}}</div>
            </div>
        </div>

        <div class="jss269 jss58">
            <div class="jss286 jss273 jss287 jss290 jss276">
                <fieldset class = "jss303 jss280" aria-hidden="true" style="padding-left: 8px;"> 
                <legend class="jss304" style="width: 0px;">
                    <span>​</span>
                </legend>
            </fieldset>
            <div class="jss305 jss307">
            <span class="material-icons jss310" aria-hidden="true" style="color:#cc9433 ;">local_phone</span>
        </div>
        <input aria-invalid="false" class="jss296 jss281 jss301 jss284" name="number" 
        placeholder="Phone number" type="" value="">
        </div>
    </div>

    <div class="jss269 jss58">
        <div class="jss286 jss273 jss287 jss290 jss276">
            <fieldset class = "jss303 jss280" aria-hidden="true" style="padding-left: 8px;"> 
            <legend class="jss304" style="width: 0px;">
                <span>​</span>
            </legend>
        </fieldset>
        <div class="jss305 jss307">
        <span class="material-icons jss310" aria-hidden="true" style="color:  #cc9433 ;">email</span>
    </div>
    <input aria-invalid="false" class="jss296 jss281 jss301 jss284" name="email" autocomplete="email"
    placeholder="Email address" type="" value="">
    <div>{{$errors->first('email')}}</div>
    </div>
</div>
</div>

<div class="jss269 jss58" style ="overflow-x: hidden;">
    <div class="jss286 jss273 jss287 jss290 jss276">
        <fieldset class = "jss303 jss280" aria-hidden="true" style="padding-left: 8px;"> 
        <legend class="jss304" style="width: 0px;">
            <span>​</span>
        </legend>
    </fieldset>
    <div class="jss305 jss307">
    <span class="material-icons jss310" aria-hidden="true" style="color:  #cc9433 ;">message</span>
</div>
<textarea aria-hidden="true" class="jss320 jss321" readonly="" rows="1" 
tabindex="-1"></textarea>
<textarea aria-hidden="true" class="jss320 jss321" readonly="" rows="2" 
tabindex="-1"></textarea>
<textarea class="jss320 jss296 jss281 jss298 jss283 jss301 jss284" rows ="2"
style="height: 38px;" aria-invalid="false" name="message" type="" placeholder="Your message
here..."></textarea>
<div>{{$errors->first('message')}}</div>
        </div>
    </div>
</div>
@if(session()->has('message'))
<div class= "alert alert-primary" role ="alert">
    <strong>Success!</strong> {{session()->get('message')}}
</div>
@endif
<div class="demo-button">
    <button class="jss266 jss240 jss242 jss245 jss28" tabindex="0" type="submit" >

    <span class="jss241">
    Request Free Demo & Consultation
    </span>
    </button>
</div>
</div>
<span class="jss335"></span>
    
@csrf
</form>
     
<div class="jss59 jss63 jss60">
<div class="jss59 jss61 jss60 jss322">
<div class="jss136">
<div class="jss137 jss176 jss190 jss195 jss209">
<h1 class="jss100 jss112 jss323">




</h1>
</div>
<div class="links">
<div class="jss137 jss170 jss184 jss194 jss208">
</div>
<p class="jss100 jss108 jss324">Navigation</p>
<div class="jss325">
<a class="jss100 jss129 jss135 jss233 jss235">About Us</a>
</div>
<div class="jss325">
<a class="jss100 jss129 jss135 jss233 jss235">Managed Solutions</a>
</div>
<div class="jss325">
<a class="jss100 jss129 jss135 jss233 jss235">Supply Chain Management</a>
</div>
<div class="jss325">
<a class="jss100 jss129 jss135 jss233 jss235">Careers</a>
</div>
</div>
<div class="jss137 jss170 jss184 jss194 jss208">
<p class="jss100 jss108 jss324">Contact</p>
<p class="jss100 jss108 jss325">
P:
<a href="" style="text-decoration: none; color: black;">(xxx) xxx-xxxx</a>
</p>
<p class="jss100 jss108 jss325">
P: 
<a href="" style="text-decoration: none; color: black;">(xxx) xxx-xxxx</a>
</p>
<p class="jss100 jss108 jss325">
E: 
<a href="mailto:testemail@gmail.com" style="text-decoration: none; color: black;">
    testemail@gmail.com</a>
</p>
</div>
<div class="jss137 jss170 jss184 jss194 jss208">
<p class="jss100 jss108 jss324">Office</p>
<a target="_blank" href="">
<p class="jss100 jss108 jss325">Testing</p>
<p class="jss100 jss108 jss325">xxx xxx. xxx. xx</p>
<p class="jss100 jss108 jss325">xxxxxxxx, xx xxxxxx</p>
</a>
</div>
<div class="logo">
<img src="/Images/Logo.png" alt="Logo">
</div>


    
           
</div>
</Section>

       
        <Section class="third-section">
        <div class="footer">
            © 
            2021 
            Test packaging, Inc. 
        <a target="_blank" href=""> 
            <img src= "/Images/Facebook.png" alt ="FB">
        </a>
        <a target="_blank" href=""> 
            <img src= "/Images/Linkedin.png" alt ="Linkedin">
        </a>
       
        <a target="_blank" href=""> 
            <img src= "/Images/Vimeo.png" alt ="Vimeo">
        </a>  
        </div>
        </Section>
</Section>
@endsection