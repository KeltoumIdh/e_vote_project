@vite('resources/css/slider.css')
@extends('layouts.app')
@section('content')
    @vite('resources/css/styleCards.css')
    ccdncdnjc



    {{-- <div class="flex flex-col items-center mt-8">
    <!-- First Box -->
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
        <div class="flex justify-center pt-4">
          <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="../../Images/gaming.jpg" alt="gaming tournament"/>
        </div>
        <div class="flex flex-col items-center pb-10">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Gaming tournament</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Fifa 23</span>
            <div class="flex mt-4">
                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
        </div>
    </div>

    <!-- Second Box -->
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
        <div class="flex justify-center pt-4">
            <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Delegue de classe"/>
        </div>
        <div class="flex flex-col items-center pb-10">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Delegue de classe</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">3rd year</span>
            <div class="flex mt-4">
                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
        </div>
    </div>

    <!-- Third Box -->
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
        <div class="flex justify-center pt-4">
            <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Best Student"/>
        </div>
        <div class="flex flex-col items-center pb-10">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Best Student</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">3rd Year</span>
            <div class="flex mt-4">
                <a href="/vote">
                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </a></div>
        </div>
    </div>
  </div> --}}
    <div class="c">

        <input type="radio" name="a" id="cr-1" checked>
        <label for="cr-1" style="--hue: 82"></label>
        <div class="ci" style="--z: 4">
            {{-- <h2 class="ch" style="--h: 32; --s: 80%; --l: 90%">What do you know?</h2> --}}
            <img src="https://www.tajnid.ma/assets/images/Tajnid_Metier_F.jpg" alt="Snow on leafs">
        </div>

        <input type="radio" name="a" id="cr-2">
        <label for="cr-2" style="--hue: 82"></label>
        <div class="ci" style="--z: 3">
            {{-- <h2 class="ch" style="--h: 82; --s: 80%; --l: 90%">Look from inside?</h2> --}}
            <img src="https://www.tajnid.ma/assets/images/Tajnid_Metier_H.jpg" alt="Trees">
        </div>

        <input type="radio" name="a" id="cr-3">
        <label for="cr-3" style="--hue: 82"></label>
        <div class="ci" style="--z: 2">
            {{-- <h2 class="ch" style="--h: 40; --s: 100%; --l: 89%">In the mountains?</h2> --}}
            <img src="https://www.tajnid.ma/assets/images/Tajnid_Physique_H.jpg" alt="Mountains and houses">
        </div>

        <input type="radio" name="a" id="cr-4">
        <label for="cr-4" style="--hue: 82"></label>
        <div class="ci" style="--z: 1">
            {{-- <h2 class="ch" style="--h: 210; --s: 70%; --l: 90%">Above looks beautiful?</h2> --}}
            <img src="https://www.tajnid.ma/assets/images/Tajnid_Formation_H.jpg" alt="Sky and mountains">
        </div>

    </div>
    <div class="text-center mb-4">
        <h1 class="text-2xl font-semibold">All Elections</h1>
    </div>
    <div class="ag-format-container">
        <div class="ag-courses_box">
            <div class="ag-courses_item">
                <a href="#" class="ag-courses-item_link">
                    <div class="ag-courses-item_bg"></div>

                    <div class="ag-courses-item_title">
                        UI/Web&amp;Graph design for teenagers 11-17&#160;years old
                    </div>

                    <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                            04.11.2022
                        </span>
                    </div>
                </a>
            </div>

            <div class="ag-courses_item">
                <a href="#" class="ag-courses-item_link">
                    <div class="ag-courses-item_bg"></div>

                    <div class="ag-courses-item_title">
                        UX/UI Web-Design&#160;+ Mobile Design
                    </div>

                    <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                            04.11.2022
                        </span>
                    </div>
                </a>
            </div>

            <div class="ag-courses_item">
                <a href="#" class="ag-courses-item_link">
                    <div class="ag-courses-item_bg"></div>

                    <div class="ag-courses-item_title">
                        Annual package "Product+UX/UI+Graph designer&#160;2022"
                    </div>

                    <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                            04.11.2022
                        </span>
                    </div>
                </a>
            </div>

            <div class="ag-courses_item">
                <a href="#" class="ag-courses-item_link">
                    <div class="ag-courses-item_bg"></div>

                    <div class="ag-courses-item_title">
                        Graphic Design
                    </div>

                    <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                            04.11.2022
                        </span>
                    </div>
                </a>
            </div>
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
