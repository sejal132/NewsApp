
<?php if (!empty($news) && is_array($news)) : ?>
    <section class="details-card">
    <div style="text-align:center;"><a href="http://localhost:8080/news/create" "><button class=" button">+</button></a></div><br>
        <div class="container">
            <div class="row">
                <?php foreach ($news as $news_item) : ?>
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/nature" alt="">

                            </div>

                            <div class="card-desc">
                                <h3><?= esc($news_item['title']); ?></h3>

                                <p><?= esc($news_item['body']); ?></p>


                                <p> <a href="/news/<?= esc($news_item['slug'], 'url'); ?>" class="btn-card">View article</a></p>

                            </div>
                        </div>
                    </div>



                <?php endforeach; ?>





            </div>
        </div>
    </section>



<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>