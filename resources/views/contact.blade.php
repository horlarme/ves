@extends('layout')

@section('title') Contact @stop

@section('content')

            <div class="page-title" style="background-image: url(image/IS3.JPG);">
                <div class="overlay"></div>
                <h1>Contact</h1>
            </div>
            <div class="light-wrapper">

                <div class="container inner">
                     <div class="section-title text-center">
                        <h3>Address </h3>
                    </div>
                    <div class="row">
                        <!-- /.span3 -->
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <p>No 10, The Address, Lagos State, Nigeria</p>
                        </div>
                        <!-- /.span9 --> 
                    </div>
                     <div class="section-title text-center">
                        <h3>Mobile </h3>
                    </div>
                    <div class="row">
                        <!-- /.span3 -->
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <p>2348149108989</p>
                        </div>
                        <!-- /.span9 --> 
                    </div>
                     <div class="section-title text-center">
                        <h3>E-Mail Address </h3>
                    </div>
                    <div class="row">
                        <!-- /.span3 -->
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <p>our@email-address.com</p>
                        </div>
                        <!-- /.span9 --> 
                    </div>
                </div>
            </div>
            <div class="black-wrapper">

                <div class="container inner">
                     <div class="section-title text-center">
                        <h3>Contact Form</h3>
                    </div>
                    @if(@$errors)
                        @foreach ($errors->all() as $error)
                        <p class="text-center text-warning">{{ $error }}</p>
                        @endforeach
                    @endif
                    @if(@$message)
                        <p class="text-center text-success">{{ $message }}</p>
                    @endif
                    <div class="row">
                        </div>
                        <!-- /.span3 -->
                        <div class="col-sm-8 col-sm-offset-2">
                            <form class="form-horizontal" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Full Name</div>
                                        <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="{{old('fullname')}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">E-Mail Address</div>
                                        <input type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{old('email')}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Message</div>
                                        <textarea class="form-control" name="message" placeholder="Enter your message here in this box...." rows="8">{{old('message')}}</textarea>
                                    </div>
                                </div>
                                    <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
                            </form>
                        </div>
                        <!-- /.span9 --> 
                    </div>
                </div>
            </div>
        </div>

@stop