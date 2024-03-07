@extends('layouts.app')
@section('content')
    @vite('resources/css/style2.css')

    <div class="text-center mb-4">
        <h1 class="text-2xl font-semibold">All Candidates</h1>
    </div>

    <div class="flex justify-center items-center h-full mt-8">
        <div class="space-y-4">
            <div class="container">
                <div class="grid-wrapper grid-col-auto">
                @if (count($candidats) === 0)
                    <p>No data found</p>
                @endif
                @php
                    $selectedCard = null;
                @endphp
                    @foreach ($candidats as $candid)
                    <label for="radio-card-{{ $candid->id }}" class="radio-card">
                        <input type="radio" name="radio-card" id="radio-card-{{ $candid->id }}" data-card-id="{{ $candid->id }}" />
                        <div class="card-content-wrapper">
                            <span class="check-icon"></span>
                            <div class="card-content">
                                <img src="{{ asset('assets/uploads/candidats/' . $candid->image) }}" alt="" />
                                <h4>{{ $candid->name }}</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </div>
                    </label>
                @endforeach



                </div>
            </div>
            <div class="vote-section">
                <button class="button-vote w-full" id="myBtn">voter</button>
                <div id="myModal" class="modal">
                    <form id="votingForm" class="modal-container" onsubmit="return submitVote()">
                        @csrf
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

                                <input type="password" name="password" class="password-voter" placeholder="Veuillez entrer votre mot de passe" required>
                                <div id="error-message" style="color: red;"></div>

                        </section>

                        <footer class="modal-container-footer">
                            <button type="button" class="button is-ghost" onclick="cancelVote()">Annuler</button>
                            <button type="submit" class="button is-primary" >Vote</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var selectedCard = null;

            var radioButtons = document.querySelectorAll('input[name="radio-card"]');

            radioButtons.forEach(function (radioButton) {
                radioButton.addEventListener('change', function () {
                    if (this.checked) {
                        selectedCard = this.getAttribute('data-card-id');
                        console.log('Selected Card ID:', selectedCard);
                        // You can now use the selectedCard variable for further processing
                    }
                });
            });
        });
    </script>
<script>
    function cancelVote() {
        // Placeholder for cancelVote function
        console.log('Vote canceled');
    }

    function submitVote() {
        var enteredPassword = document.querySelector('.password-voter').value;

        if (enteredPassword === '12345678') {
            // Password is correct, continue with form submission
            return true;
        } else {
            // Password is incorrect, display error message
            document.getElementById('error-message').innerText = 'Mot de passe incorrect. Veuillez réessayer.';
            return false;
        }
    }
    function addVote() {
    // Get voter_id from the authenticated user
    var voterId = {{ auth()->id() }}; // Assuming you are using Laravel Blade syntax

    // Get election_id from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var electionId = urlParams.get('election_id');
    fetch('/add-vote', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
        },
        body: JSON.stringify({
            voter_id: voterId,
            election_id: electionId,
            candid_id: selectedCard, // provide the candid_id value,
            voted_at: new Date().toISOString(), // timestamp for voted_at
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            console.log('Vote added successfully');
        } else {
            console.error('Failed to add vote:', data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}

</script>
@endsection
