///////////////////////////////////////////////////////////
// Make mobile navigation work
const btnNavEl = document.querySelector(".btn-mobile-nav");
const headerEl = document.querySelector(".header");

btnNavEl.addEventListener("click", function () {
  headerEl.classList.toggle("nav-open");
});

///////////////////////////////////////////////////////////
// Click to add extra opleiding, werkervaring, hobby, vaardigheid

function AddExtraHobby() {
  var PreviousFields=document.getElementById('txtField').innerHTML;
      document.getElementById('txtField').innerHTML =PreviousFields+ '<input type="text" class="fhobbys " id="popup" name="hobbys" placeholder="Hobby">'
  }

function AddExtraVaardigheid() {
  var PreviousFields=document.getElementById('txtField').innerHTML;
      document.getElementById('txtField').innerHTML =PreviousFields+ '<input type="text" class="fvaardigheden" name="vaardigheden" placeholder="Vaardigheden"> '
  }

