<!--begin::Form-->
<form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="post" id="dt_modal_form"
    enctype="multipart/form-data">
    @csrf
    <!--begin::Modal header-->
    <div class="modal-header custom-modal-header" id="kt_modal_add_customer_header">
        <!--begin::Modal title-->
        <div class="d-flex flex-shrink-0 p-1">
            <p class="main-modal-title"><span class="svg-icon svg-icon-2 me-2"><i class="far fa-edit fs-2"></span></i><span class="text-uppercase fs-3">{{ __('businessprofile::modal.edit-title') }}</span></p>
        </div>
        <!--end::Modal title-->
        <!--begin::Actions buttons-->
        <div class="d-flex justify-content-end flex-shrink-0 p-1">
            <a id="dt_modal_fullscreen" href="javascript:;" class="btn btn-icon btn-active-color-primary btn-sm me-1">
                <span class="svg-icon svg-icon-3">
                    <i id="fullscreen-icon" class="fas fa-expand" style="font-size: 20px;"></i>
                </span>
            </a>
            <a id="dt_modal_close" href="javascript:;" class="btn btn-icon btn-active-color-danger btn-sm">
                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                <span class="svg-icon svg-icon-1">
                    <i class="far fa-times" style="font-size: 20px;"></i>
                </span>
                <!--end::Svg Icon-->
            </a>
        </div>
        <!--begin::Actions buttons-->
    </div>
    <!--end::Modal header-->
    <!--begin::Modal body-->
    <div class="modal-body py-10 ajax-modal-body">
        <!--begin::Scroll-->
        <div class="scroll-y me-n7 pe-7 ajax-modal-scroll" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_modal_add_customer_header"
            data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
            <div id="errors-alert-wrapper" class="alert-wrapper d-none">
                <div class="alert alert-dismissible alert-danger d-flex align-items-center p-5 mb-10">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                fill="black"></path>
                            <path
                                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <h4 class="mb-1 text-danger">{{ __('businessprofile::modal.form.errors') }}</h4>
                        <ul id="error-messages-list">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="group-container mb-5">
         
               
                <div class="row">

                <h3 class="form-section-title fw-lighter">{{ __('businessprofile::modal.form.profile-section') }}</h3>

                
                <div class="col-md-12">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.select provider-label') }}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select" name="provider_id">
                            @foreach ($providers as $provider)
                        <option value="{{$provider->id}}" @if($profile->provider_id==$provider->id) selected @endif>{{$provider->name}}</option>                                
                            @endforeach
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                </div>

                <div class="col-md-12">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.select service-label') }}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select" name="service_id">
                            @foreach ($services as $service)
                        <option @if($service->id == $profile->service_id) selected @endif value="{{$service->id}}">{{$service->name}}</option>                                
                            @endforeach
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                </div>


                <div class="col-md-12">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.title business profile-label') }}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control custom-form-control" placeholder="" name="title" value="{{$profile->title}}">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                </div>


                    <div class="col-md-12">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.about-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control custom-form-control" placeholder="" name="about" style="height: 120px;">{{$profile->about}}</textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>

                    <div class="col-md-12">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.price-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                        <input type="number" class="form-control custom-form-control" placeholder="" name="price" value="{{$profile->price}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                    <div class="col-md-6">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.video_url-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="video_url"  value="{{$profile->video_url}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                    <div class="col-md-6">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.map_link-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="map_link"  value="{{$profile->map_link}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                    <div class="col-md-6">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.mail-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="mail"  value="{{$profile->mail}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>

                    <div class="col-md-6">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.web_link-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="web_link"  value="{{$profile->web_link}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                    <div class="col-md-6">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.phone-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" class="form-control custom-form-control" placeholder="" name="phone" min="11" max="11"  value="{{$profile->phone}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                    <div class="col-md-12">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label required fs-6 mb-2">{{ __('businessprofile::modal.form.gallary.photos') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_2">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">{{ __('businessprofile::modal.form.gallary.drop photos here') }}</h3>
                                </div>
                                
                            @foreach ($profile->gallary as $photo)
                            <input type="hidden" data-gallay_name="{{$photo->photo_name}}" value="{{$photo->photo_name}}" name="photos[]">
    
                            @endforeach
                            </div>

                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                </div>
                    

                <div class="row">
                    <h3 class="form-section-title fw-lighter">{{ __('businessprofile::modal.form.social_media_links-section') }}</h3>

                    <div class="col-md-4">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.facebook-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="facebook"  value="{{$profile->facebook}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>

                    <div class="col-md-4">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.twitter-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="twitter" value="{{$profile->twitter}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    
                    
                    <div class="col-md-4">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.behance-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="behance" value="{{$profile->behance}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>

                    <div class="col-md-4">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.youtube-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="youtube" value="{{$profile->youtube}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                    <div class="col-md-4">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.insta-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control custom-form-control" placeholder="" name="insta" value="{{$profile->insta}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>


                    <div class="col-md-4">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label fs-6 mb-2">{{ __('businessprofile::modal.form.whatsapp-label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" class="form-control custom-form-control" placeholder="" name="whatsapp" max="11" min="11" value="{{$profile->whatsapp}}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>

                </div>

            </div>

     
        </div>
        <!--end::Scroll-->
    </div>
    <!--end::Modal body-->
    <!--begin::Modal footer-->
    <div class="modal-footer flex-center">
        <!--begin::Button-->
        <button type="reset" id="dt_modal_cancel" class="btn btn-white me-3">{{ __('businessprofile::modal.form.cancel') }}</button>
        <!--end::Button-->
        <!--begin::Button-->
        <!-- Prevent implicit submission of the form -->
        <button type="submit" disabled style="display: none" aria-hidden="true"></button>
        <button type="submit" id="dt_modal_submit" class="btn btn-primary">
            <span class="indicator-label">{{ __('businessprofile::modal.form.submit') }}</span>
            <span class="indicator-progress">{{ __('businessprofile::modal.form.loading_submit') }}...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Button-->
    </div>
    <!--end::Modal footer-->
    <div></div>
</form>
<!--end::Form-->

<!-- messages -->
@javascript($ajax_params)



<script>


    // multiple file upload
    $('#kt_dropzone_2').dropzone({
       url: "{{route('gallary.upload_photos')}}", // Set the url for your upload script location
       paramName: "photos", // The name that will be used to transfer the file
       maxFilesize: 10, // MB
       acceptedFiles: 'image/*',
    
    
    
       renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        var photoname = time+file.name;
       return time+file.name;
       },
       addRemoveLinks: true,
       params:{
           "_token": "{{ csrf_token() }}",
       },
       accept: function(file, done) {
       done();
       },
       success:function(response){
           console.log(response);
           var array = [response];
           array.forEach(res => {
               $('#kt_dropzone_2').append(' <input type="hidden" name="photos[]" value="'+res.upload.filename+'" > ');
           });
       },
       removedfile: function(file) 
       {
           
        
            var name = file.name;
           $.ajax({
    
               type: 'delete',
               url: '{{ route("gallary.delete_photos") }}',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {filename: name},
               success: function (data){

                   console.log(name);
                  $('input[name="photos"][value="'+name+'"]').remove();
               },
               error: function(e) {
                   console.log(e);
               }
           });
    
               
               var fileRef;
               return (fileRef = file.previewElement) != null ? fileRef.parentNode.removeChild(file.previewElement) : void 0;
       },
    
    
       init:function() {
    
    // Get images
    var myDropzone = this;
    $.ajax({
        url: "{{route('gallary.get_photos')}}", // Set the url for your upload script location
        type: 'GET',
        data: {profile_id:"{{$profile->id}}"},
        success: function(data){
        //console.log(data);
        $.each(data, function (key, value) {
    
            var file = {name: value.name, size: value.size};
            myDropzone.options.addedfile.call(myDropzone, file);
            myDropzone.options.thumbnail.call(myDropzone, file, value.path);
            myDropzone.emit("complete", file);
        });
        }
    });
    },
    
    });
    
    
    </script>