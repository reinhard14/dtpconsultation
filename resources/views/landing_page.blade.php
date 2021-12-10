@extends('layouts.app2')

@section('content')

        <!-- Banner -->
            <section id="banner">
                <div class="content">
                    <header>
                        <h2>DTP Consultation Scheduler</h2>
                        <p>This is your hub for scheduling consultations professionally </br>
                            and efficiently, eliminating the hassle of back-and-forth </br>
                            emails so you can have smoother transaction.</p>
                    </header>
                    <span class="image"><img src="{{ asset('dist/images/logo.png') }}" alt="hey" /></span>
                </div>
                <a href="#one" class="goto-next scrolly">Next</a>
            </section>

        <!-- One -->
            <section id="one" class="spotlight style1 bottom">
                <span class="image fit main"><img src="{{ asset('dist/images/p1.png') }}" alt="" /></span>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 col-12-medium">
                                <header>
                                    <h2>User Process</h2>
                                        <p>
                                            see details.
                                        </p>
                                </header>
                            </div>
                            <div class="col-4 col-12-medium">
                                <p>Teachers can register an account in order to create a schedule.</p>
                            </div>
                            <div class="col-4 col-12-medium">
                                <p>Students can book the schedule provided by the teachers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#two" class="goto-next scrolly">Next</a>
            </section>

        <!-- Two -->
            <section id="two" class="spotlight style2 right">
                <span class="image fit main"><img src="{{ asset('dist/images/p7.jpg') }}" alt="" /></span>
                <div class="content">
                    <header>
                        <h2>Students</h2>
                        <p>"Book a Schedule" link</p>
                    </header>
                    <p>Provides the list of schedules set by the teachers, Select a schedule on the list, and input your email in order to notify the teacher via for the request, and wait for it to be approved</p>
                    <ul class="actions">
                        <li><a href="{{ route('schedules.index') }}" class="button">Learn More</a></li>
                    </ul>
                </div>
                <a href="#three" class="goto-next scrolly">Next</a>
            </section>

        <!-- Three -->
            <section id="three" class="spotlight style3 left">
                <span class="image fit main bottom"><img src="{{ asset('dist/images/p8.jpg') }}" alt="" /></span>
                <div class="content">
                    <header>
                        <h2>User manual PDF here</h2>
                        <p>Click link to download manual</p>
                    </header>
                    <p>Click downloadable PDF.</p>
                    <ul class="actions">
                        <li><a href="{{ asset('dist/Manual.pdf') }}" class="button">User Manual</a></li>
                    </ul>
                </div>
                <a href="#four" class="goto-next scrolly">Next</a>
            </section>

			<!-- Four -->
            <section id="four" class="wrapper style1 special fade-up">
                <div class="container">
                    <header class="major">
                        <h2>See DTP Consultation Scheduler in action.</h2>
                        <p>How it works.</p>
                    </header>
                    <div class="box alt">
                        <div class="row gtr-uniform">
                            <section class="col-4 col-6-medium col-12-xsmall">
                                <span class="icon solid alt major fa-calendar"></span>
                                <h3>Select a schedule.</h3>
                                <p>Select schedules created by the Faculty.</p>
                            </section>
                            <section class="col-4 col-6-medium col-12-xsmall">
                                <span class="icon solid alt major fa-link"></span>
                                <h3>Receive email notification.</h3>
                                <p>Confirm the schedule and receive an email.</p>
                            </section>
                            <section class="col-4 col-6-medium col-12-xsmall">
                                <span class="icon solid alt major fa-check"></span>
                                <h3>Have a consultation</h3>
                                <p>Successfully booked a consultation with specific faculty in advance.</p>
                            </section>

                        </div>
                    </div>
                    <footer class="major">
                        <ul class="actions special">
                            <li><a href="{{ route('about') }}" class="button">Learn More</a></li>
                        </ul>
                    </footer>
                </div>
            </section>

        <!-- Five -->
            <section id="five" class="wrapper style2 special fade">
                <div class="container">
                    <header>
                        <h2>Do more of what you do best</h2>
                        <p>With scheduling hassles and interruptions gone, </br>your day is cleared for accomplishment.</p>
                    </header>
                    <footer class="major">
                        <ul class="actions special">
                            <li><a href="{{ route('register') }}" class="button">Get started</a></li>
                        </ul>
                    </footer>
                </div>
            </section>

@endsection
