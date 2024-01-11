// localStorage.setItem("Title1", "Content");
// localStorage.setItem("Title2", "Content");
// localStorage.setItem("Title3", "Content");
// localStorage.setItem("Title4", "Content");
// localStorage.setItem("Title5", "Content");
// localStorage.setItem("Title6", "Content");
// localStorage.setItem("Title7", "Content");
// localStorage.setItem("Title8", "Content");
// localStorage.setItem("Title9", "Content");
// localStorage.setItem("Title10", "Content");

const grid = document.querySelector(".grid-container");
const addBlog = document.querySelector(".addButton");

const generateCard = (title) => {
  return `
    <div class="card">
        <img src="images/Cover-photo.webp" alt="Avatar" style="width: 100%" />
        <div class="card-container">
            <p class="card-tag">Engineering, Web</p>
            <h4 class="card-title">
                <b id="dynamic-title"> ${title} </b>
            </h4>
            <div class="card-buttons">
                <button class="button editButton" onclick="editCard(this)">Edit</button>
                <button class="button delButton" onclick="delCard(this)">Delete</button>
            </div>
        </div>
      </div>
    `;
};

// EVENT LISTENER START

// grid.addEventListener("click", (event) => {
//   const clickedCard = event.target.closest(".card");
//   if (clickedCard) {
//     const title = clickedCard.querySelector(".card-title b").textContent.trim();
//     // showCard(title);
//   }
// });
// EVENT LISTENER END

// for (x in localStorage) {
//   console.log(x);
// }
// window.onload = () => {
function refreshCards() {
  Object.keys(localStorage).forEach((key) => {
    //   console.log(localStorage.getItem(key));
    grid.insertAdjacentHTML("afterbegin", generateCard(key));
  });
}
// };

refreshCards();

const showCard = (title) => {
  //   window.location = "/card.html";
  console.log(title);
};

function showPane(pane) {
  const adminPane = document.getElementById("adminPane");
  const cardPane = document.getElementById("cardPane");

  if (pane === "admin") {
    cardPane.classList.remove("visible");
    adminPane.classList.add("visible");
  }

  if (pane === "card") {
    adminPane.classList.remove("visible");
    cardPane.classList.add("visible");
  }
}

function goToAdmin() {
  showPane("admin");
  refreshCards();
}

function addCard() {
  showPane("card");
}

function saveBlog() {
  const title = document.getElementById("title");
  const content = document.getElementById("content");
  localStorage.setItem(title.value, content.value);
  alert("Blog Posted!");
  //   console.log(title.value + " " + content.value);
}

function editCard(button) {
  const titleElement = document.getElementById("title");
  const contentElement = document.getElementById("content");
  const titleText = button
    .closest(".card")
    .querySelector("#dynamic-title")
    .textContent.trim();
  const contentText = localStorage.getItem(titleText);
  //   console.log(titleText + ":" + contentText);
  titleElement.value = titleText;
  contentElement.value = contentText;

  showPane("card");
}

function delCard(button) {
  var userResponse = window.confirm("Blog will be deleted, Are you sure?");

  if (userResponse) {
    // The user clicked "OK" (Yes)
    const titleText = button
      .closest(".card")
      .querySelector("#dynamic-title")
      .textContent.trim();
    localStorage.removeItem(titleText);
    // alert("Blog Deleted!");

    refreshCards();
  }
}
