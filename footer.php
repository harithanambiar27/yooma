 <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="ft_adres">
            <h4>address</h4>
            <p><i class="fa-solid fa-location-dot"></i>Opposite Government Mental Health Hospital, Kuthiravattam, Calicut


            </p>
            <p><i class="fa-solid fa-phone"></i>7356940742</p>
            <p><i class="fa-solid fa-envelope"></i>yooma1761@gmail.com</p>

          </div>
        </div>
        <div class="col-md-3">
          <h4> quick links</h4>
          <ul>
            <li> <a href="https://yoomawellnessspa.com/"><i class="fa-solid fa-angle-right"></i>home</a></li>
            <li> <a href="about"><i class="fa-solid fa-angle-right"></i>about us</a></li>

            <li> <a href="services"><i class="fa-solid fa-angle-right"></i>services</a></li>

            <li> <a href="contact"><i class="fa-solid fa-angle-right"></i>contact</a></li>
          </ul>







        </div>
        <div class="col-md-3">
          <h4>services</h4>

          <ul>
            <li> <i class="fa-solid fa-angle-right"></i>four hand massage</li>

            <li><i class="fa-solid fa-angle-right"></i>body massage</li>
            <li><i class="fa-solid fa-angle-right"></i>thai massage</li>
            <li><i class="fa-solid fa-angle-right"></i>oil massage</li>
            <li><i class="fa-solid fa-angle-right"></i>couple massage</li>
            <li><i class="fa-solid fa-angle-right"></i>butterfly massage</li>
            <li><i class="fa-solid fa-angle-right"></i>korean massage</li>
            <li><i class="fa-solid fa-angle-right"></i>relaxation massage</li>

          </ul>
        </div>
        <div class="col-md-3">
          <h4>
            contact us
          </h4>
          <div class="ft_social">
            <a href="https://www.facebook.com/profile.php?id=61577831335760"><i
                class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/yooma_wellness_spa/"><i
                class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>

          </div>
        </div>
      </div>

    </div>
    <div class="container">
      <div class="ft_link">developed by <a href="https://iberrtech.com/">iberrtechnologies</a></div>
    </div>

  </footer>


  <!-- =================footer end========================= -->


  <!-- Fancybox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

  <!-- Slick Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <!-- Popper.js and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
    integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D"
    crossorigin="anonymous"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>


  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    function updateMeta(title, description) {
      document.title = title;

      let metaDesc = document.querySelector("meta[name='description']");
      if (!metaDesc) {
        metaDesc = document.createElement('meta');
        metaDesc.name = "description";
        document.head.appendChild(metaDesc);
      }
      metaDesc.setAttribute("content", description);
    }

    const path = window.location.pathname;

    switch (path) {
      case '/about':
      case '/body-massage-calicut':
        updateMeta(
          'Body Massage Calicut  | Full Body Massage in Calicut',
          'Enjoy Yooma’s premium Body Massage Calicut services. Our expert Full Body Massage in Calicut helps relieve stress, improve circulation, and boost energy'
        );
        break;

      case '/services':
      case '/massage-service-in-calicut':
        updateMeta(
          'Massage Service in Calicut  | Body Massage Centre in Calicut',
          'Indulge in ultimate comfort at Yooma with professional Massage Service in Calicut. Our Body Massage Centre in Calicut ensures deep healing and relaxation.'
        );
        break;


      default:
        updateMeta(
          'Massage Spa in Calicut  | Calicut Spa Massage Centre',
          'Yooma is the best Massage Spa in Calicut, offering healing therapies. Choose our Calicut Spa Massage Centre for unmatched relaxation and stress-free living.'
        );
    }
  });
</script>
<!-- canonical tag -->
 <script>
(function() {
  // Get current URL without query parameters and hash
  const url = window.location.origin + window.location.pathname;

  // Create canonical link element
  const link = document.createElement('link');
  link.rel = 'canonical';
  link.href = url;

  // Check if canonical already exists
  const existing = document.querySelector("link[rel='canonical']");
  if (existing) {
    existing.href = url;
  } else {
    document.head.appendChild(link);
  }
})();
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const path = window.location.pathname;
    const lastSegment = path.substring(path.lastIndexOf("/") + 1).toLowerCase();

    let h1Text = "";
    let h2Text = "";

    if (lastSegment === "body-massage-calicut") {
        h1Text = "Body Massage Calicut";
        h2Text = "Full Body Massage in Calicut";
    } else if
     (lastSegment === "massage-service-in-calicut") {
        h1Text = "Massage Service in Calicut";
        h2Text = "Body Massage Centre in Calicut";
    } else {
        h1Text = "Massage Spa in Calicut";
        h2Text = "Calicut Spa Massage Centre";
    }

    // Replace existing h1 with new h2 (preserving attributes)
    const siteTitle = document.querySelector("h1");
    if (siteTitle) {
        const newH2 = document.createElement("h2");
        newH2.innerHTML = siteTitle.innerHTML;
        for (let attr of siteTitle.attributes) {
            newH2.setAttribute(attr.name, attr.name);
        }
        siteTitle.replaceWith(newH2);
    }

    // Create hidden h1 and h2 elements
    const newH1 = document.createElement("h1");
    newH1.textContent = h1Text;
    newH1.style.display = "none";

    const additionalH2 = document.createElement("h2");
    additionalH2.textContent = h2Text;
    additionalH2.style.display = "none";

    const footer = document.querySelector("footer");
    if (footer) {
        footer.insertAdjacentElement("afterend", additionalH2);
        footer.insertAdjacentElement("afterend", newH1);
    }

    // Update image alt attributes and src with dynamic file names
    const images = document.querySelectorAll("img");
    const altTags = [h1Text, h2Text];

    images.forEach((img, index) => {
        const originalSrc = img.getAttribute("src");

        if (!originalSrc || originalSrc.includes("image-loader.php")) return;

        const relativePathMatch = originalSrc.split("assets/img/")[1];
        if (!relativePathMatch) return;

        const cleanedPath = encodeURIComponent(relativePathMatch.trim());
        const downloadName = (index % 2 === 0 ? h1Text : h2Text)
            .trim()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]/g, '') + ".png";

        img.setAttribute("alt", altTags[index % altTags.length]);
        img.setAttribute("src", `image-loader.php?path=${cleanedPath}&name=${downloadName}`);
    });
});
</script>



  <script>
    AOS.init();
  </script>
</body>