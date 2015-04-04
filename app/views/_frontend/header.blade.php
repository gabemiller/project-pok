<header>
    <div class="container">
        <div class="header-pictures">
            <div class="picture-pokrova header-element"></div>
            <div class="picture-templom-1 header-element"></div>
            <h1 class="picture-cross header-element">Görög Katolikus kereszt</h1>


            <div class="picture-templom-2 header-element"></div>
            <div class="picture-templom-3 header-element"></div>

            <div class="picture-templom-4 header-element"></div>
            <h1 class="header-element site-title">{{Setting::get('site-title')}}</h1>
        </div>
    </div>
</header>

<nav class="main-navbar">
    <div class="container">
        <ul>
            @include('_frontend.menu', array('items' => $mainMenu->roots()))
        </ul>
    </div>
</nav>

<section class="webradio">
    <div class="container">
        <h1 class="player-title">Webrádió</h1>

        <div class="player-wrapper">
            <audio class="audio-player" preload="auto" controls>
                <source src="http://online.szentistvanradio.hu:7000/;&type=mp3" type="audio/mpeg"/>
            </audio>
        </div>

        <form class="form-inline">
            <div class="form-group">
                <label>Válasszon egy rádióállomást</label>
                <select name="radio" class="form-control input-sm radio-select">
                    <option value="http://92.43.201.24:8000/mr">Mária rádió</option>
                    <option selected value="http://online.szentistvanradio.hu:7000/;&type=mp3">Szent István
                        rádió
                    </option>
                    <option value="http://katolikusradio.hu:9000/live_low.mp3">Katolikus rádió
                    </option>
                </select>
            </div>
        </form>

    </div>
</section>