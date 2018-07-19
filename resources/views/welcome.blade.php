<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .top-right {
            	padding-top: 30px;
            }
            .content {
            	margin: 50px 0 0 10px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="nav">
					<ul>
						<li><a href="#"><b>CEO</b></a>
							<ul class="submenu">
								<li><a href="#">Chief 1</a>
									<ul class="submenu">
										<li><a href="#">Menager 1</a>
											<ul class="submenu">
												<li><a href="#">Leader 1</a>
													<ul class="submenu">
														<li><a href="#">Senior 1</a>
															<ul class="submenu">
																<li><a href="#">Worker 1</a></li>
																<li><a href="#">Worker 2</a></li>
																<li><a href="#">Worker 3</a></li>
																<li><a href="#">Worker 4</a></li>
																<li><a href="#">Worker 5</a></li>
															</ul>
														</li>		
													</ul>
												</li>						
											</ul>
										</li>
										<li><a href="#">Menager 2</a>
											<ul class="submenu">
												<li><a href="#">Leader 2</a>
													<ul class="submenu">
														<li><a href="#">Senior 2</a>
															<ul class="submenu">
																<li><a href="#">Worker 1</a></li>
																<li><a href="#">Worker 2</a></li>
																<li><a href="#">Worker 3</a></li>
																<li><a href="#">Worker 4</a></li>
																<li><a href="#">Worker 5</a></li>
															</ul>
														</li>		
													</ul>
												</li>						
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Chief 2</a>
									<ul class="submenu">
										<li><a href="#">Menager 1</a>
											<ul class="submenu">
												<li><a href="#">Leader 1</a>
													<ul class="submenu">
														<li><a href="#">Senior 1</a>
															<ul class="submenu">
																<li><a href="#">Worker 1</a></li>
																<li><a href="#">Worker 2</a></li>
																<li><a href="#">Worker 3</a></li>
																<li><a href="#">Worker 4</a></li>
																<li><a href="#">Worker 5</a></li>
															</ul>
														</li>		
													</ul>
												</li>						
											</ul>
										</li>
										<li><a href="#">Menager 2</a>
											<ul class="submenu">
												<li><a href="#">Leader 2</a>
													<ul class="submenu">
														<li><a href="#">Senior 2</a>
															<ul class="submenu">
																<li><a href="#">Worker 1</a></li>
																<li><a href="#">Worker 2</a></li>
																<li><a href="#">Worker 3</a></li>
																<li><a href="#">Worker 4</a></li>
																<li><a href="#">Worker 5</a></li>
															</ul>
														</li>		
													</ul>
												</li>						
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
            </div>
        </div>
    </body>
</html>
