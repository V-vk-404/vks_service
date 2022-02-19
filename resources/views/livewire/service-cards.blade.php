<style>
    .cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  width :100%;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 33%;
    flex:0.3;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    /* width:80%; */
    flex: 3;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
  font-weight: 400;
}
.gallery-card {

  position: relative;
  transform-style: preserve-3d;
  transform: perspective(300px);
  /* box-shadow: -10px 20px 86px 0 rgba(92, 15, 15, 0.36); */

}
</style>
<div class="main">
    <ul class="cards ">
      <li class="cards_item gallery-card">
        <div class="card ">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
          <div class="card_content">
            <h2 class="card_title">Card Grid Layout</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <button class="btn card_btn">Read More</button>
          </div>
        </div>
      </li>
      <li class="cards_item gallery-card">
        <div class="card  ">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
          <div class="card_content">
            <h2 class="card_title">Card Grid Layout</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <button class="btn card_btn">Read More</button>
          </div>
        </div>
      </li>
      <li class="cards_item gallery-card">
        <div class="card ">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
          <div class="card_content">
            <h2 class="card_title">Card Grid Layout</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <button class="btn card_btn">Read More</button>
          </div>
        </div>
      </li>
      {{-- <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
          <div class="card_content">
            <h2 class="card_title">Card Grid Layout</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <button class="btn card_btn">Read More</button>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
          <div class="card_content">
            <h2 class="card_title">Card Grid Layout</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <button class="btn card_btn">Read More</button>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
          <div class="card_content">
            <h2 class="card_title">Card Grid Layout</h2>
            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
            <button class="btn card_btn">Read More</button>
          </div>
        </div>
      </li> --}}
    </ul>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script>
    $('.gallery-card').tilt({
  glare: true,
  maxGlare: .3,
  maxTilt: 7,
  speed: 750,
})
</script>
