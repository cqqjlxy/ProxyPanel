@extends('auth.layouts')
@section('title', trans('auth.login'))
@section('css')
    <style>
        @media screen and (max-height: 575px) {
            .g-recaptcha {
                -webkit-transform: scale(0.81);
                transform: scale(0.81);
                -webkit-transform-origin: 0 0;
                transform-origin: 0 0;
            }
        }

        .geetest_holder.geetest_wind {
            min-width: 245px !important;
        }
    </style>

@endsection
@section('content')
    <form method="post" id="login-form" action="/login">
        @if($errors->any())
            <div class="alert alert-danger">
                <span> {!! $errors->first() !!} </span>
            </div>
        @endif
        @if (Session::get('regSuccessMsg'))
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    <span class="sr-only">{{trans('auth.close')}}</span>
                </button>
                <span>{{Session::get('regSuccessMsg')}}</span>
            </div>
        @endif
        <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="email" class="form-control" name="username" value="{{Request::old('username')}}" required/>
            <label class="floating-label" for="username">{{trans('auth.username')}}</label>
        </div>
        <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="password" class="form-control" name="password" value="{{Request::old('password')}}" required/>
            <label class="floating-label" for="password">{{trans('auth.password')}}</label>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
        @switch(\App\Components\Helpers::systemConfig()['is_captcha'])
            @case(1)<!-- Default Captcha -->
            <div class="form-group form-material floating input-group" data-plugin="formMaterial">
                <input type="text" class="form-control" name="captcha" value=""/>
                <label class="floating-label" for="captcha">{{trans('auth.captcha')}}</label>
                <img src="{{captcha_src()}}" class="float-right" onclick="this.src='/captcha/default?'+Math.random()"
                     alt="{{trans('auth.captcha')}}"/>
            </div>
            @break
            @case(2)<!-- Geetest -->
            <div class="form-group form-material floating" data-plugin="formMaterial">
                {!! Geetest::render() !!}
            </div>
            @break
            @case(3)<!-- Google noCAPTCHA -->
            <div class="form-group form-material floating" data-plugin="formMaterial">
                {!! NoCaptcha::display() !!}
                {!! NoCaptcha::renderJs(session::get('locale')) !!}
            </div>
            @break
            @default
        @endswitch
        <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                <input type="checkbox" id="inputCheckbox" name="remember">
                <label for="inputCheckbox" for="remember">{{trans('auth.remember')}}</label>
            </div>
            <a class="float-right" href="/resetPassword">{{trans('auth.forget_password')}}</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">{{trans('auth.login')}}</button>
    </form>
    @if(\App\Components\Helpers::systemConfig()['is_register'])
        <p>{{trans('auth.register_tip')}} <a href="/register">{{trans('auth.register')}}</a></p>
    @endif
@endsection
@section('script')
    <script type="text/javascript">
        $('#login-form').submit(function (event) {
            // 先检查Google reCAPTCHA有没有进行验证
            if ($('#g-recaptcha-response').val() === '') {
                Msg(false, "{{trans('login.required_captcha')}}", 'error');
                return false;
            }
        });

        // 生成提示
        function Msg(clear, msg, type) {
            if (!clear) $('.login-form .alert').remove();

            var typeClass = 'alert-danger',
                clear = clear ? clear : false,
                $elem = $('.login-form');
            type === 'error' ? typeClass = 'alert-danger' : typeClass = 'alert-success';

            const tpl = '<div class="alert ' + typeClass + '">' +
                '<button type="button" class="close" onclick="$(this).parent().remove();"></button>' +
                '<span> ' + msg + ' </span></div>';

            if (!clear) {
                $elem.prepend(tpl);
            } else {
                $('.login-form .alert').remove();
            }
        }
    </script>
@endsection