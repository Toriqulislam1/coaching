@extends('frontend.layout.front-layout')
@push('css')
@endpush
@section('content')
<!--Start Contact Form-->
<section class="contact-page pad-tb bg-gradient5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="niwax23form shadow">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="common-heading text-l">
                                <h4 class="mt0 mb0"> payment name: {{ $nagadData->payment_name  }} </h4>
                                <p class="mb50 mt10">nato: {{ $nagadData->note   }} </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="common-heading text-l">
                                <h4 class="mt0 mb0">transaction number:{{ $nagadData->transaction_id   }} </h4>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-card-pr contact-block-sw m0 iconin">
                        <div class="form-block niwaxform">
                            <form action="{{route('nagad-payment-success')}}" id="contactform" method="post">
                                @csrf
                                <input type="hidden" name="order_id" value="{{$orderId}}">
                                <div class="fieldsets row">
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-user"></i></div>
                                        <input type="text" placeholder=" " required="required" id="name" class="floating-input" name="transtionId">
                                        <label>Transtion Number*</label>
                                        <div class="error-label"></div>
                                    </div>
                                </div>

                                {{-- <div class="custom-control custom-checkbox ctmsetsw">--}}
                                {{-- <input type="checkbox" class="custom-control-input ctminpt" id="agree" name="agree" checked="checked">--}}
                                {{-- <label class="custom-control-label ctmlabl" for="agree">By clicking the “Submit” button you agree to our  <a href="javascript:void(0)">Terms &amp; Conditions</a>.</label>--}}
                                {{-- </div>--}}
                                <div class="fieldsets mt20"> <button type="submit" name="submit" class="btn btn-main bg-btn w-fit mb20"><span>Submit <i class="fas fa-chevron-right fa-icon"></i></span> <span class="loader"></span></button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Form-->

@endsection
@push('js')
@endpush

