@extends('layouts.app')

@section('content')
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">Vick Kumar</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://blog.vickkumar.com/">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="/resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/vickkumar/">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Experience Section-->
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0">Experience</h2>

                        </div>
                        <!-- Experience Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">May 2019 - May 2023</div>
                                            <div class="small fw-bolder">Level 2 Restaurant Support Analyst</div>
                                            <div class="small text-muted">McDonald's Head Office, Australia</div>
                                            <div class="small text-muted">Thornleigh, NSW</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>
                                           Provided Level 1/2 Technical support to over 1024 Australian McDonald's Restaurants.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Experience Card 2-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">2018 - 2019</div>
                                            <div class="small fw-bolder">Technical Support Specialist</div>
                                            <div class="small text-muted">Selerity</div>
                                            <div class="small text-muted">Penrith, NSW</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"><div>SAS Server Administration and Technical Support, Troubleshooted hardware and software issues. Created technical knowledge documents and created python scripts to monitor and provide alerts for servers.</div></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Education Section-->
                    <section>
                        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                        <!-- Education Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5 visually-hidden">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">2015 - 2017</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">Barnett College</div>
                                                <div class="small text-muted">Fairfield, NY</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">Master's</div>
                                                <div class="small text-muted">Web Development</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                </div>
                            </div>
                        </div>
                        <!-- Education Card 2-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">2020 - 2021</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">Charles Stuart University</div>
                                                <div class="small text-muted">Online</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">Graduate</div>
                                                <div class="small text-muted">Cyber Security</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"><div>Completed a 6 month Graduate Certificate of Cyber Security focusing on cryptology, networking, ethical hacking and server administration.</div></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Divider-->
                    <div class="pb-5"></div>
                    <!-- Skills Section-->
                     <section>
                        <!-- Skillset Card-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5 visually-hidden">
                                <!-- Professional skills list-->
                                <div class="mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO/SEM Marketing</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Statistical Analysis</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Software Suite</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div></div>
                                    </div>
                                </div>
                                <!-- Languages list-->
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Ruby</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection

