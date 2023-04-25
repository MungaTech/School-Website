@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <header>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/banner.jpg" class="d-block w-100" alt="...">
          </div>
</div><!-- end container -->
</div><!--end container-->
</div><!-- end container -->

        <div id="overviews" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="about-section">
                            <div class="flex-row">
                        <h2>Boarding Department</h2>
                            <p>Occaecat dolor excepteur qui magna enim eu proident minim. Adipisicing velit reprehenderit sunt ullamco aliquip do ex consequat esse quis excepteur labore qui laboris.
                                Sint cupidatat cillum sint in sint fugiat. Nostrud cillum nulla anim minim exercitation excepteur in quis ullamco veniam. Duis proident ea aliqua ea enim reprehenderit.</p>
                        <p>Irure ex aute eiusmod reprehenderit culpa cillum aute officia sunt sint nulla esse fugiat adipisicing.
                             Qui irure esse culpa consectetur esse amet incididunt ea adipisicing duis occaecat ut. Laboris dolor sit duis nisi voluptate quis.</p>
                            </div>

        <!---Dorm Table-->
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Dorm Captain</th>
                <th scope="col">Dormitory</th>
                <th scope="col">Class</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark Muhia</td>
                <td>Otto</td>
                <td>3South</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob Kemboi</td>
                <td>Thornton</td>
                <td>4North</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Ian Mungai</td>
                <td>Kilimanjaro</td>
                <td>4Beta</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Ernest Kiima</td>
                <td>Moi</td>
                <td>3Alpha</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Patrick Muratha</td>
                <td>Leopard</td>
                <td>4North-West</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Michael Njoroge</td>
                <td>Chandarion</td>
                <td>3Beta</td>
              </tr>
            </tbody>
          </table>
          <div id="overviews" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="about-section">
                            <div class="flex-row">
                        <h2>Amenities</h2>
                            <p>Occaecat dolor excepteur qui magna enim eu proident minim. Adipisicing velit reprehenderit sunt ullamco aliquip do ex consequat esse quis excepteur labore qui laboris.
                                Sint cupidatat cillum sint in sint fugiat. Nostrud cillum nulla anim minim exercitation excepteur in quis ullamco veniam. Duis proident ea aliqua ea enim reprehenderit.</p>
                        <p>Irure ex aute eiusmod reprehenderit culpa cillum aute officia sunt sint nulla esse fugiat adipisicing.
                             Qui irure esse culpa consectetur esse amet incididunt ea adipisicing duis occaecat ut. Laboris dolor sit duis nisi voluptate quis.</p>
                            </div>
                            <p> If you're interested in applying for boarding at our high school.
                                Please visit <a href="/contact"><strong>Contact Us<i></strong></i></a> page for more information and to access the online application. </p>
                            </div></p>
        </div>
    </div>
</div>

@endsection
