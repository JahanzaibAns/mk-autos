@extends('admin.layouts.master')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/dropzone/css/main.css') }}">

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        .tabsBox {
            padding: 20px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            position: unset !important;
            border-right: unset !important
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover,
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:focus {
            background-color: #7366ff;
            color: #fff;
        }

        /* update work 8 */
        .select-dropdown,
        .select-dropdown * {
            position: relative;
        }

        .select-dropdown {
            position: relative;
            color: grey;
        }

        .select-dropdown select {
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            color: grey;
        }

        .select-dropdown select:active,
        .select-dropdown select:focus {
            outline: none;
            box-shadow: none;
            color: grey;
        }

        .select-dropdown:after {
            content: "";
            position: absolute;
            top: 50%;
            right: 8px;
            width: 0;
            height: 0;
            margin-top: -2px;
            border-top: 5px solid #aaa;
            border-right: 5px solid transparent;
            border-left: 5px solid transparent;
        }

        #dropzone {
            background: white;
            border-radius: 5px;
            border: 2px dashed rgb(0, 135, 247);
            border-image: none;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .car_pricing {
            margin: 10px 0px;
        }

        .car_pricing h5 {
            font-size: 21px;
            font-weight: 400;
        }

        .button-group-pills .btn {
            border-radius: 20px;
            line-height: 1.2;
            margin-bottom: 15px;
            margin-left: 10px;
            border-color: #bbbbbb;
            background-color: #fff;
            color: #14a4be;
        }

        .button-group-pills .btn.active {
            border-color: #14a4be;
            background-color: #14a4be;
            color: #fff;
            box-shadow: none;
        }

        .button-group-pills .btn:hover {
            border-color: #158b9f;
            background-color: #158b9f;
            color: #fff;
        }

        .button-group-pills input[type="checkbox"] {
            display: none;
        }

        .custom_btn {
            color: #343A40;
            background-color: #fff;
            border-color: #343A40;
        }

        .custom_btn:checked {
            color: #fff !important;
            background-color: #343A40 !important;
            border-color: #343A40 !important;
        }

        .custom_btn:hover {
            color: #fff !important;
            background-color: #343A40 !important;
            border-color: #343A40 !important;
        }

        .specs_list {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .specs_heading {
            width: 150px;
            margin-bottom: 20px;
        }

        .car_add_form {
            align-items: center;
        }

        .car_add_form label {
            margin-bottom: 0px;
        }

        .car_add_form select {
            margin-bottom: 20px;
        }

        .car_image img {
            margin: 30px auto;
            display: block;
            max-width: 300px;
        }

        .form-heading {
            margin-bottom: 40px;
        }

        table {
            width: 100%;
        }

        td {
            margin: 10px auto !important;
            padding: 10px;
        }

        .multiple-uploader input[type="file"] {
            display: none;
        }
        
        .existing-image-container {
            position: relative;
            display: inline-block;
            margin: 10px;
        }
        
        .delete-image-btn {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            cursor: pointer;
            font-size: 14px;
            z-index: 10;
        }
        
        .existing-image {
            cursor: pointer;
            transition: opacity 0.3s;
        }
        
        .existing-image:hover {
            opacity: 0.8;
        }
        
        .image-to-delete {
            opacity: 0.5;
            border: 2px solid #dc3545;
        }
        
        #cropperOverlay {
            position: fixed !important;
            z-index: 2147483647 !important; /* Maximum possible value */
            background: rgba(0,0,0,0.85) !important;
            display: none; 
            inset: 0;
            align-items: center;
            justify-content: center;
        }

        #cropperPopup {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 90%;
            width: 600px;
        }

        .img-container {
            max-height: 400px;
            overflow: hidden;
        }

        #cropperImage {
            max-width: 100%;
        }
        
        .page-wrapper .page-header .header-wrapper {
            z-index: 9;
        }
    </style>
    <div class="container-fluid">
        <div>
            <a class="btn btn-success mb-3" href="{{ route('admin.cars.index') }}"
                 data-bs-original-title="" title="">Back</a>
         </div>
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card tabsBox" id="tabs_id">
                   <form id="my-form" action="{{ route('admin.car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <!-- Hidden inputs for deleted images -->
                        <input type="hidden" name="deleted_images" id="deleted_images" value="">
                        <input type="hidden" name="deleted_feature_image" id="deleted_feature_image" value="0">

                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-heading">
                                    <h5>Edit Car</h5>
                                </div>
                                <div class="row car_add_form">
                                    {!! \App\Helpers\DropDownHelper::brandModelDropdown($car->model->brand_id ?? null, $car->model_id) !!}
                                    {!! \App\Helpers\DropDownHelper::categoryDropdown($car->category_id) !!}
                                    
                                    <div class="col-md-4 col-12">
                                        <label for="version">Body Type</label>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        {!! \App\Helpers\DropDownHelper::bodyTypeDropdown($car->body_type_id) !!}
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="make_year">Make (Year)</label>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        {!! \App\Helpers\DropDownHelper::makeYearDropdown($car->make_year_id) !!}
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="location">Car Pickup Location</label>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <input value="{{ $car->car_location }}" class="form-control" type="text" name="car_location">
                                    </div>

                                    <div class="col-md-4 col-12 mt-3">
                                        <label for="engine_size">Car Engine Size</label>
                                    </div>
                                    <div class="col-md-8 col-12 mt-3">
                                        <input value="{{ $car->car_engine_size }}" class="form-control" type="text" name="car_engine_size">
                                    </div>

                                    <h3 class="my-3">Availibility</h3>
                                    <div class="row">
                                        <div class="col-md-4 car_pricing">
                                            <h6>Start Date</h6>
                                        </div>
                                        <div class="col-md-8 car_pricing">
                                            <input class="form-control" type="date" name="start_date" value="{{ $car->start_date }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 car_pricing mt-3">
                                            <h6>End Date</h6>
                                        </div>
                                        <div class="col-md-8 car_pricing">
                                            <input class="form-control" type="date" name="end_date" value="{{ $car->end_date }}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="car_image">
                                            <input type="checkbox" name="is_featured" id="is_featured" value="Featured"
                                            @if($car->is_featured == 1) checked @endif>
                                            <label for="is_featured" class="fw-bold">Is Featured</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- RIGHT SIDE PRICING --}}
                            <div class="col-lg-6 col-md-12">
                                <div class="row car_add_form">
                                    <div class="mb-3"><h5>Pricing</h5></div>

                                    <div class="col-md-4 car_pricing"><h6>Minimum Day Booking</h6></div>
                                    <div class="col-md-8 car_pricing">
                                        <select name="min_days_booking" class="form-select">
                                            @foreach ([1,2,3,4] as $val)
                                            <option value="{{ $val }}" @if($car->min_days_booking == $val) selected @endif>{{ $val }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @php
                                        $prices = $car->prices->keyBy('type');
                                    @endphp

                                    <div class="col-md-4 car_pricing"><h6>Price Per Day</h6></div>
                                    <div class="col-md-8 car_pricing">
                                        <input type="hidden" name="prices[0][type]" value="daily">
                                        <input class="form-control" type="number" name="prices[0][price]"
                                            value="{{ $prices['daily']->price ?? '' }}">
                                    </div>

                                    <div class="col-md-4 car_pricing"><h6>Price Per Week</h6></div>
                                    <div class="col-md-8 car_pricing">
                                        <input type="hidden" name="prices[1][type]" value="weekly">
                                        <input class="form-control" type="number" name="prices[1][price]"
                                            value="{{ $prices['weekly']->price ?? '' }}">
                                    </div>

                                    <div class="col-md-4 car_pricing"><h6>Price Per Month</h6></div>
                                    <div class="col-md-8 car_pricing">
                                        <input type="hidden" name="prices[2][type]" value="monthly">
                                        <input class="form-control" type="number" name="prices[2][price]"
                                            value="{{ $prices['monthly']->price ?? '' }}">
                                    </div>
                                </div>
                            </div>

                            {{-- FEATURES --}}
                            <div class="col-lg-12 col-md-12 mt-4">
                                <div class="form-heading"><h5>Car Specs</h5></div>
                                {!! \App\Helpers\RadioBoxHelper::featureCheckBoxes($car->features->pluck('id')->toArray()) !!}
                            </div>

                            <div class="col-lg-6 col-md-12">
                                {!! \App\Helpers\RadioBoxHelper::doorRadios($car->door_id) !!}
                                {!! \App\Helpers\RadioBoxHelper::seatRadios($car->seat_id) !!}
                                {!! \App\Helpers\RadioBoxHelper::bagRadios($car->bag_id) !!}
                                {!! \App\Helpers\RadioBoxHelper::specRadios($car->spec_id) !!}
                                {!! \App\Helpers\RadioBoxHelper::transmissionRadios($car->transmission_id) !!}
                                {!! \App\Helpers\RadioBoxHelper::fuelTypeRadios($car->fuel_type_id) !!}
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="row car_add_form">
                                    <div class="mb-3"><h5>Rental Terms</h5></div>

                                    <div class="col-md-4 car_pricing"><h6>Security Deposit</h6></div>
                                    <div class="col-md-8 car_pricing">
                                        <input class="form-control" type="number" name="security_deposit" value="{{ $car->security_deposit }}">
                                    </div>

                                    <div class="col-md-4 car_pricing"><h6>Delivery & Pick up Charges</h6></div>
                                    <div class="col-md-4 car_pricing">
                                        <select name="delivery_days" class="form-select mb-0">
                                            @foreach (['Free Always', 'Free (2 days+)', 'Free (10 days+)', 'Free (15 days+)', 'Free (30 days+)'] as $val)
                                            <option value="{{ $val }}" @if($car->delivery_days == $val) selected @endif>{{ $val }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 car_pricing">
                                        <input type="number" name="delivery_charges" class="form-control" value="{{ $car->delivery_charges }}">
                                    </div>
                                </div>
                            </div>

                            {{-- EXISTING FEATURE IMAGE WITH DELETE OPTION --}}
                            <div class="col-12 mt-4">
                                <label for="feature_image" class="form-label">Preview Image (Click to Re-crop)</label>
                                <input type="file" name="feature_image" id="feature_image" class="form-control" accept="image/*">
                                <div id="imagePreview" class="mt-2">
                                    @if($car->feature_image)
                                        <div class="existing-image-container">
                                            <button type="button" class="delete-image-btn" data-type="feature" onclick="deleteFeatureImage()">×</button>
                                            <img id="existing-feature-image" src="{{ asset('public/storage/car_images/' . $car->feature_image) }}" 
                                                 class="existing-image img-thumbnail" width="150" 
                                                 data-src="{{ asset('public/storage/car_images/' . $car->feature_image) }}"
                                                 onclick="reCropFeatureImage(this)">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- MULTI IMAGES --}}
                            <div class="col-12 mt-4">
                                <label class="form-label">Gallery Images</label>
                                <div class="multiple-uploader" id="multiple-uploader">
                                    <div class="mup-msg">
                                        <span class="mup-main-msg">click to upload new images.</span>
                                        <span class="mup-msg" id="max-upload-number">Upload up to 10 new images</span>
                                        <span class="mup-msg">Only images are allowed for upload</span>
                                    </div>
                                    <input type="file" name="temporary_unused_images[]" multiple accept="image/*">
                                </div>
                                
                                <h6 class="mt-4">Existing Gallery Images (Click to Re-crop or click × to delete)</h6>
                                <div class="row mt-2" id="existing-images-container">
                                    @foreach($car->images as $img)
                                        <div class="col-md-2 mb-3 existing-image-container">
                                            <button type="button" class="delete-image-btn" data-image-id="{{ $img->id }}">×</button>
                                            <img src="{{ asset('public/storage/car_images/' . $img->image) }}" 
                                                 class="existing-image img-thumbnail" 
                                                 data-image-id="{{ $img->id }}"
                                                 data-src="{{ asset('public/storage/car_images/' . $img->image) }}"
                                                 onclick="reCropGalleryImage(this)">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- COLORS + DESCRIPTION --}}
                            <div class="col-12 mt-5">
                                {!! \App\Helpers\RadioBoxHelper::exteriorColorRadios($car->exterior_color) !!}
                                {!! \App\Helpers\RadioBoxHelper::interiorColorRadios($car->interior_color) !!}
                            </div>

                            <div class="col-12 mt-3">
                                <div class="specs_heading"><h6>Car Description:</h6></div>
                                <textarea class="w-100 form-control editor" name="description" rows="6">{{ $car->description }}</textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="button" id="car_update_submit" class="btn btn-primary">Update Car</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    {{-- CROPPER OVERLAY --}}
    <div id="cropperOverlay">
        <div id="cropperPopup">
            <div class="img-container">
                <img id="cropperImage" src="">
            </div>
            <div style="margin-top: 15px; text-align: right;">
                <button id="cropCancel" class="btn btn-secondary">Skip</button>
                <button id="cropSave" class="btn btn-primary">Save & Next</button>
            </div>
        </div>
    </div>

    <!-- {{-- script start --}} -->
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/admin/dropzone/js/multiple-uploader.js') }}"></script>
    <script src="{{ asset('assets/admin/dropzone/js/util.js') }}"></script>
    
    <script>
        // Global variables for cropper
        // Global variables for cropper
        window.imageQueue = [];
        window.processedImageUrls = new Set();
        window.cropper = null;
        window.fileStore = new Map();
        window.currentCropType = null;
        window.croppedFilesDT = new DataTransfer();
        window.featureImageDT = new DataTransfer();
        window.isProcessing = false;
        window.deletedImageIds = [];
        window.isFeatureImageDeleted = false;
        window.reCropMode = false;
        window.reCropElement = null;
        // Create hidden input for cropped images
        let croppedInput = document.createElement('input');
        croppedInput.type = 'file';
        croppedInput.name = 'images[]';
        croppedInput.multiple = true;
        croppedInput.style.display = 'none';
        document.getElementById('my-form').appendChild(croppedInput);
        
        // Create hidden input for re-cropped existing images
        let recroppedInput = document.createElement('input');
        recroppedInput.type = 'file';
        recroppedInput.name = 'recropped_images[]';
        recroppedInput.multiple = true;
        recroppedInput.style.display = 'none';
        document.getElementById('my-form').appendChild(recroppedInput);
        window.recroppedFilesDT = new DataTransfer();
        
        
        
        // Add this BEFORE $(document).ready(function() {
        window.processQueue = function () {
            const overlay = document.getElementById('cropperOverlay');
            const imgElement = document.getElementById('cropperImage');
            const saveBtn = document.getElementById('cropSave');
            
            if (!overlay || !imgElement) {
                console.error('Cropper elements not found');
                return;
            }
            
            if (imageQueue.length === 0) {
                isProcessing = false;
                window.reCropMode = false;
                window.reCropElement = null;
                console.log('Queue empty, hiding overlay');
                $(overlay).fadeOut();
                return;
            }
            
            isProcessing = true;
            const current = imageQueue[0];
            
            console.log('Opening cropper for:', current.src.substring(0, 50));
            
            overlay.style.display = 'flex';
            $(overlay).hide().fadeIn(400);
            
            imgElement.src = current.src;
            
            // Destroy previous cropper if exists
            if (window.cropper) {
                window.cropper.destroy();
                window.cropper = null;
            }
            
            imgElement.onload = function() {
                console.log('Image loaded, creating cropper');
                
                // Assign to window.cropper, not local cropper
                window.cropper = new Cropper(imgElement, {
                    aspectRatio: 427 / 250,
                    viewMode: 1,
                    autoCropArea: 0.8,
                    dragMode: 'move',
                    cropBoxMovable: true,
                    cropBoxResizable: true,
                    toggleDragModeOnDblclick: false,
                    minCropBoxWidth: 50,
                    minCropBoxHeight: 50,
                    ready: function() {
                        console.log('Cropper ready');
                        
                        const imageData = window.cropper.getImageData();
                        const minDimension = Math.min(imageData.width, imageData.height);
                        const initialCropSize = minDimension * 0.8;
                        
                        let initialWidth, initialHeight;
                        if (427/250 > imageData.width/imageData.height) {
                            initialWidth = initialCropSize;
                            initialHeight = initialWidth / (427/250);
                        } else {
                            initialHeight = initialCropSize;
                            initialWidth = initialHeight * (427/250);
                        }
                        
                        const left = (imageData.width - initialWidth) / 2;
                        const top = (imageData.height - initialHeight) / 2;
                        
                        window.cropper.setCropBoxData({
                            width: initialWidth,
                            height: initialHeight,
                            left: left,
                            top: top
                        });
                        
                        if (current.isNewUpload) {
                            saveBtn.innerHTML = `Save & Next (${imageQueue.length} remaining)`;
                        } else {
                            saveBtn.innerHTML = `Save Re-cropped Image`;
                        }
                    }
                });
            };
            
            imgElement.onerror = function() {
                console.error('Image failed to load');
                skipCurrentImage();
            };
        };
// Debug function to check form data
window.debugFormData = function() {
    const formData = new FormData(document.getElementById('my-form'));
    console.log('=== FORM DATA DEBUG ===');
    for (let pair of formData.entries()) {
        console.log(pair[0] + ': ', pair[1]);
    }
    console.log('=== END FORM DATA ===');
};
        $(document).ready(function() {
            // let multipleUploader = new MultipleUploader('#multiple-uploader').init({
            //     maxUpload: 20,
            //     maxSize: 10,
            //     filesInpName: 'temporary_unused_images',
            //     formSelector: '#my-form',
            // });
           let multipleUploader = new MultipleUploader('#multiple-uploader').init({
            maxUpload: 20,
            maxSize: 10,
            filesInpName: 'temporary_unused_images',
            formSelector: '#my-form',
        });
            // let cropper;
            let processedImageUrls = new Set();
            let originalObserver = null;
            let fileStore = new Map();

            const overlay = document.getElementById('cropperOverlay');
            const imgElement = document.getElementById('cropperImage');
            const saveBtn = document.getElementById('cropSave');
            const cancelBtn = document.getElementById('cropCancel');
            
            console.log('Cropper system initializing for edit...');
            
            // Function to store file for image
            function storeFileForImage(imgElement, file) {
                fileStore.set(imgElement.src, file);
                console.log('Stored file for image:', imgElement.src.substring(0, 50), file.name);
            }
            
            // Setup MutationObserver for new uploads
            function setupMutationObserver() {
                const uploaderContainer = document.querySelector('.mup-images-container') || document.querySelector('#multiple-uploader');
                
                if (!uploaderContainer) {
                    console.log('Uploader container not found');
                    setTimeout(setupMutationObserver, 1000);
                    return;
                }
                
                console.log('Setting up MutationObserver for new uploads');
                
                if (originalObserver) {
                    originalObserver.disconnect();
                }
                
                originalObserver = new MutationObserver(function(mutations) {
                    let imagesAdded = false;
                    
                    mutations.forEach(function(mutation) {
                        mutation.addedNodes.forEach(function(node) {
                            if (node.nodeType === 1) {
                                if (node.tagName === 'IMG') {
                                    imagesAdded = true;
                                } else if (node.querySelectorAll) {
                                    const images = node.querySelectorAll('img');
                                    if (images.length > 0) {
                                        imagesAdded = true;
                                    }
                                }
                            }
                        });
                    });
                    
                    if (imagesAdded) {
                        setTimeout(checkForNewImages, 500);
                    }
                });
                
                originalObserver.observe(uploaderContainer, {
                    childList: true,
                    subtree: true
                });
                
                setTimeout(checkForNewImages, 1500);
            }
            
            // Check for new images
            function checkForNewImages() {
                try {
                    const uploaderContainer = document.querySelector('.mup-images-container') || document.querySelector('#multiple-uploader');
                    if (!uploaderContainer) return;
                    
                    const images = uploaderContainer.querySelectorAll('img.preview-image, .mup-image img, .dz-image img, img[src^="blob:"]:not([id="cropperImage"]):not([data-is-existing])');
                    
                    console.log('Found', images.length, 'images to check');
                    
                    images.forEach(img => {
                        // Skip if already cropped or in queue
                        if (img.hasAttribute('data-cropped') || img.hasAttribute('data-in-queue')) {
                            return;
                        }
                        
                        if (!img.src || img.src === '') {
                            return;
                        }
                        
                        // Skip if already processed (check processedImageUrls)
                        if (window.processedImageUrls && window.processedImageUrls.has(img.src)) {
                            return;
                        }
                        
                        console.log('Processing new image for cropping:', img.src.substring(0, 50));
                        
                        img.setAttribute('data-in-queue', 'true');
                        img.style.opacity = '0.6';
                        
                        // Try to get file from multipleUploader
                        let file = null;
                        if (multipleUploader && multipleUploader.files) {
                            // Create a map of blob URLs to files
                            for (let i = 0; i < multipleUploader.files.length; i++) {
                                const uploaderFile = multipleUploader.files[i];
                                // Create a blob URL for comparison
                                const tempUrl = URL.createObjectURL(uploaderFile);
                                if (tempUrl === img.src) {
                                    file = uploaderFile;
                                    URL.revokeObjectURL(tempUrl);
                                    break;
                                }
                                URL.revokeObjectURL(tempUrl);
                            }
                        }
                        
                        if (!file) {
                            console.log('Creating placeholder file');
                            file = new File([""], "image_to_crop.jpg", { type: "image/jpeg" });
                        }
                        
                        // Store reference
                        if (window.fileStore) {
                            window.fileStore.set(img.src, file);
                        }
                        
                        window.imageQueue.push({
                            imgNode: img,
                            src: img.src,
                            file: file,
                            isNewUpload: true
                        });
                        
                        // Add to processed URLs
                        if (window.processedImageUrls) {
                            window.processedImageUrls.add(img.src);
                        }
                        
                        console.log('Added to queue. Total in queue:', window.imageQueue.length);
                    });
                    
                    if (!window.isProcessing && window.imageQueue.length > 0) {
                        console.log('Starting cropper with queue size:', window.imageQueue.length);
                        window.processQueue();
                    }
                    
                } catch (error) {
                    console.error('Error in checkForNewImages:', error);
                }
            }
            
            // Process queue function
            // window.processQueue = function () {
            //     if (imageQueue.length === 0) {
            //         isProcessing = false;
            //         window.reCropMode = false;
            //         window.reCropElement = null;
            //         console.log('Queue empty, hiding overlay');
            //         $(overlay).fadeOut();
            //         return;
            //     }
                
            //     isProcessing = true;
            //     const current = imageQueue[0];
                
            //     console.log('Opening cropper for:', current.src.substring(0, 50));
                
            //     overlay.style.display = 'flex';
            //     $(overlay).hide().fadeIn(400);
                
            //     imgElement.src = current.src;
                
            //     if (cropper) {
            //         cropper.destroy();
            //         cropper = null;
            //     }
                
            //     imgElement.onload = function() {
            //         console.log('Image loaded, creating cropper');
                    
            //         cropper = new Cropper(imgElement, {
            //             aspectRatio: 427 / 250,
            //             viewMode: 1,
            //             autoCropArea: 0.8,
            //             dragMode: 'move',
            //             cropBoxMovable: true,
            //             cropBoxResizable: true,
            //             toggleDragModeOnDblclick: false,
            //             minCropBoxWidth: 50,
            //             minCropBoxHeight: 50,
            //             ready: function() {
            //                 console.log('Cropper ready');
                            
            //                 const imageData = cropper.getImageData();
            //                 const minDimension = Math.min(imageData.width, imageData.height);
            //                 const initialCropSize = minDimension * 0.8;
                            
            //                 let initialWidth, initialHeight;
            //                 if (427/250 > imageData.width/imageData.height) {
            //                     initialWidth = initialCropSize;
            //                     initialHeight = initialWidth / (427/250);
            //                 } else {
            //                     initialHeight = initialCropSize;
            //                     initialWidth = initialHeight * (427/250);
            //                 }
                            
            //                 const left = (imageData.width - initialWidth) / 2;
            //                 const top = (imageData.height - initialHeight) / 2;
                            
            //                 cropper.setCropBoxData({
            //                     width: initialWidth,
            //                     height: initialHeight,
            //                     left: left,
            //                     top: top
            //                 });
                            
            //                 if (current.isNewUpload) {
            //                     saveBtn.innerHTML = `Save & Next (${imageQueue.length} remaining)`;
            //                 } else {
            //                     saveBtn.innerHTML = `Save Re-cropped Image`;
            //                 }
            //             }
            //         });
            //     };
                
            //     imgElement.onerror = function() {
            //         console.error('Image failed to load');
            //         skipCurrentImage();
            //     };
            // }
            
            // Skip image
            function skipCurrentImage() {
                if (imageQueue.length > 0) {
                    const skipped = imageQueue.shift();
                    if (skipped.imgNode && skipped.isNewUpload) {
                        skipped.imgNode.style.opacity = '1';
                        skipped.imgNode.removeAttribute('data-in-queue');
                    }
                }
                
                // Check if cropper exists before destroying
                if (window.cropper && typeof window.cropper.destroy === 'function') {
                    window.cropper.destroy();
                    window.cropper = null;
                }
                
                if (imageQueue.length > 0) {
                    window.processQueue(); // Use window.processQueue
                } else {
                    isProcessing = false;
                    window.reCropMode = false;
                    window.reCropElement = null;
                    // Get overlay reference
                    const overlay = document.getElementById('cropperOverlay');
                    if (overlay) {
                        $(overlay).fadeOut();
                    }
                }
            }
            
            // Save cropped image
            // Save cropped image
            saveBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('Save button clicked');
            
            if (!window.cropper || typeof window.cropper.getCroppedCanvas !== 'function') {
                console.error('Cropper not initialized properly');
                return;
            }
            
            if (window.imageQueue.length === 0) {
                console.error('No image in queue');
                return;
            }
            
            const currentItem = window.imageQueue[0];
            
            try {
                const canvas = window.cropper.getCroppedCanvas({
                    width: 427,
                    height: 250,
                    imageSmoothingEnabled: true,
                    imageSmoothingQuality: 'high'
                });
                
                if (!canvas) {
                    console.error('Failed to get cropped canvas');
                    return;
                }
                
                console.log('Canvas created, converting to blob...');
                
                canvas.toBlob(function (blob) {
                    if (!blob) {
                        console.error('Failed to create blob from canvas');
                        return;
                    }
                    
                    console.log('Blob created, processing...');
                    
                    // Handle feature image
                    if (currentItem.isFeature === true) {
                        console.log('Processing feature image');
                        window.featureImageDT.items.clear();
                        window.featureImageDT.items.add(new File([blob], 'feature_image_cropped.jpg', {
                            type: 'image/jpeg',
                            lastModified: Date.now()
                        }));
                        
                        const featureInput = document.getElementById('feature_image');
                        featureInput.files = window.featureImageDT.files;
                        
                        const preview = document.getElementById('imagePreview');
                        preview.innerHTML = '';
                        
                        const img = document.createElement('img');
                        img.src = URL.createObjectURL(blob);
                        img.style.maxWidth = '250px';
                        img.style.marginTop = '10px';
                        img.style.border = '3px solid #28a745';
                        
                        preview.appendChild(img);
                        
                        window.imageQueue.shift();
                        if (window.cropper && typeof window.cropper.destroy === 'function') {
                            window.cropper.destroy();
                            window.cropper = null;
                        }
                        
                        const overlay = document.getElementById('cropperOverlay');
                        if (overlay) {
                            overlay.style.display = 'none';
                        }
                        
                        window.isProcessing = false;
                        return;
                    }
                    
                    // Handle re-crop of existing image
                    if (window.reCropMode && window.reCropElement) {
                        console.log('Processing re-cropped image');
                        const imageId = window.reCropElement.getAttribute('data-image-id');
                        const fileName = 'recropped_' + (imageId || 'existing') + '.jpg';
                        
                        const croppedFile = new File([blob], fileName, {
                            type: 'image/jpeg',
                            lastModified: Date.now()
                        });
                        
                        window.recroppedFilesDT.items.add(croppedFile);
                        
                        const croppedUrl = URL.createObjectURL(blob);
                        window.reCropElement.src = croppedUrl;
                        window.reCropElement.style.border = '3px solid #17a2b8';
                        window.reCropElement.setAttribute('data-recrop', 'true');
                        
                        window.imageQueue.shift();
                        if (window.cropper && typeof window.cropper.destroy === 'function') {
                            window.cropper.destroy();
                            window.cropper = null;
                        }
                        
                        window.reCropMode = false;
                        window.reCropElement = null;
                        
                        const overlay = document.getElementById('cropperOverlay');
                        if (overlay) {
                            overlay.style.display = 'none';
                        }
                        
                        window.isProcessing = false;
                        return;
                    }
                    
                    // Handle new gallery uploads
                    console.log('Processing new gallery image');
                    const fileName = currentItem.file && currentItem.file.name ? 
                        currentItem.file.name.replace(/\.[^/.]+$/, '') + '_cropped.jpg' : 
                        'uploaded_image_cropped.jpg';
                    
                    const croppedFile = new File([blob], fileName, {
                        type: 'image/jpeg',
                        lastModified: Date.now()
                    });
                    
                    window.croppedFilesDT.items.add(croppedFile);
                    
                    const croppedUrl = URL.createObjectURL(blob);
                    if (currentItem.imgNode) {
                        currentItem.imgNode.src = croppedUrl;
                        currentItem.imgNode.style.opacity = '1';
                        currentItem.imgNode.style.border = '3px solid #28a745';
                        currentItem.imgNode.setAttribute('data-cropped', 'true');
                        currentItem.imgNode.removeAttribute('data-in-queue');
                    }
                    
                    window.imageQueue.shift();
                    if (window.cropper && typeof window.cropper.destroy === 'function') {
                        window.cropper.destroy();
                        window.cropper = null;
                    }
                    
                    if (window.imageQueue.length > 0) {
                        setTimeout(window.processQueue, 100);
                    } else {
                        window.isProcessing = false;
                        const overlay = document.getElementById('cropperOverlay');
                        if (overlay) {
                            overlay.style.display = 'none';
                        }
                    }
                    
                }, 'image/jpeg', 0.9);
                
            } catch (error) {
                console.error('Error in save button handler:', error);
            }
        });
            
            // Cancel button
            // Cancel button
            if (cancelBtn) {
                cancelBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    skipCurrentImage();
                });
            }
            
            // Setup observer
            setTimeout(setupMutationObserver, 500);
            
            // Backup periodic check
            const backupCheck = setInterval(checkForNewImages, 3000);
            
            // Cleanup
            $(window).on('beforeunload', function() {
                clearInterval(backupCheck);
                if (originalObserver) {
                    originalObserver.disconnect();
                }
            });
            
            console.log('Cropper system ready for edit');
        });
        
        // Function to re-crop existing feature image
        window.reCropFeatureImage = function(imgElement) {
            const src = imgElement.getAttribute('data-src');
            
            // Add to queue
            window.imageQueue = [{
                imgNode: imgElement,
                src: src,
                isFeature: true,
                isNewUpload: false
            }];
            
            window.reCropMode = true;
            window.reCropElement = imgElement;
            window.processQueue();
        };
        
        // Function to re-crop existing gallery image
        window.reCropGalleryImage = function(imgElement) {
            const src = imgElement.getAttribute('data-src');
            const imageId = imgElement.getAttribute('data-image-id');
            
            // Add to queue
            window.imageQueue = [{
                imgNode: imgElement,
                src: src,
                imageId: imageId,
                isNewUpload: false
            }];
            
            window.reCropMode = true;
            window.reCropElement = imgElement;
            window.processQueue();
        };
        
        // Function to delete feature image
        window.deleteFeatureImage = function() {
            if (confirm('Are you sure you want to delete the feature image?')) {
                const container = document.querySelector('.existing-image-container');
                const img = document.getElementById('existing-feature-image');
                
                img.classList.add('image-to-delete');
                document.getElementById('deleted_feature_image').value = '1';
                
                // Hide delete button
                container.querySelector('.delete-image-btn').style.display = 'none';
                
                // Show restore button
                const restoreBtn = document.createElement('button');
                restoreBtn.type = 'button';
                restoreBtn.className = 'delete-image-btn';
                restoreBtn.style.background = '#28a745';
                restoreBtn.innerHTML = '↻';
                restoreBtn.onclick = function() {
                    restoreFeatureImage();
                };
                container.appendChild(restoreBtn);
            }
        };
        
        // Function to restore feature image
        window.restoreFeatureImage = function() {
            const container = document.querySelector('.existing-image-container');
            const img = document.getElementById('existing-feature-image');
            
            img.classList.remove('image-to-delete');
            document.getElementById('deleted_feature_image').value = '0';
            
            // Remove restore button
            container.querySelectorAll('.delete-image-btn').forEach(btn => {
                if (btn.innerHTML === '↻') {
                    btn.remove();
                }
            });
            
            // Show delete button
            const deleteBtn = document.createElement('button');
            deleteBtn.type = 'button';
            deleteBtn.className = 'delete-image-btn';
            deleteBtn.innerHTML = '×';
            deleteBtn.onclick = function() {
                deleteFeatureImage();
            };
            container.appendChild(deleteBtn);
        };
        
        // Function to delete gallery image
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-image-btn') && e.target.getAttribute('data-image-id')) {
                const imageId = e.target.getAttribute('data-image-id');
                const container = e.target.closest('.existing-image-container');
                const img = container.querySelector('img');
                
                if (confirm('Are you sure you want to delete this image?')) {
                    img.classList.add('image-to-delete');
                    window.deletedImageIds.push(imageId);
                    document.getElementById('deleted_images').value = window.deletedImageIds.join(',');
                    
                    // Hide delete button
                    e.target.style.display = 'none';
                    
                    // Show restore button
                    const restoreBtn = document.createElement('button');
                    restoreBtn.type = 'button';
                    restoreBtn.className = 'delete-image-btn';
                    restoreBtn.style.background = '#28a745';
                    restoreBtn.innerHTML = '↻';
                    restoreBtn.setAttribute('data-image-id', imageId);
                    restoreBtn.onclick = function() {
                        restoreGalleryImage(imageId, restoreBtn);
                    };
                    container.appendChild(restoreBtn);
                }
            }
        });
        
        // Function to restore gallery image
        window.restoreGalleryImage = function(imageId, restoreBtn) {
            const container = restoreBtn.closest('.existing-image-container');
            const img = container.querySelector('img');
            
            img.classList.remove('image-to-delete');
            window.deletedImageIds = window.deletedImageIds.filter(id => id != imageId);
            document.getElementById('deleted_images').value = window.deletedImageIds.join(',');
            
            // Remove restore button
            restoreBtn.remove();
            
            // Show delete button
            const deleteBtn = document.createElement('button');
            deleteBtn.type = 'button';
            deleteBtn.className = 'delete-image-btn';
            deleteBtn.innerHTML = '×';
            deleteBtn.setAttribute('data-image-id', imageId);
            container.appendChild(deleteBtn);
        };
        
        // Feature image change handler
        document.getElementById('feature_image').addEventListener('change', function () {
            const file = this.files[0];
            if (!file || !file.type.startsWith('image/')) {
                alert('Please select a valid image');
                this.value = '';
                return;
            }
            
            // Clear existing preview if it's a new upload
            const preview = document.getElementById('imagePreview');
            const existingContainer = preview.querySelector('.existing-image-container');
            if (existingContainer) {
                existingContainer.remove();
            }
            
            const reader = new FileReader();
            reader.onload = function (e) {
                window.currentCropType = 'feature';
                window.imageQueue = [{
                    imgNode: null,
                    src: e.target.result,
                    file: file,
                    isFeature: true
                }];
                window.processQueue();
            };
            reader.readAsDataURL(file);
        });
        
        // Form validation and submission
        $(document).ready(function () {
            let validator = $("#my-form").validate({
            rules: {
                brand_id: { required: true },
                model_id: { required: true },
                category_id: { required: true },
                body_type_id: { required: true },
                make_year_id: { required: true },
                car_location: { required: true, minlength: 3 },
                car_engine_size: { required: true },
                start_date: { required: true, date: true },
                end_date: { required: true, date: true },
                "prices[0][price]": { required: true, number: true, min: 1 },
                min_days_booking: { required: true },
                "prices[1][price]": { number: true, min: 0 },
                "prices[2][price]": { number: true, min: 0 },
                security_deposit: { required: true, number: true, min: 0 },
                delivery_days: { required: true },
                description: { required: true, minlength: 10 }
                // REMOVE: feature_image: { required: true } - because it might be existing
            },
            messages: {
                brand_id: "Please select a brand",
                model_id: "Please select a model",
                category_id: "Please select a category",
                body_type_id: "Please select a body type",
                make_year_id: "Please select a make year",
                car_location: {
                    required: "Please enter the pickup location",
                    minlength: "Location must be at least 3 characters"
                },
                car_engine_size: "Please enter engine size",
                start_date: "Please select a valid start date",
                end_date: "Please select a valid end date",
                "prices[0][price]": "Please enter the daily price",
                min_days_booking: "Please select minimum booking days",
                security_deposit: "Please enter the security deposit",
                delivery_days: "Please select delivery charges option",
                description: {
                    required: "Please enter car description",
                    minlength: "Description must be at least 10 characters"
                }
                },
                errorElement: "div",
                errorPlacement: function (error, element) {
                    error.addClass("text-danger mt-1");
                    error.insertAfter(element);
                },
                highlight: function (element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function (element) {
                    $(element).removeClass("is-invalid");
                }
            });
            // Function to physically remove deleted images from DOM before submission
            function removeDeletedImagesFromDOM() {
                const deletedImages = document.querySelectorAll('.image-to-delete');
                deletedImages.forEach(img => {
                    const container = img.closest('.existing-image-container');
                    if (container) {
                        container.remove();
                    }
                });
                
                // Also remove feature image if marked for deletion
                const deletedFeatureImage = document.querySelector('#existing-feature-image.image-to-delete');
                if (deletedFeatureImage) {
                    const featureContainer = deletedFeatureImage.closest('.existing-image-container');
                    if (featureContainer) {
                        featureContainer.remove();
                    }
                }
            }
            $("#car_update_submit").on("click", function (e) {
            e.preventDefault();
            
            // Validate the form
            if (!$("#my-form").valid()) {
                console.log('Form validation failed');
                return;
            }
            
            console.log('Form validation passed, preparing submission...');
            
            // Check if we have at least one image (either existing or new)
            const hasExistingFeatureImage = document.querySelector('#existing-feature-image');
            const hasNewFeatureImage = window.featureImageDT.files.length > 0;
            const hasExistingGalleryImages = document.querySelectorAll('#existing-images-container img:not(.image-to-delete)').length > 0;
            const hasNewGalleryImages = window.croppedFilesDT.files.length > 0;
            const hasRecroppedImages = window.recroppedFilesDT.files.length > 0;
            
            if (!hasExistingFeatureImage && !hasNewFeatureImage) {
                alert('Please upload or keep a feature image');
                return;
            }
            
            if (!hasExistingGalleryImages && !hasNewGalleryImages && !hasRecroppedImages) {
                alert('Please upload or keep at least one gallery image');
                return;
            }
            
            // Set cropped files
            if (croppedInput) {
                croppedInput.files = window.croppedFilesDT.files;
                console.log('New images to upload:', croppedInput.files.length);
            }
            
            // Set recropped files
            if (recroppedInput) {
                recroppedInput.files = window.recroppedFilesDT.files;
                console.log('Recropped images:', recroppedInput.files.length);
            }
            
            // IMPORTANT: Update the deleted_images hidden field
            const deletedImagesInput = document.getElementById('deleted_images');
            if (deletedImagesInput) {
                deletedImagesInput.value = window.deletedImageIds.join(',');
                console.log('Deleted image IDs:', deletedImagesInput.value);
            }
            
            // Clear the temporary uploader input to prevent duplicate uploads
            let originalInp = document.querySelector('input[type="file"][name="temporary_unused_images[]"]');
            if (originalInp) {
                originalInp.value = "";
            }
            
            // Also clear any other temporary file inputs from the uploader
            document.querySelectorAll('input[type="file"]').forEach(input => {
                if (input.name && (input.name.includes('temporary') || input.name === 'images[]')) {
                    // Skip our hidden inputs
                    if (input !== croppedInput && input !== recroppedInput) {
                        input.value = "";
                    }
                }
            });
            
            console.log('Submitting form with:', {
                newImages: window.croppedFilesDT.files.length,
                recroppedImages: window.recroppedFilesDT.files.length,
                deletedImages: window.deletedImageIds.length,
                deletedImageIds: window.deletedImageIds,
                featureImageDeleted: document.getElementById('deleted_feature_image').value,
                hasExistingFeatureImage: !!hasExistingFeatureImage,
                hasNewFeatureImage: hasNewFeatureImage
            });
            
            window.debugFormData();
            removeDeletedImagesFromDOM();
            // Submit the form
            $("#my-form")[0].submit();
        });
        });
    </script>

    @endpush
@endsection