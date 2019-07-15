//alert("salut ceci est un test :D");

let links_del = document.querySelectorAll(".favorites.list a.trash");

links_del.forEach(element => {
  element.addEventListener("click", function(event) {
    event.preventDefault();

    if (confirm("Voulez-vous vraiment effacer des favoris ?")) {
      window.location = element.href;
    }
  });
});

let span_del = document.querySelectorAll(".favorites.link>a");

span_del.forEach(element => {
  element.addEventListener("click", function(event) {
    event.preventDefault();

    if (confirm("Voulez-vous vraiment effacer des favoris ?")) {
      window.location = element.href;
    }
  });
});
