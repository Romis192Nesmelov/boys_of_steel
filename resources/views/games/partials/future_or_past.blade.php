<div class="py-8">
    @include('partials.head2',['head' => (futureOrPast($game->date) ? 'Future games' : 'Past games')])
</div>
