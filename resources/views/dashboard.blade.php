<x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <x-slot name="header" >
      <div class="nav" style="display:flex; gap:20px;" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <h5>
        <a href="/findusers" style="text-decoration: none; color:black">
        {{ __('Find') }}
        </a>
        </h5>
        </div>
    </x-slot>

    
    <div class="container d-flex justify-content-center align-items-center" style="margin-top:100px">
             
             <div class="card">

              <div class="upper">

                <img src="https://nrr.su/uploads/posts/2018-06/medium/1529910934_maxresdefault.jpg" class="img-fluid" style="width: 350px;
  height: 250px;">
                
              </div>

              <div class="user text-center">

                <div class="profile">

                  <!-- <img src="https://newizv.ru/attachments/8e8ded0b43382e1d95c93a284904c7b96c3dc059/store/crop/0/0/933/789/1920/0/0/f1a4647a08e0d23952fd8fe12d1ceec27b31060eaceea7c576ce5ad10455/96c431d17f3c289a68d06fa83ea1014880155e2623662854f487789cb82d" class="rounded-circle" width="80" styel=""> -->
                  
                </div>

              </div>


              <div class="mt-5 text-center">

                <h4  class="mb-0">Benjamin Tims</h4>
                <a href="/chatify">Перейти в чат</a>
                <span class="text-muted d-block mb-2">Los Angles</span>

                <button class="btn btn-primary btn-sm follow">Follow</button>


                <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                  <div class="stats">
                    <h6 class="mb-0">Followers</h6>
                    <span>8,797</span>

                  </div>


                  <div class="stats">
                    <h6 class="mb-0">Projects</h6>
                    <span>142</span>

                  </div>


                  <div class="stats">
                    <h6 class="mb-0">Ranks</h6>
                    <span>129</span>

                  </div>
                  
                </div>
                
              </div>
               
             </div>

           </div>
   
</x-app-layout>
