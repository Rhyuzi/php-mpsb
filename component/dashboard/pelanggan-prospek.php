<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Azures BootStrap</title>
<?php include 'head.php'; ?>
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="" data-back-button class="header-title header-subtitle">Back</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>

    <div id="notification" data-dismiss="notification-5" data-delay="3000" data-autohide="true" class="notification bg-highlight shadow-xl">
        <div class="toast-header bg-highlight">
            <img src="images/preload-logo.png" width="15" class="rounded mr-2" alt="...">
            <strong class="mr-auto color-white">Enabled</strong>
            <small class="color-white opacity-50 mr-2">just now</small>
            <button type="button" class="ml-2 mb-1 color-white close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body bg-highlight color-white">
            This notification will adapt to the bg-highlight you select for the page.
        </div>
    </div>
    
    
    <div class="page-content" style="min-height:60vh!important">
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Pelanggan Prospek</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">        
                <h3>Form Prospek Customer</h3>
                <!-- <p>
                    These boxes will react to them when you type or select a value.
                </p> -->
                <form id="formProspek">
                <div class="input-style input-style-2 has-icon input-required">
                    <i class="input-icon fa fa-user"></i>
                    <span class="color-highlight">Nama Perusahaan</span>
                    <em>(required)</em>
                    <input id="namaperusahaan" name="namaperusahaan" class="form-control" type="name" placeholder="">
                    <small id="namaperusahaan-error" class="text-danger" style="display:none">Nama perusahaan harus diisi</small>
                </div> 

                <div class="input-style input-style-2 input-required">
                    <span>Pilih Komoditi</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="komoditi" name="komoditi" class="form-control">
                        <option value="default" disabled selected>Select a Value</option>
                       
                    </select>
                    <small id="komoditi-error" class="text-danger" style="display:none">Komoditi harus diisi</small>
                </div>        

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Potensi Rp.</span>
                    <em>(required)</em>
                    <input id="potensi" class="form-control" name="potensi" type="number" placeholder="">
                    <small id="potensi-error" class="text-danger" style="display:none">Potensi harus diisi</small>
                </div>       

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Alamat</span>
                    <em>(required)</em>
                    <input id="alamat" class="form-control" name="alamat" type="name" placeholder="">
                    <small id="alamat-error" class="text-danger" style="display:none">alamat harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">PIC</span>
                    <em>(required)</em>
                    <input id="pic" name="pic" class="form-control" type="name" placeholder="">
                    <small id="pic-error" class="text-danger" style="display:none">PIC harus diisi</small>
                </div>

                <!-- <div class="input-style input-style-2 input-required">
                    <span>Select a Value</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control">
                        <option value="default" disabled selected>Select a Value</option>
                        <option value="iOS">iOS</option>
                        <option value="Linux">Linux</option>
                        <option value="MacOS">MacOS</option>
                        <option value="Android">Android</option>
                        <option value="Windows">Windows</option>
                    </select>
                </div> -->
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Telp/HP</span>
                    <em>(required)</em>
                    <input id="telp" name="telp" class="form-control" type="number" placeholder="">
                    <small id="telp-error" class="text-danger" style="display:none">Telp harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Email</span>
                    <em>(required)</em>
                    <input id="email" name="email" class="form-control" type="email" placeholder="">
                    <small id="email-error" class="text-danger" style="display:none">Email harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Catatan</span>
                    <em>(required)</em>
                    <input id="catatan" name="catatan" class="form-control" type="name" placeholder="">
                    <small id="catatan-error" class="text-danger" style="display:none">Catatan harus diisi</small>
                </div>  


                <div class="input-style input-style-2 input-required">
                    <span>Pilih Lokasi Kantor</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="lokasi" name="lokasi" class="form-control">
                        <option value="default" disabled selected>Pilih Lokasi</option>
                       
                    </select>
                    <small id="lokasi-error" class="text-danger" style="display:none">Lokasi harus diisi</small>
                </div>

                <!-- <div class="card card-style"> -->
                    <div class="content">   
                        <a href="#" class="get-location btn btn-full btn-m bg-red2-dark rounded-sm text-uppercase shadow-l font-900">Get Lokasi</a>
                        <p class="location-coordinates"></p>
                        <h3 class="pt-2">Lokasi Di map</h3>
                    </div>
                    <div class="responsive-iframe add-iframe">
                        <iframe id="location-map" class="location-map" src='https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed'></iframe>
                    </div>
                    <input id="map-lokasi" name="map-lokasi" type="hidden">
                    <small id="map-lokasi-error" class="text-danger" style="display:none">Lokasi harus diisi</small>
                <!-- </div> -->

                <!-- <div class="card card-style"> -->
                    <!-- <div class="content mb-0"> -->
                        <br>
                        <h3>Image File</h3>
                        <div class="file-data">
                            <input id="file-img" name="file-img" type="file" class="upload-file bg-highlight shadow-s rounded-s " accept="image/*">
                            <p class="upload-file-text color-white">Upload Image</p>
                            <img src="images/empty.png">
                        </div>
                        <small id="file-img-error" class="text-danger" style="display:none">Image harus diisi</small>
                    <!-- </div> -->

                <button id="button-submit" class="btn btn-m mt-2 mb-4 bg-green1-dark rounded-sm text-uppercase font-900 btn-lg btn-block">Submit</button>
                <!-- <div class="input-style input-style-2 input-required">
                    <span>Enter your Message</span>
                    <em>(required)</em>
                    <textarea  class="form-control" placeholder=""></textarea>
                </div> -->

                </form>
                
            </div>
        </div>
            
        <!-- footer and footer card-->
        <div class="footer" data-menu-load="menu-footer.html"></div>  
    </div>    
    <!-- end of page content-->
    
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-features"
         data-menu-effect="menu-over">  
    </div>
    
    <div id="menu-cookie-bottom" class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="230"
         data-menu-effect="menu-over"
         data-menu-select="page-components">
        <!-- add data-cookie-activate above to auto-activate the menu on cookie detection -->
        <div class="boxed-text-xl">
            <h2 class="text-center mt-3 pt-1">We're using cookies</h2>
            <p class="text-center mt-n2 mb-3 color-highlight">To make your experience awesome!</p>
            <p>
                Our page uses cookies to make your overall experience better, faster and smoother. It's awesome.
            </p>
            <!-- add hide-cookie to the class to delete the cookie-->
            <a href="#" class="close-menu btn btn-sm btn-center-xl rounded-xs shadow-m bg-highlight text-uppercase font-900">Accept</a>
        </div>
    </div>     
    
    
</div>    


<?php include 'scrJs.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    fetch('../../php/get_komoditi.php')
        .then(response => response.json())
        .then(data => {
            // console.debug('komoditi',data)
            const selectElement = document.getElementById('komoditi');
            selectElement.innerHTML = '';

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.id;
                option.textContent = item.type;
                selectElement.appendChild(option);
            });
        })
    fetch('../../php/get_lokasi.php')
        .then(response => response.json())
        .then(data => {
            // console.debug('lokasi',data)
            const selectElement = document.getElementById('lokasi');
            selectElement.innerHTML = '';

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.id;
                option.textContent = item.kota;
                selectElement.appendChild(option);
            });
        })
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Validate the form fields
        if (validateForm()) {
            // If validation passes, submit the form
            console.debug('form',e)
            // for (const input of this.elements) {
            //     if (input.tagName.toLowerCase() === 'input' && input.type !== 'submit') {
            //         console.log(`${input.name}: ${input.value}`);
            //     } else if (input.tagName.toLowerCase() === 'select') {
            //         console.log(`${input.name}: ${input.options[input.selectedIndex].value}`);
            //     }
            // }
            const formData = new FormData(this);
            fetch('../../php/save_data_prospek.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response from the server
                if (data.success) {
                    alert('Data saved successfully');
                    // Optionally, you can reset the form
                    this.submit();
                    this.reset();
                } else {
                    alert('Error: ' + data.errorMsg);
                }
            })
            .catch(error => console.error('Error:', error));
            
        }
    });

});

function validateForm() {
    
    // Add your validation logic here
    var isValid = true;

    var namaperusahaan = document.getElementById('namaperusahaan').value;
    var komoditi = document.getElementById('komoditi').value;
    var potensi = document.getElementById('potensi').value;
    var alamat = document.getElementById('alamat').value;
    var pic = document.getElementById('pic').value;
    var telp = document.getElementById('telp').value;
    var email = document.getElementById('email').value;
    var catatan = document.getElementById('catatan').value;
    var lokasi = document.getElementById('lokasi').value;
    var img = document.getElementById('file-img').value;
    var mapLokasi = document.querySelector('.location-coordinates').textContent;

    var namaperusahaanError = document.getElementById('namaperusahaan-error');
    var komoditiError = document.getElementById('komoditi-error');
    var potensiError = document.getElementById('potensi-error');
    var alamatError = document.getElementById('alamat-error');
    var picError = document.getElementById('pic-error');
    var telpError = document.getElementById('telp-error');
    var emailError = document.getElementById('email-error');
    var catatanError = document.getElementById('catatan-error');
    var lokasiError = document.getElementById('lokasi-error');
    var imgError = document.getElementById('file-img-error');
    var mapLokasiError = document.getElementById('map-lokasi-error');

    // nama perusahaan
    if (namaperusahaan.trim() === '') {
        namaperusahaanError.textContent = 'Nama perusahaan harus diisi';
        namaperusahaanError.style.display = 'block';
        isValid = false;
    } else{
        namaperusahaanError.style.display = 'none';
    }
    
    // komoditi
    if (komoditi.trim() === 'default') {
        komoditiError.textContent = 'Komoditi harus diisi';
        komoditiError.style.display = 'block';
        isValid = false;
    } else{
        komoditiError.style.display = 'none';
    }

    // potensi
    if (potensi.trim() === '') {
        potensiError.textContent = 'Potensi harus diisi';
        potensiError.style.display = 'block';
        isValid = false;
    } else{
        potensiError.style.display = 'none';
    }

    // alamat
    if (alamat.trim() === '') {
        alamatError.textContent = 'Alamat harus diisi';
        alamatError.style.display = 'block';
        isValid = false;
    } else{
        alamatError.style.display = 'none';
    }

    // pic
    if (pic.trim() === '') {
        picError.textContent = 'PIC harus diisi';
        picError.style.display = 'block';
        isValid = false;
    } else{
        picError.style.display = 'none';
    }

    // telpon
    if (telp.trim() === '') {
        telpError.textContent = 'Telpon harus diisi';
        telpError.style.display = 'block';
        isValid = false;
    } else{
        telpError.style.display = 'none';
    }

    // email
    if (email.trim() === '') {
        emailError.textContent = 'Email harus diisi';
        emailError.style.display = 'block';
        isValid = false;
    } else {
        emailError.style.display = 'none';
    }

    // catatan
    if (catatan.trim() === '') {
        catatanError.textContent = 'Catatan harus diisi';
        catatanError.style.display = 'block';
        isValid = false;
    } else{
        catatanError.style.display = 'none';
    }

    // nama perusahaan
    if (lokasi.trim() === 'default') {
        lokasiError.textContent = 'Lokasi harus diisi';
        lokasiError.style.display = 'block';
        isValid = false;
    } else{
        lokasiError.style.display = 'none';
    }

     // img
     if (mapLokasi.trim() === '') {
        mapLokasiError.textContent = 'Lokasi harus diisi';
        mapLokasiError.style.display = 'block';
        isValid = false;
    } else{
        const longitudeRegex = /Longitude:\s*(-?\d+\.\d+)/;
        const latitudeRegex = /Latitude:\s*(-?\d+\.\d+)/;

        // Extract longitude and latitude using regular expressions
        const longitudeMatch = mapLokasi.match(longitudeRegex);
        const latitudeMatch = mapLokasi.match(latitudeRegex);

        if (longitudeMatch && latitudeMatch) {
            const longitude = parseFloat(longitudeMatch[1]);
            const latitude = parseFloat(latitudeMatch[1]);

            // Check if longitude or latitude is null
            if (!isNaN(longitude) && !isNaN(latitude)) {
                // Coordinates are not null
                document.getElementById('map-lokasi').value = `${latitude}, ${longitude}`
            } else {
                console.log('Longitude or Latitude is null.');
            }
        }
        mapLokasiError.style.display = 'none';
    }

    // img
    if (img.trim() === '') {
        imgError.textContent = 'Image harus diisi';
        imgError.style.display = 'block';
        isValid = false;
    } else{
        imgError.style.display = 'none';
    }


    return isValid;
}

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
</script>
</body>
