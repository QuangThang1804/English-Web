@include('layouts.head');

<body  class="bg-light">
@include('layouts.header')
<?php 
use Illuminate\Support\Facades\DB;
$results = DB::select('SELECT * FROM '. $name);
?>

<main id="main" class="bg-light">
    <div class="contain mx-20" style="max-width: 42rem">

      <h1 id="learning-title" class="text-uppercase text-2xl font-weight-bold pt-4 font-semibold" style="margin-top: 73px;"><?php echo $name ?> - Learning with ThangKuro</h1>
      <p class="my-2 "><i class="fa fa-star" aria-hidden="true" style="color: #fcd34d;"></i> Cho sao đánh giá học
        phần này</p>
      <div class="contant">
        <ul class="modes-learning row justify-content-between ">
          <li class="button-feature button bg-white p-2 rounded col-12 col-sm-6 my-2 shadow-sm "><i class="fa fa-server mr-2" style="color: #1864ab;"></i>Thẻ ghi
            nhớ</li>
          <li class="button-feature button bg-white p-2 rounded col-12 col-sm-6 my-2 shadow-sm "><i class="fa fa-book mr-2" style="color: #1864ab;"></i>Học</li>
          <li class="button-feature button bg-white p-2 rounded col-12 col-sm-6 my-2 shadow-sm "><i class="fa fa-clone mr-2" style="color: #1864ab;"></i>Ghép thẻ
          </li>
          <li class="button-feature button bg-white p-2 rounded col-12 col-sm-6 my-2 shadow-sm"><i class="fa fa-braille mr-2" style="color: #1864ab;"></i><a href="{{ route('mltChoice_test.show', ['name' => $name]) }}" style="color: black">Kiểm tra</a>
          </li>
        </ul>

        <div class="content-word">
          <div class="row">
            <div class="w-full">
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <h2 class="word-front text-lowercase">Click to Flip</h2>
                  </div>
                  <div class="flip-card-back">
                    <h2 class="word-back text-lowercase">Flipped Content</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="control-content-word flex justify-between">
          <i class="random fa fa-arrows-alt button"></i>
          <div class="flex justify-center">
            <i id="prev" class="mui-ten-trai fa-solid fa-arrow-left text-base bg-white border-2 p-2 rounded-full button"></i>
            <p class="count mx-3 my-2">10/30</p>
            <i id="next" class="mui-ten-phai fa-solid fa-arrow-right text-base bg-white border-2 p-2 rounded-full button"></i>
          </div>
          <i class="cai-dat fa fa-gear button"></i>
        </div>

        <nav class="border-gray-200 dark:bg-gray-900 border-b-4 shadow-sm">
          <!-- <div class="grid grid-cols-2 max-w-screen-xl py-4 right-0" style="width:20%">
            <img src="./assets/img/course-1.jpg"
              class="row-span-2 w-10 bg-slate-50 border-slate-500 rounded-full" style="gird-row: span 2 / span 2" alt="Imgae Author" />
            <p class=" text-xs font-normal whitespace-nowrap text-gray-400">Tạo bởi
            </p>
            <p class=" text-base font-semibold whitespace-nowrap">ThangKuro
            </p>

          </div> -->

          <div class="row pb-2 r-0">
            <img class="col-1 rounded-circle ml-2 p-3 " style="width: 92px;" src="/img/avatar.jpg" alt="">
            <div class="col-1">
              <p class="text-gray-400 whitespace-nowrap" style="font-size: 0.75rem;    margin-bottom: 6px;
              margin-top: 8px;">Tạo bởi</p>
              <p class="font-semibold whitespace-nowrap">ThangKuro</p>
            </div>
          </div>
        </nav>

        <div class="mb-4">
            <h2 class="text-xl font-semibold my-3">Thuật ngữ đã học trong học phần này (<?php echo count($results) ?>)</h2>
            
            <?php
            foreach ($results as $row) {
            ?>


              <div class="d-flex p-2 jutify-content-around bg-white my-2 border-gray-300 border-b-2  shadow-sm">
                <p class="w-25 border-r-2 border-gray-300 mb-1" style="flex: 1 1 0%;border-right: 2px;
                border-color: #dee2e6;
                border-style: solid;"><?php echo $row->english_word; ?></p>
                <p class="w-50 ml-4"  style="flex: 1 1 0%"><?php echo $row->vietnamese_word; ?></p>
              </div>
            <?php
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>


</main><!-- End #main -->
  
@include('layouts.footer')

<script>  
   <?php
    // $WordsArray = json_encode($results, true); 
    $ArrayVietnamese = array();
    $ArrayEnglish = array();
    foreach ($results as $row) {
      array_push($ArrayVietnamese, $row->vietnamese_word);
      array_push($ArrayEnglish, $row->english_word);
    }

    ?>; // Các từ hoặc cụm từ của bạn
    const words = <?php echo json_encode($ArrayVietnamese); ?>;
    const wordsBack =<?php echo json_encode($ArrayEnglish); ?>; // Các từ hoặc cụm từ của bạn
    let currentWordIndex = 0;

    const wordElement = document.querySelector('.word-front');
    const wordElementBack = document.querySelector('.word-back')
    const countElement = document.querySelector('.count');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    function updateWord(index) {
      wordElement.textContent = words[index];
      wordElementBack.textContent = wordsBack[index];
      countElement.textContent = `${index + 1}/${words.length}`;
    }

    prevButton.addEventListener('click', () => {
      currentWordIndex = (currentWordIndex - 1 + words.length) % words.length;
      updateWord(currentWordIndex);
    });

    nextButton.addEventListener('click', () => {
      currentWordIndex = (currentWordIndex + 1) % words.length;
      updateWord(currentWordIndex);
    });

    updateWord(currentWordIndex);
  </script>
</body>

</html>