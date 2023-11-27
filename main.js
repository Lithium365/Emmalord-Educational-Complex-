document.addEventListener("DOMContentLoaded", function () {
  const hamburgerMenu = document.querySelector(".hamburger-menu");
  const navList = document.querySelector(".nav-list");
  hamburgerMenu.addEventListener("click", function () {
    navList.classList.toggle("show");
  });

  function updateTime() {
    const currentDateAndTime = document.getElementById("current-date-time");
    const options = {
      hour: "numeric",
      minute: "numeric",
      second: "numeric",
      hour12: true,
    };
    const currentTime = new Date().toLocaleString(undefined, options);
    currentDateAndTime.textContent = currentTime;
  }

  updateTime();
  setInterval(updateTime, 1000);

  // Get the current hour
  const currentHour = new Date().getHours();

  // Get the greeting message based on the time of the day
  let greetingMessage;
  if (currentHour < 12) {
    greetingMessage = "Good morning!";
  } else if (currentHour < 18) {
    greetingMessage = "Good afternoon!";
  } else {
    greetingMessage = "Good evening!";
  }

  // Display the greeting message in the designated element
  const greetingElement = document.getElementById("greeting-message");
  greetingElement.textContent = greetingMessage;
});
