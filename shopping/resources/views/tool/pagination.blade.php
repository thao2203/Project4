   <!-- Start Pagination -->
   <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
       <ul>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
               <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : ''}}">
                   <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
               </li>
            @endfor
               <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                   <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="">
                       <i class="ion-ios-skipforward"></i>
                   </a>
               </li>
       </ul>
   </div> <!-- End Pagination -->