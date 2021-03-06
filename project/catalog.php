<?php require __DIR__ . '/includes/header.php' ?>


  <main class="main">
    <div class="main-container">

      <h1 class="main-heading">Products</h1>
      <section class="breadcrumbs">
        <h2 class="visually-hidden">Navigation</h2>
        <ul class="breadcrumbs-list">
          <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="index.html">Main</a></li>
          <li class="breadcrumbs-item"><a class="breadcrumbs-link breadcrumbs-current" href="#">Products</a></li>
        </ul>
      </section>

    </div>

    <div class="main-content-container">

      <div class="catalog-headers">
        <div class="main-container">

          <h2 class="filter-header">Filters:</h2>
          <section class="sort">
            <h2>Sort by:</h2>
            <ul class="sort-list">
              <li class="sort-item current-sort-item"><a class="sort-item-link" href="#">Price</a></li>
              <li class="sort-item"><a class="sort-item-link" href="#">Newest</a></li>
              <li class="sort-item"><a class="sort-item-link" href="#">Popular</a></li>
            </ul>
            <ul class="order-list">
              <li class="order-item order-item-up">
                <a href="#" class="order-item-link" aria-label="Ascending"></a>
              </li>
              <li class="order-item order-item-down">
                <a href="#" class="order-item-link" aria-label="Descending"></a>
              </li>
            </ul>
          </section>

        </div>
      </div>


      <div class="catalog-page-content">
        <div class="main-container">

          <aside class="form">
            <form class="filter" method="post" action="">
              <div class="filter-block range-div">
                <label>Price</label>
                <div class="filter-range">
                  <button type="button" class="range-button range-left" aria-label="Minimal price"></button>
                  <button type="button" class="range-button range-right" aria-label="Maximum price"></button>
                  <div class="range-field"></div>
                </div>
                <span>from 0</span>
                <span>to 5000</span>
              </div>
              <fieldset class="filter-block color">
                <legend>Color</legend>
                <ul class="filter-list">
                  <li class="filter-option">
                    <input class="filter-input filter-input-checkbox visually-hidden" type="checkbox" name="black" id="filter-black" checked>
                    <label for="filter-black">Black</label>
                  </li>
                  <li class="filter-option">
                    <input class="filter-input filter-input-checkbox visually-hidden" type="checkbox" name="white" id="filter-white">
                    <label for="filter-white">White</label>
                  </li>
                  <li class="filter-option">
                    <input class="filter-input filter-input-checkbox visually-hidden" type="checkbox" name="blue" id="filter-blue" checked>
                    <label for="filter-blue">Blue</label>
                  </li>
                  <li class="filter-option">
                    <input class="filter-input filter-input-checkbox visually-hidden" type="checkbox" name="red" id="filter-red" checked>
                    <label for="filter-red">Red</label>
                  </li>
                  <li class="filter-option">
                    <input class="filter-input filter-input-checkbox visually-hidden" type="checkbox" name="pink" id="filter-pink">
                    <label for="filter-pink">Pink</label>
                  </li>
                </ul>
              </fieldset>
              <fieldset class="filter-block bluetooth">
                <legend>Bluetooth</legend>
                <ul class="filter-list">
                  <li class="filter-option">
                    <input class="filter-input filter-input-radio visually-hidden" type="radio" name="radio" id="filter-true" checked>
                    <label for="filter-true">Yes</label>
                  </li>
                  <li class="filter-option">
                    <input class="filter-input filter-input-radio visually-hidden" type="radio" name="radio" id="filter-false">
                    <label for="filter-false">No</label>
                  </li>
                </ul>
              </fieldset>
              <button class="button filter-button" type="submit">Filter</button>
            </form>
          </aside>

          <div class="content-container">
            <section class="catalog">
              <h2 class="visually-hidden">Products</h2>
              <ul class="catalog-list">
                <li class="catalog-item">
                  <article class="catalog-item-block">
                    <a class="catalog-item-link" href="#">
                      <img src="img/item-1.jpg" width="360" height="380" alt="???????????????????????? ??????????-??????????">
                    </a>
                    <div class="catalog-description-wrapper">
                      <h1 class="catalog-item-description"><a href="#">???????????????????????? ??????????-??????????</a></h1>
                      <span class="catalog-item-price">500 ??????.</span>
                    </div>
                    <div class="catalog-item-hover">
                      <a class="button catalog-button" href="#">?? ??????????????</a>
                      <a class="catalog-compare-link" href="#">???????????????? ?? ??????????????????</a>
                    </div>
                  </article>
                </li>

                <li class="catalog-item">
                  <article class="catalog-item-block">
                    <a class="catalog-item-link" href="#">
                      <img src="img/item-2.jpg" width="360" height="380" alt="???????????????????????????????? ??????????-??????????">
                    </a>
                    <div class="catalog-description-wrapper">
                      <h1 class="catalog-item-description"><a href="#">???????????????????????????????? ??????????-??????????</a></h1>
                      <span class="catalog-item-price">1 500 ??????.</span>
                    </div>
                    <div class="catalog-item-hover">
                      <a class="button catalog-button" href="#">?? ??????????????</a>
                      <a class="catalog-compare-link" href="#">???????????????? ?? ??????????????????</a>
                    </div>
                  </article>
                </li>

                <li class="catalog-item">
                  <article class="catalog-item-block">
                    <a class="catalog-item-link" href="#">
                      <img src="img/item-3.jpg" width="360" height="380" alt="?????????????????????????? ??????????-??????????">
                    </a>
                    <div class="catalog-description-wrapper">
                      <h1 class="catalog-item-description"><a href="#">?????????????????????????? ??????????-??????????</a></h1>
                      <span class="catalog-item-price">2 500 ??????.</span>
                    </div>
                    <div class="catalog-item-hover">
                      <a class="button catalog-button" href="#">?? ??????????????</a>
                      <a class="catalog-compare-link" href="#">???????????????? ?? ??????????????????</a>
                    </div>
                  </article>
                </li>

                <li class="catalog-item">
                  <article class="catalog-item-block">
                    <a class="catalog-item-link" href="#">
                      <img src="img/item-4.jpg" width="360" height="380" alt="??????????-?????????? &laquo;???????????? ???? ????????&raquo;">
                      <span class="catalog-item-new">New</span>
                    </a>
                    <div class="catalog-description-wrapper">
                      <h1 class="catalog-item-description"><a href="#">??????????-?????????? &laquo;???????????? ???? ????????&raquo;</a></h1>
                      <span class="catalog-item-price">4 900 ??????.</span>
                    </div>
                    <div class="catalog-item-hover">
                      <a class="button catalog-button" href="#">?? ??????????????</a>
                      <a class="catalog-compare-link" href="#">???????????????? ?? ??????????????????</a>
                    </div>
                  </article>
                </li>
              </ul>
            </section>

            <section class="pages">
              <h2 class="visually-hidden">Pages</h2>
              <ul class="pages-list">
                <li class="pages-item">
                  <a class="pages-item-link">Back</a>
                </li>
                <li class="pages-item">
                  <a class="pages-item-link current-page">1</a>
                </li>
                <li class="pages-item">
                  <a class="pages-item-link" href="#">2</a>
                </li>
                <li class="pages-item">
                  <a class="pages-item-link" href="#">3</a>
                </li>
                <li class="pages-item">
                  <a class="pages-item-link" href="#">Next</a>
                </li>
              </ul>
            </section>
          </div>

        </div>
      </div>

    </div>
  </main>

  <?php require __DIR__ . '/includes/footer.php' ?>
