@extends('installer::layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper">
                <nav class="stepper">
                    <ul class="stepper__list">
                        <li class="stepper__list__item stepper__list__item--current">
                            <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24"
                                 viewbox="0 0 24 24">
                                <path d="M12.2 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 1.377a9.377 9.377 0 1 1 0-18.754 9.377 9.377 0 0 1 0 18.754zm-4-8a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754z"
                                      fill="#006DFF" fill-rule="evenodd"/>
                            </svg>
                            <span class="stepper__list__title">1. License</span>
                        </li>
                        <li class="stepper__list__item stepper__list__item--pending">
                            <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24"
                                 viewbox="0 0 24 24">
                                <path d="M12 16.1c1.8 0 3.3-1.4 3.3-3.2 0-1.8-1.5-3.2-3.3-3.2s-3.3 1.4-3.3 3.2c0 1.7 1.5 3.2 3.3 3.2zm0 1.7c-2.8 0-5-2.2-5-4.9S9.2 8 12 8s5 2.2 5 4.9-2.2 4.9-5 4.9z"/>
                            </svg>
                            <span class="stepper__list__title">2. Requirements</span>
                        </li>
                        <li class="stepper__list__item stepper__list__item--pending">
                            <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24"
                                 viewbox="0 0 24 24">
                                <path d="M12 16.1c1.8 0 3.3-1.4 3.3-3.2 0-1.8-1.5-3.2-3.3-3.2s-3.3 1.4-3.3 3.2c0 1.7 1.5 3.2 3.3 3.2zm0 1.7c-2.8 0-5-2.2-5-4.9S9.2 8 12 8s5 2.2 5 4.9-2.2 4.9-5 4.9z"/>
                            </svg>
                            <span class="stepper__list__title">3. Permissions</span>
                        </li>
                        <li class="stepper__list__item stepper__list__item--pending">
                            <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24"
                                 viewbox="0 0 24 24">
                                <path d="M12 16.1c1.8 0 3.3-1.4 3.3-3.2 0-1.8-1.5-3.2-3.3-3.2s-3.3 1.4-3.3 3.2c0 1.7 1.5 3.2 3.3 3.2zm0 1.7c-2.8 0-5-2.2-5-4.9S9.2 8 12 8s5 2.2 5 4.9-2.2 4.9-5 4.9z"/>
                            </svg>
                            <span class="stepper__list__title">4. Database</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
       <div class="col-lg-12">
           <div class="row ui-15">
               <div class="col-lg-10 col-lg-offset-1">
                   <div class="ui-content">
                       <p class="intro">
                           The MIT License (MIT)
                           <br/>
                           Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
                           associated documentation files (the "Software"), to deal in the Software without restriction,
                           including without limitation the rights to use, copy, modify, merge, publish, distribute,
                           sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
                           furnished to do so, subject to the following conditions:
                           <br/>
                           The above copyright notice and this permission notice shall be included in all copies or substantial
                           portions of the Software.
                           <br/><br/>
                           THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
                           NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
                           NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
                           OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
                           CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
                       </p>
                       <div class="row">
                           <div class="col-lg-3 col-lg-offset-9 col-md-6 col-md-offset-3">
                               <form action="{{ url('install/requirments') }}" method="get">
                                   <input type="submit" value="Accept" class="btn btn-green btn-lg btn-block">
                               </form>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
       </div>
    </div>

@endsection