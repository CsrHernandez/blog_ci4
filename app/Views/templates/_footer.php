<!-- s-extra
  ================================================== -->
  <section class="s-extra">

      <div class="row">

          <div class="col-seven md-six tab-full popular">
              <h3>Popular Posts</h3>

              <div class="block-1-2 block-m-full popular__posts">
                  <?php foreach ($postsHome as $post): ?>
                  <article class="col-block popular__post">
                      <a href="<?= base_url().'/post/'.$post['slug']; ?>" class="popular__thumb">
                          <img src="<?= base_url(); ?>/images/thumbs/small/tulips-150.jpg" alt="">
                      </a>
                      <h5><?= $post['title']; ?>.</h5>
                      <section class="popular__meta">
                          <span class="popular__author"><span>Por</span> <a href="#0"><?= $post['created_by']; ?></a></span>
                          <span class="popular__date"><span>el</span> <time datetime="2018-06-14"><?= date('d-m-Y',strtotime($post['created_at'])); ?></time></span>
                      </section>
                  </article>
                  <?php endforeach; ?>
              </div> <!-- end popular_posts -->
          </div> <!-- end popular -->

          <div class="col-four md-six tab-full end">
              <div class="row">
                  <div class="col-six md-six mob-full categories">
                      <h3>Categorias</h3>

                      <ul class="linklist">
                          <?php foreach ($categories as $category): ?>
                              <li><a href="<?= base_url('categorias/'.$category['name']); ?>"><?= $category['name']; ?></a></li>
                          <?php endforeach; ?>
                      </ul>
                  </div> <!-- end categories -->

                  <div class="col-six md-six mob-full sitelinks">
                      <h3>Site Links</h3>

                      <ul class="linklist">
                          <li><a href="<?= base_url(''); ?>">Home</a></li>
                          <li><a href="<?= base_url('blog'); ?>">Blog</a></li>
                          <li><a href="<?= base_url('acerca'); ?>">About</a></li>
                          <li><a href="<?= base_url('contacto'); ?>">Contact</a></li>
                          <li><a href="<?= base_url('politica-de-privcidad'); ?>">Politica de privacidad</a></li>
                      </ul>
                  </div> <!-- end sitelinks -->
              </div>
          </div>
      </div> <!-- end row -->

  </section> <!-- end s-extra -->


  <!-- s-footer
  ================================================== -->
  <footer class="s-footer">

      <div class="s-footer__main">
          <div class="row">

              <div class="col-six tab-full s-footer__about">

                  <h4>About Wordsmith</h4>

                  <p>Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut occaecati placeat at.
                  Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia consequatur.
                  Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa error
                  temporibus magnam est voluptatem.</p>

              </div> <!-- end s-footer__about -->

              <div class="col-six tab-full s-footer__subscribe">

                  <h4>Our Newsletter</h4>

                  <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                  <div class="subscribe-form">
                      <form id="mc-form" class="group" novalidate="true">

                          <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                          <input type="submit" name="subscribe" value="Send">

                          <label for="mc-email" class="subscribe-message"></label>

                      </form>
                  </div>

              </div> <!-- end s-footer__subscribe -->

          </div>
      </div> <!-- end s-footer__main -->

      <div class="s-footer__bottom">
          <div class="row">

              <div class="col-six">
                  <ul class="footer-social">
                      <li>
                          <a href="#0"><i class="fab fa-facebook"></i></a>
                      </li>
                      <li>
                          <a href="#0"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                          <a href="#0"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                          <a href="#0"><i class="fab fa-youtube"></i></a>
                      </li>
                      <li>
                          <a href="#0"><i class="fab fa-pinterest"></i></a>
                      </li>
                  </ul>
              </div>

              <div class="col-six">
                  <div class="s-footer__copyright">
                      <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                  </div>
              </div>

          </div>
      </div> <!-- end s-footer__bottom -->

      <div class="go-top">
          <a class="smoothscroll" title="Back to Top" href="#top"></a>
      </div>

  </footer> <!-- end s-footer -->


  <!-- Java Script
  ================================================== -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/js/plugins.js"></script>
  <script src="<?= base_url(); ?>/js/main.js"></script>

</body>

</html>
