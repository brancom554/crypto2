@extends('include.userdashboard')
@section('content')
 <!-- .topbar-wrap --><div class="page-content"><div class="container"><div class="row"><div class="main-content col-lg-12"><div class="page-header page-header-kyc"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">Account Verification</h2><p class="large">Identity verification makes you eligible for coin purchase, promos and offers</p></div></div></div><!-- .container --></div><!-- .page-header -->


@if(Auth::user()->verified == 1)
<div class="col-lg-12"><div class="kyc-status card mx-lg-4"><div class="fcard-innr"><div class="status status-thank px-md-5"><div class="status-icon"><em class="ti ti-info"></em></div><span class="status-text large text-dark">Verification Pendimg</span><p class="px-md-5">We are still processing your identity verification. Once our team verified your indentity, you will be notified by email. You can also check your verification compliance status from this page.</p><a href="#"  data-toggle="modal" data-target="#pay-online"  class="btn btn-primary">View Upload</a></div></div></div></div>

@elseif(Auth::user()->verified == 2)


<div class="col-lg-12"><div class="kyc-status card mx-lg-4"><div class="fcard-innr"><div class="status status-thank px-md-5"><div class="status-icon"><em class="ti ti-check"></em></div><span class="status-text large text-dark">You have completed the process of verification</span><p class="px-md-5">Your account verification process has been completed and your account has been verified. Thank you for choosing {{$basic->sitename}}.</p><a href="#"  data-toggle="modal" data-target="#pay-online"  class="btn btn-primary">View Upload</a></div></div></div></div>

@else



 <div class="kyc-form-steps card mx-lg-d4">



 <div class="form-step form-step2"><div class="form-step-head card-innr"><div class="step-head"><div class="step-number">01</div><div class="step-head-text"><h4>Document Upload</h4><p>To verify your identity, please upload any of your document</p></div></div></div><!-- .step-head --><div class="form-step-fields card-innr"><div class="note note-plane note-light-alt note-md pdb-0-5x"><em class="fas fa-info-circle"></em><p>In order to complete, please upload any of the following personal document.</p></div><div class="gaps-2x"></div><ul class="nav nav-tabs nav-tabs-bordered row flex-wrap guttar-20px" role="tablist"><li class="nav-item flex-grow-0"><a class="nav-link d-flex align-items-center active" data-toggle="tab" href="#passport"><div class="nav-tabs-icon"><img src="{{asset('dash-assets/images/icon-passport.png')}}" alt="icon"><img src="{{asset('dash-assets/images/icon-passport-color.png')}}" alt="icon"></div><span>Passport</span></a></li><li class="nav-item flex-grow-0"><a class="nav-link d-flex align-items-center active" data-toggle="tab" href="#national-card"><div class="nav-tabs-icon"><img src="{{asset('dash-assets/images/icon-national-id.png')}}" alt="icon"><img src="{{asset('dash-assets/images/icon-national-id-color.png')}}" alt="icon"></div><span>National Card</span></a></li><li class="nav-item flex-grow-0"><a class="nav-link d-flex align-items-center active" data-toggle="tab" href="#driver-licence"><div class="nav-tabs-icon"><img src="{{asset('dash-assets/images/icon-licence.png')}}" alt="icon"><img src="{{asset('dash-assets/images/icon-licence-color.png')}}" alt="icon"></div><span>Drivers License</span></a></li></ul><!-- .nav-tabs-line --><div class="tab-content" id="myTabContent">



 <!-- .tab-pane --><div class="tab-pane fade show active" id="national-card"><h5 class="text-secondary font-bold">To avoid delays when verifying account, Please make sure below:</h5><ul class="list-check"><li>Chosen credential must not be expaired.</li><li>Document should be good condition and clearly visible.</li><li>Make sure that there is no light glare on the card.</li></ul><div class="gaps-2x"></div><h5 class="font-mid">Upload The Front View Of Document</h5><div class="row align-items-center"><div class="col-sm-8">

<form role="form" method="POST" action="{{ route('document.upload') }}" enctype="multipart/form-data">
{{ csrf_field() }}


<div class="input-item input-with-label"><label class="input-item-label">File Upload</label><div class="relative"><em class="input-file-icon fas fa-upload"></em><input type="file"  name="photo"  class="input-file" id="file-01"><label for="file-01">Choose a file</label></div></div>




 </div><div class="col-sm-4 d-none d-sm-block"><div class="mx-md-4"><img src="{{asset('dash-assets/images/vector-id-front.png')}}" width="100" alt="vector"></div></div></div><div class="gaps-3x"></div><h5 class="font-mid">Upload Here A Picture Of You Holding The Document</h5><div class="row align-items-center"><div class="col-sm-8">



<div class="input-item input-with-label"><label class="input-item-label">File Upload</label><div class="relative"><em class="input-file-icon fas fa-upload"></em><input type="file"  name="photo2"  class="input-file" id="file-02"><label for="file-02">Choose a file</label></div></div>




 </div><div class="col-sm-4 d-none d-sm-block"><div class="mx-md-4"><img src="{{asset('dash-assets/images/vector-id-back.png')}}" width="100" alt="vector"></div></div></div></div>

 </div><!-- .tab-content --></div><!-- .step-fields --></div><div class="form-step form-step3"><div class="form-step-head card-innr"><div class="step-head"><div class="step-number">02</div><div class="step-head-text"><h4>ID Details</h4><p>Select the ID type, enter the ID number and expiry date on your identification document</p></div></div></div><!-- .step-head --><div class="form-step-fields card-innr"><div class="row">

 <div class="col-md-12">


 <div class="input-item input-with-label"><label for="swalllet" class="input-item-label">Document Type </label>
 <select class="select-bordered select-block" required name="type" >
 <option selected>Choose...</option>
 <option value="Driver's Licence">Driver's Licence</option>
 <option value="International Passport">International Passport</option>
 <option value="National ID Card">National ID Card</option>
 <option value="Voters' Card">Voters' Card</option>
</select>
 </div><!-- .input-item -->

  <div class="input-item input-with-label"><label for="swalllet" class="input-item-label">ID Number </label>
 <input class="input-bordered" type="text" id="token-address" name="number" >
<span class="input-note">Note: Ensure you enter a complete ID Number.</span>
 </div><!-- .input-item -->



 </div><!-- .col --></div>





 <!-- .row --><div class="input-item input-with-label"><label for="token-address" class="input-item-label">ID Expiry Date:</label><input class="input-bordered date-picker-dob" type="text" id="date-of-birth" name="date" ></div><!-- .input-item --></div><!-- .step-fields --></div><div class="form-step form-step-final"><div class="form-step-fields card-innr"><div class="input-item"><input class="input-checkbox input-checkbox-md" required id="term-condition" type="checkbox"><label for="term-condition">I have read the <a href="#">Terms of Condition</a> and <a href="#">Privary Policy.</a></label></div><div class="input-item"><input class="input-checkbox input-checkbox-md" id="info-currect" required type="checkbox"><label for="info-currect">All the personal information I have entered is correct.</label></div><div class="gaps-1x"></div><button type="submit" class="btn btn-primary">Submit Document</button></form></div><!-- .step-fields --></div></div><!-- .card --></div></div></div><!-- .container --></div><!-- .page-content -->


 </div><!-- .col -->
 @endif




 </div><!-- .container --></div><!-- .container --></div><!-- .page-content -->



@if(Auth::user()->verified != 0)
 <!-- .modal-dialog --></div><!-- Modal End --><div class="modal fade" id="pay-online" tabindex="-1"><div class="modal-dialog modal-dialog-md modal-dialog-centered"><div class="modal-content pb-0"><div class="popup-body"><h4 class="popup-title">Account Verification Documents</h4>

 <p>You Have Successfully Uploaded Documents For Your Verification Process</p><h5 class="mgt-1-5x font-mid">Your Uploaded Documments:</h5>

 <ul class="pay-list guttar-20px">

 <li class="pay-item"><input type="radio" class="pay-check" name="pay-option" id="pay-coin"><label class="pay-check-label" for="pay-coin"><img src="{{ asset('kyc') }}/{{$docs->image1}}" alt="pay-logo"></label></li>

 <li class="pay-item"><input type="radio" class="pay-check" name="pay-option" id="pay-coinpay"><label class="pay-check-label" for="pay-coinpay"><img src="{{ asset('kyc') }}/{{$docs->image2}}" alt="pay-logo"></label></li>

 </ul>


 <ul class="d-flex flex-wrap align-items-center guttar-30px"><li class="pdt-1x pdb-1x"><a href="#"   class="link link-primary">* Document Type: {{$docs->type}}</a></li>

<li class="pdt-1x pdb-1x"><a href="#"  class="link link-primary">* Document Number: {{$docs->number}}</a></li>

<li class="pdt-1x pdb-1x"><a href="#"   class="link link-primary">* Expiry Date: {{$docs->date}}</a></li>



 </ul>




 <ul class="d-flex flex-wrap align-items-center guttar-30px"><li class="pdt-1x pdb-1x"><button data-dismiss="modal" data-toggle="modal" data-target="#get-pay-address" class="btn btn-primary btn-sm">Close Page</button></li></ul><div class="gaps-2x"></div><div class="gaps-1x d-none d-sm-block"></div><div class="note note-plane note-light mgb-1x"> </div></div></div><!-- .modal-content --></div><!-- .modal-dialog --></div><!-- Modal End -->
 @endif
@stop
