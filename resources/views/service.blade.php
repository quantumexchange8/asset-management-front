@extends('Layouts.master')
@section('title', 'Products & Services')
@section('contents')
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                <div class="uk-width-1-1">
                  <h1 class="uk-margin-remove">Our <span class="in-highlight">products & services</span></h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-remove">**Work with us the way you want.</p>
                    <p>* *Some believe you must choose between an online broker and a wealth management firm. At Wave Capital, you don’t need to compromise. Whether you invest on your own, with an advisor, or a little of both — we can support you.</p>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-handshake fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">SERVICES</a>
                        </h4>
                        <hr>
                        <p>We provide a variety of investment options to match our clients' unique needs, including Fund Management Products, Financial Planning, and Personal Coaching.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-chart-bar fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">FUND MANAGEMENT</a>
                        </h4>
                        <hr>
                        <p>Our Fund Management Products are professionally developed to accommodate investors with varying tolerances for risk. Our professional fund manager is always monitoring these products to ensure optimal performance and stability.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-chart-pie fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">INVESTMENT STRATEGIES</a>
                        </h4>
                        <hr>
                        <p>Our expert financial planners offer comprehensive, one-stop investment strategies and solutions tailored to meet each client's personal or organizational needs and goals. With a client-focused approach, we design customized investment plans that align seamlessly with your values and objectives.</p>
                    </div>
                </div>
            </div>
            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-2@m in-card-10" data-uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-navy">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-chalkboard-teacher fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">PERSONAL COACHING</a>
                        </h4>
                        <hr>
                        <p>We provide Personal Coaching services to help clients enhance their relationship with money and stay focused on achieving their financial goals. Our experienced financial coaches offer tailored advice and support, empowering clients to attain financial success and peace of mind.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-grey">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-funnel-dollar fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">INVESTMENT SOLUTIONS</a>
                        </h4>
                        <hr>
                        <p>We are dedicated to providing exceptional investment solutions and services, thoughtfully tailored to meet the unique needs and preferences of each client.</p>
                    </div>
                </div>
                {{-- <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-orange">
                      <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-handshake fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-medium-top">
                            <a href="#">Mutual fund advisor<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Specialized guidance from independent local advisor for hight-net-worth investors</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-2-3@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid>
                        <div class="uk-width-auto@m">
                          <div class="in-icon-wrap large primary-color uk-margin-right">
                            <i class="fas fa-money-bill-wave fa-2x"></i>
                          </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3>Why trade with Wave Capital?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation repudiandae ullamco.</p>
                            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                                <div>
                                    <ul class="uk-list in-list-check">
                                        <li>Direct Market Access (DMA)</li>
                                        <li>Leverage up to 1:500</li>
                                        <li>T+0 settlement</li>
                                        <li>Dividends paid in cash</li>
                                    </ul>
                                </div>
                                <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                    <ul class="uk-list in-list-check">
                                        <li>Free from UK Stamp Duty</li>
                                        <li>Short selling available</li>
                                        <li>Commissions from 0.08%</li>
                                        <li>Access to 1500 global shares</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <h3>Our Shares offer</h3>
                    <table class="uk-table uk-table-striped uk-text-small uk-text-center">
                        <thead>
                            <tr>
                                <th class="uk-text-center">Name</th>
                                <th class="uk-text-center">Initial Deposit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Apple Inc CFD</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>Alibaba CFD</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>Facebook CFD</td>
                                <td>10%</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="uk-link-text uk-text-small uk-text-primary" href="#">See Full Shares Table</a>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-card-16">
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <h3>Get up to $600 plus 60 days of commission-free stocks & forex trades</h3>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded" href="#">Open an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    </main>
@endsection