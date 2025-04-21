@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="fasilities__body wow fadeInUp" data-wow-duration="3s">
            <div class="row g-4 justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                    <div class="recharge__paymentbox">
                        <div class="mobile__recharge text-center">
                            <h5>
                                Mobile Recharge or Bill Payment
                            </h5>

                            <form action="javascript:void(0)" class="pb__40">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Enter Mobile Number">
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="niceselect">
                                            <option value="1">
                                                Select Your Operator
                                            </option>
                                            <option value="2">
                                                1st Operator
                                            </option>
                                            <option value="3">
                                                2nd Operator
                                            </option>
                                            <option value="4">
                                                3rd Operator
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="niceselect">
                                            <option value="1">
                                                Select offers
                                            </option>
                                            <option value="2">
                                                1st Offers
                                            </option>
                                            <option value="3">
                                                2nd Offers
                                            </option>
                                            <option value="4">
                                                3rd Offers
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" placeholder="Enter Amount">
                                    </div>
                                </div>

                            </form>
                            <div class="text-center ">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-save"></i> Save
                                </button>
                                <a href="javascript:;" class="btn btn-light btn-sm ms-2">
                                    <i class="fas fa-times-circle"></i> Cancel
                                </a>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><br>
    @include('includes.footer')
@endsection
@section('inline')
@endsection
