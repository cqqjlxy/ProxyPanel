@extends('user.layouts')
@section('content')
    <div class="page-header">
        <h1 class="page-title cyan-600"><i class="icon wb-star"></i>{{trans('home.referrals')}}</h1>
    </div>
    <div class="page-content  container-fluid">
        <div class="alert alert-info" role="alert">
            <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {!! trans('home.promote_link', ['traffic' => $referral_traffic, 'referral_percent' => $referral_percent * 100]) !!}
        </div>
        <div class="row">
            <div class="col-lg-5">
                <!-- 推广链接 -->
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title cyan-600"><i class="icon wb-link"></i> {{trans('home.referral_my_link')}}
                        </h4>
                        <div class="card-text form">
                            <div class="mt-clipboard-container input-group">
                                <input type="text" id="mt-target-1" class="form-control" value="{{$link}}"/>
                                <button class="btn btn-info mt-clipboard" data-clipboard-action="copy" data-clipboard-text="{{$link}}">
                                    <i class="icon wb-copy"></i> {{trans('home.referral_button')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 邀请记录 -->
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title cyan-600"><i class="icon wb-emoticon"></i> {{trans('home.invite_user_title')}}
                        </h4>
                        <div class="table-responsive">
                            <table class="table text-center" data-mobile-responsive="true">
                                <thead class="thead-default">
                                <tr>
                                    <th data-cell-style="cellStyle"> #</th>
                                    <th> {{trans('home.invite_user_username')}} </th>
                                    <th> {{trans('home.invite_user_created_at')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($referralUserList->isEmpty())
                                    <tr>
                                        <td colspan="3"> {{trans('home.referral_table_none')}} </td>
                                    </tr>
                                @else
                                    @foreach($referralUserList as $vo)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td> {{str_replace(mb_substr($vo->username, 3, 4), "****", $vo->username)}}  </td>
                                            <td> {{$vo->created_at}} </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="panel-footer">
                                <nav class="Page navigation float-right">
                                    {{$referralUserList->appends(array_except(Request::query(), 'user_page'))->links()}}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- 佣金记录 -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title cyan-600">
                            <i class="icon wb-star-half"></i>{{trans('home.referral_title')}}
                        </h3>
                        <div class="panel-actions">
                            <button type="submit" class="btn btn-danger" onclick="extractMoney()"> {{trans('home.referral_table_apply')}} </button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table text-center" data-mobile-responsive="true">
                                <thead class="thead-default">
                                <tr>
                                    <th data-cell-style="cellStyle"> #</th>
                                    <th> {{trans('home.referral_table_date')}} </th>
                                    <th> {{trans('home.referral_table_user')}} </th>
                                    <th> {{trans('home.referral_table_amount')}} </th>
                                    <th> {{trans('home.referral_table_commission')}} </th>
                                    <th> {{trans('home.referral_table_status')}} </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($referralLogList->isEmpty())
                                    <tr>
                                        <td colspan="6"> {{trans('home.referral_table_none')}} </td>
                                    </tr>
                                @else
                                    @foreach($referralLogList as $referralLog)
                                        <tr>
                                                <td> {{$loop->iteration}} </td>
                                            <td> {{$referralLog->created_at}} </td>
                                            <td> {{empty($referralLog->user) ? '【账号已删除】' : str_replace(mb_substr($referralLog->user->username, 3, 4), "****", $referralLog->user->username)}} </td>
                                            <td> ￥{{$referralLog->amount}} </td>
                                            <td> ￥{{$referralLog->ref_amount}} </td>
                                            <td>
                                                @if ($referralLog->status == 1)
                                                    <span class="badge badge-sm badge-info">申请中</span>
                                                @elseif($referralLog->status == 2)
                                                    <span>已提现</span>
                                                @else
                                                    <span class="badge badge-sm badge-success">未提现</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                {{trans('home.referral_summary', ['total' => $referralLogList->total(), 'amount' => $canAmount, 'money' => $referral_money])}}
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <nav class="Page navigation float-right">
                                    {{$referralLogList->appends(array_except(Request::query(), 'user_page'))->links()}}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 提现记录 -->
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title cyan-600"><i class="icon wb-star-outline"></i> {{trans('home.referral_apply_title')}}
                        </h4>
                        <div class="table-responsive">
                            <table class="table text-center" data-mobile-responsive="true">
                                <thead class="thead-default">
                                <tr>
                                    <th data-cell-style="cellStyle"> #</th>
                                    <th> {{trans('home.referral_apply_table_date')}} </th>
                                    <th> {{trans('home.referral_apply_table_amount')}} </th>
                                    <th> {{trans('home.referral_apply_table_status')}} </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($referralApplyList->isEmpty())
                                    <tr>
                                        <td colspan="6"> {{trans('home.referral_table_none')}} </td>
                                    </tr>
                                @else
                                    @foreach($referralApplyList as $vo)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td> {{$vo->created_at}} </td>
                                            <td> ￥{{$vo->amount}} </td>
                                            <td>
                                                @if ($vo->status == 0)
                                                    <span class="badge badge-sm badge-warning">待审核</span>
                                                @elseif($vo->status == 1)
                                                    <span class="badge badge-sm badge-info">审核通过 - 待打款</span>
                                                @elseif($vo->status == 2)
                                                    <span>已打款</span>
                                                @else
                                                    <span class="badge badge-sm badge-dark">驳回</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="panel-footer">
                                <nav class="Page navigation float-right">
                                    {{ $referralApplyList->appends(array_except(Request::query(), 'user_page'))->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/assets/custom/Plugin/clipboardjs/clipboard.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        // 申请提现
        function extractMoney() {
            $.post("/extractMoney", {_token: '{{csrf_token()}}'}, function (ret) {
                if (ret.status === 'success') {
                    swal.fire({
                        title: ret.message,
                        type: '1000',
                        timer: 1300,
                        showConfirmButton: false,
                    });
                    swal.fire(ret.message, {icon: "success", timer: 1000, buttons: false})
                        .then(() => {
                            window.location.reload()
                        })
                } else {
                    swal.fire('申请失败', ret.message, 'error')
                }
            });
        }

        const clipboard = new ClipboardJS('.mt-clipboard');
        clipboard.on('success', function () {
            swal.fire({
                title: '复制成功',
                type: 'success',
                timer: 1300,
                showConfirmButton: false,
            });
        });
        clipboard.on('error', function () {
            swal.fire({
                title: '复制失败，请手动复制',
                type: 'error',
                timer: 1500,
                showConfirmButton: false,
            });
        });
    </script>
@endsection