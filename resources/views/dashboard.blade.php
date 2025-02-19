@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/dashboardstyles.css') }}">
@endsection

@section('content')
    <table>
        <thead>
        <tr>
            <th>quarter</th>
            <th>Course</th>
            <th>ECs</th>q
            <th>exam</th>
            <th>Grade</th>
        </tr>
        </thead>
        <tr class="inProgress"> <!-- quarter 1 -->
            <td rowspan="3" id="inProgress">1</td>
            <td>programme and carear oriantacion</td>
            <td>2.5</td>
            <td>interview</td>
            <td>0</td>
        </tr>
        <tr class="failed">
            <!-- quarter 1 -->
            <td>computer science basics</td>
            <td>5</td>
            <td>Written exam</td>
            <td>0</td>
        </tr>
        <tr class="passed">
            <!-- quarter 1 -->
            <td>programming basics</td>
            <td>5</td>
            <td> Case study exam</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 2 -->
            <td rowspan="2" id="notStarted">2</td>
            <td rowspan="2">Object-Oriented Programming</td>
            <td>5</td>
            <td>group assignment</td>
            <td>0</td>
        </tr>
        <tr class="notStarted">
            <!-- quarter 2 -->
            <td>5</td>
            <td>case study exam</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 3 -->
            <td rowspan="4">3</td>
            <td rowspan="4">Framework project 1</td>
            <td>5</td>
            <td>On-site case study exam</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 3 -->
            <td>1.25</td>
            <td>Database exam</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 3 -->
            <td>2.5</td>
            <td>Group presentation on project result</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 3 -->
            <td>1.25</td>
            <td>Group portfolio with individual elements on requirements</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 4 -->
            <td rowspan="3" id="notStarted">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td>2.5</td>
            <td>Final delivery</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 4 -->
            <td>2.5</td>
            <td>Report of acceptance tests and optional assessments</td>
            <td>0</td>
        </tr>
        <tr class="notStarted"> <!-- quarter 4 -->
            <td>5</td>
            <td>IT Development portfolio</td>
            <td>0</td>
        </tr>
        <tr class="notStarted">
            <td id="notStarted">3/4</td>
            <td>Business IT Consultancy basics</td>
            <td>2.5</td>
            <td>video</td>
            <td>0</td>
        </tr>
        <tr class="notStarted">
            <td rowspan="2" id="notStarted">1/2/3/4</td>
            <td>Personal Professional Development Exploration</td>
            <td>12.5</td>
            <td>Criterium focused interview</td>
            <td>0</td>
        </tr>
        <tr class="notStarted">
            <td>IT Personality</td>
            <td>3</td>
            <td>Portfolio</td>
            <td>0</td>
        </tr>
        <tr>
            <td colspan="5">Minimum credits required to pass (NBSA): 45 EC</td>
        <tr>
            <td colspan="5">Minimum Grade required to pass: 5.5</td>
        </tr>
        </tr>
        <tr>
            <td colspan="5">In progress: 🟨, Failed: 🟥, Passed: 🟩</td>
        </tr>
    </table>
@endsection
