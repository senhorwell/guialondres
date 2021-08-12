<div id="contactus" class="container-fluid py-4">
    <div class="container d-flex flex-wrap flex-md-nowrap">
        <div class="col-12 col-md-6 px-0 card p-4">
            <form method="POST" action="{{ route('participe.enviar') }}" autocomplete="off">
                @csrf
                <div class="col-12 px-3 mb-4 input-group">
                    <input class="w-100 form-control" type="text" id="name" name="name" placeholder="Nome"/>
                </div>
                <div class="col-12 px-3 mb-4 input-group">
                    <input class="w-100 form-control" type="text" id="ddd" name="ddd" placeholder="DDD"/>
                </div>
                <div class="col-12 px-3 mb-4 input-group">
                    <input class="w-100 form-control" type="text" id="phone" name="phone" placeholder="Telefone"/>
                </div>
                <div class="col-12 px-3 mb-4 input-group">
                    <input class="w-100 form-control" aria-label="Default" type="email" id="email" name="email" placeholder="Email"/>
                </div>
                <div class="col-12 px-3 mb-4 input-group">
                    <button class="w-100 form-control" >Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 pt-5 p-md-0 d-flex flex-column text-center justify-content-center align-items-center">
            <h2>Participe já</h2>
            <p>O Guia Londres aguarda você em seus eventos e sua comunidade</p>
            <p>Faça seu cadastro e aguarde o nosso contato</p>
        </div>
    </div>
</div>