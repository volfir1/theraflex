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

        reader.onload = function (e) {
            // Set the source of the profile image to the selected file
            profileImage.src = e.target.result;
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(fileInput.files[0]);
    }
}