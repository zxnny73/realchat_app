<div id="search">
    <form class="d-flex" role="search">
        <input wire:model.live="search1" wire:keydown="search" class="form-control me-2" type="search" placeholder="Search" aria-label= "Search" style="width: 200px">
    </form>
    @if($search1 != Null)
    <div class="dropdown-menu d-block py-0">
        @foreach($results as $user)
        <div class="px-3 py-1 border-botton">
            <div class="d-flex flex-column nl-3">
                <span>{{$user->name}}</span>
                <small>{{$user->email}}</small>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
