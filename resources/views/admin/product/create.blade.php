@extends('layouts.admin.app')
@section('content')


    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">

            <!--banner-->
            <div class="banner">
                <h2>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                    <span>Forms</span>
                </h2>
            </div>
            <!--//banner-->
            <!--grid-->
            <div class="grid-form">
                <!---->

                <!---->
                <div class="grid-form1">
                    <h3>Form Element</h3>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form class="form-horizontal" action="{{url('admin/product')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Product Type Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Name">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="disabledinput"  class="col-sm-2 control-label">Product Type Description</label>
                                    <div class="col-sm-8">
                                        <textarea  name="description" class="form-control1" id=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="disabledinput"  class="col-sm-2 control-label">Product Type Description</label>
                                    <div class="col-sm-8">
                                        <select name="prType" id="">
                                            @foreach($prtypes as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button class="btn-default btn">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!--//grid-->
            <!---->
            <div class="copy">
                <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
        </div>
    </div>




@endsection