@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/blogarticlestyles.css') }}">
@endsection

@section('content')
    <section>
        <h1>&lt;SWOT analysis/&gt;</h1>
        <p>
            Strengths<br/>
            - patient<br/>
            - Calm<br/>
            - plans<br/>
            - go-getter<br/>
            <br/>
            Weaknesses<br/>
            - Multi-tax<br/>
            - too helpful, which can be detrimental to my own working time<br/>
            <br/>
            Opportunities<br/>
            - Through this training, I find a group that suits me better.<br/>
            <br/>
            Threats<br/>
            - Due to my medical situation, I have to be extra careful with certain activities
        </p>
    </section>
@endsection
