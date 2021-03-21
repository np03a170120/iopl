<?php include 'header.php' ?>

<section class="inner-breadcrumb" style="background-image: url(images/dummy.jpg);">
    <div class="container">
        <div class="sec-title">
            <p>Get yours</p>
            <h3>Indigo Job</h3>
        </div>
        <div class="ib-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Job</a></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="main-job sec-padding">
    <div class="container">
        <div class="main-job-search">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3 ">
                            <div class="form-field-wrapper">
                                <i class="far fa-edit"></i>
                                <label for="exampleInputEmail1"></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="keyword">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-field-wrapper">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="select-category">
                                    <select name="category" id="category">
                                        <option value="Assurance">Nepal</option>
                                        <option value="USA">USA</option>
                                        <option value="China">China</option>
                                        <option value="Canada">Canada</option>
                                        <option value="france">France</option>
                                        <option value="japan">Japan</option>
                                        <option value="Dubai">Dubai</option>
                                        <option value="Turkey">Turkey</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-field-wrapper">
                                <i class="fas fa-inbox"></i>
                                <div class="select-category">
                                    <select name="category" id="category">
                                        <option value="Itsector">IT Sector</option>
                                        <option value="Software">Software</option>
                                        <option value="PublicSector">Public Sector</option>
                                        <option value="Design">Design</option>
                                        <option value="ITSector">IT Sector</option>
                                        <option value="Management">Management</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Software">Software</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-icon-wrapper">
                                <button> <span>Search</span><i class="btn fas fa-search"></i></button>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="check-button-wrapper">

                                <div class="form-check form-check-inline">

                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Contract</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Freelance</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Internship</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Partime</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Temporary</label>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <!-- disply jobs -->
        <div class="mj-result">
            <div class="mj-job-result-single">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mj-img">
                            <img src="./images/logo.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="mj-desc">
                            <div class="mj-tag">
                                <span>Freelance</span>
                            </div>
                            <h5>Graphics Designer</h5>
                            <p>Ultrabyte</p>
                            <div class="mj-info">
                                <ul>
                                    <li> <i class="fas fa-map-marker-alt"></i> Silicon valley</li>
                                    <li> <i class="far fa-flag"></i> Nepal</li>
                                    <li> <i class="fas fa-dollar-sign"></i> 50,000</li>
                                </ul>

                                <div class="mj-view-details">
                                    <a href="inner-job-single.php">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mj-job-result-single">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mj-img">
                            <img src="./images/logo.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="mj-desc">
                            <div class="mj-tag">
                                <span>Freelance</span>
                            </div>
                            <h5>UI/UX Designer</h5>
                            <p>Ultrabyte</p>
                            <div class="mj-info">
                                <ul>
                                    <li> <i class="fas fa-map-marker-alt"></i> Silicon valley</li>
                                    <li> <i class="far fa-flag"></i> Nepal</li>
                                    <li> <i class="fas fa-dollar-sign"></i> 50,000</li>
                                </ul>
                                <div class="mj-view-details">
                                    <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mj-job-result-single">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mj-img">
                            <img src="./images/dummy1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="mj-desc">
                            <div class="mj-tag">
                                <span>Freelance</span>
                            </div>
                            <h5>UI/UX Designer</h5>
                            <p>Ultrabyte</p>
                            <div class="mj-info">
                                <ul>
                                    <li> <i class="fas fa-map-marker-alt"></i> Silicon valley</li>
                                    <li> <i class="far fa-flag"></i> Nepal</li>
                                    <li> <i class="fas fa-dollar-sign"></i> 50,000</li>
                                </ul>
                                <div class="mj-view-details">
                                    <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mj-job-result-single">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mj-img">
                            <img src="./images/dummy1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="mj-desc">
                            <div class="mj-tag">
                                <span>Freelance</span>
                            </div>
                            <h5>UI/UX Designer</h5>
                            <p>Ultrabyte</p>
                            <div class="mj-info">
                                <ul>
                                    <li> <i class="fas fa-map-marker-alt"></i> Silicon valley</li>
                                    <li> <i class="far fa-flag"></i> Nepal</li>
                                    <li> <i class="fas fa-dollar-sign"></i> 50,000</li>
                                </ul>
                                <div class="mj-view-details">
                                    <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mj-job-result-single">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mj-img">
                            <img src="./images/dummy1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="mj-desc">
                            <div class="mj-tag">
                                <span>Freelance</span>
                            </div>
                            <h5>UI/UX Designer</h5>
                            <p>Ultrabyte</p>
                            <div class="mj-info">
                                <ul>
                                    <li> <i class="fas fa-map-marker-alt"></i> Silicon valley</li>
                                    <li> <i class="far fa-flag"></i> Nepal</li>
                                    <li> <i class="fas fa-dollar-sign"></i> 50,000</li>
                                </ul>
                                <div class="mj-view-details">
                                    <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mj-job-result-single">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mj-img">
                            <img src="./images/dummy1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="mj-desc">
                            <div class="mj-tag">
                                <span>Freelance</span>
                            </div>
                            <h5>UI/UX Designer</h5>
                            <p>Ultrabyte</p>
                            <div class="mj-info">
                                <ul>
                                    <li> <i class="fas fa-map-marker-alt"></i> Silicon valley</li>
                                    <li> <i class="far fa-flag"></i> Nepal</li>
                                    <li> <i class="fas fa-dollar-sign"></i> 50,000</li>
                                </ul>
                                <div class="mj-view-details">
                                    <a href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pagination -->
            <div class="job-pagination">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php' ?>