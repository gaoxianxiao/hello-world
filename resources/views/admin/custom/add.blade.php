@extends('layouts.user')
@section('content')
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  添加客户信息
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
        @if(count($errors)>0)
            <div class="mark">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="{{url('admin/custom/create')}}"><i class="fa fa-plus"></i>添加客户</a>
            <a href="{{url('admin/custom')}}"><i class="fa fa-recycle"></i>客户列表</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/custom')}}" method="post">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require">*</i>客户名称：</th>
                <td>
                    <input type="text" name="custom_name">
                    <span><i class="fa fa-exclamation-circle yellow"></i>客户名称必须填写</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>客户网址：</th>
                <td>
                    <input type="text" class="lg" name="custom_website" value="http://">
                </td>
            </tr>
            <tr>
                <th>客户描述：</th>
                <td>
                    <textarea name="custom_description"></textarea>
                </td>
            </tr>
            <tr>
                <th>排序：</th>
                <td>
                    <input type="text" class="sm" name="custom_order" value="0">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection

