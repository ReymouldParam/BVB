const urlParams = new URLSearchParams(window.location.search);
const flagValue1 = urlParams.get('emailSuccess');
const flagValue2 = urlParams.get('emailSuccess2');
const flagValue3 = urlParams.get('emailSuccess3');

const finalFlag = flagValue1 || flagValue2 || flagValue3;

if (finalFlag === 'true') {
    document.getElementById("mail-message").innerHTML = "Mail successfully sent to Bhale Vindhu Bhojanam.";
    document.getElementById("mail-message-caption").innerHTML = "Our Team will Contact Soon.";

    document.getElementById("mail-success-box").style.display = "flex";
    $("body").css("overflow", "hidden");
} else if (finalFlag === 'false') {
    document.getElementById("mail-message").innerHTML = "Mail Failed to sent Bhale Vindhu Bhojanam.";
    document.getElementById("mail-message-caption").innerHTML = "Try again.";

    document.getElementById("mail-success-box").style.display = "flex";
    $("body").css("overflow", "hidden");
}

// Get the current URL without the query parameters
const baseUrl = window.location.href.split('?')[0];

// Replace the current state with a new state without the query parameters
history.replaceState(null, null, baseUrl);