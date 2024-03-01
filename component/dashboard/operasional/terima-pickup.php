<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title><?php
$config = include '../../../config.php';
echo $config['site_title'];
?>
</title>
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
    <div id="footer-bar" class="footer-bar-5">
        <a href="#"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a>
        <a href="#"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a>
        <a href="#"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="#" class="active-nav"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Pages</span></a>
        <a href="../../../php/logout.php"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Logout</span></a>
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
            <h2><a href="#" id="back-to"><i class="fa fa-arrow-left"></i></a>Terima Pickup</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="../../../images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">        
                <h3>Form Terima Pickup</h3>
                <!-- <p>
                    These boxes will react to them when you type or select a value.
                </p> -->
                <!-- <form id="formProspek"> -->
                <div class="input-style input-style-2 input-required">
                    <span>Nama Customer</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="namakurir" name="namakurir" class="form-control">
                        <!-- <option value="default" disabled selected>Select a Value</option> -->
                       
                    </select>
                    <small id="namakurir-error" class="text-danger" style="display:none">Kurir harus diisi</small>
                </div> 

                <!-- <div class="input-style input-style-2 input-required">
                    <span>Data Pickup</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select id="datapickup" name="datapickup" class="form-control">
                       
                    </select>
                    <small id="datapickup-error" class="text-danger" style="display:none">namacustomer harus diisi</small>
                </div>  -->


                <!-- <button id="button-submit" class="btn btn-m mt-2 mb-4 bg-green1-dark rounded-sm text-uppercase font-900 btn-lg btn-block">Submit</button> -->

                <!-- </form> -->
                
            </div>
           
            <div id="list-content">
                <!-- <div class="card card-style bg-red2-dark" data-menu="menu-terima-pickup">
                    <div class="content">
                        <h4 class="color-white">Content Colors</h4>
                        <p class="color-white">
                            This box is a solid color. You can set it to the page highlight or set any color from the pack. 
                        </p>
                    </div>        
                </div> -->
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


<div id="menu-terima-pickup" class="menu menu-box-modal rounded-m" 
         data-menu-height="310" 
         data-menu-width="310">
        <div class="mr-3 ml-3 mt-3">
            <h1 class="font-700 mb-0">Terima Pickup</h1>
            
            <form id="formProspek">
            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-user font-11"></i>
                <span>Quantity Parcel</span>
                <em>(required)</em>
                <input type="number" id="qty" name="qty" placeholder="Quantity Parcel">
                <small id="qty-error" class="text-danger" style="display:none">QTY harus diisi</small>
            </div> 
            <input type="hidden" id="id" name="id" placeholder="id">
            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-lock font-11"></i>
                <span>Quantity Document</span>
                <em>(required)</em>
                <input type="number" id="berat" name="berat" placeholder="Quantity Document">
                <small id="berat-error" class="text-danger" style="display:none">Berat harus diisi</small>
            </div>   
            <button id="button-submit" class="btn btn-m mt-2 mb-4 bg-green1-dark rounded-sm text-uppercase font-900 btn-lg btn-block">Submit</button>
            </form>
        </div>
    </div> 



<?php include 'scrJs.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const elNamakurir = document.getElementById('namakurir');
    let dataPickup = null

    fetch('../../../php/get_pickupordermaster.php')
        .then(response => response.json())
        .then(data => {
            // console.debug('komoditi',data)
            const selectElement = document.getElementById('namakurir');
            selectElement.innerHTML = '';

            const option = document.createElement('option');
            option.value = '';
            option.textContent = 'Pilih Kurir';
            selectElement.appendChild(option);

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.POrderKurirId;
                option.textContent = item.PegawaiNama;
                selectElement.appendChild(option);
            });
        }),
        
    elNamakurir.addEventListener('change',function () {
        const selectedValue = elNamakurir.value;
        var listContent = document.getElementById('list-content');

        // Remove all child elements
        while (listContent.firstChild) {
            listContent.removeChild(listContent.firstChild);
        }
        getDataPickupbyKurir(selectedValue)
    })
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Validate the form fields
        if (validateForm()) {
            const formData = new FormData(this);
            fetch('../../../php/update_pickupordermaster.php', {
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
                    // this.reset();
                } else {
                    alert('Error: ' + data.errorMsg);
                }
            })
            .catch(error => console.error('Error:', error));
            console.debug('form',e)
            
            
        }
    });
    document.getElementById('list-content').addEventListener('click', function(event) {
        const clickedCard = event.target.closest('.card');
        if (clickedCard) {
            document.getElementById('menu-terima-pickup').classList.add('menu-active')
            document.querySelector('.menu-hider').classList.add('menu-active')
            const pickupData = JSON.parse(clickedCard.dataset.pickupData);
            console.warn('Data associated with the clicked card:', pickupData);

            const qty = document.getElementById('qty')
            const berat = document.getElementById('berat')
            const id = document.getElementById('id')

            qty.value = pickupData.POrderQtyPar
            berat.value = pickupData.POrderQtyDoc
            id.value = pickupData.POrderID
        }
    });

    document.getElementById('back-to').addEventListener('click', function() {
        location.href = 'page-about.php';
    })

});

function getDataPickupbyKurir(id) {
    console.warn('Selected value:', id);
    const apiUrl = '../../../php/get_pickupordermaster_byid.php';
    const params = {
        id: id,
        // Add more fields as needed
    };

    const queryString = Object.keys(params)
        .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(params[key]))
        .join('&');

    const urlWithParams = `${apiUrl}?${queryString}`;

    fetch(urlWithParams)
        .then(response => response.json())
        .then(data => {
            dataPickup = data

            data.forEach(item => {
                // const option = document.createElement('option');
                // option.value = item.POrderID;
                // option.textContent = `${item.POrderCustName}\n${item.POrderCustAddr}`;
                // selectElement.appendChild(option);
                const divCard = document.createElement('div')
                const divContent = document.createElement('div')
                const h4 = document.createElement('h4')
                const p = document.createElement('p')

                divCard.classList.add('card','card-style','bg-red2-dark')
                divCard.id = `${item.POrderID}`
                divCard.setAttribute('data-menu', 'menu-terima-pickup');
                divCard.dataset.pickupData = JSON.stringify(item); 
                divContent.classList.add('content')
                h4.classList.add('color-white')
                p.classList.add('color-white')

                h4.textContent = item.POrderCustName
                p.textContent = item.POrderCustAddr

                divContent.appendChild(h4)
                divContent.appendChild(p)
                divCard.appendChild(divContent)
                console.log('h4 text content:', h4.textContent);
                console.log('p text content:', p.textContent);
                document.getElementById('list-content').appendChild(divCard)
                console.log(item)
            });
            console.warn(dataPickup)

            
                
            }
        )
        .catch(error => console.error('Error:', error));
}

function validateForm() {
    
    // Add your validation logic here
    var isValid = true;

    var qty = document.getElementById('qty').value;
    var berat = document.getElementById('berat').value;
    

    var qtyError = document.getElementById('qty-error');
    var beratError = document.getElementById('berat-error');

    // nama perusahaan
    if (qty.trim() === '') {
        qtyError.textContent = 'Quantity Parcel harus diisi';
        qtyError.style.display = 'block';
        isValid = false;
    } else{
        qtyError.style.display = 'none';
    }
    
    // komoditi
    if (berat.trim() === '') {
        beratError.textContent = 'Quantity Document harus diisi';
        beratError.style.display = 'block';
        isValid = false;
    } else{
        beratError.style.display = 'none';
    }


    return isValid;
}

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
</script>
</body>
