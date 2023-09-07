@include('layouts.head');

<body>
<?php $buttonName = "lv1_"; ?>



<?php 
    $results = DB::select('SELECT * FROM news1 where id = '. $id);
    $level = "";
    if ($level) {
        $buttonName = $level;
    }

    $resultNewWords = array();

    $resultPharagraph = array();

    $arrayNewWord = array();

    $titleNew = "";

    $imgAddress = "";

    foreach ($results as $row) {
        $titleNew = $row -> name_new;
        $imgAddress = $row -> img_address;
        // print_r($row);
        foreach ($row as $key => $value) {
            // echo $key . "<br>";
            // echo $value . "<br>";
            if (str_contains($key, $buttonName."paragraph")) {
                array_push($resultPharagraph, $value);
            }
            
            if (str_contains($key, $buttonName."new_word")) {
                array_push($resultNewWords, $value);
            }
        }
    }
?>

<!-- @include('layouts.header') -->

    <section id="news" style="margin: 5rem">
        <h1 class="text-primary font-weight-bold"><?php echo $titleNew ?></h1>
        <div class="row">
            

            <div class="col-md-6 col-12 ">
                <div class="row justify-content-between">
                    <p class="col-4 my-1">29-08-2023 15:00</p>
                    <div class="col-7 ">
                        <a id="buttonLv1" class="btn btn-primary my-1" style="margin-right: 8px;" href="{{ route('news.showLevel', ['id' => $id, 'level' => 'lv1_']) }}" role="button">Level 1</a>
                        <a id="buttonLv2" class="btn btn-primary my-1" style="margin-right: 8px;" href="{{ route('news.showLevel', ['id' => $id, 'level' => 'lv2_']) }}" role="button">Level 2</a>
                        <a id="buttonLv3" class="btn btn-primary my-1" href="{{ route('news.showLevel', ['id' => $id, 'level' => 'lv3_']) }}" role="button">Level 3</a>
                    </div>
                </div>

                <div class="my-4">
                    <?php 
                        foreach ($resultNewWords as $key) {
                            $firstWord = substr($key, 0, strpos($key, " "));
                            array_push($arrayNewWord, $firstWord);
                        }    
                    ?>

                    <?php
                        foreach ($resultPharagraph as $rowPharagraph) {
                            foreach ($arrayNewWord as $firstWord) {
                                $rowPharagraph = preg_replace("/".$firstWord."/", '<strong>' . $firstWord . '</strong>', $rowPharagraph, 1);
                            }
                            ?>
                            <p><?php echo $rowPharagraph ?></p>

                    <?php

                        }
                    ?>
                </div>
            </div>

            <div class="col-4 text-nowrap ripple">
                <img class="img-fluid rounded" style="margin-top:8%" src="/img/newsImg/{!! $imgAddress !!}" alt="imgage of news">
            </div>
        </div>
        <div class="">
            <?php

            ?>
            <p>Difficult words: 
                <?php 
                    foreach ($resultNewWords as $key) {
                        $firstWord = substr($key, 0, strpos($key, " "));
                        // $rowReal = str_replace($firstWord, '<strong class="text-primary"">' . $firstWord . '</strong>', $key);
                        $rowReal = preg_replace("/".$firstWord."/", '<strong class="text-primary">' . $firstWord . '</strong>', $key, 1);
                        echo $rowReal . " ";
                    }    
                ?>
        </div>
    </section>
<javascript>
</javascript>

<!-- <script>
  document.getElementById("buttonLv1").addEventListener('click', function (event) {
    event.preventDefault(); // Ngăn chặn chuyển hướng khi bấm vào liên kết
    var linkValue = this.innerText;
  });
</script> -->
  
@include('layouts.footer')
</body>

</html>