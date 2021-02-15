<!DOCTYPE html>
<html lang="en">
@include('head')
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/employeeProfile.css') }}"/>
    <script type="text/javascript" src="{{ asset('js/employeeProfile.js') }}"></script>

</head>
<body>

<div class="page-wrapper">
    <div class="layout-wrapper">
        <div class="top-wrapper">
            <div class="left-side-wrapper">
                <div class="img-wrapper">
                    <img class="profile-picture" src="{{asset('assets/user_empty.png')}}" alt="''">
                </div>
                <div class="profile-data-wrapper">
                    <div class="name-wrapper">
                        <h2 class="font-heading">
                            {{$zam->getName()}}
                        </h2>
                    </div>
                    <div class="divider"></div>
                    <div class="about-me">
                        <h5 class="font-heading">O Mne</h5>
                        <p class="font-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia
                            metus eu elit sodales.
                        </p>
                        <div class="about-me-wrapper">
                            <div class="about-me-button-wrapper">
                                <button class="btn button-about-me" type="button" id="button-about-me-0"
                                        onclick="showAboutMeData(0)">Získané
                                    tituly
                                </button>
                                <button class="btn button-about-me" type="button" id="button-about-me-1"
                                        onclick="showAboutMeData(1)">Výučba
                                    predmetov
                                </button>

                                <button class="btn button-about-me" type="button" id="button-about-me-2"
                                        onclick="showAboutMeData(2)">Projekty
                                </button>
                            </div>
                            <div class="about-me-content card-body card about-me-card-block"
                                 id="about-me-card-content-0">
                                <div class="">
                                    @for($l = 0; count($zam->sortedTitles) > $l;$l++)
                                        <div class="year-wrapper">
                                            <div class="left-side-works-wrapper">
                                                <div class="year">
                                                    <div
                                                        class="year-text">{{$zam->sortedTitles[$l][0]->getYear()}}</div>
                                                </div>
                                                <div class="vertical-line"></div>
                                            </div>
                                            <div class="right-side-works-wrapper">
                                                @for($i = 0; $i < count($zam->sortedTitles[$l]); $i++ )
                                                    <div class="title-wrapper">
                                                        <div class="title-heading-wrapper">
                                                            <i class="fas fa-user-graduate graduate-icon"></i>
                                                            <h5 class="font-heading">{{$zam->sortedTitles[$l][$i]->getTitleType()}}
                                                                ({{$zam->sortedTitles[$l][$i]->getTitleShortcut()}}
                                                                )</h5>
                                                        </div>
                                                        <div
                                                            class="place-wrapper font-text">{{$zam->sortedTitles[$l][$i]->getSchool()}}
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    @endfor
                                        @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                                            @include('addTitles')
                                        @endif
                                </div>
                            </div>
                            <div class="about-me-content card-body card about-me-card-none"
                                 id="about-me-card-content-1">
                                <div class="">
                                    @for($l = 0; count($zam->sortedSubjects) > $l;$l++)
                                        <div class="year-wrapper">
                                            <div class="left-side-works-wrapper">
                                                <div class="year">
                                                    <div
                                                        class="year-text">{{$zam->sortedSubjects[$l][0]->getYear()}}</div>
                                                </div>
                                                <div class="vertical-line"></div>
                                            </div>
                                            <div class="right-side-works-wrapper subject-right-side">
                                                @for($i = 0; $i < count($zam->sortedSubjects[$l]); $i++ )
                                                    <div class="subject-wrapper">
                                                        <i class="fas fa-chalkboard-teacher graduate-icon"></i>
                                                        <div
                                                            class="font-heading">{{$zam->sortedSubjects[$l][$i]->getName()}}</div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    @endfor
                                        @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                                            @include('addPredmet')
                                        @endif
                                </div>
                            </div>
                            <div class="about-me-content card-body card about-me-card-none"
                                 id="about-me-card-content-2">
                                <div class="">
                                    @for($l = 0; count($zam->sortedProjects) > $l;$l++)
                                        <div class="year-wrapper">
                                            <div class="left-side-works-wrapper">
                                                <div class="year">
                                                    <div
                                                        class="year-text">{{$zam->sortedProjects[$l][0]->getYear()}}</div>
                                                </div>
                                                <div class="vertical-line"></div>
                                            </div>
                                            <div class="right-side-works-wrapper subject-right-side">
                                                @for($i = 0; $i < count($zam->sortedProjects[$l]); $i++ )
                                                    <div class="subject-wrapper">
                                                        <i class="fas fa-folder graduate-icon"></i>
                                                        <div
                                                            class="font-heading">{{$zam->sortedProjects[$l][$i]->getName()}}</div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    @endfor
                                    @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                                        @include('addProject')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-side-wrapper">
                <div class="workplace">
                    <h5 class="font-heading">Pracovisko</h5>
                    <p class="font-text">
                        {{$zam->getWorkPlace()}}</p>
                </div>
                <div class="department">
                    <h5 class="font-heading">Oddelenie</h5>
                    <p class="font-text">{{$zam->getDepartment()}}</p>
                </div>
                <div class="room">
                    <h5 class="font-heading">Miestnosť</h5>
                    <p class="font-text">{{$zam->getRoom()}}</p>
                </div>
                <div class="function">
                    <h5 class="font-heading">Funkcia</h5>
                    <p class="font-text">{{$zam->getFunction()}}</p>
                </div>
                @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                    @include('editStaticData')
                @endif
                <div class="accordion md-accordion" id="header-data" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header color-button" role="tab" id="header-data1">
                            <a data-toggle="collapse" data-parent="#header-data" href="#header-data-collapseOne1"
                               aria-expanded="true"
                               onclick="headerRotate(1)" aria-controls="header-data-collapseOne1">
                                <h5 class="mb-0 heading">
                                    Kontakt <i id="header-arrow1" class="fas fa-angle-up rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="header-data-collapseOne1" class="collapse show" role="tabpanel"
                             aria-labelledby="headingOne1"
                             data-parent="#header-data">
                            <div class="card-body contact-data-wrapper">
                                <div class="phone">
                                    <div class="mobile-phone-wrapper">
                                        <i class="fas fa-phone phone-icon"></i>
                                        <h5 class="font-heading contact-heading">Telefón</h5>
                                    </div>
                                    <p class="font-text contact-data"> {{$zam->getContacts()->getTelephone()}}</p>
                                </div>
                                <div class="mobile-phone">
                                    <div class="mobile-phone-wrapper">
                                        <i class="fas fa-mobile phone-icon"></i>
                                        <h5 class="font-heading contact-heading">Mobil</h5>
                                    </div>
                                    <p class="font-text contact-data">{{$zam->getContacts()->getMobile()}}</p>
                                </div>
                                <div class="mobile-phone">
                                    <div class="mobile-phone-wrapper">
                                        <i class="fas fa-envelope phone-icon"></i>
                                        <h5 class="font-heading contact-heading">Email</h5>
                                    </div>
                                    <p class="font-text contact-data">{{$zam->getContacts()->getEmail()}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header color-button" role="tab" id="header-data2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#header-data"
                               href="#header-data-collapseOne2"
                               onclick="headerRotate(2)" aria-expanded="false" aria-controls="header-data2">
                                <h5 class="mb-0 heading">
                                    Laboratóriá <i id="header-arrow2" class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="header-data-collapseOne2" class="collapse" role="tabpanel"
                             aria-labelledby="headingTwo2"
                             data-parent="#header-data">
                            <div class="card-body">
                                @for($i = 0; $i < count($zam->getLaboratories()); $i++ )
                                    <div class="subject-wrapper">
                                        <i class="fas fa-flask graduate-icon"></i>
                                        <div class="font-heading">{{$zam->getLaboratories()[$i]}}</div>
                                    </div>
                                @endfor
                                @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                                    @include('addLaboratori')
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header color-button" role="tab" id="header-data3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#header-data"
                               href="#header-data-collapseOne3"
                               onclick="headerRotate(3)" aria-expanded="false" aria-controls="header-data3">
                                <h5 class="mb-0 heading">
                                    Zručnosti <i id="header-arrow3" class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="header-data-collapseOne3" class="collapse" role="tabpanel"
                             aria-labelledby="headingTwo3"
                             data-parent="#header-data">
                            <div class="card-body">
                                <div class="skills-wrapper">
                                    <div class="subject-wrapper skill-heading">
                                        <i class="fas fa-users phone-icon"></i>
                                        <h5 class="font-heading">Sociálne zručnosti</h5>
                                    </div>
                                    <div class="skills-content-wrapper">
                                        @for($i=0; $i < count($zam->getSocialSkills()); $i++)
                                            <div
                                                class="skill font-text place-wrapper">{{$zam->getSocialSkills()[$i]}}</div>
                                        @endfor
                                            @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                                                @include('addSocialSkill')
                                            @endif
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="skills-wrapper">
                                    <div class="subject-wrapper skill-heading">
                                        <i class="fas fa-tv phone-icon"></i>
                                        <h5 class="font-heading">Digitálne zručnosti</h5>
                                    </div>
                                    <div class="skills-content-wrapper">
                                        @for($i=0; $i < count($zam->getDigitalSkills()); $i++)
                                            <div
                                                class="skill font-text place-wrapper">{{$zam->getDigitalSkills()[$i]->getName()}}</div>
                                        @endfor
                                            @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                                                @include('addDigitalSkill')
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="bottom-wrapper">
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                <div class="card bottom-card">
                    <!-- Card header -->
                    <div class="card-header color-button" role="tab" id="headingOne1">
                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                           onclick="rotate(1)" aria-controls="collapseOne1">
                            <h5 class="mb-0 heading">
                                Zoznam publikácií <i id="arrow1" class="fas fa-angle-up rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <!-- Card body -->
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            @for($l = 0; count($zam->sortedPublications) > $l;$l++)
                                <div class="year-wrapper">
                                    <div class="left-side-works-wrapper">
                                        <div class="year">
                                            <div class="year-text">{{$zam->sortedPublications[$l][0]->getYear()}}</div>
                                        </div>
                                        <div class="vertical-line"></div>
                                    </div>
                                    <div class="right-side-works-wrapper">
                                        @for($i = 0; $i < count($zam->sortedPublications[$l]); $i++ )
                                            <div class="work-wrapper">
                                                <button class="btn button-work" type="button" data-toggle="collapse"
                                                        onclick="changeArrow('arrow-{{$zam->getPublicationID($zam->sortedPublications[$l][$i],$i)}}')"
                                                        data-target="#{{$zam->getPublicationID($zam->sortedPublications[$l][$i],$i)}}"
                                                        aria-expanded="false">{{$zam->sortedPublications[$l][0]->getName()}}
                                                    <i id="arrow-{{$zam->getPublicationID($zam->sortedPublications[$l][$i],$i)}}"
                                                       class="fas fa-angle-down rotate-icon"></i>
                                                </button>
                                                <div class="work-content-wrapper collapse multi-collapse work-border"
                                                     id="{{$zam->getPublicationID($zam->sortedPublications[$l][$i],$i)}}">
                                                    <div class="inner-content-wrapper">
                                                        <h5 class="font-heading work-heading">{{$zam->sortedPublications[$l][0]->getName()}}</h5>
                                                        <p class="font-text">
                                                            {{$zam->sortedPublications[$l][0]->getContent()}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor

                                    </div>
                                </div>
                            @endfor
                                @if(Session::get('id') != '' && Session::get('id') == $zam->id)
                                    @include('addPublication')
                                @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
