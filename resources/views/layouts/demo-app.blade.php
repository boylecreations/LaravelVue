<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body class="demo-app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    BOYLE CREATIONS
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                    <li><a href="{{ url('/vcss') }}">App</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/projects') }}">Projects</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="{{ URL::to('projects/create') }}">New Project</a>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>



    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script type="text/javascript">
        var vcs = new Vue({
            el: "#vcss",
            data: {
                appName: 'CSS3 Animater',
                show: true,
                totalTransitions: [],
                // transition: '',
                customTransitions: [
                    // Nested key value pairs and index values (0, 1) for nested for loops
                    { transition: 'width'   },
                    { transition: 'height'  },
                    { transition: 'background-color'   },
                    { transition: 'opacity' }
                ],
                prebuiltTransitions: [
                    { transition: 'flash'                },
                    { transition: 'pulse'                },
                    { transition: 'rubberBand'           },
                    { transition: 'shake'                },
                    { transition: 'headShake'            },
                    { transition: 'swing'                },
                    { transition: 'tada'                 },
                    { transition: 'wobble'               },
                    { transition: 'jello'                },
                    { transition: 'bounceIn'             },
                    { transition: 'bounceInDown'         },
                    { transition: 'bounceInLeft'         },
                    { transition: 'bounceInRight'        },
                    { transition: 'bounceInUp'           },
                    { transition: 'bounceOut'            },
                    { transition: 'bounceOutDown'        },
                    { transition: 'bounceOutLeft'        },
                    { transition: 'bounceOutRight'       },
                    { transition: 'bounceOutUp'          },
                    { transition: 'fadeIn'               },
                    { transition: 'fadeInDown'           },
                    { transition: 'fadeInDownBig'        },
                    { transition: 'fadeInLeft'           },
                    { transition: 'fadeInLeftBig'        },
                    { transition: 'fadeInRight'          },
                    { transition: 'fadeInRightBig'       },
                    { transition: 'fadeInUp'             },
                    { transition: 'fadeInUpBig'          },
                    { transition: 'fadeOut'              },
                    { transition: 'fadeOutDown'          },
                    { transition: 'fadeOutDownBig'       },
                    { transition: 'fadeOutLeft'          },
                    { transition: 'fadeOutLeftBig'       },
                    { transition: 'fadeOutRight'         },
                    { transition: 'fadeOutRightBig'      },
                    { transition: 'fadeOutUp'            },
                    { transition: 'fadeOutUpBig'         },
                    { transition: 'flipInX'              },
                    { transition: 'flipInY'              },
                    { transition: 'flipOutX'             },
                    { transition: 'flipOutY'             },
                    { transition: 'lightSpeedIn'         },
                    { transition: 'lightSpeedOut'        },
                    { transition: 'rotateIn'             },
                    { transition: 'rotateInDownLeft'     },
                    { transition: 'rotateInDownRight'    },
                    { transition: 'rotateInUpLeft'       },
                    { transition: 'rotateInUpRight'      },
                    { transition: 'rotateOut'            },
                    { transition: 'rotateOutDownLeft'    },
                    { transition: 'rotateOutDownRight'   },
                    { transition: 'rotateOutUpLeft'      },
                    { transition: 'rotateOutUpRight'     },
                    { transition: 'hinge'                },
                    { transition: 'rollIn'               },
                    { transition: 'rollOut'              },
                    { transition: 'zoomIn'               },
                    { transition: 'zoomInDown'           },
                    { transition: 'zoomInLeft'           },
                    { transition: 'zoomInRight'          },
                    { transition: 'zoomInUp'             },
                    { transition: 'zoomOut'              },
                    { transition: 'zoomOutDown'          },
                    { transition: 'zoomOutLeft'          },
                    { transition: 'zoomOutRight'         },
                    { transition: 'zoomOutUp'            },
                    { transition: 'slideInDown'          },
                    { transition: 'slideInLeft'          },
                    { transition: 'slideInRight'         },
                    { transition: 'slideInUp'            },
                    { transition: 'slideOutDown'         },
                    { transition: 'slideOutLeft'         },
                    { transition: 'slideOutRight'        },
                    { transition: 'slideOutUp'           }
                ],
                measurements: [
                    { measurement: 'px'  },
                    { measurement: 'em'  },
                    { measurement: 'rem' }
                ]
            },
            computed: {
               animation: function() {
                   return firstTransition + ' ' + secondTransition;
               }
           },//end computed
           methods: {
              addTransition: function() {
                  //var vm = this;
                  this.customTransitions.unshift({ transtion: 'transition'});
                  //this.newTransition = ''
              },
              addTransitionForm: function() {
                  formInputs.push();
              },
              startTransition: function() {

              },
              onSubmit: function() {
                  return null;
              }
          }// end methods
      })// end instance
    </script>

</body>
</html>
