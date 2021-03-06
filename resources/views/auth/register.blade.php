<!-- BEGIN AUTH/REGISTER -->
@extends('layouts.app')

@section('content')
    <div class="Container">
        <form role="form" method="POST" action="{!! url('/register') !!}">
            {!! csrf_field() !!}

            <div class="Grid Grid--guttersLg Grid--full med-Grid--fit">

                <div class="Grid-cell">
                    <div class="InputAddOn">
                        <span class="InputAddOn-item">name</span>

                        <input class="InputAddOn-field" type="text" name="name" value="{!! old('name') !!}">

                        @if ($errors->has('name'))
                            {!! $errors->first('name') !!}
                        @endif

                    </div>
                    <div class="InputAddOn">
                        <span class="InputAddOn-item">email</span>

                        <input type="email" class="InputAddOn-field" name="email" value="{!! old('email') !!}">

                        @if ($errors->has('email'))

                            {!! $errors->first('email') !!}
                        @endif
                    </div>
                    <div class="InputAddOn">
                        <span class="InputAddOn-item">password</span>

                        <input type="password" class="InputAddOn-field" name="password">

                        @if ($errors->has('password'))
                            {!! $errors->first('password') !!}
                        @endif

                    </div>

                    <div class="InputAddOn">
                        <span class="InputAddOn-item">password confirmation</span>

                        <input type="password" class="InputAddOn-field" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            {!! $errors->first('password_confirmation') !!}
                        @endif
                    </div>

                    <div class="InputAddOn">
                        <button class="InputAddOn-item" type="submit">
                            register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endsection
            <!-- END AUTH/REGISTER -->
