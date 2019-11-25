@extends('layouts.app')

@section('content')

<!-- Page -->
<div id="page" class="container">
    <div class="row">
        <div class="10u">
            <header>
                <h2>{{$recipe->title}}</h2>
            </header>

        </div>
        <div  class="2u">

            <h2 style="color: #74E72B; font-size: 1.8em"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <a href="#"><div class="plus"></div></a></a> 21</h2>



        </div>

    </div>
    <hr class="style1">
    <div>
        <img style="width: 100%" src="{{url("../storage/" . $recipe->photo_url)}}" alt="">
    </div>
    <hr class="style1">
    <div class="row">

        <!-- Sidebar -->
        <div id="sidebar" class="4u">

            <header class="major">
                <h2>Ingredients</h2>
            </header>
            <table class="default">
                <th>Ingredient</th>
                <th>Amount</th>

                @foreach($ingredients_arr as $index => $ingredient)
                    <tr>

                        <td>{{$ingredient}}</td>
                        <td>{{$amounts_arr[$index]}}</td>

                    </tr>
                @endforeach

            </table>

        </div>

        <!-- Content -->
        <div id="content" class="8u skel-cell-important">
            <section>
                <header class="major">
                    <h2>Description</h2>
                </header>
                <p>{{$recipe->description}}</p>
            </section>
        </div>

    </div>
    <div style="text-align: right">
        <h2> Posted by:  </h2>
    </div>
</div>
@endsection