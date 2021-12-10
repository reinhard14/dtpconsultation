@extends('layouts.app2')

@section('content')

        <!-- Main -->
            <div id="main" class="wrapper style1">
                <div class="container">
                    <header class="major">
                        <h2>About Us</h2>
                        <p>Project by BSIT 4th year, IT Students</p>
                    </header>

                    <!-- Text -->
                        <section>
                            <header>
                                <h3>The Department of Technical Programs</h3>
                                <p>Scheduler allows teachers to post their available dates for consultation</p>
                            </header>
                            <p>Students can book the teacher's schedule and get notified through email.</p>
                            <header>



                            <h4>Dedication</h4>
                            <blockquote>This system is dedicated to all the students and teachers who wanted to automate their booking schedules(but really for complying our finals requirements.)</blockquote>

                            <hr />

                        </section>

                    <!-- Image -->
                        <section>
                            <h3>Gallery of Developers</h3>
                            <div class="box alt">
                                <div class="row gtr-50 gtr-uniform">
                                    <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{{ asset('dist/img/w1.jpg') }}" alt="wendy" /></span></div>
                                    <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{{ asset('dist/img/w2.jpg') }}" alt="leocer" /></span></div>
                                    <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{{ asset('dist/img/w3.jpg') }}" alt="reinhard" /></span></div>
                                </div>
                            </div>

                </div>
            </div>




@endsection
