<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Card News</title>
    <link rel="icon" href="https://play-lh.googleusercontent.com/LZIgOqvM8r2e0Y73_Ul_qwlOq3PDu0yqEXiytxq-_v93UWFaKd9wOpy5Q1hfUmmZtw">
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center" style="background-color:#ECF2FF;">
        <div class="col-md-2 shadow rounded border-0 pt-3 mt-3" style="background-color : #FFFFFF;height:20vh;">
          <form method="POST">
            <button type="button" class="btn btn-dark mt-3" style="width: 100%">
                New Post
            </button>
            <button
                type="submit"
                class="btn btn-outline-dark mt-2"
                style="width: 100%" name="signOut"
            >
                Sign Out
            </button>
          </form>
        </div>
        <div
          class="col-md-6 h-100vh py-3 overflow-auto flex-column"
          style="background-color: #ECF2FF"
        >
          <div class="card-box d-flex justify-content-center mb-3">
            <div class="card shadow rounded border-0" style="width: 35rem">
              <h5 class="card-title mt-4 fw-bold ms-3">
                <span class="me-2 border-left ps-1">Card Title</span>
              </h5>
              <h6 class="card-title p2-3 ps-3 text-muted">
                By Admin<i class="fa-solid fa-shield-halved ms-1"></i>
              </h6>
              <p
                class="card-title p2-3 ps-3 text-muted"
                style="font-size: 14px"
              >
                27/11/2022
              </p>
              <img class="p-4"
                src="./img/1.png"
                class="card-img-top img-fluid"
                alt=""
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <hr />
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa-regular fa-thumbs-up"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa-regular fa-thumbs-down"></i>
                    </button>
                  </div>
                  <div><small class="text-muted">9-mins</small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-box d-flex justify-content-center mb-3">
            <div class="card shadow rounded border-0" style="width: 35rem">
              <h5 class="card-title mt-4 fw-bold ms-3">
                <span class="me-2 border-left ps-1">Card Title</span>
              </h5>
              <h6 class="card-title p2-3 ps-3 text-muted">
                By Admin<i class="fa-solid fa-shield-halved ms-1"></i>
              </h6>
              <p
                class="card-title p2-3 ps-3 text-muted"
                style="font-size: 14px"
              >
                27/11/2022
              </p>
              <img class="p-4"
                src="./img/2.png"
                class="card-img-top img-fluid"
                alt=""
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <hr />
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa-regular fa-thumbs-up"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa-regular fa-thumbs-down"></i>
                    </button>
                  </div>
                  <div><small class="text-muted">9-mins</small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-box d-flex justify-content-center mb-3">
            <div class="card shadow rounded border-0" style="width: 35rem">
              <h5 class="card-title mt-4 fw-bold ms-3">
                <span class="me-2 border-left ps-1">Card Title</span>
              </h5>
              <h6 class="card-title p2-3 ps-3 text-muted">
                By Admin<i class="fa-solid fa-shield-halved ms-1"></i>
              </h6>
              <p
                class="card-title p2-3 ps-3 text-muted"
                style="font-size: 14px"
              >
                27/11/2022
              </p>
              <img class="p-4" 
                src="./img/3.png"
                class="card-img-top img-fluid"
                alt=""
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <hr />
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa-regular fa-thumbs-up"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa-regular fa-thumbs-down"></i>
                    </button>
                  </div>
                  <div><small class="text-muted">9-mins</small></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--PHP code here-->
    <?php
    if (isset($_POST['signOut'])) {
        echo "Sign Out Successfully";
      }
    ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>