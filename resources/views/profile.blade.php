@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/profilestyles.css') }}">
@endsection

@section('content')
    <section>
        <article>
            <h2>&lt;Who I am/&gt;</h2>
            <p>
                My name is Lucas and I am 22 years old and I live in Middelburg.<br />
                After high school I followed the MBO teaching assistant course at Scalde.<br />
                After obtaining my diploma, I worked at a primary school in Middelburg for 3 years.<br />
                Here I guided students from all classes, 1 on 1 or in groups.<br />
                The students I worked with needed extra challenges or extra help in all kinds of areas.
            </p>
        </article>
        <article class="characteristics">
            <h2>&lt;my characteristics/&gt;</h2>
            <ul>
                <li>calm</li>
                <li>creatively</li>
                <li>helpful</li>
                <li>patient</li>
            </ul>
        </article>
    </section>
    <section>
        <article class="hobbys">
            <h2>&lt;My Hobbys/&gt;</h2>
            <ul>
                <li>Formula 1</li>
                <li>Gaming</li>
                <li>Coding</li>
                <li>fitness</li>
                <li>mixing music</li>
            </ul>
        </article>
        <article>
            <h2>&lt;Favourite games/&gt;</h2>
            <div class="games">
                <div>
                    <a href="https://store.epicgames.com/en-US/p/rocket-league" target="_blank"><img src="{{ Vite::asset('resources/images/rockedleague.png') }}" alt="Rockedleague"></a>

                </div>
                <div>
                    <a href="https://store.steampowered.com/app/2488620/F1_24/" target="_blank"><img src="{{ Vite::asset('resources/images/Formula1-24.png') }}" alt="Formula 1"></a>

                </div>
                <div>
                    <a href="https://store.steampowered.com/app/2183900/Warhammer_40000_Space_Marine_2/" target="_blank"><img src="{{ Vite::asset('resources/images/warhammer.png') }}" alt="Warhammer 40.000 Spacemarine 2"></a>

                </div>
                <div>
                    <a href="https://www.minecraft.net/nl-nl" target="_blank"><img src="{{ Vite::asset('resources/images/minecraft.png') }}" alt="Minecraft"></a>

                </div>
                <div>
                    <a href="https://zelda.nintendo.com/" target="_blank"><img src="{{ Vite::asset('resources/images/legendofzelda.png') }}" alt="Legend of Zelda"></a>

                </div>
            </div>
        </article>
    </section>
    <section>
        <article>
            <h2>&lt;Favourite music/&gt;</h2>
            <div class="music">
                <div>
                    <a href="https://www.thescoremusic.com/#/" target="_blank"><img src="{{ Vite::asset('resources/images/thescore.png') }}" alt="the Score"></a>

                </div>
                <div>
                    <a href="https://www.positionmusic.com/artist/MTcxNDEwLTE1ZDBhOQ" target="_blank"><img src="{{ Vite::asset('resources/images/ohthelarceny.png') }}" alt="Oh the larceny"></a>

                </div>
                <div>
                    <a href="https://www.officialkaleo.com/" target="_blank"><img src="{{ Vite::asset('resources/images/kaleo.png') }}" alt="Kaleo"></a>

                </div>
                <div>
                    <a href="https://www.tiesto.com/" target="_blank"><img src="{{ Vite::asset('resources/images/tiesto.png') }}" alt="Tiësto"></a>

                </div>
                <div>
                    <a href="https://www.arminvanbuuren.com/" target="_blank"><img src="{{ Vite::asset('resources/images/armin.png') }}" alt="Armin van Buuren"></a>

                </div>
            </div>
        </article>
        <article class="links">
            <h2>&lt;Links/&gt;</h2>
            <ul>
                <li><a href="https://github.com/LDGroenenberg" target="_blank">&lt;My Github&gt;</a></li>
            </ul>
        </article>
    </section>
@endsection
