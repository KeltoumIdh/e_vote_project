@vite('resources/css/slider.css')
@extends('layouts.app')
@section('content')
    @vite('resources/css/styleCards.css')

    <div class="c">

        <input type="radio" name="a" id="cr-1" checked>
        <label for="cr-1" style="--hue: 82"></label>
        <div class="ci" style="--z: 4">
            {{-- <h2 class="ch" style="--h: 32; --s: 80%; --l: 90%">What do you know?</h2> --}}
            <img src="2.png" alt="Snow on leafs">
        </div>

        <input type="radio" name="a" id="cr-2">
        <label for="cr-2" style="--hue: 82"></label>
        <div class="ci" style="--z: 3">
            {{-- <h2 class="ch" style="--h: 82; --s: 80%; --l: 90%">Look from inside?</h2> --}}
            <img src="3.png" alt="Trees">
        </div>

        <input type="radio" name="a" id="cr-3">
        <label for="cr-3" style="--hue: 82"></label>
        <div class="ci" style="--z: 2">
            {{-- <h2 class="ch" style="--h: 40; --s: 100%; --l: 89%">In the mountains?</h2> --}}
            <img src="4.png" alt="Mountains and houses">
        </div>

        <input type="radio" name="a" id="cr-4">
        <label for="cr-4" style="--hue: 82"></label>
        <div class="ci" style="--z: 1">
            {{-- <h2 class="ch" style="--h: 210; --s: 70%; --l: 90%">Above looks beautiful?</h2> --}}
            <img src="5.png" alt="Sky and mountains">
        </div>

    </div>
    <div class="text-center mb-4">
        <h1 class="text-2xl pt-4 font-semibold">All Elections</h1>
    </div>
    <div class="ag-format-container">
        <div class="ag-courses_box">
    @foreach ($elections as $item)
            <div class="ag-courses_item">
                <a href="{{ '/vote/' . $item->id }}"
                    class="ag-courses-item_link">
                    <div class="ag-courses-item_bg"></div>

                    <div class="ag-courses-item_title">
                        {{ $item->name }}
                    </div>

                    <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                            {{ \Carbon\Carbon::parse($item->start)->format('Y-m-d') }}
                        </span>
                    </div>
                    <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                            {{ \Carbon\Carbon::parse($item->end)->format('Y-m-d') }}
                        </span>
                    </div>
                </a>
            </div>
@endforeach

        </div>
    </div>

    <script>
        // Fonction pour changer de diapositive automatiquement
        function autoChangeSlide() {
            var radioButtons = document.querySelectorAll('input[name="a"]');
            // Recherchez le bouton radio actuellement cochée
            var checkedRadioButton = document.querySelector('input[name="a"]:checked');
            // Trouvez l'index du bouton radio actuellement cochée dans la liste
            var currentIndex = Array.from(radioButtons).indexOf(checkedRadioButton);
            // Calculez l'index de la prochaine diapositive
            var nextIndex = (currentIndex + 1) % radioButtons.length;
            // Cochez le prochain bouton radio pour changer de diapositive
            radioButtons[nextIndex].checked = true;
        }
        // Appelez la fonction autoChangeSlide toutes les 5 secondes
        setInterval(autoChangeSlide, 5000);
    </script>
@endsection
