
    <x-nav-of-creates>
    <form action="/blog/createupdate" method="POST">
        @csrf
        <!-----begin second header------->
        <div class="col-lg-12  pt-3 d-flex justify-content-end align-items-center">
            <a class="navbar-brand font-size-h5 text-dark" href="#item-1">Save As Draft</a>
            <button type="button" class="btn btn-outline-primary font-size-h5">Preview</button>
            <div>
                <div class="col-lg-12 col-md-12">
                    <div class="input-group date border border-primary rounded">
                        <input type="text" class="form-control" readonly="readonly" placeholder="Schedule"
                            id="kt_datepicker_3" style="background-color: #fff !important;" />
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #fff !important;">
                                <i class="la la-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary font-size-h5" name="create">Publish Now</button>
        </div>
        <!-----end second header--------->
        <!------------begin::Content------------->
        <div class="content d-flex flex-column flex-column-fluid" style="padding: 20px 0 0 0 !important;"
            id="kt_content">
            <!--begin::Container-->
            <div class="container-fluid mt-3">
                <!--begin::Dashboard-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-xl-9 px-3">
                        <label class="font-size-h2 font-weight-bolder text-dark ml-1">
                            Create a Blog Post
                        </label>
                        <input type="text"
                            class="form-control h-auto bg-light mb-2 py-7 px-6 border-0 rounded-lg font-size-h6"
                            name="title" placeholder="Title" value="@if(isset($post)){{$post->title ? $post->title : ''}}@endif"/>
                        <input type="text"
                            class="form-control h-auto bg-light py-3 px-6 mb-3 border-0 rounded-lg font-size-h6"
                            name="slug" placeholder="Slug"/>
                        <input type="text"
                            class="form-control h-auto bg-light py-3 px-6 mb-3 border-0 rounded-lg font-size-h6"
                            name="excerpt" placeholder="Excerpt" value="@if(isset($post)){{$post->excerpt ? $post->excerpt : ''}}@endif"/>
                        <textarea name="content" class="editor" id="editor">@if(isset($post)){{$post->content ? $post->content : ''}}@endif</textarea>
                    </div>
                    <div class="col-xl-3">
                        <h3 class="mx-auto">Featured Image</h3>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="dropzone dropzone-default dropzone-primary"
                                        id="kt_dropzone_2">
                                        <div class="dropzone-msg dz-message needsclick">
                                            
                                                <input type="file" class="form-control form-control-lg" id="formFileLg" name="file"/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 mx-auto">
                            <button type="reset" class="btn btn-primary">Cancel</button>
                            </div>
                        </div>
                        <div class="accordion bg-white" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button font-size-h3" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Meta Data
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!--begin::Form Group-->
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control h-auto bg-white border border-dark mb-2 py-3 px-6 rounded-md font-size-h6"
                                                name="meta_title" placeholder="Title" value="@if(isset($post)){{$post->meta_title ? $post->meta_title : ''}}@endif"/>
                                            <input type="text"
                                                class="form-control h-auto bg-white border border-dark py-3 px-6  rounded-md font-size-h6"
                                                name="meta_description" placeholder="Description" value="@if(isset($post)){{$post->meta_description ? $post->meta_description : ''}}@endif"/>
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed font-size-h3" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Categories
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <select class="form-control selectpicker"
                                                        id="select-country" data-live-search="true" name="category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed font-size-h3" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Tags
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!------begin Tags------>
                                        <div class="mb-7">
                                            <div class="mb-3">
                                                <h3>Tags</h3>
                                                <select name="tags[]" multiple>
                                                 @foreach($tags as $tag)
                                                   <option class="btn btn-xs btn-secondary" value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!------end Tags-------->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Base Table Widget 5-->
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->

        </div>
        <!--end::Content-->
    </form>
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->

    <script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('metronic_assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('metronic_assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('metronic_assets/js/scripts.bundle.js?v=7.0.5') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('metronic_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic_assets/js/pages/widgets.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('metronic_assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.5') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic_assets/js/pages/crud/forms/editors/ckeditor-classic.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic_assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.5') }}"></script>
    <!--end::Page Scripts-->

    <script>
        function tinymce_image_uploader (blobInfo, success, failure, progress) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'upload_image');
            var token = '{{ csrf_token() }}';
            xhr.setRequestHeader("X-CSRF-Token", token);

            xhr.upload.onprogress = function (e) {
                progress(e.loaded / e.total * 100);
            };

            xhr.onload = function() {
                var json;

                if (xhr.status === 403) {
                failure('HTTP Error: ' + xhr.status, { remove: true });
                return;
                }

                if (xhr.status < 200 || xhr.status >= 300) {
                failure('HTTP Error: ' + xhr.status);
                return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
                }

                success(json.location);
            };

            xhr.onerror = function () {
                failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        };
        // TinyMCE - WYSIWYG
        tinymce.init({
            selector: '.editor',
            min_height: 500,
            plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
            menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css',
            statusbar: false,
            images_upload_url: "upload_image",
            images_upload_handler: tinymce_image_uploader,
        });
    </script>
</x-nav-of-creates>
</body>
<!--end::Body-->

</html>