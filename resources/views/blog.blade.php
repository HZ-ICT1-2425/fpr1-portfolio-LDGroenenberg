@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/blogstyles.css') }}">
@endsection

@section('content')
    <section>
        <article>
            <h2>&lt;My study choise/&gt;</h2>
            <p>
                before I signed up for this study I worked 3 years at a elementary school.<br/>
                I started to lose interest in the job and didn't got the fun out of it as when I started working.<br/>
                In the mean time I started to pick up coding and got more ICT tasks at my work. <a href="blog/studychoice.html">...read more</a>
            </p>
        </article>
        <article>
            <h2>&lt;SWOT analysis/&gt;</h2>
            <p>
                Click on the link to see my SWOT analysis.<br/>
                <a href="blog/swot.html">...read more</a>
            </p>
        </article>
    </section>
    <section>
        <article>
            <h2>&lt;Programming experience/&gt;</h2>
            <p>
                I have some experience with HTML and CSS.<br/>
                I taught myself how to do it through freecodecamp and by watching YouTube videos.<br/>
                <a href="blog/experience.html">...read more</a>
            </p>
        </article>
        <article>
            <h2>&lt;First feedback/&gt;</h2>
            <p>
                It's great to hear that you are already working on creating websites.<br/>
                Even if you're not sure which ICT tasks suit you best, you're already engaging with the subject matter.<br/>
                Have you found the preparatory assignment? <a href="blog/firstfeedback.html">...read more</a>
            </p>
        </article>
    </section>
    <section>
        <article class="ictarticle">
            <h2>&lt;Arm VS x86/&gt;</h2>
            <p>
                In 2020, Apple introduced its M1 chip, which runs on ARM.<br/>
                Previously, ARM was primarily used for mobile chips.<br/>
                However, when Apple released the M1 chip for MacBooks, it was considered revolutionary.<br/>
                Apple's M chips are only available for Apple products.<br/>
                But this year, in 2024, Qualcomm launched its Snapdragon X series, which also runs on ARM, but for Windows laptops. <a href="blog/ictarticle.html">...read more</a>
            </p>
        </article>
        <article class="sitefeedback">
            <h2>&lt;Website feedback/&gt;</h2>
            <p>
                I received positive feedback on the identity and layout of my website,<br/>
                with suggestions to add more color for visual enhancement.<br/>
                In response, I incorporated green elements into the design.<br/>
                My dashboard needed improvement to better align with the overall aesthetic,<br/>
                so I adjusted the color scheme to create a more cohesive look. <a href="blog/sitefeedback.html">...read more</a>
            </p>
        </article>
    </section>
@endsection
