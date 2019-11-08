@extends('admin.layouts')
@section('css')
    <link rel="stylesheet" href="/assets/global/vendor/bootstrap-select/bootstrap-select.min.css">
    <link href="//cdn.bootcss.com/bootstrap-switch/4.0.0-alpha.1/css/bootstrap-switch.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/global/vendor/dropify/dropify.min.css">
@endsection
@section('content')
    <div class="page-content container-fluid">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">通用配置</h3>
            </div>
            <div class="panel-body">
                <div class="example-wrap">
                    <div class="nav-tabs-horizontal" data-plugin="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-toggle="tab" href="#tab_1" aria-controls="tab_1" role="tab">网站常规</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_2" aria-controls="tab_2" role="tab">拓展功能</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_3" aria-controls="tab_3" role="tab">签到系统</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_4" aria-controls="tab_4" role="tab">推广系统</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_5" aria-controls="tab_5" role="tab">通知系统</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_6" aria-controls="tab_6" role="tab">自动任务</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_7" aria-controls="tab_7" role="tab">LOGO|客服|统计</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_8" aria-controls="tab_8" role="tab">支付系统</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab_9" aria-controls="tab_9" role="tab">验证系统</a>
                            </li>
                            <li class="dropdown nav-item" role="presentation">
                                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">菜单</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item active" data-toggle="tab" href="#tab_1" aria-controls="tab_1" role="tab">网站常规</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_2" aria-controls="tab_2" role="tab">拓展功能</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_3" aria-controls="tab_3" role="tab">签到系统</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_4" aria-controls="tab_4" role="tab">推广系统</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_5" aria-controls="tab_5" role="tab">通知系统</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_6" aria-controls="tab_6" role="tab">自动任务</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_7" aria-controls="tab_7" role="tab">LOGO|客服|统计</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_8" aria-controls="tab_8" role="tab">支付系统</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#tab_9" aria-controls="tab_9" role="tab">验证系统</a>
                                </div>
                            </li>
                        </ul>
                        <div class="tab-content py-35 px-35">
                            <div class="tab-pane active" id="tab_1" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal" autocomplete="off">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3" for="website_name">网站名称</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="website_name" id="website_name" value="{{$website_name}}"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setWebsiteName()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 发邮件时展示 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="website_url">网站地址</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="website_url" value="{{$website_url}}" id="website_url"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setWebsiteUrl()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 生成重置密码、在线支付必备 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="AppStore_id">苹果账号</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="email" name="AppStore_id" value="{{$AppStore_id}}" id="AppStore_id"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setAppStoreId()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> iOS软件设置教程中使用的苹果账号 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="AppStore_password">苹果密码</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="password" name="AppStore_password" value="{{$AppStore_password}}" id="AppStore_password"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setAppStorePassword()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> iOS软件设置教程中使用的苹果密码 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="admin_email">管理员邮箱</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="email" name="admin_email" value="{{$admin_email}}" id="admin_email"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setAdminEmail()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 错误提示时会提供管理员邮箱作为联系方式 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_register">用户注册</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_register" @if($is_register) checked @endif></span>
                                                <span class="text-help offset-md-3"> 关闭后无法注册 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_invite_register">邀请注册</label>
                                                <select class="col-md-3" data-plugin="selectpicker" data-style="btn-outline btn-primary" id="is_invite_register" name="is_invite_register" class="col-md-9">
                                                    <option value="0" @if($is_invite_register == '0') selected @endif>关闭</option>
                                                    <option value="1" @if($is_invite_register == '1') selected @endif>可选</option>
                                                    <option value="2" @if($is_invite_register == '2') selected @endif>必须</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_active_register">激活账号</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_active_register" @if($is_active_register) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后用户需要通过邮件来激活账号 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_reset_password">重置密码</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_reset_password" @if($is_reset_password) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后用户可以通过邮件重置密码 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_captcha">验证码</label>
                                                <select class="col-md-5" data-plugin="selectpicker" data-style="btn-outline btn-primary" id="is_captcha" name="is_captcha" class="col-md-9">
                                                    <option value="0" @if($is_captcha == '0') selected @endif>关闭</option>
                                                    <option value="1" @if($is_captcha == '1') selected @endif>普通验证码</option>
                                                    <option value="2" @if($is_captcha == '2') selected @endif>Geetest 极验</option>
                                                    <option value="3" @if($is_captcha == '3') selected @endif>Google reCAPTCHA</option>
                                                </select>
                                                <span class="text-help offset-md-3"> 启用后登录、注册需要输入验证码 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_free_code">免费邀请码</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_free_code" @if($is_free_code) checked @endif></span>
                                                <span class="text-help offset-md-3"> 关闭后免费邀请码不可见 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_forbid_china">阻止大陆访问</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_forbid_china" @if($is_forbid_china) checked @endif></span>
                                                <span class="text-help offset-md-3"> 开启后大陆IP禁止访问 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_forbid_oversea">阻止海外访问</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_forbid_oversea" @if($is_forbid_oversea) checked @endif></span>
                                                <span class="text-help offset-md-3"> 开启后海外IP(含港澳台)禁止访问 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_forbid_robot">阻止机器人访问</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_forbid_robot" @if($is_forbid_robot) checked @endif></span>
                                                <span class="text-help offset-md-3"> 如果是机器人、爬虫、代理访问网站则会抛出404错误 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_verify_register">注册校验验证码</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_verify_register" @if($is_verify_register) checked @endif></span>
                                                <span class="text-help offset-md-3"> 注册时需要先通过邮件获取验证码方可注册，‘激活账号’失效 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="website_security_code" class="col-md-3 col-form-label">网站安全码</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="website_security_code" value="{{$website_security_code}}" id="website_security_code"/>
                                                    <span class="input-group-append">
														<button class="btn btn-info" type="button" onclick="makeWebsiteSecurityCode()">生成</button>
														<button class="btn btn-primary" type="button" onclick="setWebsiteSecurityCode()">修改</button>
													</span>
                                                </div>
                                                <span class="text-help offset-md-3">非空时必须通过 <a href="/login?securityCode=" target="_blank">安全入口</a> 加上安全码才可访问 </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_2" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_rand_port" class="col-md-3 col-form-label">随机端口</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_rand_port" @if($is_rand_port) checked @endif></span>
                                                <span class="text-help offset-md-3"> 注册、添加用户时随机生成端口 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">端口范围</label>
                                                <div class="input-group col-md-7">
                                                    <input type="text" class="form-control" name="min_port" value="{{$min_port}}" id="min_port"/>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> ~ </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="max_port" value="{{$max_port}}" id="max_port"/>
                                                </div>
                                                <span class="text-help offset-md-3"> 端口范围：1000 - 65535 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_namesilo">Namesilo</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_namesilo" @if($is_namesilo) checked @endif></span>
                                                <span class="text-help offset-md-3"> 添加、编辑节点的绑定域名时自动更新域名DNS记录值为节点IP（<a href="https://www.namesilo.com/account_api.php?rid=326ec20pa" target="_blank">创建API KEY</a>） </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="namesilo_key">Namesilo API KEY</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="namesilo_key" value="{{$namesilo_key}}" id="namesilo_key" placeholder="填入Namesilo上申请的API KEY"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setNamesiloKey()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 域名必须是<a href="https://www.namesilo.com/?rid=326ec20pa" target="_blank">www.namesilo.com</a>上购买的 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_user_rand_port">自定义端口</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_user_rand_port" @if($is_user_rand_port) checked @endif></span>
                                                <span class="text-help offset-md-3"> 用户可以自定义端口 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="default_days">初始有效期</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="default_days" value="{{$default_days}}" id="default_days"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">天</span>
                                                        <button class="btn btn-primary" type="button" onclick="setDefaultDays()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 用户注册时默认账户有效期，为0即当天到期 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="default_traffic">初始流量</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="default_traffic" value="{{$default_traffic}}" id="default_traffic"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">MB</span>
                                                        <button class="btn btn-primary" type="button" onclick="setDefaultTraffic()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 用户注册时默认可用流量 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="invite_num">可生成邀请码数</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="invite_num" value="{{$invite_num}}" id="invite_num"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setInviteNum()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 用户可以生成的邀请码数 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="reset_password_times">重置密码次数</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="reset_password_times" value="{{$reset_password_times}}" id="reset_password_times"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setResetPasswordTimes()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 24小时内可以通过邮件重置密码次数 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="active_times">激活账号次数</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="active_times" value="{{$active_times}}" id="active_times"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setActiveTimes()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 24小时内可以通过邮件激活账号次数 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="register_ip_limit">同IP注册限制</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="register_ip_limit" value="{{$register_ip_limit}}" id="register_ip_limit"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setRegisterIpLimit()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 同IP在24小时内允许注册数量，为0时不限制 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="initial_labels_for_user">用户初始标签</label>
                                                <select data-plugin="selectpicker" data-style="btn-outline btn-primary" id="initial_labels_for_user" class="col-md-7 show-tick" name="initial_labels_for_user" multiple>
                                                    @foreach($label_list as $label)
                                                        <option value="{{$label->id}}" @if(in_array($label->id, explode(',', $initial_labels_for_user))) selected @endif>{{$label->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-help offset-md-3"> 注册用户时的初始标签，标签用于关联节点 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="goods_purchase_limit_strategy">商品限购</label>
                                                <select data-plugin="selectpicker" data-style="btn-outline btn-primary" id="goods_purchase_limit_strategy" class="col-md-4" name="goods_purchase_limit_strategy">
                                                    <option value="none" @if($goods_purchase_limit_strategy == 'none') selected @endif>不限制</option>
                                                    <option value="package" @if($goods_purchase_limit_strategy == 'package') selected @endif>仅限套餐</option>
                                                    <option value="free" @if($goods_purchase_limit_strategy == 'free') selected @endif>仅限免费商品</option>
                                                    <option value="package&free" @if($goods_purchase_limit_strategy == 'package&free') selected @endif>限套餐和免费商品</option>
                                                    <option value="all" @if($goods_purchase_limit_strategy == 'all') selected @endif>限全部商品</option>
                                                </select>
                                                <span class="text-help offset-md-3"> 是否限制用户重复购买商品，限制后用户不可重复购买已购买的、尚在有效期的商品 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="subscribe_domain">节点订阅地址</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="subscribe_domain" value="{{$subscribe_domain}}" id="subscribe_domain"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setSubscribeDomain()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> （推荐）防止面板域名被DNS投毒后无法正常订阅，需带http://或https:// </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="subscribe_max">订阅节点数</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="subscribe_max" value="{{$subscribe_max}}" id="subscribe_max"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setSubscribeMax()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 客户端订阅时取得几个节点，为0时返回全部节点 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="user_invite_days">用户-邀请码有效期</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="user_invite_days" value="{{$user_invite_days}}" id="user_invite_days"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">天</span>
                                                        <button class="btn btn-primary" type="button" onclick="setUserInviteDays()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 用户自行生成邀请的有效期 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="admin_invite_days">管理员-邀请码有效期</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="admin_invite_days" value="{{$admin_invite_days}}" id="admin_invite_days"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">天</span>
                                                        <button class="btn btn-primary" type="button" onclick="setAdminInviteDays()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 管理员生成邀请码的有效期 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="mix_subscribe">混合订阅</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="mix_subscribe" @if($mix_subscribe) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后，订阅信息中将包含V2Ray节点信息（仅支持Shadowrocket、Quantumult、v2rayN） </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="rand_subscribe">随机订阅</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="rand_subscribe" @if($rand_subscribe) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后，订阅时将随机返回节点信息，否则按节点排序返回 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label" for="is_custom_subscribe">高级订阅</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_custom_subscribe" @if($is_custom_subscribe) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后，订阅信息顶部将显示过期时间、剩余流量（Quantumult有特殊效果） </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_3" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_checkin" class="col-md-3 col-form-label">签到加流量</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_checkin" @if($is_checkin) checked @endif></span>
                                                <span class="text-help offset-md-3"> 登录时将根据流量范围随机得到流量 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="traffic_limit_time" class="col-md-3 col-form-label">时间间隔</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="traffic_limit_time" value="{{$traffic_limit_time}}" id="traffic_limit_time"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">分钟</span>
                                                        <button class="btn btn-primary" type="button" onclick="setTrafficLimitTime()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 间隔多久才可以再次签到</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">流量范围</label>
                                                <div class="input-group col-md-7">
                                                    <input type="text" class="form-control" name="min_rand_traffic" value="{{$min_rand_traffic}}" id="min_rand_traffic">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> ~ </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="max_rand_traffic" value="{{$max_rand_traffic}}" id="max_rand_traffic">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> MB </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_4" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="referral_status" class="col-md-3 col-form-label">本功能</label>
                                                <div class="input-group col-md-7">
                                                    <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="referral_status" @if($referral_status) checked @endif></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 关闭后用户不可见，但是不影响其正常邀请返利 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="referral_traffic" class="col-md-3 col-form-label">注册送流量</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="referral_gift_traffic" value="{{$referral_traffic}}" id="referral_traffic"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">MB</span>
                                                        <button class="btn btn-primary" type="button" onclick="setReferralTraffic()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 根据推广链接、邀请码注册则赠送相应的流量 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="referral_percent" class="col-md-3 col-form-label">返利比例</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="referral_percent" value="{{$referral_percent * 100}}" id="referral_percent"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                        <button class="btn btn-primary" type="button" onclick="setReferralPercent()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 根据推广链接注册的账号每笔消费推广人可以分成的比例 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="referral_money" class="col-md-3 col-form-label">提现限制</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="referral_money" value="{{$referral_money}}" id="referral_money"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">元</span>
                                                        <button class="btn btn-primary" type="button" onclick="setReferralMoney()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 满多少元才可以申请提现 </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_5" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="expire_warning" class="col-md-3 col-form-label">用户过期警告</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="expire_warning" @if($expire_warning) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后账号距到期还剩阈值设置的值时自动发邮件提醒用户 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="expire_days" class="col-md-3 col-form-label">过期警告阈值</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="expire_days" value="{{$expire_days}}" id="expire_days"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">天</span>
                                                        <button class="btn btn-primary" type="button" onclick="setExpireDays()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 账号距离过期还差多少天时发警告邮件 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="traffic_warning" class="col-md-3 col-form-label">用户流量警告</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="traffic_warning" @if($traffic_warning) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后账号已使用流量超过警告阈值时自动发邮件提醒用户 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="traffic_warning_percent" class="col-md-3 col-form-label">流量警告阈值</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="traffic_warning_percent" value="{{$traffic_warning_percent}}" id="traffic_warning_percent"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                        <button class="btn btn-primary" type="button" onclick="setTrafficWarningPercent()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 建议设置在70%~90% </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_node_crash_warning" class="col-md-3 col-form-label">节点离线提醒</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_node_crash_warning" @if($is_node_crash_warning) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后如果节点离线则通过ServerChan推送提醒 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="crash_warning_email" class="col-md-3 col-form-label">管理员收信地址</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="crash_warning_email" value="{{$crash_warning_email}}" id="crash_warning_email" placeholder="master@ssrpanel.com"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setCrashWarningEmail()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 填写此值则节点离线、用户回复工单都会自动提醒 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_tcp_check" class="col-md-3 col-form-label">TCP阻断检测</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_tcp_check" @if($is_tcp_check) checked @endif></span>
                                                <span class="text-help offset-md-3"> 每30~60分钟内随机检测节点是否被TCP阻断并提醒 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="tcp_check_warning_times" class="col-md-3 col-form-label">阻断检测提醒</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="tcp_check_warning_times" value="{{$tcp_check_warning_times}}" id="tcp_check_warning_times" placeholder=""/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">次</span>
                                                        <button class="btn btn-primary" type="button" onclick="setTcpCheckWarningTimes()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 提醒几次后自动下线节点，为0时不限制，不超过12 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_server_chan" class="col-md-3 col-form-label">ServerChan</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_server_chan" @if($is_server_chan) checked @endif></span>
                                                <span class="text-help offset-md-3"> 推送节点离线提醒、用户流量异常警告、节点使用报告（<a href="http://sc.ftqq.com" target="_blank">绑定微信</a>） </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="server_chan_key" class="col-md-3 col-form-label">SCKEY</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="server_chan_key" value="{{$server_chan_key}}" id="server_chan_key" placeholder="请到ServerChan申请"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setServerChanKey()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 启用ServerChan，请务必填入本值（<a href="http://sc.ftqq.com" target="_blank">申请SCKEY</a>） </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_push_bear" class="col-md-3 col-form-label">PushBear</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_push_bear" @if($is_push_bear) checked @endif></span>
                                                <span class="text-help offset-md-3"> 使用PushBear推送微信消息给用户（<a href="https://pushbear.ftqq.com/admin/#/signin" target="_blank">创建消息通道</a>） </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="push_bear_send_key" class="col-md-3 col-form-label">PushBear SendKey</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="push_bear_send_key" value="{{$push_bear_send_key}}" id="push_bear_send_key" placeholder="创建消息通道后即可获取"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setPushBearSendKey()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 启用PushBear，请务必填入本值 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="push_bear_qrcode" class="col-md-3 col-form-label">PushBear订阅二维码</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="push_bear_qrcode" value="{{$push_bear_qrcode}}" id="push_bear_qrcode" placeholder="填入消息通道的二维码URL"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setPushBearQrCode()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 创建消息通道后，在二维码上点击右键“复制图片地址”并粘贴至此处 </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_6" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_clear_log" class="col-md-3 col-form-label">自动清除日志</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_clear_log" @if($is_clear_log) checked @endif></span>
                                                <span class="text-help offset-md-3"> （推荐）启用后自动清除无用日志 </span>

                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="reset_traffic" class="col-md-3 col-form-label">流量自动重置</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="reset_traffic" @if($reset_traffic) checked @endif></span>
                                                <span class="text-help offset-md-3"> 用户会按其购买套餐的日期自动重置可用流量 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_subscribe_ban" class="col-md-3 col-form-label">订阅异常自动封禁</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_subscribe_ban" @if($is_subscribe_ban) checked @endif></span>
                                                <span class="text-help offset-md-3"> 启用后用户订阅链接请求超过设定阈值则自动封禁 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="subscribe_ban_times" class="col-md-3 col-form-label">订阅请求阈值</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="subscribe_ban_times" value="{{$subscribe_ban_times}}" id="subscribe_ban_times"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setSubscribeBanTimes()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 24小时内订阅链接请求次数限制 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_traffic_ban" class="col-md-3 col-form-label">异常自动封号</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_traffic_ban" @if($is_traffic_ban) checked @endif></span>
                                                <span class="text-help offset-md-3"> 1小时内流量超过异常阈值则自动封号（仅禁用代理） </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="traffic_ban_value" class="col-md-3 col-form-label">流量异常阈值</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="traffic_ban_value" value="{{$traffic_ban_value}}" id="traffic_ban_value"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">GB</span>
                                                        <button class="btn btn-primary" type="button" onclick="setTrafficBanValue()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 1小时内超过该值，则触发自动封号 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="traffic_ban_time" class="col-md-3 col-form-label">封号时长</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="traffic_ban_time" value="{{$traffic_ban_time}}" id="traffic_ban_time"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">分钟</span>
                                                        <button class="btn btn-primary" type="button" onclick="setTrafficBanTime()">修改</button>
                                                    </div>
                                                </div>
                                                <span class="text-help offset-md-3"> 触发流量异常导致用户被封禁的时长，到期后自动解封 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="auto_release_port" class="col-md-3 col-form-label">端口自动释放</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="auto_release_port" @if($auto_release_port) checked @endif></span>
                                                <span class="text-help offset-md-3"> 被封禁和过期一个月的用户端口自动释放 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_ban_status" class="col-md-3 col-form-label">过期自动封禁</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="封禁整个账号" data-off-text="仅封禁代理" data-base-class="bootstrap-switch" id="is_ban_status" @if($is_ban_status) checked @endif></span>
                                                <span class="text-help offset-md-3"> (慎重)封禁整个账号会重置账号的所有数据且会导致用户无法登录 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="node_daily_report" class="col-md-3 col-form-label">节点使用报告</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="node_daily_report" @if($node_daily_report) checked @endif></span>
                                                <span class="text-help offset-md-3"> 每天早上9点推送昨天节点的使用情况 </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_7" role="tabpanel">
                                <form action="/admin/setExtend" method="post" enctype="multipart/form-data" class="upload-form" role="form" id="setExtend">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-form-label col-md-3">首页LOGO</label>
                                                <div class="col-md-9">
                                                    <input type="file" id="website_home_logo" name="website_home_logo" data-plugin="dropify" data-default-file=@if ($website_home_logo) {{$website_home_logo}} @else /assets/images/noimage.png @endif/>
                                                    <button type="submit" class="btn btn-success float-right mt-10"> 提交</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label class="col-form-label col-md-3">站内LOGO</label>
                                                <div class="col-md-9">
                                                    <input type="file" id="website_logo" name="website_logo" data-plugin="dropify" data-default-file=@if ($website_home_logo) {{$website_logo}} @else /assets/images/noimage.png @endif/>
                                                    <button type="submit" class="btn btn-success float-right mt-10"> 提交</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="website_analytics" class=" col-form-label col-md-3">统计代码</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="10" name="website_analytics" id="website_analytics">{{$website_analytics}}</textarea>
                                                    <button type="submit" class="btn btn-success float-right mt-10"> 提交</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="website_customer_service" class=" col-form-label col-md-3">客服代码</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="10" name="website_customer_service" id="website_customer_service">{{$website_customer_service}}</textarea>
                                                    <button type="submit" class="btn btn-success float-right mt-10"> 提交</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_8" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal">
                                    <div class="row pb-70">
                                        <div class="form-group col-md-12">
                                            <div class="alert alert-info text-center">
                                                <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">{{trans('home.close')}}</span></button>
                                                请在<a href="https://console.youzanyun.com/login" target="_blank" style="color: red;"> 有赞云 </a>设置应用的推送网址为：{{$website_url . '/api/yzy'}}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_youzan" class="col-md-3 col-form-label">有赞支付</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_youzan" @if($is_youzan) checked @endif></span>
                                                <span class="text-help offset-md-3"> 请先到 <a href="https://console.youzanyun.com/dashboard">有赞云</a> 申请client_id和client_secret（<a href="https://github.com/ssrpanel/SSRPanel/wiki/%E6%9C%89%E8%B5%9E%E4%BA%91%E6%94%AF%E4%BB%98" target="_blank">申请教程</a>） </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="kdt_id" class="col-md-3 col-form-label">授权店铺id</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="kdt_id" value="{{$kdt_id}}" id="kdt_id"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setKdtId()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="youzan_client_id" class="col-md-3 col-form-label">Client_id</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="youzan_client_id" value="{{$youzan_client_id}}" id="youzan_client_id"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setYouzanClientId()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="youzan_client_secret" class="col-md-3 col-form-label">Client_secret</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="youzan_client_secret" value="{{$youzan_client_secret}}" id="youzan_client_secret"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setYouzanClientSecret()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-70">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_alipay" class="col-md-3 col-form-label">AliPay国际</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_alipay" @if($is_alipay) checked @endif></span>
                                                <span class="text-help offset-md-3"> 请先到 <a href="https://global.alipay.com/" target="_blank">AliPay国际</a> 申请partner和key </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_currency" class="col-md-3 col-form-label">结算币种</label>
                                                <select data-plugin="selectpicker" data-style="btn-outline btn-primary" id="alipay_currency" class="col-md-5" name="alipay_currency">
                                                    <option value="USD" @if($alipay_currency == 'USD') selected @endif>美元</option>
                                                    <option value="HKD" @if($alipay_currency == 'HKD') selected @endif>港币</option>
                                                    <option value="JPY" @if($alipay_currency == 'JPY') selected @endif>日元</option>
                                                    <option value="EUR" @if($alipay_currency == 'EUR') selected @endif>欧元</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_sign_type" class="col-md-3 col-form-label">加密方式</label>
                                                <select data-plugin="selectpicker" data-style="btn-outline btn-primary" id="alipay_sign_type" class="col-md-5" name="alipay_sign_type">
                                                    <option value="MD5" @if($alipay_sign_type == 'MD5') selected @endif>MD5</option>
                                                    <option value="RSA" @if($alipay_sign_type == 'RSA') selected @endif>RSA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_transport" class="col-md-3 col-form-label">启用SSL验证</label>
                                                <select data-plugin="selectpicker" data-style="btn-outline btn-primary" id="alipay_transport" class="col-md-5" name="alipay_transport">
                                                    <option value="http" @if($alipay_transport == 'http') selected @endif>否</option>
                                                    <option value="https" @if($alipay_transport == 'https') selected @endif>是</option>
                                                </select>
                                                <span class="text-help offset-md-3"> HTTPS站点需启用 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_partner" class="col-md-3 col-form-label">Partner</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="alipay_partner" value="{{$alipay_partner}}" id="alipay_partner"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setAlipayPartner()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_key" class="col-md-3 col-form-label">Key</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="password" name="alipay_key" value="{{$alipay_key}}" id="alipay_key"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setAlipayKey()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_private_key" class="col-md-3 col-form-label">RSA私钥</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="password" name="alipay_private_key" value="{{$alipay_private_key}}" id="alipay_private_key"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setAlipayPrivateKey()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_public_key" class="col-md-3 col-form-label">RSA公钥</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="password" name="alipay_public_key" value="{{$alipay_public_key}}" id="alipay_public_key"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setAlipayPublicKey()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-70">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="is_f2fpay" class="col-md-3 col-form-label">支付宝F2F</label>
                                                <span class="col-md-9"><input type="checkbox" data-on-color="primary" data-off-color="danger" data-on-text="启用" data-off-text="关闭" data-base-class="bootstrap-switch" id="is_f2fpay" @if($is_f2fpay) checked @endif></span>
                                                <span class="text-help offset-md-3"> 本功能需要 <a href="https://open.alipay.com/platform/home.htm" target="_blank">蚂蚁金服开放平台</a> 申请权限及应用 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_partner" class="col-md-3 col-form-label">应用ID</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="f2fpay_app_id" value="{{$f2fpay_app_id}}" id="f2fpay_app_id"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setF2fpayAppId()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3">即：APPID</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_private_key" class="col-md-3 col-form-label">RSA私钥</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="f2fpay_private_key" value="{{$f2fpay_private_key}}" id="f2fpay_private_key"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setF2fpayPrivateKey()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3">即：rsa_private_key，不包括首尾格式</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="alipay_public_key" class="col-md-3 col-form-label">支付宝公钥</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="f2fpay_public_key" value="{{$f2fpay_public_key}}" id="f2fpay_public_key"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setF2fpayPublicKey()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 注意不是RSA公钥 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <label for="f2fpay_subject_name" class="col-md-3 col-form-label">自定义商品名称</label>
                                            <div class="input-group col-md-7">
                                                <input class="form-control" type="text" name="f2fpay_subject_name" value="{{$f2fpay_subject_name}}" id="f2fpay_subject_name"/>
                                                <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setF2fpaySubjectName()">修改</button></span>
                                            </div>
                                            <span class="text-help offset-md-3"> 用于在用户支付宝客户端显示 </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_9" role="tabpanel">
                                <form action="#" method="post" role="form" class="form-horizontal">
                                    <div class="row pb-70">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="geetest_id" class="col-md-3 col-form-label">极验ID</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="geetest_id" value="{{$geetest_id}}" id="geetest_id"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setGeetestId()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 本功能需要 <a href="https://auth.geetest.com/login/" target="_blank">极验后台</a> 申请权限及应用 </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="geetest_key" class="col-md-3 col-form-label">极验KEY</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="geetest_key" value="{{$geetest_key}}" id="geetest_key"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setGeetestKey()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-70">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="google_captcha_sitekey" class="col-md-3 col-form-label">网站密钥</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="google_captcha_sitekey" value="{{$google_captcha_sitekey}}" id="google_captcha_sitekey"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setGoogleCaptchaId()">修改</button></span>
                                                </div>
                                                <span class="text-help offset-md-3"> 本功能需要 <a href="https://www.google.com/recaptcha/admin" target="_blank">Google reCAPTCHA后台</a> 申请权限及应用 （申请需科学上网，日常验证不用）</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <label for="google_captcha_secret" class="col-md-3 control-label">密钥</label>
                                                <div class="input-group col-md-7">
                                                    <input class="form-control" type="text" name="google_captcha_secret" value="{{$google_captcha_secret}}" id="google_captcha_secret"/>
                                                    <span class="input-group-append"><button class="btn btn-primary" type="button" onclick="setGoogleCaptchaKey()">修改</button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/assets/global/vendor/matchheight/jquery.matchHeight-min.js"></script>
    <script src="/assets/global/js/Plugin/responsive-tabs.js"></script>
    <script src="/assets/global/js/Plugin/tabs.js"></script>
    <script src="/assets/global/vendor/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/global/js/Plugin/bootstrap-select.js"></script>
    <script src="//cdn.bootcss.com/bootstrap-switch/4.0.0-alpha.1/js/bootstrap-switch.min.js"></script>
    <script src="/assets/global/vendor/dropify/dropify.min.js"></script>
    <script src="/assets/global/js/Plugin/dropify.js"></script>

    <script type="text/javascript">
        $('input[type="checkbox"]').bootstrapSwitch();
        // 注册的默认标签
        $('#initial_labels_for_user').on("changed.bs.select", function () {
            var initial_labels_for_user = $(this).val() ? $(this).val().join(',') : '';

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'initial_labels_for_user',
                value: initial_labels_for_user
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 启用、禁用随机端口
        $('#is_rand_port').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_rand_port = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_rand_port',
                    value: is_rand_port
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用屏蔽大陆访问
        $('#is_forbid_china').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_forbid_china = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_forbid_china',
                    value: is_forbid_china
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用屏蔽海外访问
        $('#is_forbid_oversea').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_forbid_oversea = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_forbid_oversea',
                    value: is_forbid_oversea
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用机器人访问
        $('#is_forbid_robot').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_forbid_robot = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_forbid_robot',
                    value: is_forbid_robot
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用注册校验验证码
        $('#is_verify_register').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_verify_register = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_verify_register',
                    value: is_verify_register
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用自定义端口
        $('#is_user_rand_port').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_user_rand_port = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_user_rand_port',
                    value: is_user_rand_port
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用登录加流量
        $('#is_checkin').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_checkin = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_checkin',
                    value: is_checkin
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用注册

        $('#is_register').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_register = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_register',
                    value: is_register
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、可选、禁用邀请注册
        $("#is_invite_register").on("changed.bs.select", function () {
            var is_invite_register = $(this).val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'is_invite_register',
                value: is_invite_register
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 启用、禁用用户重置密码
        $('#is_reset_password').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_reset_password = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_reset_password',
                    value: is_reset_password
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用验证码
        $('#is_captcha').on("changed.bs.select", function () {
            var is_captcha = $(this).val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'is_captcha',
                value: is_captcha
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });


        // 启用、禁用免费邀请码
        $('#is_free_code').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_free_code = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_free_code',
                    value: is_free_code
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用用户激活用户
        $('#is_active_register').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_active_register = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_active_register',
                    value: is_active_register
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用用户到期自动邮件提醒
        $('#expire_warning').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var expire_warning = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'expire_warning',
                    value: expire_warning
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用节点离线发件提醒管理员
        $('#is_node_crash_warning').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_node_crash_warning = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_node_crash_warning',
                    value: is_node_crash_warning
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用节点离线发ServerChan微信消息提醒
        $('#is_server_chan').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_server_chan = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_server_chan',
                    value: is_server_chan
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用Namesilo
        $('#is_namesilo').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_namesilo = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_namesilo',
                    value: is_namesilo
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用混合订阅
        $('#mix_subscribe').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var mix_subscribe = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'mix_subscribe',
                    value: mix_subscribe
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用随机订阅
        $('#rand_subscribe').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var rand_subscribe = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'rand_subscribe',
                    value: rand_subscribe
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用自定义订阅
        $('#is_custom_subscribe').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_custom_subscribe = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_custom_subscribe',
                    value: is_custom_subscribe
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用PushBear
        $('#is_push_bear').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_push_bear = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_push_bear',
                    value: is_push_bear
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用TCP阻断探测
        $('#is_tcp_check').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_tcp_check = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_tcp_check',
                    value: is_tcp_check
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用订阅异常自动封禁
        $('#is_subscribe_ban').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_subscribe_ban = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_subscribe_ban',
                    value: is_subscribe_ban
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用退关返利用户可见与否
        $('#referral_status').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var referral_status = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'referral_status',
                    value: referral_status
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用随机端口
        $('#traffic_warning').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var traffic_warning = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'traffic_warning',
                    value: traffic_warning
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用随机端口
        $('#is_clear_log').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_clear_log = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_clear_log',
                    value: is_clear_log
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用流量自动重置
        $('#reset_traffic').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var reset_traffic = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'reset_traffic',
                    value: reset_traffic
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用流量异常自动封号
        $('#is_traffic_ban').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_traffic_ban = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_traffic_ban',
                    value: is_traffic_ban
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用端口自动释放
        $('#auto_release_port').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var auto_release_port = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'auto_release_port',
                    value: auto_release_port
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用节点使用报告
        $('#node_daily_report').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var node_daily_report = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'node_daily_report',
                    value: node_daily_report
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 过期封禁是否禁止账号
        $('#is_ban_status').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_ban_status = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_ban_status',
                    value: is_ban_status
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用有赞云
        $('#is_youzan').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_youzan = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_youzan',
                    value: is_youzan
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用alipay国际
        $('#is_alipay').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_alipay = state ? 1 : 0;

                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_alipay',
                    value: is_alipay
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 启用、禁用支付宝当面付
        $('#is_f2fpay').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_f2fpay = state ? 1 : 0;
                $.post("/admin/setConfig", {
                    _token: '{{csrf_token()}}',
                    name: 'is_f2fpay',
                    value: is_f2fpay
                }, function (ret) {
                    if (ret.status === 'success') {
                        swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                            .then(() => window.location.reload())
                    } else {
                        swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                    }
                });
            }
        });

        // 流量异常阈值
        function setTrafficBanValue() {
            var traffic_ban_value = $("#traffic_ban_value").val();

            if (traffic_ban_value < 1) {
				swal.fire({title: '不能小于1', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'traffic_ban_value',
                value: traffic_ban_value
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置用户封号时长
        function setTrafficBanTime() {
            var traffic_ban_time = $("#traffic_ban_time").val();

            if (traffic_ban_time < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'traffic_ban_time',
                value: traffic_ban_time
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置节点离线警告收件地址
        function setCrashWarningEmail() {
            var crash_warning_email = $("#crash_warning_email").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'crash_warning_email',
                value: crash_warning_email
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置ServerChan的SCKEY
        function setServerChanKey() {
            var server_chan_key = $("#server_chan_key").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'server_chan_key',
                value: server_chan_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置Namesilo API KEY
        function setNamesiloKey() {
            var namesilo_key = $("#namesilo_key").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'namesilo_key',
                value: namesilo_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置PushBear的SendKey
        function setPushBearSendKey() {
            var push_bear_send_key = $("#push_bear_send_key").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'push_bear_send_key',
                value: push_bear_send_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置PushBear的消息通道二维码URL
        function setPushBearQrCode() {
            var push_bear_qrcode = $("#push_bear_qrcode").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'push_bear_qrcode',
                value: push_bear_qrcode
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置TCP阻断检测提醒次数
        function setTcpCheckWarningTimes() {
            var tcp_check_warning_times = $("#tcp_check_warning_times").val();

            if (tcp_check_warning_times < 0 || tcp_check_warning_times > 12) {
				swal.fire({title: '只能在0-12之间', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'tcp_check_warning_times',
                value: tcp_check_warning_times
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置订阅封禁阈值
        function setSubscribeBanTimes() {
            var subscribe_ban_times = $("#subscribe_ban_times").val();

            if (subscribe_ban_times < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'subscribe_ban_times',
                value: subscribe_ban_times
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置有赞云的kdt_id
        function setKdtId() {
            var kdt_id = $("#kdt_id").val();

            $.post("/admin/setConfig", {_token: '{{csrf_token()}}', name: 'kdt_id', value: kdt_id}, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置有赞云的client_id
        function setYouzanClientId() {
            var youzan_client_id = $("#youzan_client_id").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'youzan_client_id',
                value: youzan_client_id
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置有赞云的client_secret
        function setYouzanClientSecret() {
            var youzan_client_secret = $("#youzan_client_secret").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'youzan_client_secret',
                value: youzan_client_secret
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置alipay加密方式
        $('#alipay_sign_type').change(function () {
            var alipay_sign_type = $(this).val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'alipay_sign_type',
                value: alipay_sign_type
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 设置alipay是否启用SSL验证
        $('#alipay_transport').change(function () {
            var alipay_transport = $(this).val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'alipay_transport',
                value: alipay_transport
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        //设置alipay的partner
        function setAlipayPartner() {
            var alipay_partner = $("#alipay_partner").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'alipay_partner',
                value: alipay_partner
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        //设置alipay的key
        function setAlipayKey() {
            var alipay_key = $("#alipay_key").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'alipay_key',
                value: alipay_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        //设置alipay的私钥
        function setAlipayPrivateKey() {
            var alipay_private_key = $("#alipay_private_key").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'alipay_private_key',
                value: alipay_private_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        //设置alipay的公钥
        function setAlipayPublicKey() {
            var alipay_public_key = $("#alipay_public_key").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'alipay_public_key',
                value: alipay_public_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置alipay结算币种
        $('#alipay_currency').on("changed.bs.select", function () {
            var alipay_currency = $(this).val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'alipay_currency',
                value: alipay_currency
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 设置最小流量
        $("#min_rand_traffic").change(function () {
            var min_rand_traffic = $(this).val();
            var max_rand_traffic = $("#max_rand_traffic").val();

            if (parseInt(min_rand_traffic) < 0) {
				swal.fire({title: '最小流量值不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            if (parseInt(min_rand_traffic) >= parseInt(max_rand_traffic)) {
				swal.fire({title: '最小流量值必须小于最大流量值', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'min_rand_traffic',
                value: min_rand_traffic
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 设置最大流量
        $("#max_rand_traffic").change(function () {
            var min_rand_traffic = $("#min_rand_traffic").val();
            var max_rand_traffic = $(this).val();

            if (parseInt(max_rand_traffic) > 99999) {
				swal.fire({title: '最大流量值不能大于99999', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            if (parseInt(min_rand_traffic) >= parseInt(max_rand_traffic)) {
				swal.fire({title: '最大流量值必须大于最小流量值', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'max_rand_traffic',
                value: max_rand_traffic
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 设置f2fpay的应用id
        function setF2fpayAppId() {
            var f2fpay_app_id = $("#f2fpay_app_id").val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'f2fpay_app_id',
                value: f2fpay_app_id
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置f2fpay的私钥
        function setF2fpayPrivateKey() {
            var f2fpay_private_key = $("#f2fpay_private_key").val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'f2fpay_private_key',
                value: f2fpay_private_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置f2fpay的公钥
        function setF2fpayPublicKey() {
            var f2fpay_public_key = $("#f2fpay_public_key").val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'f2fpay_public_key',
                value: f2fpay_public_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 自动去除公钥和私钥中的空格和换行
        $("#alipay_public_key,#alipay_private_key,#f2fpay_public_key,#f2fpay_private_key").on('input', function () {
            $(this).val($(this).val().replace(/(\s+)/g, ''));
        });

        // 设置f2fpay的商品名称
        function setF2fpaySubjectName() {
            var f2fpay_subject_name = $("#f2fpay_subject_name").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'f2fpay_subject_name',
                value: f2fpay_subject_name
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置极验的Id
        function setGeetestId() {
            var geetest_id = $("#geetest_id").val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'geetest_id',
                value: geetest_id
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置极验的Key
        function setGeetestKey() {
            var geetest_key = $("#geetest_key").val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'geetest_key',
                value: geetest_key
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置Google reCAPTCHA的Id
        function setGoogleCaptchaId() {
            var google_captcha_sitekey = $("#google_captcha_sitekey").val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'google_captcha_sitekey',
                value: google_captcha_sitekey
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置Google reCAPTCHA的Key
        function setGoogleCaptchaKey() {
            var google_captcha_secret = $("#google_captcha_secret").val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'google_captcha_secret',
                value: google_captcha_secret
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置最小端口
        $("#min_port").change(function () {
            var min_port = $(this).val();
            var max_port = $("#max_port").val();

            // 最大端口必须大于最小端口
            if (parseInt(max_port) <= parseInt(min_port)) {
				swal.fire({title: '必须小于最大端口', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            if (parseInt(min_port) < 1000) {
				swal.fire({title: '最小端口不能小于1000', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {_token: '{{csrf_token()}}', name: 'min_port', value: min_port}, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 设置最大端口
        $("#max_port").change(function () {
            var min_port = $("#min_port").val();
            var max_port = $(this).val();

            // 最大端口必须大于最小端口
            if (parseInt(max_port) <= parseInt(min_port)) {
				swal.fire({title: '必须大于最小端口', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            if (parseInt(max_port) > 65535) {
                swal.fire({title: '最大端口不能大于65535', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {_token: '{{csrf_token()}}', name: 'max_port', value: max_port}, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        $("#goods_purchase_limit_strategy").on("changed.bs.select", function () {
            var strategy = $(this).val();
            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'goods_purchase_limit_strategy',
                value: strategy
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        });

        // 设置注册时默认有效期
        function setDefaultDays() {
            var default_days = parseInt($("#default_days").val());

            if (default_days < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'default_days',
                value: default_days
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置注册时默认流量
        function setDefaultTraffic() {
            var default_traffic = parseInt($("#default_traffic").val());

            if (default_traffic < 0) {
				swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'default_traffic',
                value: default_traffic
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置可生成邀请码数量
        function setInviteNum() {
            var invite_num = parseInt($("#invite_num").val());

            if (invite_num < 0) {
				swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'invite_num',
                value: invite_num
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置重置密码次数
        function setResetPasswordTimes() {
            var reset_password_times = $("#reset_password_times").val();

            if (reset_password_times < 0) {
				swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'reset_password_times',
                value: reset_password_times
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置激活用户次数
        function setActiveTimes() {
            var active_times = parseInt($("#active_times").val());

            if (active_times < 0) {
				swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'active_times',
                value: active_times
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置节点订阅地址
        function setSubscribeDomain() {
            var subscribe_domain = $("#subscribe_domain").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'subscribe_domain',
                value: subscribe_domain
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 24小时内同IP注册限制
        function setRegisterIpLimit() {
            var register_ip_limit = parseInt($("#register_ip_limit").val());

            if (register_ip_limit < 0) {
				swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'register_ip_limit',
                value: register_ip_limit
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置节点订阅随机展示节点数
        function setSubscribeMax() {
            var subscribe_max = parseInt($("#subscribe_max").val());

            if (subscribe_max < 0) {
				swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'subscribe_max',
                value: subscribe_max
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置用户生成邀请码有效期
        function setUserInviteDays() {
            var user_invite_days = parseInt($("#user_invite_days").val());

            if (user_invite_days <= 0) {
				swal.fire({title: '必须大于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'user_invite_days',
                value: user_invite_days
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置管理员生成邀请码有效期
        function setAdminInviteDays() {
            var admin_invite_days = parseInt($("#admin_invite_days").val());

            if (admin_invite_days <= 0) {
				swal.fire({title: '必须大于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'admin_invite_days',
                value: admin_invite_days
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置流量警告阈值
        function setTrafficWarningPercent() {
            var traffic_warning_percent = $("#traffic_warning_percent").val();

            if (traffic_warning_percent < 0) {
				swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'traffic_warning_percent',
                value: traffic_warning_percent
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置用户过期提醒阈值
        function setExpireDays() {
            var expire_days = parseInt($("#expire_days").val());

            if (expire_days < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'expire_days',
                value: expire_days
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置网站名称
        function setWebsiteName() {
            var website_name = $("#website_name").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'website_name',
                value: website_name
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置网站地址
        function setWebsiteUrl() {
            var website_url = $("#website_url").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'website_url',
                value: website_url
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置苹果账号
        function setAppStoreId() {
            var AppStore_id = $("#AppStore_id").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'AppStore_id',
                value: AppStore_id
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置苹果密码
        function setAppStorePassword() {
            var AppStore_password = $("#AppStore_password").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'AppStore_password',
                value: AppStore_password
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        //设置管理员邮箱
        function setAdminEmail() {
            var admin_email = $("#admin_email").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'admin_email',
                value: admin_email
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 生成网站安全码
        function makeWebsiteSecurityCode() {
            $.get("/makeSecurityCode", function (ret) {
                $("#website_security_code").val(ret);
            });
        }

        // 设置网站安全码
        function setWebsiteSecurityCode() {
            var website_security_code = $("#website_security_code").val();

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'website_security_code',
                value: website_security_code
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 登录加流量的时间间隔
        function setTrafficLimitTime() {
            var traffic_limit_time = parseInt($("#traffic_limit_time").val());

            if (traffic_limit_time < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'traffic_limit_time',
                value: traffic_limit_time
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置根据推广链接注册送流量
        function setReferralTraffic() {
            var referral_traffic = parseInt($("#referral_traffic").val());

            if (referral_traffic < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'referral_traffic',
                value: referral_traffic
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置根据推广链接注册人每产生一笔消费，则推广人可以获得的返利比例
        function setReferralPercent() {
            var referral_percent = $("#referral_percent").val();

            if (referral_percent < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            if (referral_percent > 100) {
				swal.fire({title: '不能大于100', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'referral_percent',
                value: referral_percent
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }

        // 设置返利满多少元才可以提现
        function setReferralMoney() {
            var referral_money = $("#referral_money").val();

            if (referral_money < 0) {
                swal.fire({title: '不能小于0', type: 'warning', timer: 1000, showConfirmButton: false});
                return;
            }

            $.post("/admin/setConfig", {
                _token: '{{csrf_token()}}',
                name: 'referral_money',
                value: referral_money
            }, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                        .then(() => window.location.reload())
                } else {
                    swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                }
            });
        }
    </script>
@endsection