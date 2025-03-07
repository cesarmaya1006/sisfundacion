<!--  ============================================  -->
@extends('intranet.layout2.app')
@section('css_pagina')
@endsection
@section('tituloPagina')
    <i class="fas fa-check-square mr-3" aria-hidden="true"></i> Menores
@endsection
@section('subTituloPagina')
    Menores asociados a la fundación
@endsection
@section('botones_card')
@endsection
@section('cuerpoPagina')
    @can('menores.index')
        <div class="row">
            <div class="col-12">
                <div class="row row-cols-1">
                    <div class="overflow-hidden d-slider1">
                        <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div id="circle-progress-01"
                                            class="text-center circle-progress-01 circle-progress circle-progress-dark"
                                            data-min-value="0" data-max-value="100" data-value="100" data-type="percent">
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">Total Menores</p>
                                            <p class="mb-2">---</p>
                                            <h4 class="counter">128</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div id="circle-progress-02"
                                            class="text-center circle-progress-02 circle-progress circle-progress-danger"
                                            data-min-value="0" data-max-value="100" data-value="{{(57*100)/128}}" data-type="percent">

                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">Total Niñas</p>
                                            <p>{{number_format((57*100)/128,2,'.','')}} %</p>
                                            <h4 class="counter">57</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div id="circle-progress-03"
                                            class="text-center circle-progress-03 circle-progress circle-progress-primary"
                                            data-min-value="0" data-max-value="100" data-value="{{((128-57)*100)/128}}" data-type="percent">

                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">Total Niños</p>
                                            <p>{{number_format(((128-57)*100)/128,'2','.','')}} %</p>
                                            <h4 class="counter">{{128-57}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Intervenciones Realizadas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Procesos al dia</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>34<sup style="font-size: 20px">%</sup></h3>

                  <p>Procesos a punto de vencer</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>13<sup style="font-size: 20px">%</sup></h3>

                  <p>Procesos Vencidos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-12 col-xl-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="900">
                            <div class="flex-wrap card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Suministros</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="flex-wrap d-flex align-items-center justify-content-between">
                                    <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                                    <div class="d-grid gap col-md-4 col-lg-4">
                                        <div class="d-flex align-items-start">
                                            <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                                viewBox="0 0 24 24" fill="#3a57e8">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-3">
                                                <span class="text-gray">Ropa</span>
                                                <h6>251</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14"
                                                viewBox="0 0 24 24" fill="#4bc7d2">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-3">
                                                <span class="text-gray">Aseo</span>
                                                <h6>176</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="1000">
                            <div class="flex-wrap card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Entrega de Elementos</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="d-activity" class="d-activity"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                            <div class="flex-wrap card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="mb-2 card-title">Enterprise Clients</h4>
                                    <p class="mb-0">
                                        <svg class ="me-2 text-primary icon-24" width="24" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                        </svg>
                                        15 Proximas actividades
                                    </p>
                                </div>
                            </div>
                            <div class="p-0 card-body">
                                <div class="mt-4 table-responsive">
                                    <table id="basic-table" class="table mb-0 table-striped" role="grid">
                                        <thead>
                                            <tr>
                                                <th>ESPECIALIDAD</th>
                                                <th>FECHA</th>
                                                <th>CANTIDAD</th>
                                                <th>ESTADO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="{{asset('hope/assets/images/shapes/01.png')}}" alt="profile">
                                                        <h6>Nutrición</h6>
                                                    </div>
                                                </td>
                                                <td>05-02-2025</td>
                                                <td>$14</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>60%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-primary w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="{{asset('hope/assets/images/shapes/05.png')}}" alt="profile">
                                                        <h6>Psicología</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    07-02-2025
                                                </td>
                                                <td>30</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>25%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-primary w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="{{asset('hope/assets/images/shapes/02.png')}}" alt="profile">
                                                        <h6>Medicina General</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    08-02-2025
                                                </td>
                                                <td>18</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>100%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-success w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="{{asset('hope/assets/images/shapes/03.png')}}" alt="profile">
                                                        <h6>Trabajo Social</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        10-02-2025
                                                    </div>
                                                </td>
                                                <td>20</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>100%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-success w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="{{asset('hope/assets/images/shapes/04.png')}}" alt="profile">
                                                        <h6>Odontología</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    14-02-2025
                                                </td>
                                                <td>19</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>75%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-primary w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-sombra" type="button">Hoas de vida</button>
                          </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-sombra" type="button">Programación</button>
                          </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning btn-sombra" type="button">Rutas de Atención</button>
                          </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h3>Resumen por Especialidad de Atención</h3>
                    </div>
                    <div class="col-12">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Medicina General
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Nutrición
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="card">
                                            <div class="card-body">
                                               <div class="d-flex flex-column">
                                                  <div class="mb-3">
                                                     <h2>Estado Nutricional Mesual</h2>
                                                     <span class="text-primary">Status</span>
                                                  </div>
                                                  <div class="border rounded ">
                                                     <div id="extrachart" style="min-height: 250px;"><div id="apexcharts7z6xaecv" class="apexcharts-canvas apexcharts7z6xaecv apexcharts-theme-light" style="width: 726px; height: 250px;"><svg id="SvgjsSvg1378" width="726" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1460" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1380" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1379"><linearGradient id="SvgjsLinearGradient1383" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1384" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1385" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1386" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask7z6xaecv"><rect id="SvgjsRect1388" width="732" height="252" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask7z6xaecv"></clipPath><clipPath id="nonForecastMask7z6xaecv"></clipPath><clipPath id="gridRectMarkerMask7z6xaecv"><rect id="SvgjsRect1389" width="730" height="254" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1387" width="22.183333333333334" height="250" x="168.00000813802083" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1383)" class="apexcharts-xcrosshairs" y2="250" filter="none" fill-opacity="0.9" x1="168.00000813802083" x2="168.00000813802083"></rect><g id="SvgjsG1436" class="apexcharts-grid"><g id="SvgjsG1437" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1441" x1="0" y1="62.5" x2="726" y2="62.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1442" x1="0" y1="125" x2="726" y2="125" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1443" x1="0" y1="187.5" x2="726" y2="187.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1438" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1446" x1="0" y1="250" x2="726" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1445" x1="0" y1="1" x2="0" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1390" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1391" class="apexcharts-series" rel="1" seriesName="Normal" data:realIndex="0"><path id="SvgjsPath1395" d="M27.225 245.001L27.225 163.33433333333332C27.225 160.83433333333332 29.725 158.33433333333332 32.225 158.33433333333332L42.40833333333333 158.33433333333332C44.90833333333333 158.33433333333332 47.40833333333333 160.83433333333332 47.40833333333333 163.33433333333332L47.40833333333333 245.001C47.40833333333333 247.501 44.90833333333333 250.001 42.40833333333333 250.001L32.225 250.001C29.725 250.001 27.225 247.501 27.225 245.001C27.225 245.001 27.225 245.001 27.225 245.001 " fill="rgba(52,78,209,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 27.225 245.001 L 27.225 163.33433333333332 C 27.225 160.83433333333332 29.725 158.33433333333332 32.225 158.33433333333332 L 42.40833333333333 158.33433333333332 C 44.90833333333333 158.33433333333332 47.40833333333333 160.83433333333332 47.40833333333333 163.33433333333332 L 47.40833333333333 245.001 C 47.40833333333333 247.501 44.90833333333333 250.001 42.40833333333333 250.001 L 32.225 250.001 C 29.725 250.001 27.225 247.501 27.225 245.001 Z " pathFrom="M 27.225 250.001 L 27.225 250.001 L 47.40833333333333 250.001 L 47.40833333333333 250.001 L 47.40833333333333 250.001 L 47.40833333333333 250.001 L 47.40833333333333 250.001 L 27.225 250.001 Z" cy="158.33333333333331" cx="147.225" j="0" val="44" barHeight="91.66666666666667" barWidth="22.183333333333334"></path><path id="SvgjsPath1397" d="M148.225 245.001L148.225 140.41766666666666C148.225 137.91766666666666 150.725 135.41766666666666 153.225 135.41766666666666L163.40833333333333 135.41766666666666C165.90833333333333 135.41766666666666 168.40833333333333 137.91766666666666 168.40833333333333 140.41766666666666L168.40833333333333 245.001C168.40833333333333 247.501 165.90833333333333 250.001 163.40833333333333 250.001L153.225 250.001C150.725 250.001 148.225 247.501 148.225 245.001C148.225 245.001 148.225 245.001 148.225 245.001 " fill="rgba(52,78,209,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 148.225 245.001 L 148.225 140.41766666666666 C 148.225 137.91766666666666 150.725 135.41766666666666 153.225 135.41766666666666 L 163.40833333333333 135.41766666666666 C 165.90833333333333 135.41766666666666 168.40833333333333 137.91766666666666 168.40833333333333 140.41766666666666 L 168.40833333333333 245.001 C 168.40833333333333 247.501 165.90833333333333 250.001 163.40833333333333 250.001 L 153.225 250.001 C 150.725 250.001 148.225 247.501 148.225 245.001 Z " pathFrom="M 148.225 250.001 L 148.225 250.001 L 168.40833333333333 250.001 L 168.40833333333333 250.001 L 168.40833333333333 250.001 L 168.40833333333333 250.001 L 168.40833333333333 250.001 L 148.225 250.001 Z" cy="135.41666666666666" cx="268.225" j="1" val="55" barHeight="114.58333333333334" barWidth="22.183333333333334"></path><path id="SvgjsPath1399" d="M269.225 245.001L269.225 136.251C269.225 133.751 271.725 131.251 274.225 131.251L284.40833333333336 131.251C286.90833333333336 131.251 289.40833333333336 133.751 289.40833333333336 136.251L289.40833333333336 245.001C289.40833333333336 247.501 286.90833333333336 250.001 284.40833333333336 250.001L274.225 250.001C271.725 250.001 269.225 247.501 269.225 245.001C269.225 245.001 269.225 245.001 269.225 245.001 " fill="rgba(52,78,209,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 269.225 245.001 L 269.225 136.251 C 269.225 133.751 271.725 131.251 274.225 131.251 L 284.40833333333336 131.251 C 286.90833333333336 131.251 289.40833333333336 133.751 289.40833333333336 136.251 L 289.40833333333336 245.001 C 289.40833333333336 247.501 286.90833333333336 250.001 284.40833333333336 250.001 L 274.225 250.001 C 271.725 250.001 269.225 247.501 269.225 245.001 Z " pathFrom="M 269.225 250.001 L 269.225 250.001 L 289.40833333333336 250.001 L 289.40833333333336 250.001 L 289.40833333333336 250.001 L 289.40833333333336 250.001 L 289.40833333333336 250.001 L 269.225 250.001 Z" cy="131.25" cx="389.225" j="2" val="57" barHeight="118.75" barWidth="22.183333333333334"></path><path id="SvgjsPath1401" d="M390.225 245.001L390.225 138.33433333333332C390.225 135.83433333333332 392.725 133.33433333333332 395.225 133.33433333333332L405.40833333333336 133.33433333333332C407.90833333333336 133.33433333333332 410.40833333333336 135.83433333333332 410.40833333333336 138.33433333333332L410.40833333333336 245.001C410.40833333333336 247.501 407.90833333333336 250.001 405.40833333333336 250.001L395.225 250.001C392.725 250.001 390.225 247.501 390.225 245.001C390.225 245.001 390.225 245.001 390.225 245.001 " fill="rgba(52,78,209,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 390.225 245.001 L 390.225 138.33433333333332 C 390.225 135.83433333333332 392.725 133.33433333333332 395.225 133.33433333333332 L 405.40833333333336 133.33433333333332 C 407.90833333333336 133.33433333333332 410.40833333333336 135.83433333333332 410.40833333333336 138.33433333333332 L 410.40833333333336 245.001 C 410.40833333333336 247.501 407.90833333333336 250.001 405.40833333333336 250.001 L 395.225 250.001 C 392.725 250.001 390.225 247.501 390.225 245.001 Z " pathFrom="M 390.225 250.001 L 390.225 250.001 L 410.40833333333336 250.001 L 410.40833333333336 250.001 L 410.40833333333336 250.001 L 410.40833333333336 250.001 L 410.40833333333336 250.001 L 390.225 250.001 Z" cy="133.33333333333331" cx="510.225" j="3" val="56" barHeight="116.66666666666667" barWidth="22.183333333333334"></path><path id="SvgjsPath1403" d="M511.225 245.001L511.225 127.91766666666666C511.225 125.41766666666666 513.725 122.91766666666666 516.225 122.91766666666666L526.4083333333333 122.91766666666666C528.9083333333333 122.91766666666666 531.4083333333333 125.41766666666666 531.4083333333333 127.91766666666666L531.4083333333333 245.001C531.4083333333333 247.501 528.9083333333333 250.001 526.4083333333333 250.001L516.225 250.001C513.725 250.001 511.225 247.501 511.225 245.001C511.225 245.001 511.225 245.001 511.225 245.001 " fill="rgba(52,78,209,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 511.225 245.001 L 511.225 127.91766666666666 C 511.225 125.41766666666666 513.725 122.91766666666666 516.225 122.91766666666666 L 526.4083333333333 122.91766666666666 C 528.9083333333333 122.91766666666666 531.4083333333333 125.41766666666666 531.4083333333333 127.91766666666666 L 531.4083333333333 245.001 C 531.4083333333333 247.501 528.9083333333333 250.001 526.4083333333333 250.001 L 516.225 250.001 C 513.725 250.001 511.225 247.501 511.225 245.001 Z " pathFrom="M 511.225 250.001 L 511.225 250.001 L 531.4083333333333 250.001 L 531.4083333333333 250.001 L 531.4083333333333 250.001 L 531.4083333333333 250.001 L 531.4083333333333 250.001 L 511.225 250.001 Z" cy="122.91666666666666" cx="631.225" j="4" val="61" barHeight="127.08333333333334" barWidth="22.183333333333334"></path><path id="SvgjsPath1405" d="M632.225 245.001L632.225 134.16766666666666C632.225 131.66766666666666 634.725 129.16766666666666 637.225 129.16766666666666L647.4083333333333 129.16766666666666C649.9083333333333 129.16766666666666 652.4083333333333 131.66766666666666 652.4083333333333 134.16766666666666L652.4083333333333 245.001C652.4083333333333 247.501 649.9083333333333 250.001 647.4083333333333 250.001L637.225 250.001C634.725 250.001 632.225 247.501 632.225 245.001C632.225 245.001 632.225 245.001 632.225 245.001 " fill="rgba(52,78,209,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 632.225 245.001 L 632.225 134.16766666666666 C 632.225 131.66766666666666 634.725 129.16766666666666 637.225 129.16766666666666 L 647.4083333333333 129.16766666666666 C 649.9083333333333 129.16766666666666 652.4083333333333 131.66766666666666 652.4083333333333 134.16766666666666 L 652.4083333333333 245.001 C 652.4083333333333 247.501 649.9083333333333 250.001 647.4083333333333 250.001 L 637.225 250.001 C 634.725 250.001 632.225 247.501 632.225 245.001 Z " pathFrom="M 632.225 250.001 L 632.225 250.001 L 652.4083333333333 250.001 L 652.4083333333333 250.001 L 652.4083333333333 250.001 L 652.4083333333333 250.001 L 652.4083333333333 250.001 L 632.225 250.001 Z" cy="129.16666666666666" cx="752.225" j="5" val="58" barHeight="120.83333333333334" barWidth="22.183333333333334"></path><g id="SvgjsG1393" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1394" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1396" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1398" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1400" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1402" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1404" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1406" class="apexcharts-series" rel="2" seriesName="Bajo de Peso" data:realIndex="1"><path id="SvgjsPath1410" d="M49.40833333333333 245.001L49.40833333333333 96.66766666666666C49.40833333333333 94.16766666666666 51.90833333333333 91.66766666666666 54.40833333333333 91.66766666666666L64.59166666666667 91.66766666666666C67.09166666666667 91.66766666666666 69.59166666666667 94.16766666666666 69.59166666666667 96.66766666666666L69.59166666666667 245.001C69.59166666666667 247.501 67.09166666666667 250.001 64.59166666666667 250.001L54.40833333333333 250.001C51.90833333333333 250.001 49.40833333333333 247.501 49.40833333333333 245.001C49.40833333333333 245.001 49.40833333333333 245.001 49.40833333333333 245.001 " fill="rgba(185,29,18,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 49.40833333333333 245.001 L 49.40833333333333 96.66766666666666 C 49.40833333333333 94.16766666666666 51.90833333333333 91.66766666666666 54.40833333333333 91.66766666666666 L 64.59166666666667 91.66766666666666 C 67.09166666666667 91.66766666666666 69.59166666666667 94.16766666666666 69.59166666666667 96.66766666666666 L 69.59166666666667 245.001 C 69.59166666666667 247.501 67.09166666666667 250.001 64.59166666666667 250.001 L 54.40833333333333 250.001 C 51.90833333333333 250.001 49.40833333333333 247.501 49.40833333333333 245.001 Z " pathFrom="M 49.40833333333333 250.001 L 49.40833333333333 250.001 L 69.59166666666667 250.001 L 69.59166666666667 250.001 L 69.59166666666667 250.001 L 69.59166666666667 250.001 L 69.59166666666667 250.001 L 49.40833333333333 250.001 Z" cy="91.66666666666666" cx="169.40833333333333" j="0" val="76" barHeight="158.33333333333334" barWidth="22.183333333333334"></path><path id="SvgjsPath1412" d="M170.40833333333333 245.001L170.40833333333333 77.91766666666666C170.40833333333333 75.41766666666666 172.90833333333333 72.91766666666666 175.40833333333333 72.91766666666666L185.59166666666667 72.91766666666666C188.09166666666667 72.91766666666666 190.59166666666667 75.41766666666666 190.59166666666667 77.91766666666666L190.59166666666667 245.001C190.59166666666667 247.501 188.09166666666667 250.001 185.59166666666667 250.001L175.40833333333333 250.001C172.90833333333333 250.001 170.40833333333333 247.501 170.40833333333333 245.001C170.40833333333333 245.001 170.40833333333333 245.001 170.40833333333333 245.001 " fill="rgba(185,29,18,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 170.40833333333333 245.001 L 170.40833333333333 77.91766666666666 C 170.40833333333333 75.41766666666666 172.90833333333333 72.91766666666666 175.40833333333333 72.91766666666666 L 185.59166666666667 72.91766666666666 C 188.09166666666667 72.91766666666666 190.59166666666667 75.41766666666666 190.59166666666667 77.91766666666666 L 190.59166666666667 245.001 C 190.59166666666667 247.501 188.09166666666667 250.001 185.59166666666667 250.001 L 175.40833333333333 250.001 C 172.90833333333333 250.001 170.40833333333333 247.501 170.40833333333333 245.001 Z " pathFrom="M 170.40833333333333 250.001 L 170.40833333333333 250.001 L 190.59166666666667 250.001 L 190.59166666666667 250.001 L 190.59166666666667 250.001 L 190.59166666666667 250.001 L 190.59166666666667 250.001 L 170.40833333333333 250.001 Z" cy="72.91666666666666" cx="290.40833333333336" j="1" val="85" barHeight="177.08333333333334" barWidth="22.183333333333334"></path><path id="SvgjsPath1414" d="M291.40833333333336 245.001L291.40833333333336 44.58433333333332C291.40833333333336 42.08433333333332 293.90833333333336 39.58433333333332 296.40833333333336 39.58433333333332L306.5916666666667 39.58433333333332C309.0916666666667 39.58433333333332 311.5916666666667 42.08433333333332 311.5916666666667 44.58433333333332L311.5916666666667 245.001C311.5916666666667 247.501 309.0916666666667 250.001 306.5916666666667 250.001L296.40833333333336 250.001C293.90833333333336 250.001 291.40833333333336 247.501 291.40833333333336 245.001C291.40833333333336 245.001 291.40833333333336 245.001 291.40833333333336 245.001 " fill="rgba(185,29,18,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 291.40833333333336 245.001 L 291.40833333333336 44.58433333333331 C 291.40833333333336 42.08433333333331 293.90833333333336 39.58433333333331 296.40833333333336 39.58433333333331 L 306.5916666666667 39.58433333333331 C 309.0916666666667 39.58433333333331 311.5916666666667 42.08433333333331 311.5916666666667 44.58433333333331 L 311.5916666666667 245.001 C 311.5916666666667 247.501 309.0916666666667 250.001 306.5916666666667 250.001 L 296.40833333333336 250.001 C 293.90833333333336 250.001 291.40833333333336 247.501 291.40833333333336 245.001 Z " pathFrom="M 291.40833333333336 250.001 L 291.40833333333336 250.001 L 311.5916666666667 250.001 L 311.5916666666667 250.001 L 311.5916666666667 250.001 L 311.5916666666667 250.001 L 311.5916666666667 250.001 L 291.40833333333336 250.001 Z" cy="39.583333333333314" cx="411.40833333333336" j="2" val="101" barHeight="210.41666666666669" barWidth="22.183333333333334"></path><path id="SvgjsPath1416" d="M412.40833333333336 245.001L412.40833333333336 50.83433333333332C412.40833333333336 48.33433333333332 414.90833333333336 45.83433333333332 417.40833333333336 45.83433333333332L427.5916666666667 45.83433333333332C430.0916666666667 45.83433333333332 432.5916666666667 48.33433333333332 432.5916666666667 50.83433333333332L432.5916666666667 245.001C432.5916666666667 247.501 430.0916666666667 250.001 427.5916666666667 250.001L417.40833333333336 250.001C414.90833333333336 250.001 412.40833333333336 247.501 412.40833333333336 245.001C412.40833333333336 245.001 412.40833333333336 245.001 412.40833333333336 245.001 " fill="rgba(185,29,18,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 412.40833333333336 245.001 L 412.40833333333336 50.83433333333331 C 412.40833333333336 48.33433333333331 414.90833333333336 45.83433333333331 417.40833333333336 45.83433333333331 L 427.5916666666667 45.83433333333331 C 430.0916666666667 45.83433333333331 432.5916666666667 48.33433333333331 432.5916666666667 50.83433333333331 L 432.5916666666667 245.001 C 432.5916666666667 247.501 430.0916666666667 250.001 427.5916666666667 250.001 L 417.40833333333336 250.001 C 414.90833333333336 250.001 412.40833333333336 247.501 412.40833333333336 245.001 Z " pathFrom="M 412.40833333333336 250.001 L 412.40833333333336 250.001 L 432.5916666666667 250.001 L 432.5916666666667 250.001 L 432.5916666666667 250.001 L 432.5916666666667 250.001 L 432.5916666666667 250.001 L 412.40833333333336 250.001 Z" cy="45.833333333333314" cx="532.4083333333333" j="3" val="98" barHeight="204.16666666666669" barWidth="22.183333333333334"></path><path id="SvgjsPath1418" d="M533.4083333333333 245.001L533.4083333333333 73.751C533.4083333333333 71.251 535.9083333333333 68.751 538.4083333333333 68.751L548.5916666666666 68.751C551.0916666666666 68.751 553.5916666666666 71.251 553.5916666666666 73.751L553.5916666666666 245.001C553.5916666666666 247.501 551.0916666666666 250.001 548.5916666666666 250.001L538.4083333333333 250.001C535.9083333333333 250.001 533.4083333333333 247.501 533.4083333333333 245.001C533.4083333333333 245.001 533.4083333333333 245.001 533.4083333333333 245.001 " fill="rgba(185,29,18,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 533.4083333333333 245.001 L 533.4083333333333 73.751 C 533.4083333333333 71.251 535.9083333333333 68.751 538.4083333333333 68.751 L 548.5916666666666 68.751 C 551.0916666666666 68.751 553.5916666666666 71.251 553.5916666666666 73.751 L 553.5916666666666 245.001 C 553.5916666666666 247.501 551.0916666666666 250.001 548.5916666666666 250.001 L 538.4083333333333 250.001 C 535.9083333333333 250.001 533.4083333333333 247.501 533.4083333333333 245.001 Z " pathFrom="M 533.4083333333333 250.001 L 533.4083333333333 250.001 L 553.5916666666666 250.001 L 553.5916666666666 250.001 L 553.5916666666666 250.001 L 553.5916666666666 250.001 L 553.5916666666666 250.001 L 533.4083333333333 250.001 Z" cy="68.75" cx="653.4083333333333" j="4" val="87" barHeight="181.25" barWidth="22.183333333333334"></path><path id="SvgjsPath1420" d="M654.4083333333333 245.001L654.4083333333333 36.251000000000005C654.4083333333333 33.751000000000005 656.9083333333333 31.251000000000005 659.4083333333333 31.251000000000005L669.5916666666666 31.251000000000005C672.0916666666666 31.251000000000005 674.5916666666666 33.751000000000005 674.5916666666666 36.251000000000005L674.5916666666666 245.001C674.5916666666666 247.501 672.0916666666666 250.001 669.5916666666666 250.001L659.4083333333333 250.001C656.9083333333333 250.001 654.4083333333333 247.501 654.4083333333333 245.001C654.4083333333333 245.001 654.4083333333333 245.001 654.4083333333333 245.001 " fill="rgba(185,29,18,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 654.4083333333333 245.001 L 654.4083333333333 36.251000000000005 C 654.4083333333333 33.751000000000005 656.9083333333333 31.251 659.4083333333333 31.251 L 669.5916666666666 31.251 C 672.0916666666666 31.251 674.5916666666666 33.751000000000005 674.5916666666666 36.251000000000005 L 674.5916666666666 245.001 C 674.5916666666666 247.501 672.0916666666666 250.001 669.5916666666666 250.001 L 659.4083333333333 250.001 C 656.9083333333333 250.001 654.4083333333333 247.501 654.4083333333333 245.001 Z " pathFrom="M 654.4083333333333 250.001 L 654.4083333333333 250.001 L 674.5916666666666 250.001 L 674.5916666666666 250.001 L 674.5916666666666 250.001 L 674.5916666666666 250.001 L 674.5916666666666 250.001 L 654.4083333333333 250.001 Z" cy="31.25" cx="774.4083333333333" j="5" val="105" barHeight="218.75" barWidth="22.183333333333334"></path><g id="SvgjsG1408" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1409" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1411" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1413" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1415" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1417" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1419" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1421" class="apexcharts-series" rel="3" seriesName="FreexCashxFlow" data:realIndex="2"><path id="SvgjsPath1425" d="M71.59166666666667 245.001L71.59166666666667 182.08433333333332C71.59166666666667 179.58433333333332 74.09166666666667 177.08433333333332 76.59166666666667 177.08433333333332L86.775 177.08433333333332C89.275 177.08433333333332 91.775 179.58433333333332 91.775 182.08433333333332L91.775 245.001C91.775 247.501 89.275 250.001 86.775 250.001L76.59166666666667 250.001C74.09166666666667 250.001 71.59166666666667 247.501 71.59166666666667 245.001C71.59166666666667 245.001 71.59166666666667 245.001 71.59166666666667 245.001 " fill="rgba(212,137,24,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 71.59166666666667 245.001 L 71.59166666666667 182.08433333333332 C 71.59166666666667 179.58433333333332 74.09166666666667 177.08433333333332 76.59166666666667 177.08433333333332 L 86.775 177.08433333333332 C 89.275 177.08433333333332 91.775 179.58433333333332 91.775 182.08433333333332 L 91.775 245.001 C 91.775 247.501 89.275 250.001 86.775 250.001 L 76.59166666666667 250.001 C 74.09166666666667 250.001 71.59166666666667 247.501 71.59166666666667 245.001 Z " pathFrom="M 71.59166666666667 250.001 L 71.59166666666667 250.001 L 91.775 250.001 L 91.775 250.001 L 91.775 250.001 L 91.775 250.001 L 91.775 250.001 L 71.59166666666667 250.001 Z" cy="177.08333333333331" cx="191.59166666666667" j="0" val="35" barHeight="72.91666666666667" barWidth="22.183333333333334"></path><path id="SvgjsPath1427" d="M192.59166666666667 245.001L192.59166666666667 169.58433333333332C192.59166666666667 167.08433333333332 195.09166666666667 164.58433333333332 197.59166666666667 164.58433333333332L207.775 164.58433333333332C210.275 164.58433333333332 212.775 167.08433333333332 212.775 169.58433333333332L212.775 245.001C212.775 247.501 210.275 250.001 207.775 250.001L197.59166666666667 250.001C195.09166666666667 250.001 192.59166666666667 247.501 192.59166666666667 245.001C192.59166666666667 245.001 192.59166666666667 245.001 192.59166666666667 245.001 " fill="rgba(212,137,24,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 192.59166666666667 245.001 L 192.59166666666667 169.58433333333332 C 192.59166666666667 167.08433333333332 195.09166666666667 164.58433333333332 197.59166666666667 164.58433333333332 L 207.775 164.58433333333332 C 210.275 164.58433333333332 212.775 167.08433333333332 212.775 169.58433333333332 L 212.775 245.001 C 212.775 247.501 210.275 250.001 207.775 250.001 L 197.59166666666667 250.001 C 195.09166666666667 250.001 192.59166666666667 247.501 192.59166666666667 245.001 Z " pathFrom="M 192.59166666666667 250.001 L 192.59166666666667 250.001 L 212.775 250.001 L 212.775 250.001 L 212.775 250.001 L 212.775 250.001 L 212.775 250.001 L 192.59166666666667 250.001 Z" cy="164.58333333333331" cx="312.5916666666667" j="1" val="41" barHeight="85.41666666666667" barWidth="22.183333333333334"></path><path id="SvgjsPath1429" d="M313.5916666666667 245.001L313.5916666666667 180.001C313.5916666666667 177.501 316.0916666666667 175.001 318.5916666666667 175.001L328.77500000000003 175.001C331.27500000000003 175.001 333.77500000000003 177.501 333.77500000000003 180.001L333.77500000000003 245.001C333.77500000000003 247.501 331.27500000000003 250.001 328.77500000000003 250.001L318.5916666666667 250.001C316.0916666666667 250.001 313.5916666666667 247.501 313.5916666666667 245.001C313.5916666666667 245.001 313.5916666666667 245.001 313.5916666666667 245.001 " fill="rgba(212,137,24,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 313.5916666666667 245.001 L 313.5916666666667 180.001 C 313.5916666666667 177.501 316.0916666666667 175.001 318.5916666666667 175.001 L 328.77500000000003 175.001 C 331.27500000000003 175.001 333.77500000000003 177.501 333.77500000000003 180.001 L 333.77500000000003 245.001 C 333.77500000000003 247.501 331.27500000000003 250.001 328.77500000000003 250.001 L 318.5916666666667 250.001 C 316.0916666666667 250.001 313.5916666666667 247.501 313.5916666666667 245.001 Z " pathFrom="M 313.5916666666667 250.001 L 313.5916666666667 250.001 L 333.77500000000003 250.001 L 333.77500000000003 250.001 L 333.77500000000003 250.001 L 333.77500000000003 250.001 L 333.77500000000003 250.001 L 313.5916666666667 250.001 Z" cy="175" cx="433.5916666666667" j="2" val="36" barHeight="75" barWidth="22.183333333333334"></path><path id="SvgjsPath1431" d="M434.5916666666667 245.001L434.5916666666667 200.83433333333332C434.5916666666667 198.33433333333332 437.0916666666667 195.83433333333332 439.5916666666667 195.83433333333332L449.77500000000003 195.83433333333332C452.27500000000003 195.83433333333332 454.77500000000003 198.33433333333332 454.77500000000003 200.83433333333332L454.77500000000003 245.001C454.77500000000003 247.501 452.27500000000003 250.001 449.77500000000003 250.001L439.5916666666667 250.001C437.0916666666667 250.001 434.5916666666667 247.501 434.5916666666667 245.001C434.5916666666667 245.001 434.5916666666667 245.001 434.5916666666667 245.001 " fill="rgba(212,137,24,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 434.5916666666667 245.001 L 434.5916666666667 200.83433333333332 C 434.5916666666667 198.33433333333332 437.0916666666667 195.83433333333332 439.5916666666667 195.83433333333332 L 449.77500000000003 195.83433333333332 C 452.27500000000003 195.83433333333332 454.77500000000003 198.33433333333332 454.77500000000003 200.83433333333332 L 454.77500000000003 245.001 C 454.77500000000003 247.501 452.27500000000003 250.001 449.77500000000003 250.001 L 439.5916666666667 250.001 C 437.0916666666667 250.001 434.5916666666667 247.501 434.5916666666667 245.001 Z " pathFrom="M 434.5916666666667 250.001 L 434.5916666666667 250.001 L 454.77500000000003 250.001 L 454.77500000000003 250.001 L 454.77500000000003 250.001 L 454.77500000000003 250.001 L 454.77500000000003 250.001 L 434.5916666666667 250.001 Z" cy="195.83333333333331" cx="554.5916666666667" j="3" val="26" barHeight="54.16666666666667" barWidth="22.183333333333334"></path><path id="SvgjsPath1433" d="M555.5916666666667 245.001L555.5916666666667 161.251C555.5916666666667 158.751 558.0916666666667 156.251 560.5916666666667 156.251L570.775 156.251C573.275 156.251 575.775 158.751 575.775 161.251L575.775 245.001C575.775 247.501 573.275 250.001 570.775 250.001L560.5916666666667 250.001C558.0916666666667 250.001 555.5916666666667 247.501 555.5916666666667 245.001C555.5916666666667 245.001 555.5916666666667 245.001 555.5916666666667 245.001 " fill="rgba(212,137,24,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 555.5916666666667 245.001 L 555.5916666666667 161.251 C 555.5916666666667 158.751 558.0916666666667 156.251 560.5916666666667 156.251 L 570.775 156.251 C 573.275 156.251 575.775 158.751 575.775 161.251 L 575.775 245.001 C 575.775 247.501 573.275 250.001 570.775 250.001 L 560.5916666666667 250.001 C 558.0916666666667 250.001 555.5916666666667 247.501 555.5916666666667 245.001 Z " pathFrom="M 555.5916666666667 250.001 L 555.5916666666667 250.001 L 575.775 250.001 L 575.775 250.001 L 575.775 250.001 L 575.775 250.001 L 575.775 250.001 L 555.5916666666667 250.001 Z" cy="156.25" cx="675.5916666666667" j="4" val="45" barHeight="93.75" barWidth="22.183333333333334"></path><path id="SvgjsPath1435" d="M676.5916666666667 245.001L676.5916666666667 155.001C676.5916666666667 152.501 679.0916666666667 150.001 681.5916666666667 150.001L691.775 150.001C694.275 150.001 696.775 152.501 696.775 155.001L696.775 245.001C696.775 247.501 694.275 250.001 691.775 250.001L681.5916666666667 250.001C679.0916666666667 250.001 676.5916666666667 247.501 676.5916666666667 245.001C676.5916666666667 245.001 676.5916666666667 245.001 676.5916666666667 245.001 " fill="rgba(212,137,24,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask7z6xaecv)" pathTo="M 676.5916666666667 245.001 L 676.5916666666667 155.001 C 676.5916666666667 152.501 679.0916666666667 150.001 681.5916666666667 150.001 L 691.775 150.001 C 694.275 150.001 696.775 152.501 696.775 155.001 L 696.775 245.001 C 696.775 247.501 694.275 250.001 691.775 250.001 L 681.5916666666667 250.001 C 679.0916666666667 250.001 676.5916666666667 247.501 676.5916666666667 245.001 Z " pathFrom="M 676.5916666666667 250.001 L 676.5916666666667 250.001 L 696.775 250.001 L 696.775 250.001 L 696.775 250.001 L 696.775 250.001 L 696.775 250.001 L 676.5916666666667 250.001 Z" cy="150" cx="796.5916666666667" j="5" val="48" barHeight="100" barWidth="22.183333333333334"></path><g id="SvgjsG1423" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1424" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1426" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1428" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1430" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1432" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1434" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1392" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1407" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1422" class="apexcharts-datalabels" data:realIndex="2"></g></g><g id="SvgjsG1439" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1440" x1="0" y1="0" x2="726" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1444" x1="0" y1="250" x2="726" y2="250" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1447" x1="0" y1="0" x2="726" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1448" x1="0" y1="0" x2="726" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1449" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1450" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1461" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1462" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1463" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1381" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 125px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 179.092px; top: 37px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Mar</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(185, 29, 18);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Bajo de Peso: </span><span class="apexcharts-tooltip-text-y-value">$ 85 thousands</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(185, 29, 18);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Bajo de Peso: </span><span class="apexcharts-tooltip-text-y-value">$ 85 thousands</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(185, 29, 18);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Bajo de Peso: </span><span class="apexcharts-tooltip-text-y-value">$ 85 thousands</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <div class="alert alert-warning alert-dismissible mini_sombra">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Sin Acceso!</h5>
                    <p style="text-align: justify">Su usuario no tiene permisos de acceso para esta vista, Comuniquese con el
                        administrador del sistema.</p>
                </div>
            </div>
        </div>
    @endcan
@endsection
@section('modales')
@endsection
@section('script_pagina')
@endsection
