@extends('front.layout.front')
@section('content')

  <!-- maangement page -->
  <div class="management-page">
    <div class="container">
      <div class="page-heading">
        <p>
          {{__('Management')}}
        </p>
      </div>
      <div class="page-body">
        <div class="ceo-section">
          <div class="ceo-img">
            <img src="{{asset('assets/front/./images/board/ceo.jpg')}}" alt="img">
          </div>
          <div class="ceo-word">
            <div class="name">
              <p>
                {{ __('Dr Karim Elshafaiyy') }}
              </p>
            </div>
            <div class="text">
              <p>
                {{__('CEO word')}}
              </p>
              @if(App::isLocale('en'))
              <p>
                It is of great pleasure to welcome you to the Advanced Center for Daycare Surgery, a haven of highly
                innovative treatments. ASCD has been providing quality healthcare for the public in a diverse array of
                medical specialties, offering a state-of-the-art setting, physicians and medical team.We will continue
                to be one of Abu Dhabi’s leading healthcare providers, and assure that your visit to ASCD is pleasant
                and worthwhile.
                
              </p>
              @else
              <p>
                مجال الخبرة: 19 عامًا من الخبرة في معظم الجراحة العامة وجراحة المناظير وجراحة الجهاز الهضمي وجراحة السمنة (التكميم وجراحة المجازة المصغرة) واستئصال المرارة بالمنظار واستكشاف القناة الصفراوية الشائعة بالمنظار من أجل اليرقان الانسدادي في الآلة الحاسبة وإصلاح الفتق بالمنظار (الأربية ، السرة ، الجرح ، فتق الحجاب الحاجز) ، أنواع مختلفة من استئصال القولون لسرطان القولون ، استئصال الطحال المفتوح والمنظار ، جراحة الدوالي (التجريد ، الربط الثلاثي ، الاستئصال الكيميائي للأوعية الدموية تحت الموجات فوق الصوتية) ، جراحة سرطان المستقيم ، جراحة القناة الشرجية (الشق الشرجي ، البواسير ، الناسور ) ، جراحة الغدة الدرقية (استئصال الغدة الدرقية الكلي ، استئصال الغدة الدرقية الجزئي ، استئصال الغدة الدرقية) ، خزعة العقدة الليمفاوية ، تشريح العقدة الليمفاوية) ، إدارة الجيوب الأنفية (جراحي ، حقن ، محافظ) ، جراحة الثدي (MRM ، RM ، جراحة الثدي المحافظة ، تشريح الإبط ، QUART) ، عملية شد البطن ، عمليات جراحية بسيطة (شق الخراج وتصريفه ، واستخراج الظفر النامي ، استئصال الزوائد الجلدية ، عمليات جراحية صغيرة مختلفة استئصال الآفة السطحية والخزعات ... إلخ).
              </p>
              @endif
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  <!-- management page -->

  @endsection