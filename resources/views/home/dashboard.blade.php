@extends('layouts.site')

@section('content')

<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

    <!-- Begin | Sidebar [[ Find at scss/framework/base/sidebar/left/sidebar.scss ]] -->
    <aside id="sidebar" class="sidebar-primary">

        <!-- Begin | Sidebar Header -->
        <div class="sidebar-header d-flex align-items-center">
            <a href="{{ lurl('/') }}" class="brand">
                <img src="{{ url('assetss/images/logos/logo.svg') }}" alt="listen-app">
            </a>

            <button type="button" class="btn p-0 ml-auto" id="hideSidebar">
                <i class="ion-md-arrow-back h3"></i>
            </button>

            <button type="button" class="btn toggle-menu" id="toggleSidebar">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- End | Sidebar Header -->

        <!-- Begin | Navbar [[ Find at scss/framework/components/navbar/navbar.scss ]] -->
        <nav class="navbar">
            <ul class="navbar-nav" data-scrollable="true">
                <li class="nav-item nav-header">Browse Music</li>
                <li class="nav-item">
                    <a href="home.html" class="nav-link active"><i class="la la-home"></i><span>Home</span></a>
               </li>
                <li class="nav-item">
                    <a href="genres.html" class="nav-link"><i class="la-music la"></i><span>Trending</span></a>
                </li>
                
                
              <li class="nav-item">
                    <a href="music.html" class="nav-link"><i class="la la-arrow-up"></i><span>Recent</span></a>
                </li>
                <li class="nav-item">
                    <a href="artists.html" class="nav-link"><i class="la la-users"></i><span>Artists</span></a>
                </li>
                <li class="nav-item">
                    <a href="stations.html" class="nav-link"><i class="la la-bullseye"></i><span>Stations</span></a>
                </li>
                
             
                <li class="nav-item nav-header">Your Music</li>
                <li class="nav-item">
                    <a href="analytics.html" class="nav-link"><i class="la la-bar-chart"></i><span>Geo Stats</span></a>
                </li>
                <li class="nav-item">
                    <a href="favorite.html" class="nav-link"><i class="la la-heart-o"></i><span>Favorites</span></a>
                </li>
                <li class="nav-item">
                    <a href="history.html" class="nav-link"><i class="la la-list"></i><span>Playlist&nbsp;</span></a>
                </li>
                
                <li class="nav-item">
                    <a href="following.html" class="nav-link"><i class="la la-arrow-circle-o-right"></i><span>Following&nbsp;&nbsp;</span></a>
                </li>
                
                <li class="nav-item">
                    <a href="followers.html" class="nav-link"><i class="la la-arrow-circle-o-left"></i><span>Followers&nbsp;</span></a>
                </li>
                
                <li class="nav-item">
                    <a href="history.html" class="nav-link"><i class="la la-history"></i><span>History</span></a>
                </li>
                
              <li class="nav-item">
                    <a href="error.html" class="nav-link load-page"><i class="la la-comment"></i><span>Comments</span></a>
                </li>
                <li class="nav-item nav-header">Music Events</li>
                <li class="nav-item">
                    <a href="events.html" class="nav-link"><i class="la la-calendar"></i><span>Events</span></a>
                </li>
                <li class="nav-item">
                    <a href="event-details.html" class="nav-link"><i class="la la-newspaper-o"></i><span>Event Details</span></a>
                </li>
                <li class="nav-item">
                    <a href="add-event.html" class="nav-link"><i class="la la-pencil-square-o"></i><span>Add Event</span></a>
                </li>
                           
          </ul>
        </nav>
        <!-- End | Navbar -->

        <!-- Begin | Sidebar Footer -->
        <div class="sidebar-footer">
            <a href="Odd-music.html" class="btn btn-block btn-danger btn-air btn-bold">
                <i class="ion-md-musical-note"></i><i class="la-upload la"></i>
                <span>Upload Music</span>
                
            </a>
        </div>
        <!-- End | Sidebar Footer -->

    </aside>
    <!-- End | Sidebar -->

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">

        <!-- Begin | Header [[ Find at scss/framework/base/header/header.scss ]] -->
        <header id="header" class="bg-primary">

            <div class="d-flex align-items-center">

                <button type="button" class="btn toggle-menu mr-3" id="openSidebar">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <form action="#" id="searchForm">

                    <button type="button" class="btn ion-ios-search"></button>
                    <input type="text" placeholder="Search..." id="searchInput" class="form-control">

                    <!-- Begin | Search Card [[ Find at scss/framework/base/search/search.scss ]] -->
                    <div class="search-card" data-scrollable="true">
                        <!-- Begin | Search Result List -->
                        <div class="mb-3">
                            <!-- Begin | Search Result List Header -->
                            <div class="d-flex">
                                <span class="text-uppercase mr-auto font-weight-bold text-dark">Artists</span>
                                <a href="artists.html">View All</a>
                            </div>
                            <!-- End | Search Result List Header -->
                            <hr>
                            <!-- Begin | Result List -->
                            <div class="row">
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="{{ url('assetss/images/cover/medium/1.jpg') }}" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Arebica Luna</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="{{ url('assetss/images/cover/medium/2.jpg') }}" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Gerrina Linda</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="{{ url('assetss/images/cover/medium/3.jpg') }}" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Zunira Willy</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="{{ url('assetss/images/cover/medium/4.jpg') }}" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Johnny Marro</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="{{ url('assetss/images/cover/medium/5.jpg') }}" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Jina Moore</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="{{ url('assetss/images/cover/medium/6.jpg') }}" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Rasomi Pelina</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End | Result List -->
                        </div>
                        <!-- End | Search Result List -->

                        <!-- Begin | Search Result List -->
                        <div class="mb-3">
                            <!-- Begin | Search Result List Header -->
                            <div class="d-flex">
                                <span class="text-uppercase mr-auto font-weight-bold text-dark">Track</span>
                                <a href="songs.html">View All</a>
                            </div>
                            <!-- End | Search Result List Header -->
                            <hr>
                            <!-- Begin | Result List -->
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="{{ url('assetss/images/cover/small/1.jpg') }}" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">I Love You Mummy</p>
                                                <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="{{ url('assetss/images/cover/small/2.jpg') }}" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Shack your butty</p>
                                                <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="{{ url('assetss/images/cover/small/3.jpg') }}" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Do it your way(Female)</p>
                                                <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End | Result List -->
                        </div>
                        <!-- End | Search Result List -->

                        <!-- Begin | Search Result List -->
                        <div>
                            <!-- Begin | Search Result List Header -->
                            <div class="d-flex">
                                <span class="text-uppercase mr-auto font-weight-bold text-dark">Albums</span>
                                <a href="songs.html">View All</a>
                            </div>
                            <!-- End | Search Result List Header -->
                            <hr>
                            <!-- Begin | Result List -->
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="{{ url('assetss/images/cover/small/4.jpg') }}" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Say yes</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="{{ url('assetss/images/cover/small/5.jpg') }}" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Where is your letter</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="{{ url('assetss/images/cover/small/6.jpg') }}" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Hey not me</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End | Result List -->
                        </div>
                        <!-- End | Search Result List -->
                    </div>
                    <!-- End | Search Card -->

                </form>

                <!-- Begin | Header Options -->
                <ul class="header-options d-flex align-items-center">
                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#lang" class="language">
                            <i class="la-genderless la"></i><span>&nbsp;Genre</span>
                          
                        </a>
                    </li>
                    <li class="dropdown fade-in">
                        <a href="javascript:void(0);" class="d-flex align-items-center py-2" role="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-circle"><img src="{{ url('temp/user1.png') }}" alt="user"></div>
                            <span class="pl-2">Katt Jones</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
                            <a class="dropdown-item" href="profile.html"><i class="ion-md-contact"></i> <span>Profile</span></a>
                            <a class="dropdown-item" href="plan.html"><i class="ion-md-radio-button-off"></i> <span>Your Plan</span></a>
                            <a class="dropdown-item" href="settings.html"><i class="ion-md-settings"></i> <span>Settings</span></a>
                            <div class="dropdown-divider"></div>
                            <div class="px-4 py-2">
                                <a href="{{ lurl(trans('routes.logout')) }}" class="btn btn-sm btn-air btn-pill btn-danger">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- End | Header Options -->
            </div>

        </header>
        <!-- End | Header -->

        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="top" style=" height:200px;"></div>
        
        <!-- Begin | Main Container [[ Find at scss/base/core.scss ]] -->
        <div class="main-container" id="appRoute">
            
            <div class="row">
                 
    <div class="col mb-5">
     <div class="text-center">
  <div class="bg-transparent">
    <h3 class="mb-lg-n1 badge-pill">&nbsp;Featured Artist</h3><hr style="width:250px;text-align:">
      
  </div>
  
  
</div>
    </div>
    
  </div>
<!--  added to home-->
 <div class="row section text-center text-md-left">
                <div class="col-xl-3 col-lg-4 col-sm-5">
                    <div class="custom-card">
                      <div class="custom-card--img">
                        <div class="custom-card--info">
                               <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                          </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                          <a href="javascript:void(0);" class="external" data-audio="{'name': 'Shack your butty', 'artist': 'Gerrina Linda', 'album': 'Hot Shot', 'url': '{{ url('assetss/audio/ringtone-2.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/2.jpg') }}">
                              <img src="{{ url('temp/9.jpg') }}" alt="Where is your letter" class="card-img--radius-lg">
                          </a>
                      </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h5>Where is your letter</h5>
                            <p>Jina Moore & Lenisa Gory</p><hr>
                            
                            
                        </a>
                    </div>
                    <div class="mt-5 col-md-12">
        
                  </div>
                    
                </div>
                <div class="col-xl-9 col-lg-8 col-sm-7">
                    <div class="row pt-1">
                      <div class="col-xl-8 col-lg-6">
                            <h4>Katt Jones</h4>
                          
                        <span class="badge-pill badge-warning mt-2">Premium</span>
                        <p></p>
                          
                        <div class="mt-4">
                            <p> <a href="javascript:void(0);" class="btn btn-pill btn-air btn-bold btn-danger external" data-audio="{'name': 'Shack your butty', 'artist': 'Gerrina Linda', 'album': 'Hot Shot', 'url': '{{ url('assetss/audio/ringtone-2.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/2.jpg') }}'}">Play</a>&nbsp;</p>
                                <p> <a href="songs.html" class="btn btn-group-lg btn-pill btn-air btn-primary">More</a> </p>
                        </div>
                          
                            
                        <div class="mt-4">
                                
                        </div>
                      </div>
                        <div class="col-xl-4 col-lg-6 mb-5">
                            
                            <div class="pt-3 pt-lg-0 text-lg-right">
                                <button class="btn btn-pill btn-air btn-light btn-icon-only"><i class="la la-comments"></i></button>
                                <button class="btn btn-pill btn-air btn-danger btn-icon-only"><i class="la la-heart-o"></i></button>
                                <button class="btn btn-pill btn-air btn-warning btn-icon-only"><i class="la la-plus"></i></button>
                                <button class="btn btn-pill btn-air btn-success btn-icon-only"><i class="la la-download"></i></button>
                                
                          </div>
                            
                            
                      </div>
                    </div>
                </div>
                
                
          </div>
            
<!-- end added to home-->
            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                  <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Trending</h4>
                            <p>Listen to current releases</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                  </div>
                    <hr>
                </div>

                <div class="carousel-item-5 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'I Love You Mummy', 'artist': 'Arebica Luna', 'album': 'Mummy', 'url': '{{ url('assetss/audio/ringtone-1.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/1.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/2.jpg') }}" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Shack your butty', 'artist': 'Gerrina Linda', 'album': 'Hot Shot', 'url': '{{ url('assetss/audio/ringtone-2.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/2.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/2.jpg') }}" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Do it your way(Female)', 'artist': 'Zunira Willy & Nutty Nina', 'album': 'Own Way', 'url': '{{ url('assetss/audio/ringtone-3.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/3.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/3.jpg') }}" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Say yes', 'artist': 'Johnny Marro', 'album': 'Say yes', 'url': '{{ url('assetss/audio/ringtone-4.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/4.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/5.jpg') }}" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                  <li><li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li></li>
<li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                  </ul>
                              </div>
                          </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Where is your letter', 'artist': 'Jina Moore & Lenisa Gory', 'album': 'Letter', 'url': '{{ url('assetss/audio/ringtone-5.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/5.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/5.jpg') }}" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Hey not me', 'artist': 'Rasomi Pelina', 'album': 'Find Soul', 'url': '{{ url('assetss/audio/ringtone-6.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/6.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/7.jpg') }}" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                  <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Popular Songs&nbsp;</h4>
                            <p>Listen to top songs</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                  </div>
                    <hr>
                </div>

                <div class="carousel-item-5 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'I Love You Mummy', 'artist': 'Arebica Luna', 'album': 'Mummy', 'url': '{{ url('assetss/audio/ringtone-1.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/1.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/1.jpg') }}" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Shack your butty', 'artist': 'Gerrina Linda', 'album': 'Hot Shot', 'url': '{{ url('assetss/audio/ringtone-2.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/2.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/2.jpg') }}" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Do it your way(Female)', 'artist': 'Zunira Willy & Nutty Nina', 'album': 'Own Way', 'url': '{{ url('assetss/audio/ringtone-3.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/3.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/3.jpg') }}" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Say yes', 'artist': 'Johnny Marro', 'album': 'Say yes', 'url': '{{ url('assetss/audio/ringtone-4.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/4.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/4.jpg') }}" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Where is your letter', 'artist': 'Jina Moore & Lenisa Gory', 'album': 'Letter', 'url': '{{ url('assetss/audio/ringtone-5.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/5.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/5.jpg') }}" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Hey not me', 'artist': 'Rasomi Pelina', 'album': 'Find Soul', 'url': '{{ url('assetss/audio/ringtone-6.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/6.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/6.jpg') }}" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                      <div class="flex-grow-1">
                        <h4>Featured Playlists</h4>
                          <p>Top play lists</p>
                      </div>
                        <a href="artists.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/1.jpg') }}" alt="Arebica Luna" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Arebica Luna</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/2.jpg') }}" alt="Gerrina Linda" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Gerrina Linda</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/3.jpg') }}" alt="Zunira Willy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Zunira Willy</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/4.jpg') }}" alt="Johnny Marro" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Johnny Marro</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/5.jpg') }}" alt="Jina Moore" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Jina Moore</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/6.jpg') }}" alt="Rasomi Pelina" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Rasomi Pelina</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/9.jpg') }}" alt="Lenisa Gory" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Lenisa Gory</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="{{ url('assetss/images/cover/large/10.jpg') }}" alt="Nutty Nina" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Nutty Nina</h6>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                  <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Recently Added</h4>
                            <p>Recent uploads</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                  </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'I Love You Mummy', 'artist': 'Arebica Luna', 'album': 'Mummy', 'url': '{{ url('assetss/audio/ringtone-1.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/1.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/1.jpg') }}" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Shack your butty', 'artist': 'Gerrina Linda', 'album': 'Hot Shot', 'url': '{{ url('assetss/audio/ringtone-2.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/2.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/2.jpg') }}" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Do it your way(Female)', 'artist': 'Zunira Willy & Nutty Nina', 'album': 'Own Way', 'url': '{{ url('assetss/audio/ringtone-3.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/3.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/3.jpg') }}" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Say yes', 'artist': 'Johnny Marro', 'album': 'Say yes', 'url': '{{ url('assetss/audio/ringtone-4.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/4.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/4.jpg') }}" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Where is your letter', 'artist': 'Jina Moore & Lenisa Gory', 'album': 'Letter', 'url': '{{ url('assetss/audio/ringtone-5.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/5.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/5.jpg') }}" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Hey not me', 'artist': 'Rasomi Pelina', 'album': 'Find Soul', 'url': '{{ url('assetss/audio/ringtone-6.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/6.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/6.jpg') }}" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                  <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Recently Featured</h4>
                            <p>Previously featured artists</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                  </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'I Love You Mummy', 'artist': 'Arebica Luna', 'album': 'Mummy', 'url': '{{ url('assetss/audio/ringtone-1.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/1.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/1.jpg') }}" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Shack your butty', 'artist': 'Gerrina Linda', 'album': 'Hot Shot', 'url': '{{ url('assetss/audio/ringtone-2.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/2.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/2.jpg') }}" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Do it your way(Female)', 'artist': 'Zunira Willy & Nutty Nina', 'album': 'Own Way', 'url': '{{ url('assetss/audio/ringtone-3.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/3.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/3.jpg') }}" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Say yes', 'artist': 'Johnny Marro', 'album': 'Say yes', 'url': '{{ url('assetss/audio/ringtone-4.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/4.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/4.jpg') }}" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Where is your letter', 'artist': 'Jina Moore & Lenisa Gory', 'album': 'Letter', 'url': '{{ url('assetss/audio/ringtone-5.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/5.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/5.jpg') }}" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio="{'name': 'Hey not me', 'artist': 'Rasomi Pelina', 'album': 'Find Soul', 'url': '{{ url('assetss/audio/ringtone-6.mp3') }}', 'cover_art_url': '{{ url('assetss/images/cover/small/6.jpg') }}'}">
                                <img src="{{ url('assetss/images/cover/large/6.jpg') }}" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

        </div>
        <!-- End | Main Container -->

        <!-- Begin | Footer [[ Find at scss/framework/base/footer/footer.scss ]] -->
        <footer id="footer" class="bg-img">
            <div class="footer-content">
                <a href="#" class="email"></a>
                <div class="platform-btn-inline">
                    <a href="#" class="btn btn-dark btn-air platform-btn">
                        <i class="ion-logo-android"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Upload</span>
                            <span class="platform-name">Muisc</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-danger btn-air platform-btn">
                        <i class="ion-logo-apple"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Upgrade</span>
                            <span class="platform-name">Account</span>
                        </div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End | Footer -->

        <!-- Begin | Audio Player [[ Find at scss/framework/base/audio-player/audio-player.scss ]] -->
        <div id="audioPlayer" class="player-primary">

            <!-- Begin | Audio Player Progress -->
            <div id="progress-container">
                <input type="range" class="amplitude-song-slider">
                <progress class="audio-progress audio-progress--played amplitude-song-played-progress"></progress>
                <progress class="audio-progress audio-progress--buffered amplitude-buffered-progress" value="0"></progress>
            </div>
            <!-- End | Audio Player Progress -->

            <!-- Begin | Audio -->
            <div class="audio">
                <div class="song-image"><img data-amplitude-song-info="cover_art_url" src="{{ url('temp/10.jpg') }}" alt=""></div>
                <div class="song-info pl-3">
                    <span class="song-name d-inline-block text-truncate" data-amplitude-song-info="name"></span>
                    <span class="song-artists d-block text-muted" data-amplitude-song-info="artist"></span>
                </div>
            </div>
            <!-- End | Audio -->

            <!-- Begin | Audio Controls -->
            <div class="audio-controls">
                <div class="audio-controls--left d-flex mr-auto">
                    <button class="btn btn-icon-only amplitude-repeat"><i class="ion-md-sync"></i></button>
                </div>
                <div class="audio-controls--main d-flex">
                    <button class="btn btn-icon-only amplitude-prev"><i class="ion-md-skip-backward"></i></button>
                    <button class="btn btn-air btn-pill btn-default btn-icon-only amplitude-play-pause">
                        <i class="ion-md-play"></i>
                        <i class="ion-md-pause"></i>
                    </button>
                    <button class="btn btn-icon-only amplitude-next"><i class="ion-md-skip-forward"></i></button>
                </div>
                <div class="audio-controls--right d-flex ml-auto">
                    <button class="btn btn-icon-only amplitude-shuffle amplitude-shuffle-off"><i class="ion-md-shuffle"></i></button>
                </div>
            </div>
            <!-- End | Audio Controls -->

            <!-- Begin | Audio Info -->
            <div class="audio-info d-flex align-items-center pr-4">
                    <span class="mr-4">
                        <span class="amplitude-current-minutes" ></span>:<span class="amplitude-current-seconds"></span> /
                        <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                    </span>
                <div class="audio-volume dropdown">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ion-md-volume-low"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right volume-dropdown-menu">
                        <input type="range" class="amplitude-volume-slider" value="100">
                    </div>
                </div>

                <div class="dropleft">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-heart-o"></i> <span>Favorite</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-plus"></i> <span>Add to Playlist</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-download"></i> <span>Download</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-share-alt"></i> <span>Share</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="song-details.html" class="dropdown-link">
                                <i class="la la-info-circle"></i>
                                <span>Song Info</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-icon-only" id="playList"><i class="ion-md-musical-note"></i></button>
            </div>
            <!-- End | Audio Info -->

        </div>
        <!-- End | Audio Player -->

    </main>
    <!-- End | Page Wrapper -->

    <!-- Begin | Right Sidebar [[ Find at scss/framework/base/sidebar/right/sidebar.scss ]] -->
    <aside id="rightSidebar">
        <div class="right-sidebar-header">Listen Special</div>
        <div class="right-sidebar-body" data-scrollable="true">
            <ul class="list-group list-group-flush">
                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="{{ url('assetss/images/cover/small/1.jpg') }}" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">I Love You Mummy</p>
                            <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="{{ url('assetss/images/cover/small/2.jpg') }}" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Shack your butty</p>
                            <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="{{ url('assetss/images/cover/small/3.jpg') }}" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Do it your way(Female)</p>
                            <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="{{ url('assetss/images/cover/small/4.jpg') }}" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Say yes</p>
                            <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="{{ url('assetss/images/cover/small/5.jpg') }}" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Where is your letter</p>
                            <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="{{ url('assetss/images/cover/small/6.jpg') }}" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Hey not me</p>
                            <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="{{ url('assetss/images/cover/small/7.jpg') }}" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Deep inside</p>
                            <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->
            </ul>
        </div>
    </aside>
    <!-- End | Right Sidebar -->

</div>
<!-- End | Wrapper -->

<!-- Begin | Language Modal -->
<div class="modal fade" id="lang" tabindex="-1" role="dialog" aria-labelledby="langTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title mb-1" id="langTitle">Genre</h5>
                    <p class="text-muted">Select your genre to start listening.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group row">
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch1" checked>
                            <label class="custom-control-label" for="ch1">Pop Music</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch2">
                            <label class="custom-control-label" for="ch2">Hip Hop</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch3">
                            <label class="custom-control-label" for="ch3">R&amp;B</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch4">
                            <label class="custom-control-label" for="ch4">Rock</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch5">
                            <label class="custom-control-label" for="ch5">Alternative Rock</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch6">
                            <label class="custom-control-label" for="ch6">Electronic</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch7">
                            <label class="custom-control-label" for="ch7">Dance</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch8">
                            <label class="custom-control-label" for="ch8">Country</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                      <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch9" checked>
                          <label class="custom-control-label" for="ch9">Club Music</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch10">
                            <label class="custom-control-label" for="ch10">80s/Synthwave</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch11">
                            <label class="custom-control-label" for="ch11">Jazz</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch12">
                            <label class="custom-control-label" for="ch12">Gospal</label>
                        </div>
                  
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch13">
                            <label class="custom-control-label" for="ch14">Deep Disco</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch14">
                            <label class="custom-control-label" for="ch15">Trance</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch15">
                            <label class="custom-control-label" for="ch16">Deep house</label>
                        </div>
                    </li>
                    
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch16">
                            <label class="custom-control-label" for="ch16">Latin</label>
                        </div>
                    </li>
                    
                                        
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch17">
                            <label class="custom-control-label" for="ch16">Folk</label>
                        </div>
                    </li>
                    
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch18">
                            <label class="custom-control-label" for="ch16">Ballad</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer text-center d-block">
                <button type="button" class="btn btn-primary btn-pill" id="langApply">Apply</button>
            </div>
        </div>
    </div>
</div>
<!-- End | Language Modal -->
@stop