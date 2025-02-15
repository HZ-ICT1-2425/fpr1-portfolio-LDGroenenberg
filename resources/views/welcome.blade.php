@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href=@vite(['resources/css/indexstyles.css'])>
@endsection

@section('content')

    <section class="mainSectionOne">
    <article class="welcome">
        <h2>&lt;Welcome/&gt;</h2>
        <p>
            My name is Lucas Groenenberg and this is my Who I am portofolio website.<br/>
            this site to tell you a little bit about me witch you can find at the profile page.<br/>
            On the blog page I have some more info like my SWOT analysis.<br/>
            The dashboard page is to keep track of my study progress,<br/>
            and on the FAQ page you can find Frequently Asked Questions.
        </p>
    </article>
    <article class="background"></article>
</section>
<section class="studyChose">
    <article>
        <div>
            <h2>&lt;Why i chose for HBO-ICT/&gt;</h2>
            <p>
                before I signed up for this study I worked 3 years at a elementary school.<br/>
                I started to lose interest in the job,<br>
                and didn't got the fun out of it as when I started working.<br/>
                In the mean time I started to pick up coding and got more ICT tasks at my work.<br/>
                I started with simply copying code and try to edit it to what I wanted it to do,<br/>
                but soon after I started learning html and CSS and made some simple websites.<br/>
                I also found work more fun again by doing some ICT tasks but it just wasn't it.<br/>
                For some time I was looking to start a new study,<br>
                and I just made the decision and chose for HBO ICT.
            </p>
        </div>
        <img class="hzLogo" src="{{ Vite::asset('resources/images/hz-logo.png') }}" alt="hz-logo https://hz.nl/en/">
    </article>
</section>
<section class="ictWorkField">
    <article><h2>&lt;Why the ICT workfield fits me/&gt;</h2>
        <p>
            I like to work with computers. I always want to learn new thing to  achieve my goals.<br/>
            ICT is verry big there are countless options of what you can do.<br/>
            The parts I like the most about ICT are problem solving and doing research,<br/>
            I will just keep going until I know how to do it or fix a problem.<br/>
            also the creative side of it like the design for a website.<br/>
            because of my work experience I fount out I just like working with computers,<br/>
            and that it is something I would just like to do.
        </p>
    </article>
</section>
@endsection
