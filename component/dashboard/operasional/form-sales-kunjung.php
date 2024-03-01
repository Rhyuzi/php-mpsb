<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title><?php
$config = include 'config.php';
echo $config['site_title'];
?>
<?php include 'head.php'; ?>
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="page-about.php" data-back-button class="header-title header-subtitle">Back</a>
        <a href="page-about.php" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
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
            <h2><a href="page-about.php" data-back-button><i class="fa fa-arrow-left"></i></a>Kunjungan Sales</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">        
                <h3>Form Kunjungan Sales</h3>
                <!-- <p>
                    These boxes will react to them when you type or select a value.
                </p> -->
                <form id="formProspek">
                <div class="input-style input-style-2 input-required">
                    <span>Nama Customer</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="namacustomer" name="namacustomer" class="form-control">
                        <!-- <option value="default" disabled selected>Select a Value</option> -->
                       
                    </select>
                    <small id="namacustomer-error" class="text-danger" style="display:none">namacustomer harus diisi</small>
                </div> 

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Tujuan Kunjungan</span>
                    <em>(required)</em>
                    <input id="tujuankunjungan" class="form-control" name="tujuankunjungan" type="name" placeholder="">
                    <small id="tujuankunjungan-error" class="text-danger" style="display:none">tujuankunjungan harus diisi</small>
                </div>

                <div class="input-style input-style-2 input-required">
                    <span>Jenis Kunjungan</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="jeniskunjungan" name="jeniskunjungan" class="form-control">
                        <option value="default" disabled selected>Select a Value</option>
                       
                    </select>
                    <small id="jeniskunjungan-error" class="text-danger" style="display:none">jeniskunjungan harus diisi</small>
                </div>        

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Opportunity Name</span>
                    <em>(required)</em>
                    <input id="opporname" class="form-control" name="opporname" type="name" placeholder="">
                    <small id="opporname-error" class="text-danger" style="display:none">opporname harus diisi</small>
                </div>       

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Kompetitor</span>
                    <em>(required)</em>
                    <input id="kompetitor" class="form-control" name="kompetitor" type="name" placeholder="">
                    <small id="kompetitor-error" class="text-danger" style="display:none">kompetitor harus diisi</small>
                </div>  

                <!-- <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">ISI</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="isi" name="isi" class="form-control">
                        <option value="0" disabled selected>Var</option>
                        <option value="1" disabled selected>Dok</option>
                        <option value="2" disabled selected>Pak</option>
                       
                    </select>
                    <small id="isi-error" class="text-danger" style="display:none">ISI harus diisi</small>
                </div> -->

                <div class="input-style input-style-2 input-required">
                    <span>ISI</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="isi" name="isi" class="form-control">
                        <option value="0">Var</option>
                        <option value="1">Dok</option>
                        <option value="2">Pak</option>
                       
                    </select>
                    <small id="isi-error" class="text-danger" style="display:none">Isi harus diisi</small>
                </div>

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Qty</span>
                    <em>(required)</em>
                    <input id="qty" name="qty" class="form-control" type="number" placeholder="">
                    <small id="qty-error" class="text-danger" style="display:none">Qty harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Berat</span>
                    <em>(required)</em>
                    <input id="berat" name="berat" class="form-control" type="number" placeholder="">
                    <small id="berat-error" class="text-danger" style="display:none">Berat harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Destinasi</span>
                    <em>(required)</em>
                    <input id="destinasi" name="destinasi" class="form-control" type="name" placeholder="">
                    <small id="destinasi-error" class="text-danger" style="display:none">Destinasi harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Keterangan Destinasi</span>
                    <em>(required)</em>
                    <input id="ketdestinasi" name="ketdestinasi" class="form-control" type="name" placeholder="">
                    <small id="ketdestinasi-error" class="text-danger" style="display:none">ketdestinasi harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span>Tahap</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="tahap" name="tahap" class="form-control">
                        <!-- <option value="default" disabled selected>Select a Value</option>
                        <option value="iOS">iOS</option>
                        <option value="Linux">Linux</option>
                        <option value="MacOS">MacOS</option>
                        <option value="Android">Android</option>
                        <option value="Windows">Windows</option> -->
                    </select>
                    <small id="tahap-error" class="text-danger" style="display:none">Tahap harus diisi</small>
                </div> 

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">revenu</span>
                    <em>(required)</em>
                    <input id="revenu" name="revenu" class="form-control" type="number" placeholder="" value="0">
                    <small id="revenu-error" class="text-danger" style="display:none">Revenue harus diisi</small>
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Catatan</span>
                    <em>(required)</em>
                    <input id="catatan" name="catatan" class="form-control" type="name" placeholder="">
                    <small id="catatan-error" class="text-danger" style="display:none">Catatan harus diisi</small>
                </div>  

                <br>
            <h3>Image File</h3>
            <div class="file-data">
                <input id="file-img" name="file-img" type="file" class="upload-file bg-highlight shadow-s rounded-s " accept="image/*">
                <p class="upload-file-text color-white">Upload Image</p>
                <img src="images/empty.png">
            </div>
            <small id="file-img-error" class="text-danger" style="display:none">Image harus diisi</small>


                <button id="button-submit" class="btn btn-m mt-2 mb-4 bg-green1-dark rounded-sm text-uppercase font-900 btn-lg btn-block">Submit</button>

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
    fetch('../../php/get_customer_guest.php')
        .then(response => response.json())
        .then(data => {
            // console.debug('komoditi',data)
            const selectElement = document.getElementById('namacustomer');
            selectElement.innerHTML = '';

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.value;
                option.textContent = item.value;
                selectElement.appendChild(option);
            });
        })
        
    fetch('../../php/get_sales_action.php')
        .then(response => response.json())
        .then(data => {
            // console.debug('lokasi',data)
            const selectElement = document.getElementById('jeniskunjungan');
            selectElement.innerHTML = '';

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.id;
                option.textContent = item.value;
                selectElement.appendChild(option);
            });
        })
    fetch('../../php/get_sales_result.php')
        .then(response => response.json())
        .then(data => {
            // console.debug('lokasi',data)
            const selectElement = document.getElementById('tahap');
            selectElement.innerHTML = '';

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.id;
                option.textContent = item.value;
                selectElement.appendChild(option);
            });
        })
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Validate the form fields
        if (validateForm()) {
            // If validation passes, submit the form
            // console.debug('form',e)
            // for (const input of this.elements) {
            //     if (input.tagName.toLowerCase() === 'input' && input.type !== 'submit') {
            //         console.log(`${input.name}: ${input.value}`);
            //     } else if (input.tagName.toLowerCase() === 'select') {
            //         console.log(`${input.name}: ${input.options[input.selectedIndex].value}`);
            //     }
            // }
            const formData = new FormData(this);
            fetch('../../php/save_data_kunjungan.php', {
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

    var namacustomer = document.getElementById('namacustomer').value;
    var tujuankunjungan = document.getElementById('tujuankunjungan').value;
    var jeniskunjungan = document.getElementById('jeniskunjungan').value;
    var opporname = document.getElementById('opporname').value;
    var kompetitor = document.getElementById('kompetitor').value;
    var isi = document.getElementById('isi').value;
    var qty = document.getElementById('qty').value;
    var berat = document.getElementById('berat').value;
    var destinasi = document.getElementById('destinasi').value;
    var ketdestinasi = document.getElementById('ketdestinasi').value;
    var tahap = document.getElementById('tahap').value;
    var revenu = document.getElementById('revenu').value;
    var catatan = document.getElementById('catatan').value;
    var img = document.getElementById('file-img').value;

    var namacustomerError = document.getElementById('namacustomer-error');
    var tujuankunjunganError = document.getElementById('tujuankunjungan-error');
    var jeniskunjunganError = document.getElementById('jeniskunjungan-error');
    var oppornameError = document.getElementById('opporname-error');
    var kompetitorError = document.getElementById('kompetitor-error');
    var isiError = document.getElementById('isi-error');
    var qtyError = document.getElementById('qty-error');
    var beratError = document.getElementById('berat-error');
    var destinasiError = document.getElementById('destinasi-error');
    var ketdestinasiError = document.getElementById('ketdestinasi-error');
    var tahapError = document.getElementById('tahap-error');
    var revenuError = document.getElementById('revenu-error');
    var catatanError = document.getElementById('catatan-error');
    var imgError = document.getElementById('file-img-error');

    // nama perusahaan
    if (namacustomer.trim() === '') {
        namacustomerError.textContent = 'Nama Customer harus diisi';
        namacustomerError.style.display = 'block';
        isValid = false;
    } else{
        namacustomerError.style.display = 'none';
    }
    
    // tujuan kunjungan
    if (tujuankunjungan.trim() === '') {
        tujuankunjunganError.textContent = 'Tujuan Kunjungan harus diisi';
        tujuankunjunganError.style.display = 'block';
        isValid = false;
    } else{
        tujuankunjunganError.style.display = 'none';
    }

    // jenis kunjungan
    if (jeniskunjungan.trim() === '') {
        jeniskunjunganError.textContent = 'Jenis Kunjungan harus diisi';
        jeniskunjunganError.style.display = 'block';
        isValid = false;
    } else{
        jeniskunjunganError.style.display = 'none';
    }

    // opporname
    if (opporname.trim() === '') {
        oppornameError.textContent = 'Opportunity harus diisi';
        oppornameError.style.display = 'block';
        isValid = false;
    } else{
        oppornameError.style.display = 'none';
    }

    // kompetitor
    if (kompetitor.trim() === '') {
        kompetitorError.textContent = 'Kompetitor harus diisi';
        kompetitorError.style.display = 'block';
        isValid = false;
    } else{
        kompetitorError.style.display = 'none';
    }

    // ISI
    if (isi.trim() === '') {
        isiError.textContent = 'Isi harus diisi';
        isiError.style.display = 'block';
        isValid = false;
    } else{
        isiError.style.display = 'none';
    }

    // QTY
    if (qty.trim() === '') {
        qtyError.textContent = 'Qty harus diisi';
        qtyError.style.display = 'block';
        isValid = false;
    } else {
        qtyError.style.display = 'none';
    }

    // Berat
    if (berat.trim() === '') {
        beratError.textContent = 'Berat harus diisi';
        beratError.style.display = 'block';
        isValid = false;
    } else{
        beratError.style.display = 'none';
    }

    // destinasi
    if (destinasi.trim() === '') {
        destinasiError.textContent = 'Destinasi harus diisi';
        destinasiError.style.display = 'block';
        isValid = false;
    } else{
        destinasiError.style.display = 'none';
    }

     // keterangan destinasi
    if (ketdestinasi.trim() === '') {
        ketdestinasiError.textContent = 'Keterangan destinasi harus diisi';
        ketdestinasiError.style.display = 'block';
        isValid = false;
    } else{
        ketdestinasiError.style.display = 'none';
    }

    // tahap
    if (tahap.trim() === 'default') {
        tahapError.textContent = 'Tahap harus diisi';
        tahapError.style.display = 'block';
        isValid = false;
    } else{
        tahapError.style.display = 'none';
    }

    // revenu
    if (revenu.trim() === '') {
        revenuError.textContent = 'Revenu harus diisi';
        revenuError.style.display = 'block';
        isValid = false;
    } else{
        revenuError.style.display = 'none';
    }

    // catatan
    if (catatan.trim() === '') {
        catatanError.textContent = 'Catatan harus diisi';
        catatanError.style.display = 'block';
        isValid = false;
    } else{
        catatanError.style.display = 'none';
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
