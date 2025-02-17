@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/blogarticlestyles.css') }}">
@endsection

@section('content')
    <section>
        <h1>&lt;Website feedback&gt;</h1>
        <p>
            Instructor Feedback<br/>

            I received positive feedback on the identity and layout of my website, with suggestions to add more color for visual enhancement.<br/>
            In response, I incorporated green elements into the design.<br/>
            My dashboard needed improvement to better align with the overall aesthetic, so I adjusted the color scheme to create a more cohesive look.<br/>
            Additionally, it was suggested that I enhance the details of my blog.<br/>
            To address this, I refined the layout and made the "Read More" link more prominent.<br/>
            I also received advice to review my code spacing and ensure it was clean and efficient, avoiding unnecessary whitespace.<br/>
            <br/>
            Peer Feedback<br/>
            <br/>
            From my fellow students, I received similar recommendations to add more color and improve the readability of the links on the blog page.<br/>
            They also suggested including a description and author in the HTML file, which I added.<br/>
            Lastly, they advised consolidating my CSS files to reduce redundancy, which I took into account by streamlining the number of files used.<br/>
            <br/>
            Assessment Results<br/>
            <br/>
            Are all necessary webpages implemented?<br/>
            Feedback: All required pages were present, with relevant content.<br/>
            <br/>
            Design Creativity & Presentation<br/>
            Average Score: 4 out of 5<br/>
            <br/>
            Study & Career Motivation<br/>
            Average Score: 4.5 out of 5<br/>
            <br/>
            Functionality<br/>
            Feedback: All features were successfully implemented.<br/>
            <br/>
            Development Environment<br/>
            Feedback: Everything was set up correctly.<br/>
            <br/>
            Code Quality<br/>
            Feedback: The code quality was good.<br/>
            <br/>
            Adaptability<br/>
            Feedback: Adaptability was rated positively.
        </p>
    </section>
@endsection
