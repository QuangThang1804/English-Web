@include('layouts.head');

<style>
  .section_our_solution .row {
  align-items: center;
}

.our_solution_category {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-around;
}
.our_solution_category {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}
.our_solution_category .solution_card {
  flex: 0 80%;
  background: #fff;
  box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
    0 5px 15px 0 rgba(37, 44, 97, 0.15);
  border-radius: 15px;
  margin: 16px 8px;
  padding: 10px 15px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  min-height: 265px;
  transition: 0.7s;
}

.our_solution_category .solution_card:hover {
  background: #309df0;
  color: #fff;
  transform: scale(1.1);
  z-index: 9;
}

.our_solution_category .solution_card:hover::before {
  background: rgb(85 108 214 / 10%);
}

.our_solution_category .solution_card:hover .solu_title h3,
.our_solution_category .solution_card:hover .solu_description p {
  color: #fff;
}

.our_solution_category .solution_card:before {
  content: "";
  position: absolute;
  background: rgb(85 108 214 / 5%);
  width: 170px;
  height: 400px;
  z-index: -1;
  transform: rotate(42deg);
  right: -56px;
  top: -23px;
  border-radius: 35px;
}

.our_solution_category .solution_card:hover .solu_description a {
  background: #fff !important;
  color: #309df0;
}

.solution_card .so_top_icon {
}

.solution_card .solu_title h3 {
  color: #212121;
  font-size: 1.3rem;
  margin-top: 13px;
  margin-bottom: 13px;
}

.solution_card .solu_description p {
  font-size: 15px;
  margin-bottom: 15px;
}

.solution_card .solu_description a {
  border: 0;
  border-radius: 15px;
  background: linear-gradient(
    140deg,
    #42c3ca 0%,
    #42c3ca 50%,
    #42c3cac7 75%
  ) !important;
  color: #fff;
  font-weight: 500;
  font-size: 1rem;
  padding: 5px 16px;
}

.our_solution_content h1 {
  text-transform: capitalize;
  margin-bottom: 1rem;
  font-size: 2.5rem;
}
.our_solution_content p {
}

.hover_color_bubble {
  position: absolute;
  background: rgb(54 81 207 / 15%);
  width: 100rem;
  height: 100rem;
  left: 0;
  right: 0;
  z-index: -1;
  top: 16rem;
  border-radius: 50%;
  transform: rotate(-36deg);
  left: -18rem;
  transition: 0.7s;
}

.our_solution_category .solution_card:hover .hover_color_bubble {
  top: 0rem;
}

.our_solution_category .solution_card .so_top_icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #fff;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.our_solution_category .solution_card .so_top_icon img {
  width: 40px;
  height: 50px;
  object-fit: contain;
}

/*start media query*/
@media screen and (min-width: 320px) {
  .sol_card_top_3 {
    position: relative;
    top: 0;
  }

  .our_solution_category {
    width: 100%;
    margin: 0 auto;
  }

  .our_solution_category {
    flex: auto;
  }
}
@media only screen and (min-width: 768px) {
  .our_solution_category {
    flex: 1;
  }
}
@media only screen and (min-width: 1024px) {
  .sol_card_top_3 {
    position: relative;
    top: -3rem;
  }
  .our_solution_category {
    width: 75%;
    margin: 0 auto;
  }
}


</style>
<body>

  <!-- Lấy dữ liệu từ DB  -->
  <?php
    $results = DB::select('SELECT * FROM lession where TypeLession = "phrase"');
  ?>
    
    @include('layouts.header')

    <main id="main" data-aos="fade-in">

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        

      </div>
    </section><!-- End Courses Section -->

    <!-- Card blue vip pro -->
    <div class="section_our_solution">
        <div class="row">
                <div class="our_solution_category">
                    <?php
                        foreach ($results as $row) {
                            
                    ?>
                        <div class="solution_card col-lg-3 col-md-5 col-12">
                            <div class="hover_color_bubble"></div>
                            <div class="so_top_icon">
                                <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512"
                                    width="40" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"
                                                        fill="#fae19e" />
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"
                                                                        fill="#fff9e9" />
                                                                </g>
                                                                <path
                                                                    d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"
                                                                    fill="#fff4d6" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"
                                                        fill="#ffeec2" />
                                                </g>
                                            </g>
                                            <g>
                                                <path
                                                    d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"
                                                    fill="#fed23a" />
                                                <path
                                                    d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"
                                                    fill="#54b1ff" />
                                                <path
                                                    d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"
                                                    fill="#fdf385" />
                                                <path
                                                    d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"
                                                    fill="#faee6e" />
                                                <path
                                                    d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"
                                                    fill="#54b1ff" />
                                                <g>
                                                    <path
                                                        d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"
                                                        fill="#3da7ff" />
                                                </g>
                                            </g>
                                        </g>
                                        <g fill="#060606">
                                            <path
                                                d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                            <path
                                                d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                            <path
                                                d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                            <path
                                                d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                            <path
                                                d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                            <path
                                                d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                            <path
                                                d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="solu_title">
                                <h3><?php echo $row->name ?></h3>
                            </div>
                            <div class="solu_description">
                                <p>
                                    Vui lòng nhấn vào đây để xem chi tiết bài học
                                </p>
                                <a href="{{ route('phrases.show', ['name' => $row->name]) }}" type="button" class="read_more_btn">Read More</a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                        

                </div>

            
        </div>
    </div>

  </main><!-- End #main -->

    @include('layouts.footer')
<!-- Vấn đề hiện tại:
+ respon cho >= 1024px thì 3 cột/hàng
+            >= 780px thì 2 cột/hàng
+            <780px thì 1 cột/hàng

+ 
-->
</body>
</html>