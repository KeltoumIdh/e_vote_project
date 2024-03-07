@extends('layouts.app')
@section('content')
    @vite('resources/css/style2.css')

    <div class="text-center mb-4">
        <h1 class="text-2xl font-semibold">All Candidates</h1>
    </div>

    <div class="flex justify-center items-center h-full mt-8">
        {{-- <div class="space-y-4">
        <!-- First Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 1</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">aaaa</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Second Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 2</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">zzzz</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Third Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 3</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">eeee</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Fourth Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 4</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">rrrr</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Fifth Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 5</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">tttt</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Sixth Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 6</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">yyyy</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </div> --}}

        <div class="space-y-4">
            <div class="container">
                <div class="grid-wrapper grid-col-auto">
                    <label for="radio-card-1" class="radio-card">
                        <input type="radio" name="radio-card" id="radio-card-1" checked />
                        <div class="card-content-wrapper">
                            <span class="check-icon"></span>
                            <div class="card-content">
                                <img src="https://cdn.vectorstock.com/i/1000x1000/53/21/young-businessman-profile-over-white-background-vector-12055321.webp"
                                    alt="" />
                                <h4>Elmehdi Kachour</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </div>
                    </label>

                    <label for="radio-card-2" class="radio-card">
                        <input type="radio" name="radio-card" id="radio-card-2" />
                        <div class="card-content-wrapper">
                            <span class="check-icon"></span>
                            <div class="card-content">
                                <img src="https://blog.1portrait.ie/wp-content/uploads/2020/08/1portrait-professional-business-headshots-linkedin.jpg"
                                    alt="" />
                                <h4>Belmadani Younes</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </div>
                    </label>

                    <label for="radio-card-3" class="radio-card">
                        <input type="radio" name="radio-card" id="radio-card-3" />
                        <div class="card-content-wrapper">
                            <span class="check-icon"></span>
                            <div class="card-content">
                                <img src="https://media.istockphoto.com/id/1352849942/photo/serious-female-profile-portrait.jpg?s=612x612&w=0&k=20&c=s7yKJSOYdLVlT8sOjniGnFK2nMdx-hEd6g5RkhKNr5I="
                                    alt="" />
                                <h4>Belmadani Younes</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="vote-section">
                <button class="button-vote" id="myBtn">voter</button>
                <div id="myModal" class="modal">
                    <form class="modal-container" action="">
                        <header class="modal-container-header">
                            <h1 class="modal-container-title">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    aria-hidden="true">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path fill="currentColor"
                                        d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z" />
                                </svg>
                                Terms and Services
                            </h1>
                            <div class="icon-button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path fill="currentColor"
                                        d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                                </svg>
                            </div>
                        </header>
                        <section class="modal-container-body rtf">
                            <h2>Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur.</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Unum nescio, quo modo possit, si
                                luxuriosus sit, finitas cupiditates habere. Hoc est non modo cor non habere, sed ne palatum
                                quidem. Sic, et quidem diligentius saepiusque ista loquemur inter nos agemusque communiter.
                                Paulum, cum regem Persem captum adduceret, eodem flumine invectio? Quid igitur dubitamus in
                                tota eius natura quaerere quid sit effectum? Duo Reges: constructio interrete. </p>

                            <input type="password" name="" class="password-voter"
                                placeholder="Veullez entrer votre mot de passe" required>
                        </section>

                        <footer class="modal-container-footer">
                            <button class="button is-ghost">Annuler</button>
                            <button class="button is-primary" type="submit">voter</button>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");
        var btnCancel = document.querySelector(".button.is-ghost");
        var closeIcon = document.querySelector(".icon-button");

        // Ouvrir le modal lorsque l'utilisateur clique sur le bouton
        btn.onclick = function() {
            modal.style.display = "flex";
        };

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
        btnCancel.onclick = function() {
            modal.style.display = "none";
        };
        closeIcon.onclick = function() {
            modal.style.display = "none";
        };
    </script>

    <script>
        function showPasswordInput(button) {
            var passwordInput = button.parentNode.nextElementSibling;
            var allPasswordInputs = document.querySelectorAll('.password-input');

            // Hide all password inputs
            allPasswordInputs.forEach(function(element) {
                element.classList.add('hidden');
            });

            // Show password input of clicked box
            if (passwordInput.classList.contains('hidden')) {
                passwordInput.classList.remove('hidden');
            } else {
                passwordInput.classList.add('hidden');
            }
        }
    </script>
@endsection
