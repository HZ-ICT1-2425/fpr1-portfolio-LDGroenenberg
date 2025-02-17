@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/blogarticlestyles.css') }}">
@endsection

@section('content')
    <section>
        <h1>&lt;Feedback/&gt;</h1>
        <p>
            It's great to hear that you are already working on creating websites.<br/>
            Even if you're not sure which ICT tasks suit you best, you're already engaging with the subject matter.<br/>
            <br/>
            We will start the school year by building a simple website using HTML and CSS.<br/>
            The program will focus heavily on programming (HTML, JavaScript, TypeScript, and more) especially in the first year.<br/>
            Additionally, you will have plenty of time to familiarize yourself with the different aspects of ICT to follow suitable elective paths.<br/>
            <br/>
            In the SWOT analysis, you indicated that you struggle with multitasking and that you can be too helpful.<br/>
            At the same time, you mentioned being calm and organized: can those skills help reduce multitasking and the distractions that come with it?<br/>
            When you say "too helpful," do you mean that you spend too much time helping others and not enough on your own work?<br/>
            It can be very difficult to say no sometimes, but it shouldn't come at the expense of your own performance.<br/>
            If this causes you a lot of stress and interferes with your studies, you can always make use of the coaching and support we have available at HZ.<br/>
        </p>
    </section>
@endsection
