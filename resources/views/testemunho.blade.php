<div id="testemunhos" class="container-fluid">
    <div class="row justify-content-center flex-column align-items-center py-3">
        <h3 class="text-center w-100 font-weight-bold py-3">Testemunho</h3>
        <div class="container">
            <div id="testemunhoCarrossel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testemunhoCarrossel" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active d-flex justify-content-center align-items-center">
                        <div class="card card-text p-2 overflow-hidden">
                            <h4 class="p-0 m-0">lorem Ipsum</h4>
                            <p class="p-0 m-0 gray">Lorem Ipsum<p>
                            <p class="p-0 m-0 text gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna<p>
                        </div>
                        <div class="card card-video">
                            <video controls>
                                <source src="{{ asset('/video/londres.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-next" href="#testemunhoCarrossel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>
</div>