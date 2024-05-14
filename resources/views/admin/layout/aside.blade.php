 <aside id="aside" class="shadow">
     <div id="logo">
         <img src="{{asset('img/logo.png')}}" alt="">
     </div>

     <ul class="">
         <li class="">
             <a class="" href="{{route('dashboard')}}"> <i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
         </li>
         <li class="">
             <a class="" href="{{route('user.index')}}"><i class="bi bi-people-fill"></i> Responsável</a>
         </li>
         <li class="">
             <a class="" href="{{route('aluno.index')}}"><i class="bi bi-person-hearts"></i> Aluno</a>
         </li>
         <li class="">
             <a class="" href="{{ route('responsavel.index')}}"><i class="bi bi-people-fill"></i> Professor</a>
         </li>
         <li class="">
             <a class="" href="{{ route('responsavel.index')}}"><i class="bi bi-diagram-3-fill"></i> Turma</a>
         </li>
     </ul>
 </aside>