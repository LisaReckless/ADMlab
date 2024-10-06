<div class="content">
    <span class="content__name">Картины</span>
    <div class="page books" style="max-width: 70%;">
        <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php 
                        foreach (get_data_from_table('pictures') as $row) { 
                            echo('<li class="splide__slide"><img src="'.$row['url'].'"></li>');
                        }
                        ?>
                </ul>
            </div>
        </section>
    </div>
</div>
<script>
    new Splide( '.splide', {
        type   : 'loop'
    }).mount();
</script>