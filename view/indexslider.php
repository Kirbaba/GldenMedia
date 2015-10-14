<?php foreach($slides as $item){ ?>
       <div data-img=" <?= $item['img'] ?>">
              <div class="header__text">
                     <h4><?= $item['head'] ?></h4>
                     <h1><?= $item['title'] ?></h1>
                     <h4><?= $item['description'] ?></h4>
              </div>
              <div class="header__mouse">
                     <p>КРУТИТЕ МЫШКУ ВНИЗ</p>
              </div>
       </div>
<?php } ?>