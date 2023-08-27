


  function scrollToTop() {

    console.log("bem vindo")
    const scrollToTop = window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }

  // Mostrar ou ocultar o botão dependendo da posição da página
  window.onscroll = function() {
    const scrollButton = document.getElementById("scrollButton");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollButton.style.display = "block";
    } else {
      scrollButton.style.display = "none";
    }
  };
