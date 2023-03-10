@extends('front.layout.front')
@section('content')
    <div class="about-page">
        <div class="page-heading">
            <p>
                {{__('About Us')}}
            </p>
        </div>

        <div class="page-body">
            <div class="container">
                <div class="about-wrapper">
                    <ul class="main-section-ul">
                        @if (App::isLocale('en'))
                            <li>
                                <div class="about-drop-div" data-img="vision-img">
                                    <div class="about-drop-heading">
                                        <p>
                                            Our Vision
                                        </p>
                                    </div>
                                    <div class="about-drop-icon">
                                        <div class="v-line"></div>
                                        <i class="linearicons-plus"></i>
                                    </div>
                                </div>
                                <ul class="about-dropped">
                                    <li>
                                        <i class="ion-lightbulb"></i>
                                        <span>
                                            Building a compelling healthcare reputation that positions the Advanced Centre
                                            For
                                            Day Care Surgery of professionals at the heart of patient choice. Striving to be
                                            sensitive to emerging trends and the changing needs of our patient groups,
                                            ensuring
                                            that we are patient-centered. Providing a pleas
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        @else
                        <li>
                            <div class="about-drop-div" data-img="vision-img">
                                <div class="about-drop-heading">
                                    <p>
                                        رؤيتنا
                                    </p>
                                </div>
                                <div class="about-drop-icon">
                                    <div class="v-line"></div>
                                    <i class="linearicons-plus"></i>
                                </div>
                            </div>
                            <ul class="about-dropped">
                                <li>
                                    <i class="ion-lightbulb"></i>
                                    <span>
                                        توفير أعلى المعايير الدولية لرعاية المرضى مع الاهتمام الذي لا يلين للتفوق الطبي وسلامة المرضى. لتقديم شغف والتزام لا مثيل لهما في ضمان أفضل صحة ممكنة لمن نخدمهم.
 
                                    </span>
                                </li>
                            </ul>
                        </li>
                            
            @endif
            @if (App::isLocale('en'))
                <li>
                    <div class="about-drop-div" data-img="mission-img">
                        <div class="about-drop-heading">
                            <p>
                                Our Mission
                            </p>
                        </div>
                        <div class="about-drop-icon">
                            <div class="v-line"></div>
                            <i class="linearicons-plus"></i>
                        </div>
                    </div>
                    <ul class="about-dropped">
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                To provide the highest international standards of patient care with unrelenting
                                attention to medical excellence and patient safety. To offer unparalleled
                                passion
                                and commitment in assuring the best possible health for those we serve.
                            </span>
                        </li>
                    </ul>
                </li>
            @else
                <li>
                    <div class="about-drop-div" data-img="mission-img">
                        <div class="about-drop-heading">
                            <p>
                                مهمتنا
                            </p>
                        </div>
                        <div class="about-drop-icon">
                            <div class="v-line"></div>
                            <i class="linearicons-plus"></i>
                        </div>
                    </div>
                    <ul class="about-dropped">
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                بناء سمعة طيبة في مجال الرعاية الصحية تضع المركز المتقدم لجراحة الرعاية النهارية للمحترفين
                                في قلب اختيار المريض. نسعى جاهدين لأن نكون حساسين للاتجاهات الناشئة والاحتياجات المتغيرة
                                لمجموعات المرضى لدينا ، بما يضمن تركيزنا على المريض. تقديم مناشدات
                            </span>
                        </li>
                    </ul>
                </li>
            @endif
            @if (App::isLocale('en'))
                <li>
                    <div class="about-drop-div" data-img="values-img">
                        <div class="about-drop-heading">
                            <p>
                                Our Values
                            </p>
                        </div>
                        <div class="about-drop-icon">
                            <div class="v-line"></div>
                            <i class="linearicons-plus"></i>
                        </div>
                    </div>
                    <ul class="about-dropped">
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                P - for Professionalism, in how we conduct ourselves and our business.
                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                R - for Respect of our patients, families, ourselves and each other.
                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                I - for Integrity, always doing the honest and right thing.
                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                D - for Diversity, understanding and embracing the diverse beliefs, the needs
                                and expectations of our patients, community and employees.
                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                E - for Excellence, it is what we strive for in everything we do.
                            </span>
                        </li>

                    </ul>
                </li>
            @else
                <li>
                    <div class="about-drop-div" data-img="values-img">
                        <div class="about-drop-heading">
                            <p>
                                قيمنا
                            </p>
                        </div>
                        <div class="about-drop-icon">
                            <div class="v-line"></div>
                            <i class="linearicons-plus"></i>
                        </div>
                    </div>
                    <ul class="about-dropped">
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>

                                رفع كفاءة العاملين من خلال التدريب المستمر
                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                بيئة صحية و آمنة

                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                خدمة المجتمع

                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                تقديم خدمة موحدة لكل العملاء
                            </span>
                        </li>
                        <li>
                            <i class="ion-lightbulb"></i>
                            <span>
                                احترام و تفعيل حقوق المريض.


                            </span>
                        </li>

                    </ul>
                </li>
            @endif
            </ul>
            <div class="images-wrapper">
                <ul>
                    <li class="vision-img active-li-img">
                        <div class="img-div">
                            <img src="{{ asset('assets/front/./images/about/vision.jpg') }}" alt="">
                        </div>
                    </li>
                    <li class="mission-img">
                        <div class="img-div">
                            <img src="{{ asset('assets/front/./images/about/mission.jpg') }}" alt="">
                        </div>
                    </li>
                    <li class="values-img">
                        <div class="img-div">
                            <img src="{{ asset('assets/front/./images/about/values.jpg') }}" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- end about page -->
@endsection
