<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
    integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css"
    integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/assets/client/css/main.css">
<link href="/assets/client/css/about.css" rel="stylesheet">
    <title>Edit_Profile</title>
</head>
<body>

    <div class="container-fluid border-bottom px-5 pt-5">
        <!-- User Identety Brief-->
        <div class="profile-identity row">
            <h4 >  المعلومات الشخصية</h4>

            <div class="col-md-12">
                <div class="text-center">
                    <img src="../../assets/client/images/edait.png" class="avatar img-circle img-thumbnail" alt="avatar" style="border-radius: 50%; width:150px;height:150px">


                    <input type="file" class="form-control">
                </div>
            </div>


        </div>
        <!-- /User Identety Brief-->

        <!-- Profile Taps -->
        <div class="user-profile-tabs row d-flex justify-content-between align-items-center">



        </div>
        <!-- /Profile Taps -->
    </div>

    <main class="main-section container mt-3 pt-3">
        <div class="row d-flex justify-content-between" id="">
            <!-- About -->
            <div class="col-sm-12 col-lg-12 color-black about-section px-3 panel  is-show subPage" id="tab-A">

                <!-- My Brief -->
                <form>
                <div class="row">

                        <div class="col-sm-6 col-xs-12 pt-3">
                            <div class="form-group  ">
                                <label>الاسم <em class="text--danger">*</em>
                                </label>
                                <input class="form-control" placeholder="أكتب اسمك باللغة العربية" type="text" name="first_name" value="Mohammed">
                            </div>


                        </div>
                        <div class="col-sm-6 col-xs-12 pt-3">
                            <div class="form-group  ">
                                <label>اسم العائلة  <em class="text--danger">*</em>
                                </label>
                                <input class="form-control" placeholder="أكتب اسمك باللغة العربية" type="text" name="first_name" value="Mohammed">
                            </div>


                        </div>
                        <div class="col-sm-6 col-xs-12 pt-3">
                            <div class="form-group  ">
                                <label>الدولة  <em class="text--danger">*</em>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>الجنس</option>
                                    <option value="">ذكر</option>
                                    <option value="">انثى</option>

                                  </select>                           </div>

                        </div>
                        <div class="col-sm-6 col-xs-12 pt-3">
                            <div class="form-group  ">
                                <label>اللغة  <em class="text--danger">*</em>
                                </label>
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>العربية</option>
                                <option value="">English</option>

                              </select>

                        </div>



                          </form>

                </div>

            </div>

        </div>
        <div class="d-grid gap-2 col-6 mx-auto pt-3">
            <button class="btn btn-primary" type="button" style="background-color: #198754">حفظ الاعدادت</button>

          </div>
    </main>
</body>
</html>


