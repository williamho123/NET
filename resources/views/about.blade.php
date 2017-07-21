@extends('layouts.app')

@section('title','About')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12 m9 l10">
                <div id="about" class="section scrollspy">
                    <h3>About NET</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis varius massa. Maecenas efficitur efficitur diam, sit amet dictum nunc tincidunt dignissim. Vestibulum at maximus augue. Duis in urna porta est congue aliquet nec vitae elit. Donec at massa elit. Nulla leo orci, maximus at luctus in, bibendum at magna. Suspendisse vel vestibulum metus. Pellentesque ultrices urna nisl, et luctus augue pretium vitae. Mauris consequat diam sed facilisis placerat. Maecenas eu sagittis ex. Quisque accumsan sollicitudin mauris, in vehicula dui porta a. Suspendisse non blandit arcu.

                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus venenatis porttitor enim, eget vehicula felis viverra sagittis. Curabitur porttitor arcu nec enim feugiat faucibus. Etiam sit amet pharetra magna. Donec urna ex, pellentesque consequat lectus nec, consectetur pharetra massa. Nam pulvinar sapien nunc, vel pretium arcu tempor vel. Nullam laoreet posuere vehicula.

                        Vestibulum risus metus, feugiat sit amet nibh sollicitudin, porta vestibulum neque. Cras a ligula lacus. Nulla facilisi. Vestibulum sollicitudin imperdiet luctus. Donec pellentesque mauris id leo commodo, at sodales nisl ultrices. Aenean facilisis euismod sem, laoreet sodales arcu ullamcorper quis. Cras sagittis tincidunt tortor, at placerat ipsum. Pellentesque vel lacus malesuada, suscipit lacus id, pretium diam. Quisque nisi risus, molestie vel bibendum sed, interdum eu elit. Sed lobortis vehicula erat. Aliquam ut ultricies est. Morbi quis convallis elit. Quisque pellentesque ligula sapien, at cursus tellus aliquet in. Ut pharetra dui a nisi tincidunt, quis viverra velit aliquam.

                        Vestibulum dolor magna, semper auctor faucibus non, blandit in turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam sed auctor nisi, ac dictum urna. Nulla facilisi. Curabitur vehicula nibh urna, ac egestas nulla dapibus a. Sed rutrum scelerisque fermentum. Sed auctor interdum ipsum id malesuada. Fusce congue porta dui vitae eleifend. Vivamus at ligula sit amet arcu mattis iaculis vel a dui. Nulla metus enim, elementum in neque vel, sodales cursus elit. Sed ultrices non arcu et pellentesque. Mauris vel porttitor odio, ut porttitor est. Curabitur ornare ullamcorper imperdiet. Donec mattis, odio vehicula pulvinar molestie, ipsum arcu feugiat nisi, a ultricies ex est et nunc. Nunc elit arcu, pharetra non fermentum eget, ornare non massa.

                        Suspendisse sed mollis risus. </p>
                </div>

                <div class="divider"></div>

                <div id="meet" class="section scrollspy">
                    <h3>Meet the Team</h3>

                    <p style="font-size: 1.25rem">We are a team of undergraduate students at Northwestern University.</p>

                    <div class="row">
                        <div class="col m6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="resources/pics/will.jpg">
                                </div>
                                <div class="card-content">
                                    <h5>William Ho</h5>
                                    <p>William is a junior majoring in Economics and Computer Science.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I once played basketball with Jeremy Lin but didn't get a picture with him.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col m6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="resources/pics/jackie.jpg">
                                </div>
                                <div class="card-content">
                                    <h5>Jacqueline Wu</h5>
                                    <p>Jacqueline is a junior majoring in Economics and Statistics. </p>
                                    <br>
                                    <p><b>Fun Fact: </b> I once played in a chamber orchestra on the set of Glee!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="resources/pics/pete.jpg">
                                </div>
                                <div class="card-content">
                                    <h5>Peter Nam</h5>
                                    <p> Peter is a junior majoring in Economics, Computer Science, and MMSS.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I actually preferred to use Bing over Google for a period of time.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col m6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="resources/pics/josh.jpg">
                                </div>
                                <div class="card-content">
                                    <h5>Josh Avery</h5>
                                    <p>Josh is a junior majoring in Economics and minoring in Business Institutions.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I crashed my bike into a moose a few summers ago and lived to tell the tale.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper">
                    <ul class="section table-of-contents">
                        <li><a href="#about">About NET</a></li>
                        <li><a href="#meet">Meet the Team</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.scrollspy').scrollSpy();
        });

        setTimeout(function() {
            if ($('nav').length) {
                $('.toc-wrapper').pushpin({
                    top: $('nav').height(),
                });
            }
        }, 100);
    </script>

@endsection