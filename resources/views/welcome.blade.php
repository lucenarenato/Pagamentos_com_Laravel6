@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome!</div>

                <div class="card-body">
                    This is a payment processing system, using the most popular payment platforms available.
                </div>
                <br>
                <hr>
                <div class="card-body">
                    Este é um sistema de processamento de pagamentos que usa as plataformas de pagamento mais populares disponíveis.
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card text-white bg-primary">
            <div class="card-header">
                Carteira Eletrônica
            </div>
            <div class="card-body">
          
            <li><img src="img/payment-platforms/paypal.jpg" title="pagamento" border="0" width="46" height="28"></li>
            <li><img src="img/payment-platforms/mercadopago.jpg" title="pagamento" border="0" width="46" height="28"></li>
            <li><img src="img/payment-platforms/payu.jpg" title="pagamento" border="0" width="46" height="28"></li>
            <li><img src="img/payment-platforms/stripe.jpg" title="pagamento" border="0" width="46" height="28"></li>
            </div>
            <div class="card-footer text-muted">
                ...
              </div>
      </div>
    </div>
      
</div>
<hr>
    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          {{-- <p class="copyright">
            Copyright © 2020 Renato Lucena. 
        </p> --}}
          
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          {{-- <h5 class="text-uppercase">Redes Sociais</h5> --}}
  
          <ul class="list-unstyled">
            
                <li class="fa fa-twitter"><a href="https://twitter.com/cpdrenato">Twitter</a></li>
            
                <li class="fa fa-youtube"><a href="https://www.youtube.com/user/cpdrenato">Youtube</a></li>
                <li class="fa fa-github"><a href="https://github.com/lucenarenato">GitHub</a></li>
                <li class="fa fa-linkedin"><a href="https://www.linkedin.com/in/renato-de-oliveira-lucena-33777133/">Linkedin</a></li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Renato Lucena - MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
@endsection
