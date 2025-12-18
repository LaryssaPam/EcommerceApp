<!--Banniere Promotionnelle-->
<div class="bg-black text-white p-4 text-center">
  <div class="scrolling-content">
    <p class="text-lg font-semibold"> 
      @foreach ($banners as $banner )
      {{$banner->content ?? 'Profitez de nos offres spécial BACKFRIDAY'}}br
     @endforeach   
</p>
  </div>
</div>