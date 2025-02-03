var table = $("#datatable").DataTable({
  layout: {
    topStart: {
      pageLength: {
        menu: [5, 25, 50, 100],
      },
    }, // góc trái trên
    // topEnd: null, // góc pháp trên
    // bottomEnd: {
    //     paging: {
    //         type: 'simple_numbers' // chỉ có một nút next
    //     }
    // },  // góc phải dưới
    // bottomStart: {
    //     pageLength: {
    //         menu: [5, 25, 50, 100]
    //     }
    // } // góc trái dưới
  },
});

var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
  el.classList.toggle("toggled");
};

document.addEventListener("DOMContentLoaded", function () {
  const orderButton = document.querySelector(".order-button");
  const modal = document.querySelector(".modal-wrapper");
  const closeButton = document.querySelector(".close-button");

  orderButton.addEventListener("click", function () {
    modal.style.display = "block";
    modal.style.opacity = "1";
  });

  closeButton.addEventListener("click", function () {
    modal.style.display = "none";
    modal.style.opacity = "0";
  });
});
