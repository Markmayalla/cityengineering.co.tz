@extends('layouts.web')
@section('content')
    <div class="container-fluid" style="background: url('{{ asset('images/banner.jpg') }}'); background-position:center; height:400px; ">
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Who are we ?</h1>
            </div>
        </div>

        <div class="row text-justify py-2">
            <div class="col">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, deserunt repellat dicta porro numquam officia exercitationem libero id ad iste quis nulla consequuntur ullam praesentium assumenda dolores eveniet veritatis vero.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus deserunt omnis quis aliquid! Rerum, voluptates incidunt? Labore ipsa ex fuga voluptate, fugiat animi nisi, aspernatur adipisci libero temporibus, quasi laboriosam!</p>
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, deserunt repellat dicta porro numquam officia exercitationem libero id ad iste quis nulla consequuntur ullam praesentium assumenda dolores eveniet veritatis vero.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quasi molestias ea voluptatibus, similique eligendi odit commodi laboriosam magnam dolores odio, quidem labore, doloribus harum? Delectus molestias deserunt rem quidem?</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-success">
        <div class="container py-5">
            <div class="row" >
                <div class="col text-center text-light">
                    <i class="fa fa-eye fa-5x pb-5"></i>
                    <h4>Our Vision</h4>
                    <p class="font-weight-light">CECL vision is to become the most sought-after firm due to our achievements of providing the most appropriate...</p>
                </div>
                <div class="col text-center text-light">
                    <i class="fa fa-cogs fa-5x pb-5"></i>
                    <h4>Our Mission</h4>
                    <p class="font-weight-light">Our mission is to ensure we provide the right resources at the right time to maximise our clients’ business potential.</p>
                </div>
                <div class="col text-center text-light">
                    <i class="fa fa-flag fa-5x pb-5"></i>
                    <h4>Our Values</h4>
                    <p class="font-weight-light">Our mission is to ensure we provide the right resources at the right time to maximise our clients’ business potential.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row pt-5">
            <div class="col">
                <h1 class="text-center">Why Us ?</h1>
                <p class="lead text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio distinctio odit iusto labore asperiores magni voluptates consequuntur sunt similique, vel excepturi ipsam eius ullam illum itaque, tempora in corporis deserunt!</p>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Air Polution</h3>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi omnis tenetur rerum nobis laborum nemo cupiditate nihil dicta eveniet laboriosam asperiores voluptatum odit iure delectus, temporibus reprehenderit repellat mollitia aliquid?</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Bore Hole Pumb</h3>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi omnis tenetur rerum nobis laborum nemo cupiditate nihil dicta eveniet laboriosam asperiores voluptatum odit iure delectus, temporibus reprehenderit repellat mollitia aliquid?</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">XY Analysis</h3>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi omnis tenetur rerum nobis laborum nemo cupiditate nihil dicta eveniet laboriosam asperiores voluptatum odit iure delectus, temporibus reprehenderit repellat mollitia aliquid?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-dark">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                        <blockquote class="blockquote text-center" style="font-size: 30px">
                            <p class="mb-0 text-light">Linking People, Protecting Environment</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">City Engineering</cite></footer>
                        </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection