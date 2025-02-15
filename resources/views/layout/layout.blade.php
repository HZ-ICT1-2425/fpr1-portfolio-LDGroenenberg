<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <meta name="description" content="portofolio website">
    <meta name="author" content="Lucas Groenenberg">
    <link rel="stylesheet" href=@vite(['resources/css/header.css'])>
    @yield('contentcss')
    <link rel="stylesheet" href=@vite(['resources/css/footer.css'])>
</head>
<body>
{{-- Navigation bar --}}
<header>
    <section class="headerTitle">
        <h1>&lt;Who i am/&gt;</h1>
    </section>
    <section class="pageNavigation">
        <nav>
            <a {{ route('home') }} class="indexbutton">&lt;Home&gt;</a>
            <a class="profilebutton" href="html/profile.html">&lt;Profile&gt;</a>
            <a class="blogbutton" href="html/blog.html">&lt;Blog&gt;</a>
            <a class="dashboardbutton" href="html/dashboard.html">&lt;Dashboard&gt;</a>
            <a class="faqbutton" href="html/faq.html">&lt;faq&gt;</a>
        </nav>
    </section>
    <section class="usefullLinks">
        <aside>
            <a class="dropDownButton">&lt;Links&gt;</a>
            <div class="dropDown">
                <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20240412.pdf?_gl=1*1us1txq*_up*MQ..&gclid=Cj0KCQjwiuC2BhDSARIsALOVfBKurbY7bDLmshx8x2BGn1gRz97T8jy3Tz_x_yvpk8ipMFH4tgeMWnEaAt2hEALw_wcB" target="_blank">Course and Examination Regulations</a>
                <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf" target="_blank">Implementation Regulations</a>
                <a href="https://glaze-donut-5a5.notion.site/PCO1en-Your-Showcase-Website-7bc8c340f66047d0b49b83e8dc44ba23" target="_blank"> Learn environment</a>
                <a href="https://fs.myhz.nl/adfs/oauth2/authorize/?resource=urn%3AWebservice-hz_portal&state=6f967f3720afbdd9805cbd634675aaa8&scope=openid&response_type=code&approval_prompt=auto&redirect_uri=https%3A%2F%2Fportal.hz.nl%2Fauth%2Fadfs%2Fcallback&client_id=b25d3143-ffab-46db-96bd-fff258b69da3&client-request-id=45af508e-8c57-41a6-7300-00800100003a&pullStatus=0" target="_blank">MyHZ</a>
                <a href="https://github.com/HZ-HBO-ICT" target="_blank">Github HZ HBO ICT</a>
            </div>
        </aside>
    </section>
</header>
{{-- Content --}}
<main>
    @yield('content')
</main>
{{-- Footer --}}
<footer>
    <section class="footerCredits">
        <div>
            <p>Folowing HBO-ICT at:<a href="https://hz.nl/" target="_blank"><img class="hz-extended-logo" src="{{ Vite::asset('resources/images/hz-university-of-applied-sciences.png') }}" alt="hz-university-of-applied-sciences"></a></p>
        </div>
        <hr>
        <div>
            <p>Made by Lucas Groenenberg <a href="https://github.com/LDGroenenberg" target="_blank"><img src="{{ Vite::asset('resources/images/githubicon.png') }}" alt="Github"></a></p>
        </div>
    </section>
    <section class="footerLinks">
        <div>
            <h4>&lt;Pages/&gt;</h4>
            <ul>
                <li><a class="profilebutton" href="/html/profile.html">&lt;Profile&gt;</a></li>
                <li><a class="blogbutton" href="/html/blog.html">&lt;Blog&gt;</a></li>
                <li><a class="dashboardbutton" href="/html/dashboard.html">&lt;Dashboard&gt;</a></li>
                <li><a class="faqbutton" href="/html/faq.html">&lt;faq&gt;</a></li>
            </ul>
        </div>
        <article><!--vertical line--></article>
        <div class="footerUsefullLinks">
            <h4>&lt;Links/&gt;</h4>
            <ul>
                <li><a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20240412.pdf?_gl=1*1us1txq*_up*MQ..&gclid=Cj0KCQjwiuC2BhDSARIsALOVfBKurbY7bDLmshx8x2BGn1gRz97T8jy3Tz_x_yvpk8ipMFH4tgeMWnEaAt2hEALw_wcB" target="_blank">Course and Examination Regulations</a></li>
                <li><a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf" target="_blank">Implementation Regulations</a></li>
                <li><a href="https://glaze-donut-5a5.notion.site/PCO1en-Your-Showcase-Website-7bc8c340f66047d0b49b83e8dc44ba23" target="_blank"> Learn environment</a></li>
                <li><a href="https://fs.myhz.nl/adfs/oauth2/authorize/?resource=urn%3AWebservice-hz_portal&state=6f967f3720afbdd9805cbd634675aaa8&scope=openid&response_type=code&approval_prompt=auto&redirect_uri=https%3A%2F%2Fportal.hz.nl%2Fauth%2Fadfs%2Fcallback&client_id=b25d3143-ffab-46db-96bd-fff258b69da3&client-request-id=45af508e-8c57-41a6-7300-00800100003a&pullStatus=0" target="_blank">MyHZ</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">Github HZ HBO ICT</a></li>
            </ul>
        </div>
    </section>
</footer>
</body>
</html>
