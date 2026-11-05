// 1. Store elements in variables using document.getElementById
let enrollBtn = document.getElementById("enrollBtn");
let statusMessage = document.getElementById("statusMessage");
let themeBtn = document.getElementById("themeBtn");

// 2. Event listener for the Enrollment button
enrollBtn.addEventListener("click", function() {
    statusMessage.innerHTML = "Status: Officially Enrolled for the Semester";
    statusMessage.style.color = "green";
});

// 3. Reusable function for Dark Mode
function toggleTheme() {
    document.body.style.backgroundColor = "#333";
    document.body.style.color = "white";
}

// 4. Event listener for the Theme button to call toggleTheme()
themeBtn.addEventListener("click", toggleTheme);