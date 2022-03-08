<x-app-layout>
    <style>
        body{
    margin-top:20px;
    background:#eee;
}
@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}
@media (min-width: 0){
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 50px;
}

.g-width-50 {
    width: 50px !important;
}

@media (min-width: 0){
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #fafafa !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: #777 !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top:20px
}
        </style>
    <h1 class="display-6">Hurtownia Kalisz Aktualności</h1>
    <div class="col-12">
        <p>Hurtownia przemysłowa od ponad 5 lat prowadzi sprzedaż
            detaliczną oraz hurtową. Nasz zespół tworzą ludzie pełni pasji i zaangażowania.
        </p>
        <div class="d-flex flex-row-reverse mb-4">
            @can('log-viewer')
            <a href="#" type="button" class="btn btn-info" role="button"> Dodaj nowy post</a>
            @endcan
          </div>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <div class="container">

        <div class="row">
        
            <div class="col-md-15">
                <div class="media g-mb-30 media-comment">

                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                      <div class="g-mb-15">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Image Description">
                        <h5 class="h5 g-color-gray-dark-v1 mb-0">Administrator</h5>
                        <span class="g-color-gray-dark-v4 g-font-size-12">3 dni temu</span>
                      </div>
                
                      <p>Dokładamy wszelkich starań aby zakupy w naszym sklepie były
                        satysfakcjonujące nawet dla najbardziej wymagających klientów. W naszej ofercie
                        znajdziecie wysokiej jakości towar w bardzo atrakcyjnych cenach.</p>
                
                    </div>
                </div>
            </div>

            <div class="col-md-15">
                <div class="media g-mb-30 media-comment">

                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                      <div class="g-mb-15">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Image Description">
                        <h5 class="h5 g-color-gray-dark-v1 mb-0">Gosc</h5>
                        <span class="g-color-gray-dark-v4 g-font-size-12">1 dzień temu</span>
                      </div>
                
                      <p>Swiętna Hurtownia, Polecam!</p>
                
                    </div>
                </div>
            </div>
        </div>
        </div>
       
    </div>
</x-app-layout>
