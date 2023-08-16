<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérification de l\'adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification sera envoyé dans votre boîte mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez consulter votre boîte mail pour la vérification.') }}
                    {{ __('Si vous n\'avez pas reçu de mail de vérification') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en recevoir de nouveau') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>