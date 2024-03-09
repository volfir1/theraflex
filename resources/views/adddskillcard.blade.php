<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheraFlex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        /* Custom CSS for the profile image and rating star container */
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            width: 100%; /* Make the container full width */
            padding: 1rem; /* Add padding for spacing */
            background-color: rgba(0, 0, 0, 0.2); /* Add background color with opacity */
            border-radius: 10px; /* Add border radius for rounded corners */
        }

        .profile-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 0.5rem; /* Add margin bottom to separate the image from the stars */
        }

        .rating-container {
            display: flex;
            gap: 0.5rem;
        }

        .rating-container input[type="radio"] {
            display: none;
        }

        .rating-container label {
            font-size: 1.5rem;
            color: #f7cd06;
            cursor: pointer;
        }

        .rating-container label:hover,
        .rating-container label:hover ~ label {
            color: #f7cd06;
        }

        .rating-container input[type="radio"]:checked ~ label {
            color: #f7cd06;
        }

        /* Additional styling for the form container */
        .form-container {
            margin-top: 2rem; /* Add margin top to separate the form from the profile container */
            padding: 1rem;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Center the content */
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust height as needed */
        }

        /* Add a large container */
        .large-container {
            max-width: 800px; /* Set a maximum width for the container */
            width: 100%;
            padding: 1rem; /* Add padding for spacing */
            background-color: #f3f4f6; /* Set background color */
            border-radius: 10px; /* Add border radius for rounded corners */
        }
    </style>
</head>

<body>
    <div class="centered-container">
        <div class="large-container">
            <div class="add-skillcard">
                <h2 class="text-xl font-bold text-center text-black">Add SkillCard</h2>

                <div class="profile-container">
                    <label for="profile-image" class="cursor-pointer">
                        <img id="profile-image-preview" class="w-20 h-20 rounded-full" src="https://via.placeholder.com/128" alt="Profile Picture Placeholder">
                        <input type="file" id="profile-image" name="profile-image" accept="image/*" class="hidden">
                    </label>
                    <div class="rating-container">
    <input type="radio" id="star10" name="rating" value="10">
    <label for="star10">☆</label>
    <input type="radio" id="star9" name="rating" value="9">
    <label for="star9">☆</label>
    <input type="radio" id="star8" name="rating" value="8">
    <label for="star8">☆</label>
    <input type="radio" id="star7" name="rating" value="7">
    <label for="star7">☆</label>
    <input type="radio" id="star6" name="rating" value="6">
    <label for="star6">☆</label>
    <input type="radio" id="star5" name="rating" value="5">
    <label for="star5">☆</label>
    <input type="radio" id="star4" name="rating" value="4">
    <label for="star4">☆</label>
    <input type="radio" id="star3" name="rating" value="3">
    <label for="star3">☆</label>
    <input type="radio" id="star2" name="rating" value="2">
    <label for="star2">☆</label>
    <input type="radio" id="star1" name="rating" value="1">
    <label for="star1">☆</label>
</div>

                </div>

                <div class="form-container">
                    <form method="POST" action="/add-employee" class="space-y-4">

                        <div>
                            <label for="fname" class="block text-sm font-bold text-gray-700">Name</label>
                            <input type="text" id="fname" name="fname" placeholder="John Doe" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>

                        <div>
                            <label for="spel" class="block text-sm font-bold text-gray-700">Specialization</label>
                            <input type="text" id="spel" name="spel" placeholder="Massage Therapist" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>

                        <div>
                            <label for="phone-num" class="block text-sm font-bold text-gray-700">Phone Number</label>
                            <input type="tel" id="phone-num" name="phone_num" placeholder="+1234567890" pattern="[+]{1}[0-9]{11,14}" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>

                        <div>
                            <label for="emP" class="block text-sm font-bold text-gray-700">Employee Profile</label>
                            <textarea id="emP" name="emP" placeholder="...." required class="w-full px-6 py-6 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                        </div>

                        <div>
                            <label for="skill" class="block text-sm font-bold text-gray-700">Acquired Skill</label>
                            <textarea id="skill" name="skill" placeholder="...." required class="w-full px-6 py-6 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                        </div>

                        <div id="skill-list" class="flex flex-wrap mt-4">
                            <!-- Skill cards will be dynamically added here -->
                        </div>

                        <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
