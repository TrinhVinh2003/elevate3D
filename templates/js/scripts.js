// document.addEventListener("DOMContentLoaded", function () {
//   const orderButton = document.querySelector(".order-button");
//   const modal = document.querySelector(".modal-wrapper");
//   const closeButton = document.querySelector(".close-button");

//   orderButton.addEventListener("click", function () {
//     modal.style.display = "block";
//     modal.style.opacity = "1";
//   });

//   closeButton.addEventListener("click", function () {
//     modal.style.display = "none";
//     modal.style.opacity = "0";
//   });
// });

WebFont.load({
  google: {
    families: [
      "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
      "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic",
      "DM Sans:300,regular,500,600,italic,500italic",
      "Cormorant Garamond:300,regular,italic",
    ],
  },
});

!(function (o, c) {
  var n = c.documentElement,
    t = " w-mod-";
  (n.className += t + "js"),
    ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) &&
      (n.className += t + "touch");
})(window, document);

window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("set", "developer_id.dZGVlNj", true);
gtag("config", "G-RTR4T67X9K");

!(function (f, b, e, v, n, t, s) {
  if (f.fbq) return;
  n = f.fbq = function () {
    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
  };
  if (!f._fbq) f._fbq = n;
  n.push = n;
  n.loaded = !0;
  n.version = "2.0";
  n.queue = [];
  t = b.createElement(e);
  t.async = !0;
  t.src = v;
  s = b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t, s);
})(
  window,
  document,
  "script",
  "https://connect.facebook.net/en_US/fbevents.js"
);
fbq("init", "1258751957620776");
fbq("track", "PageView");

$(document).ready(function () {
  // Select all elements with the class "image-wrapper" and loop through them
  const imageWrappers = document.getElementsByClassName("image-wrapper");
  for (const imageWrapper of imageWrappers) {
    // Get the source of the first and second image within the current "image-wrapper" element
    const firstImage = imageWrapper.querySelectorAll("img")[0].src;
    const secondImage = imageWrapper.querySelectorAll("img")[1].src;
    // Create a template for the beer slider using the first and second image sources
    const template = `
  <div class="beer-slider" data-beer-label="after">
    <img src="${firstImage}">
    <div class="beer-reveal" data-beer-label="before">
      <img src="${secondImage}">
    </div>
  </div>
`;
    // Remove the first and second images
    imageWrapper.querySelectorAll("img")[1].remove();
    imageWrapper.querySelectorAll("img")[0].remove();
    // Append the template to the current "image-wrapper" element
    imageWrapper.insertAdjacentHTML("afterbegin", template);
  }

  // Select all elements with the class "beer-slider" and loop through them
  const beerSliders = document.getElementsByClassName("beer-slider");
  for (const beerSlider of beerSliders) {
    // Initialize the BeerSlider plugin on the current element, passing in the "start" data attribute as the option
    new BeerSlider(beerSlider, {
      start: beerSlider.dataset.start,
    });
  }
});

$(document).ready(function () {
  $("#send-email").on("click", function (e) {
    e.preventDefault(); // Ngăn chặn hành động gửi form mặc định

    var name = $("#name-2").val();
    var email = $("#email-2").val();
    var phone = $("#Phone-2").val();
    var message = $("#message-2").val();

    console.log(name);
    console.log(email);
    console.log(phone);
    console.log(message);

    $.ajax({
      type: "POST",
      url: "?module=user&action=send_email", // Đường dẫn tới file xử lý PHP
      dataType: "json",
      data: {
        name: name,
        email: email,
        phone: phone,
        message: message,
      },
      success: function (response) {
        if (response.status === "success") {
          $(".success-message").show();
          $(".error-message").hide();
          $("#email-form")[0].reset();
        } else {
          $(".error-message").show();
          $(".success-message").hide();
        }
      },
      error: function () {
        $(".error-message").show();
        $(".success-message").hide();
      },
    });
  });
});
