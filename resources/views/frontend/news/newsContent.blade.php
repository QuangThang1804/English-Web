@include('layouts.head');

<body>

<?php 
    $results = DB::select('SELECT * FROM news1 where id = '. $id);

    $resultNewWords = array();

    $resultPharagraph = array();

    foreach ($results as $row) {
        // echo $row ;
        foreach ($row as $key => $value) {
            if (str_contains($key, "lv1_paragraph")) {
                array_push($resultPharagraph, $value);
            }
            
            if (str_contains($key, "lv1_new_word")) {
                array_push($resultNewWords, $value);
            }
        }
        // echo $row -> lv1_paragraph_1;
        // echo $row-> lv1_paragraph_2;
        // echo $row-> lv1_paragraph_3;
        // echo $row-> lv1_new_word_1;
        // echo $row-> lv1_new_word_2;
        // echo $row-> lv1_new_word_3;
        // echo $row-> lv2_paragraph_1;
        // echo $row-> lv2_paragraph_2;
        // echo $row-> lv2_paragraph_3;
        // echo $row-> lv2_new_word_1;
        // echo $row-> lv2_new_word_2;
        // echo $row-> lv2_new_word_3;
        // echo $row-> lv3_paragraph_1;
        // echo $row-> lv3_paragraph_2;
        // echo $row-> lv3_paragraph_3;
        // echo $row-> lv3_new_word_1;
        // echo $row-> lv3_new_word_2;
        // echo $row-> lv3_new_word_3;

    }
?>

@include('layouts.header')

    <section id="news" style="margin: 5rem">
        <h1 class="text-primary font-weight-bold">Title news</h1>
        <div class="row">
            

            <div class="col-md-6 col-12 ">
                <div class="row justify-content-between">
                    <p class="col-4 my-1">29-08-2023 15:00</p>
                    <div class="col-7 ">
                        <a class="btn btn-primary my-1" style="margin-right: 8px;" href="#" role="button">Level 1</a>
                        <a class="btn btn-primary my-1" style="margin-right: 8px;" href="#" role="button">Level 2</a>
                        <a class="btn btn-primary my-1" href="#" role="button">Level 3</a>
                    </div>
                </div>

                <div class="my-4">
                    <?php
                        foreach ($resultPharagraph as $key => $value) {
                            ?>
                            <p><?php $value ?></p>

                    <?php

                        }
                    ?>
                </div>
            </div>

            <div class="col-4 text-nowrap ripple">
                <img class="img-fluid rounded" src="./assets/img/news/imgNews.jpg" alt="imgage of news">
            </div>
        </div>
        <div class="">
            <?php

            ?>
            <p>Difficult words: 
                <?php 
                    foreach ($resultNewWords as $key => $value) {
                ?>
                    <strong class="text-primary"><?php $value ?></strong> (a sports shirt), 

                <?php
                    }    
                ?>
        </div>
    </section>

  
@include('layouts.footer')
</body>

</html>