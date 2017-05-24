@extends('installer::layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper">
                <nav class="stepper">
                    <ul class="stepper__list">
                        <li class="stepper__list__item stepper__list__item--done">
                            <svg class="stepper__list__icon" viewbox="0 0 24 24">
                                <path class="st0"
                                      d="M12 20c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8zm0 1.5c-5.2 0-9.5-4.3-9.5-9.5S6.8 2.5 12 2.5s9.5 4.3 9.5 9.5-4.3 9.5-9.5 9.5z"/>
                                <path class="st0"
                                      d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"/>
                            </svg>
                            <span class="stepper__list__title">1. License</span>
                        </li>
                        <li class="stepper__list__item stepper__list__item--done">
                            <svg class="stepper__list__icon" viewbox="0 0 24 24">
                                <path class="st0"
                                      d="M12 20c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8zm0 1.5c-5.2 0-9.5-4.3-9.5-9.5S6.8 2.5 12 2.5s9.5 4.3 9.5 9.5-4.3 9.5-9.5 9.5z"/>
                                <path class="st0"
                                      d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"/>
                            </svg>
                            <span class="stepper__list__title">2. Requirements</span>
                        </li>
                        <li class="stepper__list__item stepper__list__item--current">
                            <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24"
                                 viewbox="0 0 24 24">
                                <path d="M12.2 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 1.377a9.377 9.377 0 1 1 0-18.754 9.377 9.377 0 0 1 0 18.754zm-4-8a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754z"
                                      fill="#006DFF" fill-rule="evenodd"/>
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
                        <ul class="list" id="permissions-list">

                            @foreach($r['permissions'] as $value)
                                <li class="list_item list_item-permissions">
                                    {{ $value['folder'] }}
                                    <span>
                                        @if($value['isSet'])
                                            <i class="fa fa-2x fa-check-circle green perm" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-2x fa-check-circle red perm" aria-hidden="true"></i>
                                        @endif
                                        &nbsp;&nbsp; 0775
                                     </span>
                                </li>

                            @endforeach
                        </ul>

                        <div class="row">
                            @if($r['errors'])
                                <div class="col-lg-3">
                                    <form action="{{ url('install/fixperm') }}">
                                        <input type="submit" value="Try fix permissions"
                                               class="btn btn-blue btn-lg btn-block">
                                    </form>
                                </div>
                                <div class="col-lg-3 col-lg-offset-6">
                                    <form action="{{ url('install/database') }}">
                                        <input type="submit" value="Next" class="btn btn-green btn-lg btn-block">
                                    </form>
                                </div>
                            @else

                                <div class="col-lg-3 col-lg-offset-9">
                                    <form action="{{ url('install/database') }}">
                                        <input type="submit" value="Next" class="btn btn-green btn-lg btn-block">
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection