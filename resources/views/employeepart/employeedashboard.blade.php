@extends('layouts.LinkScript')
@extends('layouts.adminSidebar')
@extends('layouts.app')
@vite(['resources/css/employee.css', 'resources/js/employee.js'])


@section('header')

@stop

@section('content')

<!-- Background Image -->
<div class="container">

    <div class="dark-overlay">
    <h1>Welcome to Employee Dashboard</h1>
    </div>
   
    <img src="{{ asset('images/scene24.jpg') }}" alt="Background Image">

   
</div>



<div class="card-container">

    <!--left card container-->
    <div class="left-cards">
        <div class="card1">
            <main>
                <!-- Profile picture -->
                <div class="profile" onclick="openFileInput()">
                    <img id="profileImage" src="{{ asset('images/profilecircle.png') }}" alt="Avatar" class="avatar">
                    <input type="file" id="fileInput" style="display: none;" accept="image/*" onchange="changeProfilePicture(event)">
                </div>

                <div class="names-container">
                    <!-- name -->
                    <div class="name">
                        <p>
                            Diablo Volfir
                        </p>
                    </div>
                    <!-- username -->
                    <div class="user-name">
                        <p>
                            @diablovolfir666
                        </p>
                    </div>

                    <div class="profile-container">
                        <!-- Address -->
                        <div class="profile-info">
                            <p>
                                <strong>Address:</strong><br>
                                123 Main St, Cityville,<br>
                                State, ZIP
                            </p>
                        </div>

                        <!-- Phone Number -->
                        <div class="profile-info">
                            <p>
                                <strong>Phone Number:</strong><br>
                                (555) 555-5555
                            </p>
                        </div>

                        <div class="specialization">
                            <p>
                                <strong>Specialization:</strong><br>
                                Kama Sutra
                            </p>
                        </div>

                        <div class="rating">

                            <h2>Overall Rating</h2>
                            <input type="radio" id="star10" name="rating" value="10">
                            <label for="star10"></label>

                            <input type="radio" id="star9" name="rating" value="9">
                            <label for="star9"></label>

                            <input type="radio" id="star8" name="rating" value="8">
                            <label for="star8"></label>

                            <input type="radio" id="star7" name="rating" value="7">
                            <label for="star7"></label>

                            <input type="radio" id="star6" name="rating" value="6">
                            <label for="star6"></label>

                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5"></label>

                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4"></label>

                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3"></label>

                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2"></label>

                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1"></label>


                        </div>





                        <!-- Repeat this pattern for the rest of the stars (8, 7, ..., 1) -->


                    </div>

                </div>

            </main>
        </div>
        <!--card2-->
        <div class="card2">
            <p>Your Profile</p>


            <a href="/edit-profile" class="edit-button">
                <p>Edit Profile</p>
            </a>


        </div>
    </div>



    <!--right card container 1-->
    <div class="right-container1">
        <div class="card3">
            <p>Your Description</p>
        </div>

        <!--card4-->
        <div class="card4">
            <p>Diablo Volfir is a dedicated and skilled Licensed Massage Therapist with a passion for providing therapeutic and relaxing massage experiences. With a commitment to holistic well-being, Muztafa combines technical expertise with a compassionate approach to ensure clients receive personalized care tailored to their unique needs.</p>
        </div>
    </div>


    <div class="right-container2"><!--This is card 5-->

        <div class="card5">
            <p>Acquired Skills</p>
        </div>

        <div class="card6">
            <p>This is card 6</p>
        </div>
    </div>
</div>





<script>
    function openFileInput() {
        // Trigger click on the hidden file input when the profile image is clicked
        document.getElementById('fileInput').click();
    }

    function changeProfilePicture(event) {
        const fileInput = event.target;
        const profileImage = document.getElementById('profileImage');

        // Check if a file was selected
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                // Set the source of the profile image to the selected file
                profileImage.src = e.target.result;
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
</script>
@stop