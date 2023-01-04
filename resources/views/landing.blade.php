@extends('layouts.master')


@section('content')
<main>

    <section class="features section">
        <div class="container">
            <div class="features-inner section-inner has-bottom-divider">
                <div class="features-header text-center">
                    <div class="container-sm">
                        <h2 class="section-title mt-0">The Product</h2>
                        <p class="section-paragraph">Lorem ipsum is common placeholder text used to demonstrate the graphic elements of a document or visual presentation.</p>
                        <div class="features-image">
                            <img class="features-illustration asset-dark" src="dist/images/features-illustration-dark.svg" alt="Feature illustration">
                            <img class="features-box asset-dark" src="dist/images/features-box-dark.svg" alt="Feature box">
                            <img class="features-illustration asset-dark" src="dist/images/features-illustration-top-dark.svg" alt="Feature illustration top">
                            <img class="features-illustration asset-light" src="dist/images/features-illustration-light.svg" alt="Feature illustration">
                            <img class="features-box asset-light" src="dist/images/features-box-light.svg" alt="Feature box">
                            <img class="features-illustration asset-light" src="dist/images/features-illustration-top-light.svg" alt="Feature illustration top">
                        </div>
                    </div>
                </div>
                <div class="features-wrap">
                    <div class="feature is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img class="asset-light" src="dist/images/feature-01-light.svg" alt="Feature 01">
                                <img class="asset-dark" src="dist/images/feature-01-dark.svg" alt="Feature 01">
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title mt-0">Discover</h3>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img class="asset-light" src="dist/images/feature-02-light.svg" alt="Feature 02">
                                <img class="asset-dark" src="dist/images/feature-02-dark.svg" alt="Feature 02">
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title mt-0">Discover</h3>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img class="asset-light" src="dist/images/feature-03-light.svg" alt="Feature 03">
                                <img class="asset-dark" src="dist/images/feature-03-dark.svg" alt="Feature 03">
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title mt-0">Discover</h3>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta section">
        <div class="container-sm">
            <div class="cta-inner section-inner">
                <div class="cta-header text-center">
                    <h2 class="section-title mt-0">Get it and Switch</h2>
                    <p class="section-paragraph">Lorem ipsum is common placeholder text used to demonstrate the graphic elements of a document or visual presentation.</p>
                    <div class="cta-cta">
                        <a class="button button-primary" href="#">Buy it now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
