document.addEventListener('DOMContentLoaded', () => {
    const popup = document.getElementById('videoPopup');
    const overlay = document.getElementById('overlay');
    const video = document.getElementById('popupVideo');
    const lockOverlay = document.getElementById('lockOverlay');
    const continueBtn = document.getElementById('continueBtn');
    const closeBtn = document.getElementById('closeBtn'); // Close button reference

    // Automatically show popup after 5 seconds
    setTimeout(() => {
        popup.style.display = 'block';  // Display the video popup
        overlay.style.display = 'block'; // Display the overlay
        video.play(); // Start playing the video automatically
    }, 5000);

    // Lock the video after 10 seconds (pause and lock the video)
    video.addEventListener('timeupdate', () => {
        if (video.currentTime >= 10) { // After 10 seconds of play
            video.pause(); // Pause the video
            video.controls = false; // Disable the controls (pause button, play button, etc.)
            lockOverlay.style.display = 'flex'; // Display the lock overlay
            continueBtn.style.display = 'block'; // Show the continue button
        }
    });

    // Redirect to the "All Courses" page when the continue button is clicked
    continueBtn.addEventListener('click', () => {
        window.location.href = '/all-courses'; // Redirect to the desired page
    });

    // Close the video popup when the cross (close) button is clicked
    closeBtn.addEventListener('click', () => {
        popup.style.display = 'none';  // Hide the popup
        overlay.style.display = 'none'; // Hide the overlay
        video.pause(); // Pause the video if it's closed
    });
});


