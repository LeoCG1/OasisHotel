<footer class="sticky-bottom footer">
        <div>
          <a href="#" class="iconoLink"><img src="/iconos/facebook.png" class="iconoFooter img-fluid" alt="link con icono de facebook"></a>
          <a href="#" class="iconoLink"><img src="/iconos/twitter.png" class="iconoFooter img-fluid" alt="link con icono de twitter"></a>
          <a href="#" class="iconoLink"><img src="/iconos/youtube.png" class="iconoFooter img-fluid" alt="link con icono de youtube"></a>
          <a href="#" class="iconoLink"><img src="/iconos/tripadvisor.png" class="iconoFooter img-fluid" alt="link con icono de tipadvisor"></a>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill"
            viewBox="0 0 16 16">
            <path
              d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354z" />
          </svg>
          <div class="direccionHotel">
          <p class="text-wrap">Hotel Oasis | Av/ Inventada, 1000 | 46013 Valencia (Spain) | </p>
          <p><a class="comoLlegar subrallado" href="https://www.google.es/maps/dir//39.4526265,-0.3529735/@39.4522103,-0.3539431,17.75z/data=!4m2!4m1!3e0" target=”_blank”>Cómo
              llegar </a></p>
            <p><a class="avisoLegal subrallado" href="#"> Aviso Legal</a></p>
        </div>
          <div class="iconosUser">
          @guest
            <a type="button" data-bs-toggle="modal" data-bs-target="#loginModal"><img src="/iconos/usuario.png" class="iconoFooter img-fluid" alt="icono de usuario"></a>
          @endguest
          @auth
            <a href="{{ route('users.show', session('key')) }}"><img src="/iconos/usuario.png" class="iconoFooter img-fluid" alt="icono de usuario"></a>
            <a href="{{ route('logout') }}"><img src="/iconos/cerrar-sesion.png" class="iconoFooter img-fluid" alt="icono de cerrar sesion"></a>
          @endauth
          </div>
        </div>

  </footer>