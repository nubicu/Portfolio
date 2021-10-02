<style>
body {
  font-family: "Lato", sans-serif;
  margin: 0px;
}

.container {
  display: grid;
  grid-template-columns: 1fr;
}

.nav-wrapper {
  display: flex;
  justify-content: space-between;
  padding: 38px;
}

.left-side {
  display: flex;
}

.nav-wrapper > .left-side > div {
  margin-right: 20px;
  text-transform: uppercase;
  font-size: 0.9rem;
}

.nav-link-wrapper {
  height: 22px;
  border-bottom: 1px solid transparent;
  transition: border-bottom 0.5s;
}

.active-nav-link {
  border-bottom: 1px solid black;
}

.active-nav-link a {
  color: black !important;
}

.nav-link-wrapper a {
  color: #8a8a8a;
  text-decoration: none;
  transition: color 0.5s;
}

.nav-link-wrapper:hover {
  border-bottom: 1px solid black;
}

.nav-link-wrapper a:hover {
  color: black;
}

.portfolio-items-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
}

.portfolio-item-wrapper {
  position: relative;
}

.portfolio-img-background {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 350px;
  width: 100%;
}

.img-text-wrapper {
  position: absolute;
  top: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
  text-align: center;
  padding-left: 100px;
  padding-right: 100px;
}

.img-text-wrapper .subtitle {
  transition: 1s;
  color: transparent;
}

.image-blur {
  transition: 1s;
  filter: brightness(10%);
}

.img-text-wrapper:hover .subtitle {
  color: lightseagreen;
  font-weight: 600;
}

.logo-wrapper img {
  width: 50%;
  margin-bottom: 20px;
}

.two-column-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.profile-image-wrapper img {
  width: 100%;
}

.profile-content-wrapper {
  padding: 30px;
  background-color: #2f2f2f;
  color: aqua;
  font-family: Arial;
  font-size: 16pt;
  text-align: justify;
}

.profile-content-wrapper h1 {
  color: lightseagreen;
}

</style>

  <div class="container">
    <div class="nav-wrapper">
      <div class="left-side">
        <div class="nav-link-wrapper active-nav-link">
          <a href="index.html">Home</a>
        </div>

        <div class="nav-link-wrapper">
          <a href="about.html">About</a>
        </div>
      </div>

      <div class="right-side">
        <div class="brand">
          ROBERT FILIPESCU
        </div>
      </div>
    </div>

    <div class="content-wrapper">
      <div class="portfolio-items-wrapper">

        <div class="portfolio-item-wrapper">
          <a href="https://nubicu.github.io/webdesign/emailchallenge" target="_blank">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio12.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/toastability.png" alt="">
            </div>
          </a>

            <div class="subtitle">Easy way to manage the digital life of your bar or restaurant.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio1.jpg)"></div>

          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/quip.png" alt="">
            </div>

            <div class="subtitle">I built the Quip Ecommerce platform, named a Top 25 Invention by Time Magazine in 2016.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio2.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/devcamp.png" alt="">
            </div>

            <div class="subtitle">Coding bootcamp and learning management system.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio3.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/eventbrite.png" alt="">
            </div>

            <div class="subtitle">Eventbrite is the leading event management platform on the web with millions of individuals utilizing their applications
              to find, register or, and management events in numerous industries.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio4.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/shop-hacker.png" alt="">
            </div>

            <div class="subtitle">Shop Hacker allows you to easily import digital products such as elearning courses, software, and games directly
              into your ecommerce store.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio5.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/crondose.png" alt="">
            </div>

            <div class="subtitle">Online tutorials and productivity tips.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio6.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/dailysmarty.png" alt="">
            </div>

            <div class="subtitle">Keep track of what you learn every day.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio7.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/dashtrack.png" alt="">
            </div>

            <div class="subtitle">What you track improves. DashTrack is a journal that makes it easy to track your daily tasks and make the most
              of your time each day.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio8.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/devtrunk.png" alt="">
            </div>

            <div class="subtitle">Online shop for developer happiness.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio9.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/edutechional.png" alt="">
            </div>

            <div class="subtitle">Online technology tutorials.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio10.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/ministry-safe.png" alt="">
            </div>

            <div class="subtitle">A complete child safety system for organizations.</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio11.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/open-devos.png" alt="">
            </div>

            <div class="subtitle">Publish and share daily devotionals.</div>
          </div>
        </div>

      </div>
    </div>
  </div>

<script>
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

  portfolioItems.forEach(portfolioItem => {
    portfolioItem.addEventListener('mouseover', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.add('image-blur');
    });

    portfolioItem.addEventListener('mouseout', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.remove('image-blur');
    });
  });

</script>
