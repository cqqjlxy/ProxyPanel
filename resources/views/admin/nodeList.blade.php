@extends('admin.layouts')
@section('css')
    <link rel="stylesheet" href="/assets/global/vendor/bootstrap-table/bootstrap-table.min.css">
@endsection
@section('content')
    <div class="page-content container-fluid">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">节点列表</h3>
                <div class="panel-actions">
                    <button class="btn btn-primary" onclick="addNode()"><i class="icon wb-plus"></i> 添加节点</button>
                </div>
            </div>
            <div class="panel-body">
                <table class="text-center" data-toggle="table" data-mobile-responsive="true">
                    <thead class="thead-default">
                    <tr>
                        <th> ID</th>
                        <th> 类型</th>
                        <th> 名称</th>
                        <th> IP</th>
                        <th> 域名</th>
                        <th> 存活</th>
                        <th> 状态</th>
                        <th> 在线</th>
                        <th>产生流量</th>
                        <th> 流量比例</th>
                        <th> 扩展</th>
                        <th> 操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($nodeList->isEmpty())
                        <tr>
                            <td colspan="12">暂无数据</td>
                        </tr>
                    @else
                        @foreach($nodeList as $node)
                            <tr>
                                <td>
                                    <span class="badge badge-lg {{$node->status ? 'badge-danger' : 'badge-default'}}"> {{$node->id}} </span>
                                </td>
                                <td>
                                    @if($node->is_transit)
                                        {{$node->is_transit ? '中转' : ''}}
                                    @else
                                        {{$node->type == 2 ? 'V2' : 'SSR'}}
                                    @endif
                                </td>
                                <td> {{$node->name}} </td>
                                <td> {{$node->is_nat ? 'Nat' : $node->ip}} </td>
                                <td> {{$node->server}} </td>
                                <td> {{$node->is_transit ? '' : $node->uptime}} </td>
                                <td> {{$node->is_transit ? '' : $node->load}} </td>
                                <td> {{$node->is_transit ? '' : $node->online_users}} </td>
                                <td> {{$node->is_transit ? '' : $node->transfer}} </td>
                                <td> {{$node->traffic_rate}} </td>
                                <td>
                                    @if($node->compatible) <span class="badge badge-lg badge-info">兼</span> @endif
                                    @if($node->single) <span class="badge badge-lg  badge-info">单</span> @endif
                                    @if(!$node->is_subscribe)
                                        <span class="badge badge-lg  badge-info"><s>订</s></span> @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="javascript:editNode('{{$node->id}}');" class="btn btn-primary"><i class="icon wb-edit"></i></a>
                                        <a href="javascript:delNode('{{$node->id}}');" class="btn btn-danger"><i class="icon wb-trash"></i></a>
                                        <a href="javascript:nodeMonitor('{{$node->id}}');" class="btn btn-primary"><i class="icon wb-stats-bars"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-4">
                        共 {{$nodeList->total()}} 条线路
                    </div>
                    <div class="col-sm-8">
                        <nav class="Page navigation float-right">
                            {{ $nodeList->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/assets/global/vendor/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="/assets/global/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.min.js"></script>
    <script type="text/javascript">
        // 添加节点
        function addNode() {
            window.location.href = '/admin/addNode';
        }

        // 编辑节点
        function editNode(id) {
            window.location.href = '/admin/editNode?id=' + id + '&page={{Request::get('page', 1)}}';
        }

        // 删除节点
        function delNode(id) {
            swal.fire({
                title: '警告',
                text: '确定删除节点?',
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: '{{trans('home.ticket_close')}}',
                confirmButtonText: '{{trans('home.ticket_confirm')}}',
            }).then((result) => {
                if (result.value) {
                    $.post("/admin/delNode", {id: id, _token: '{{csrf_token()}}'}, function (ret) {
                        if (ret.status === 'success') {
                            swal.fire({title: ret.message, type: 'success', timer: 1000, showConfirmButton: false})
                                .then(() => window.location.reload())
                        } else {
                            swal.fire({title: ret.message, type: "error"}).then(() => window.location.reload())
                        }
                    });
                }
            });
        }

        // 节点流量监控
        function nodeMonitor(id) {
            window.location.href = '/admin/nodeMonitor?id=' + id;
        }

        // 显示提示
        function showIdTips() {
            swal.fire({
                title: '复制成功',
                type: 'success',
                timer: 1300,
                showConfirmButton: false,
            });
        }

        // 修正table的dropdown
        $('.table-scrollable').on('show.bs.dropdown', function () {
            $('.table-scrollable').css("overflow", "inherit");
        });

        $('.table-scrollable').on('hide.bs.dropdown', function () {
            $('.table-scrollable').css("overflow", "auto");
        });
    </script>
@endsection