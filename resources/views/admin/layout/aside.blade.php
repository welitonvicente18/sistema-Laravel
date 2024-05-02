 <aside id="aside" class="shadow">
     <div id="logo">
         <img src="{{asset('img/logo.png')}}" alt="">
     </div>

     <ul class="">
         <li class="">
             <a class="" href="{{route('dashboard')}}"> <i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
         </li>
         <li class="">
             <a class="" href="{{route('user.index')}}"><i class="bi bi-people-fill"></i> Responsável/Aluno</a>
         </li>
         <li class="">
             <a class="" href="{{route('aluno.index')}}">Alunos</a>
         </li>
         <li class="">
             <a class=" disabled" href="{{ route('responsavel.index')}}">Responsável</a>
         </li>
     </ul>
 </aside>