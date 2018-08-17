@isset($fire)
    <div class="sidebar active">
        <button class="card" id="closeButtonSidebar" type="button" >&#10005</button>
@endisset

@empty($fire)
    <div class="sidebar">
@endempty

@include('elements.cards.general')
@include('elements.cards.resources')
@include('elements.cards.extra')
@include('elements.cards.status')
@include('elements.cards.meteo')

</div>