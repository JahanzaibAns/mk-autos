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
        .page-wrapper .page-header .header-wrapper{
            z-index: 9;
        }
    </style>
    <div class="container-fluid">
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

                    <form id="my-form" action="{{ route('admin.car.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-heading">
                                    <h5>Add Car</h5>
                                </div>
                                <div class="row car_add_form">
                                    {!! \App\Helpers\DropDownHelper::brandModelDropdown(old('brand_id'), old('model_id')) !!}
                                    <div class="col-md-12 mb-3">
                                        {!! \App\Helpers\RadioBoxHelper::categoryCheckBoxes(old('categories', [])) !!}
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="version">Body Type</label>
                                    </div>
                                    <div class="col-md-8 col-12">

                                    {!! \App\Helpers\DropDownHelper::bodyTypeDropdown(old('body_type_id')) !!}

                                        
                                    </div>
                                    
                                    <div class="col-md-4 col-12">
                                        <label for="make_year">Make (Year)</label>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        {!! \App\Helpers\DropDownHelper::makeYearDropdown(old('make_year_id')) !!}
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="location">Car Pickup Location</label>
                                    </div>

                                    <div class="col-md-8 col-12">
                                        <div class="">
                                            <input placeholder="Pickup Location" value="{{old('car_location')}}" class="form-control" type="text" name="car_location">
                                        </div>
                                    </div>
                                    


                                    <div class="col-md-4 col-12 mt-3">
                                        <label for="engine_size">Car Engine Size</label>
                                    </div>

                                    <div class="col-md-8 col-12 mt-3">
                                        <div class="">
                                            <input placeholder="Engine Size" value="{{old('car_engine_size')}}" class="form-control" type="text" name="car_engine_size">
                                        </div>
                                    </div>
                                    
                                    

                                    <h3 class="my-3">Availibility</h3>
                                    <div class="row">
                                        <div class="col-md-4 car_pricing">
                                            <h6>
                                                Start Date
                                            </h6>
                                        </div>
                                        <div class="col-md-8 car_pricing">
                                            <input class="form-control" id="start_date" type="date" name="start_date" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 car_pricing mt-3">
                                            <h6>
                                                End Date
                                            </h6>
                                        </div>
                                        <div class="col-md-8 car_pricing">
                                            <input class="form-control" id="end_date" type="date" name="end_date" value="">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="car_image">
                                            <input type="checkbox" class="" name="is_featured" id="is_featured"
                                            value="Featured" @if (old('is_featured') == 'Featured') checked @endif>
                                        <label for="is_featured" class="fw-bold">Is Featured</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="row car_add_form">
                                    <div class="mb-3">
                                        <h5>Pricing</h5>
                                    </div>

                                    <div class="col-md-4 car_pricing">
                                        <h6>
                                            Minimum Day Booking
                                        </h6>
                                    </div>
                                    <div class="col-md-8 car_pricing">
                                        <select name="min_days_booking" id="min_days_booking" class="form-select">
                                            <option value="">Select Minimum Days</option>
                                            <option value="1" @if (old('min_days_booking') == '1') selected @endif>1
                                            </option>
                                            <option value="2" @if (old('min_days_booking') == '2') selected @endif>2
                                            </option>
                                            <option value="3" @if (old('min_days_booking') == '3') selected @endif>3
                                            </option>
                                            <option value="4" @if (old('min_days_booking') == '4') selected @endif>4
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 car_pricing">
                                        <h6>
                                            Price Per Day
                                        </h6>
                                    </div>
                                    <div class="col-md-8 car_pricing">
                                        <input type="hidden" name="prices[0][type]" value="daily">
                                        <input class="form-control" type="number" name="prices[0][price]" placeholder="AED Charges" value="{{ old('prices.0.price') }}">
                                    </div>
                                    <div class="col-md-4 car_pricing">
                                        <h6>
                                            Price Per Week
                                        </h6>
                                    </div>
                                    <div class="col-md-8 car_pricing">
                                    <input type="hidden" name="prices[1][type]" value="weekly">
                                    <input class="form-control" type="number" name="prices[1][price]" placeholder="AED Charges" value="{{ old('prices.1.price') }}">
                                    </div>
                             
                                    <div class="col-md-4 car_pricing">
                                        <h6>
                                            Price Per Month
                                        </h6>
                                    </div>
                                    <div class="col-md-8 car_pricing">
                                        <input type="hidden" name="prices[2][type]" value="monthly">
                                        <input class="form-control" type="number" name="prices[2][price]" placeholder="AED Charges" value="{{ old('prices.2.price') }}">
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-4">
                                <div class="form-heading">
                                    <h5>Car Specs</h5>
                                </div>
                                {!! \App\Helpers\RadioBoxHelper::featureCheckBoxes(old('features', [])) !!}

                            </div>
                            <div class="col-lg-6 col-md-12">
                            {!! \App\Helpers\RadioBoxHelper::doorRadios() !!}
                            {!! \App\Helpers\RadioBoxHelper::seatRadios() !!}
                            {!! \App\Helpers\RadioBoxHelper::bagRadios() !!}
                            {!! \App\Helpers\RadioBoxHelper::specRadios() !!}
                            {!! \App\Helpers\RadioBoxHelper::transmissionRadios() !!}
                            {!! \App\Helpers\RadioBoxHelper::fuelTypeRadios() !!}

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="row car_add_form">
                                    <div class="mb-3">
                                        <h5>Rental Terms</h5>
                                    </div>

                                    <div class="col-md-4 car_pricing">
                                        <h6>
                                            Security Deposit
                                        </h6>
                                    </div>
                                    <div class="col-md-8 car_pricing">
                                        <input class="form-control" id="security_deposit" type="number"
                                            placeholder="AED Charges" name="security_deposit"
                                            value="{{ old('security_deposit') }}">
                                    </div>
                                    <div class="col-md-4 car_pricing">
                                        <h6>
                                            Delivery & Pick up Charges
                                        </h6>
                                    </div>
                                    <div class="col-md-4 car_pricing">
                                        <select name="delivery_days" id="delivery_days" class="form-select mb-0">
                                            <option value="Select Delivery Charges" selected disabled>Select Delivery
                                                Charges</option>
                                            <option value="Free Always"
                                                @if (old('delivery_days') == 'Free Always') selected @endif>Free Always</option>
                                            <option value="Free (2 days+)"
                                                @if (old('delivery_days') == 'Free (2 days+)') selected @endif>Free (2 days+)
                                            </option>
                                            <option value="Free (10 days+)"
                                                @if (old('delivery_days') == 'Free (10 days+)') selected @endif>Free (10 days+)
                                            </option>
                                            <option value="Free (15 days+)"
                                                @if (old('delivery_days') == 'Free (15 days+)') selected @endif>Free (15 days+)
                                            </option>
                                            <option value="Free (30 days+)"
                                                @if (old('delivery_days') == 'Free (30 days+)') selected @endif>Free (30 days+)
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 car_pricing">
                                        <input type="number" name="delivery_charges" id="delivery_charges"
                                            class="form-control" placeholder="AED"
                                            value="{{ old('delivery_charges') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                             <div class="multiple-uploader" id="multiple-uploader">
                                <div class="mup-msg">
                                    <span class="mup-main-msg">click to upload images.</span>
                                    <span class="mup-msg" id="max-upload-number">Upload up to 10 images</span>
                                    <span class="mup-msg">Only images, pdf and psd files are allowed for
                                        upload</span>
                                </div>
                                <input type="file" name="images[]" multiple accept="image*">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="feature_image" class="form-label">Preview Image</label>
                                <input type="file" name="feature_image" id="feature_image" class="form-control" accept="image/*">
                            </div>
                            <div id="imagePreview"></div>


                            <div class="col-12 mt-5">
                                {!! \App\Helpers\RadioBoxHelper::exteriorColorRadios() !!}
                                {!! \App\Helpers\RadioBoxHelper::interiorColorRadios() !!}

                            </div>
                            <div class="col-12 mt-3">
                                <div class="specs_heading">
                                    <h6>
                                        Car Description:
                                    </h6>
                                </div>
                                <textarea class="w-100 form-control editor" name="description" id="description" rows="6" placeholder="Enter Description"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="button" id="car_add_submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="cropperOverlay">
        <div id="cropperPopup">
            <div class="img-container">
                <img id="cropperImage" src="">
            </div>
            <div style="margin-top: 15px; text-align: right;">
                <button id="cropSave" class="btn btn-primary">Save & Next</button>
            </div>
        </div>
    </div>
    
    <style>
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
    </style>

    <!-- {{-- script start --}} -->

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/admin/dropzone/js/multiple-uploader.js') }}"></script>
    <script src="{{ asset('assets/admin/dropzone/js/util.js') }}"></script>
    
<script>
       window.imageQueue = [];
        window.processQueue = null;
        window.currentCropType = null;
        window.croppedFilesDT = new DataTransfer();
        window.featureImageDT = new DataTransfer();
        window.isProcessing = false;
       let croppedInput = document.createElement('input');
        croppedInput.type = 'file';
        croppedInput.name = 'images[]';
        croppedInput.multiple = true;
        croppedInput.style.display = 'none';
        document.getElementById('my-form').appendChild(croppedInput);
        
      

    $(document).ready(function() {
        let multipleUploader = new MultipleUploader('#multiple-uploader').init({
            maxUpload: 20,
            maxSize: 10,
            filesInpName: 'temporary_unused_images',
            formSelector: '#my-form',
        });
    
        let cropper;
        let processedImageUrls = new Set();
        let originalObserver = null;
        let fileStore = new Map(); // Store files by image URL

        const overlay = document.getElementById('cropperOverlay');
        const imgElement = document.getElementById('cropperImage');
        const saveBtn = document.getElementById('cropSave');
        
        console.log('Cropper system initializing...');
    
        // Store files when they're uploaded
        function storeFileForImage(imgElement, file) {
            fileStore.set(imgElement.src, file);
            console.log('Stored file for image:', imgElement.src.substring(0, 50), file.name);
        }
    
        // Setup MutationObserver
        function setupMutationObserver() {
            const uploaderContainer = document.querySelector('.mup-images-container') || document.querySelector('#multiple-uploader');
            
            if (!uploaderContainer) {
                console.log('Uploader container not found');
                setTimeout(setupMutationObserver, 1000);
                return;
            }
            
            console.log('Setting up MutationObserver');
            
            if (originalObserver) {
                originalObserver.disconnect();
            }
            
            originalObserver = new MutationObserver(function(mutations) {
                let imagesAdded = false;
                
                mutations.forEach(function(mutation) {
                    mutation.addedNodes.forEach(function(node) {
                        if (node.nodeType === 1) {
                            // Check for images
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
            
            // Check immediately
            setTimeout(checkForNewImages, 1500);
        }
    
        // Check for new images
        function checkForNewImages() {
            try {
                const uploaderContainer = document.querySelector('.mup-images-container') || document.querySelector('#multiple-uploader');
                if (!uploaderContainer) return;
                
                // Find all preview images that haven't been cropped
                const images = uploaderContainer.querySelectorAll('img.preview-image, .mup-image img, .dz-image img, img[src^="blob:"]:not([data-cropped]):not([id="cropperImage"])');
                
                console.log('Found', images.length, 'preview images');
                
                images.forEach(img => {
                    // Skip if already in queue or processed
                    if (img.hasAttribute('data-in-queue') || processedImageUrls.has(img.src)) {
                        return;
                    }
                    
                    // Skip if src is empty or undefined
                    if (!img.src || img.src === '') {
                        return;
                    }
                    
                    console.log('Processing new image:', img.src.substring(0, 50));
                    
                    // Mark as in queue
                    img.setAttribute('data-in-queue', 'true');
                    img.style.opacity = '0.6';
                    
                    // Try to find the file
                    let file = null;
                    
                    // Method 1: Check if we already stored this file
                    if (fileStore.has(img.src)) {
                        file = fileStore.get(img.src);
                        console.log('Found file in store:', file.name);
                    } 
                    // Method 2: Try to get from uploader instance
                    else if (multipleUploader && multipleUploader.files) {
                        // Try to find matching file by checking current uploads
                        for (let i = 0; i < multipleUploader.files.length; i++) {
                            const uploaderFile = multipleUploader.files[i];
                            // Create a blob URL to compare
                            const blobUrl = URL.createObjectURL(uploaderFile);
                            if (blobUrl === img.src) {
                                file = uploaderFile;
                                URL.revokeObjectURL(blobUrl);
                                break;
                            }
                            URL.revokeObjectURL(blobUrl);
                        }
                    }
                    
                    // If we still don't have a file, create a dummy one
                    if (!file) {
                        console.log('Creating placeholder file for:', img.src.substring(0, 50));
                        // Create a dummy file - we'll replace it with the cropped version later
                        file = new File([""], "image_to_crop.jpg", { type: "image/jpeg" });
                    }
                    
                    // Store the file
                    fileStore.set(img.src, file);
                    
                    // Find the file input (might be hidden or separate)
                    let fileInput = document.querySelector('input[type="file"][name="images"], input[type="file"][name*="image"]');
                    if (!fileInput) {
                        // Create a hidden input if none exists
                        fileInput = document.createElement('input');
                        fileInput.type = 'file';
                        fileInput.name = 'images';
                        fileInput.style.display = 'none';
                        fileInput.multiple = true;
                        document.querySelector('#my-form').appendChild(fileInput);
                    }
                    
                    // Add to queue
                    imageQueue.push({
                        imgNode: img,
                        src: img.src,
                        file: file,
                        fileInput: fileInput
                    });
                    
                    processedImageUrls.add(img.src);
                    
                    console.log('Added to queue. Total in queue:', imageQueue.length);
                });
                
                // Start processing if not already
                if (!isProcessing && imageQueue.length > 0) {
                    console.log('Starting cropper with queue size:', imageQueue.length);
                    processQueue();
                }
                
            } catch (error) {
                console.error('Error in checkForNewImages:', error);
            }
        }
    
        // Setup observer
        setTimeout(setupMutationObserver, 500);
        
        // Backup periodic check
        const backupCheck = setInterval(checkForNewImages, 3000);
    
        // Process queue
        window.processQueue = function () {
            if (imageQueue.length === 0) {
                isProcessing = false;
                console.log('Queue empty, hiding overlay');
                $(overlay).fadeOut();
                return;
            }
    
            isProcessing = true;
            const current = imageQueue[0];
            
            console.log('Opening cropper for:', current.src.substring(0, 50));
            
            // Show overlay with animation
            overlay.style.display = 'flex';
            $(overlay).hide().fadeIn(400);
            
            // Set image
            imgElement.src = current.src;
    
            // Clean previous cropper
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
    
            imgElement.onload = function() {
                console.log('Image loaded, creating cropper');
                
                cropper = new Cropper(imgElement, {
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
                        
                        const imageData = cropper.getImageData();
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
                        
                        cropper.setCropBoxData({
                            width: initialWidth,
                            height: initialHeight,
                            left: left,
                            top: top
                        });
                        
                        saveBtn.innerHTML = `Save & Next (${imageQueue.length} remaining)`;
                    }
                });
            };
            
            imgElement.onerror = function() {
                console.error('Image failed to load');
                skipCurrentImage();
            };
        }
    
        // Skip image
        function skipCurrentImage() {
            if (imageQueue.length > 0) {
                const skipped = imageQueue.shift();
                if (skipped.imgNode) {
                    skipped.imgNode.style.opacity = '1';
                    skipped.imgNode.removeAttribute('data-in-queue');
                }
            }
            
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            
            if (imageQueue.length > 0) {
                processQueue();
            } else {
                isProcessing = false;
                $(overlay).fadeOut();
            }
        }
    
        // Save cropped image
        // Save cropped image
        saveBtn.onclick = function (e) {
        e.preventDefault();
        if (!cropper || imageQueue.length === 0) return;
    
        const currentItem = imageQueue[0];
    
        const canvas = cropper.getCroppedCanvas({
            width: 427,
            height: 250,
            imageSmoothingEnabled: true,
            imageSmoothingQuality: 'high'
        });
    
        if (!canvas) return;
    
        canvas.toBlob(function (blob) {
            if (!blob) return;
    
            const isFeature = currentItem.isFeature === true;
    
            const fileName = isFeature
                ? 'feature_image_cropped.jpg'
                : currentItem.file.name.replace(/\.[^/.]+$/, '') + '_cropped.jpg';
    
            const croppedFile = new File([blob], fileName, {
                type: 'image/jpeg',
                lastModified: Date.now()
            });
    
            /* ======================================================
               FEATURE IMAGE FLOW (single preview image)
            ====================================================== */
            if (isFeature) {
    
                // reset & add cropped feature image
                featureImageDT.items.clear();
                featureImageDT.items.add(croppedFile);
    
                // replace input files
                const featureInput = document.getElementById('feature_image');
                featureInput.files = featureImageDT.files;
    
                // show preview
                const preview = document.getElementById('imagePreview');
                preview.innerHTML = '';
    
                const img = document.createElement('img');
                img.src = URL.createObjectURL(blob);
                img.style.maxWidth = '250px';
                img.style.marginTop = '10px';
                img.style.border = '3px solid #28a745';
    
                preview.appendChild(img);
    
                // cleanup
                imageQueue.shift();
                cropper.destroy();
                cropper = null;
                window.currentCropType = null;
    
                $(overlay).fadeOut(300);
                return;
            }
    
            /* ======================================================
               GALLERY IMAGES FLOW (multiple images)
            ====================================================== */
    
            // add cropped image to gallery DataTransfer
            croppedFilesDT.items.add(croppedFile);
    
            // update gallery preview
            const croppedUrl = URL.createObjectURL(blob);
            currentItem.imgNode.src = croppedUrl;
            currentItem.imgNode.style.opacity = '1';
            currentItem.imgNode.style.border = '3px solid #28a745';
            currentItem.imgNode.setAttribute('data-cropped', 'true');
            currentItem.imgNode.removeAttribute('data-in-queue');
    
            // cleanup
            imageQueue.shift();
            cropper.destroy();
            cropper = null;
    
            if (imageQueue.length > 0) {
                setTimeout(processQueue, 100);
            } else {
                isProcessing = false;
                $(overlay).fadeOut(300);
            }
    
        }, 'image/jpeg', 0.9);
    };


        
        // Cancel button
        $('#cropCancel').on('click', function(e) {
            e.preventDefault();
            skipCurrentImage();
        });
        
        // Keyboard shortcuts
        $(document).on('keydown', function(e) {
            if (!isProcessing) return;
            
            if (e.key === 'Enter') {
                saveBtn.click();
            } else if (e.key === 'Escape') {
                $('#cropCancel').click();
            }
        });
        
        // Cleanup
        $(window).on('beforeunload', function() {
            clearInterval(backupCheck);
            if (originalObserver) {
                originalObserver.disconnect();
            }
            document.querySelectorAll('img').forEach(img => {
                if (img._croppedUrl) {
                    URL.revokeObjectURL(img._croppedUrl);
                }
            });
        });
        
        console.log('Cropper system ready');
        
        // Debug button
        const debugBtn = document.createElement('button');
        debugBtn.textContent = 'Force Check Images';
        debugBtn.style.cssText = `
            position: fixed;
            bottom: 60px;
            right: 10px;
            z-index: 9999;
            padding: 8px 12px;
            background: #17a2b8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        `;
        debugBtn.onclick = function() {
            console.log('=== MANUAL CHECK ===');
            console.log('Queue:', imageQueue.length);
            console.log('File store size:', fileStore.size);
            checkForNewImages();
        };
        document.body.appendChild(debugBtn);
    });
</script>

    <script>
    // document.getElementById('feature_image').addEventListener('change', function() {
    //     var file = this.files[0];
    //     if (file && file.type.startsWith('image/')) {
    //         var reader = new FileReader();
    //         reader.onload = function(event) {
    //             var imgElement = document.createElement('img');
    //             imgElement.src = event.target.result;
    //             imgElement.style.maxWidth = '200px'; // optional styling
    //             imgElement.style.marginTop = '10px';
    //             document.getElementById('imagePreview').innerHTML = '';
    //             document.getElementById('imagePreview').appendChild(imgElement);
    //         };
    //         reader.readAsDataURL(file);
    //     } else {
    //         alert("Please select a valid image file.");
    //         this.value = ''; // reset file input
    //         document.getElementById('imagePreview').innerHTML = '';
    //     }
    // });
    
      document.getElementById('feature_image').addEventListener('change', function () {
            const file = this.files[0];
            if (!file || !file.type.startsWith('image/')) {
                alert('Please select a valid image');
                this.value = '';
                return;
            }
        
            const reader = new FileReader();
            reader.onload = function (e) {
                // Set a flag so we know this crop is for FEATURE image
                window.currentCropType = 'feature';
        
                // Clear queue & push this single image
                imageQueue.length = 0;
        
                imageQueue.push({
                    imgNode: null,
                    src: e.target.result,
                    file: file,
                    isFeature: true
                });
        
                processQueue(); // open cropper
            };
        
            reader.readAsDataURL(file);
        });

    </script>

    <script>
        $(document).ready(function () {
            // Custom validation for categories checkboxes
            $.validator.addMethod("atLeastOneCategory", function(value, element) {
                return $('input[name="categories[]"]:checked').length > 0;
            }, "Please select at least one category");
            
            let validator = $("#my-form").validate({
                rules: {
                    brand_id: { required: true },
                    model_id: { required: true },
                    "categories[]": { atLeastOneCategory: true },
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
                    description: { required: true, minlength: 10 },
                    feature_image: { required: true }
                },
                messages: {
                    brand_id: "Please select a brand",
                    model_id: "Please select a model",
                    "categories[]": "Please select at least one category",
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
                    },
                    feature_image: "Please upload a valid image file"
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

            $("#car_add_submit").on("click", function (e) {
                e.preventDefault();
            
                // 1. Validate the form fields
                if (!$("#my-form").valid()) return;
            
                // 2. Check if we have cropped gallery images
                if (croppedFilesDT.files.length === 0) {
                    alert('Please upload and crop gallery images before submitting.');
                    return;
                }
            
                // 3. FIND AND CLEAR the original uploader input
                // This prevents the original (uncropped) files from being sent
                let originalInp = document.querySelector('input[type="file"][name="images[]"]');
                if (originalInp) {
                    // We clear this so only our hidden 'croppedInput' carries the data
                    originalInp.value = ""; 
                    // If your uploader library uses a custom property to store files, 
                    // we nullify it here as well.
                }
            
                // 4. Attach ONLY cropped images to our specific hidden input
                // Make sure this input name matches exactly what your backend expects (images[])
                croppedInput.files = croppedFilesDT.files;
            
                console.log('Submitting ONLY cropped images:', croppedInput.files.length);
            
                // 5. Submit the form
                $("#my-form")[0].submit();
            });
        });
    </script>


    @endpush
@endsection
