@extends('layouts.app')

@section('content')
    <div id="banner" class="container">
        <section>
            <p>Too hungry to go to the store?
                Don't worry, we can help you find a recipe
                without the trouble of leaving your home</p>
            <p>What do you have in your kitchen?</p>

            <div class="12u" style="padding: 5px">
                <input class="text" type="text" name="ingredients" id="ingredients" placeholder="Cheese, milk, sugar..." />
            </div>

            <a href="" class="button medium">Search</a>
        </section>
    </div>

    <!-- Extra -->
    <div id="extra">
        <div class="container">
            @foreach($recipes->chunk(3) as $items)
            <div class="row no-collapse-1">
                @foreach($items as $recipe )
                    <section class="4u"> <a href="#" class="image featured"><img src="{{url("../storage/" . $recipe->photo_url)}}"
                                                                                 alt=""></a>
                        <div class="box">
                            <p>{{$recipe->title}}</p>
                            <a href="{{ route('recipeView', [ $recipe->recipe_id ])}}" class="button">Read More</a>
                        </div>
                    </section>
                    @endforeach
            </div>
            @endforeach

        </div>
    </div>
@endsection